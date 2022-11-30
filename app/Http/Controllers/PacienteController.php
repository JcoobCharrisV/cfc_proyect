<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ges_pa;
use App\Models\gestione;
use App\Models\Paciente;
use App\Models\pas_tra;
use App\Models\paso;
use App\Models\dias_inhabilitado;

use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Support\Facades\Mail;

class PacienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //INDEX
    public function index($id)
    {
        //consultas para listar los paciente (panel de control)

        $sql = "SELECT * FROM `pacientes` WHERE `pac_id` = " . $id;

        $pacientes = DB::select($sql);

        //consultas para listar los doctores (modal mantenimiento de perfil)

        $sql = "SELECT * FROM `doctores`";

        $doctores = DB::select($sql);

        //consulta para los combobox de los (servicios)

        $sql = "SELECT tra.tra_id, ser.ser_nombres, tit.tit_nombres, tra.tra_nombres, stt.stt_id
        FROM `ser_tra_tips` AS stt
        INNER JOIN servicios AS ser on stt.ser_id = ser.ser_id
        INNER JOIN tipos_tratamientos AS tit on stt.tit_id = tit.tit_id
        INNER JOIN tratamientos AS tra on stt.tra_id = tra.tra_id
        WHERE stt.stt_estado = 1";
        $mantenimientos = DB::select($sql);

        $sql = "SELECT tra.tra_nombres, ges.ges_frecuencia_mantenimiento, ges.ges_id, ges.ges_frecuencia_mantenimiento_numero, ges.ges_fecha_atencion, ges.ges_fecha_prox_atencion, tra.tra_id 
        FROM `gestiones` AS ges 
        INNER JOIN tratamientos AS tra on ges.tra_id = tra.tra_id 
        WHERE `pac_id`= " . $id;

        $gestiones = DB::select($sql);



        //retorna a la vista
        return view("paciente.pacienteperfil", compact("pacientes", "doctores", "mantenimientos", "id", "gestiones"));
    }

    //INDEX PACIENTE
    public function create(){
        $sql = "SELECT * FROM `pacientes` WHERE `pac_id`";
        $pacientes = DB::select($sql);
        $total = Paciente::count();
        $pacientes = Paciente::where('pac_estado', '=', '1')->get();
        return view("paciente.paciente", compact("pacientes", "total"));
    }

    //CREAR PACIENTES
    public function store(Request $request){
        $Pacientes = request()->except('_token');
        Paciente::insert($Pacientes);
        return redirect('/paciente');
    }


    //AJAX
    public function cargarDatos(Request $request)
    {
        $tra_id = $request->tra_id;

        $sql = "SELECT pas.pas_id, pas.pas_descripcion
        FROM `pas_tras` As past
        INNER JOIN pasos AS pas on past.pas_id = pas.pas_id
        INNER JOIN tratamientos AS tra on past.tra_id = tra.tra_id
        WHERE past.tra_id = " . $tra_id;
        $pasos = DB::select($sql);


        echo json_encode(
            array(
                "success" => true,
                "pasos" => $pasos
            )
        );
    }

    //GESTION
    public function gestion($id)
    {

        $gestion = gestione::where("ges_id", $id)->get();

        $sql = "SELECT pas.pas_descripcion, pas.pas_id, tra.tra_id, tra.tra_nombres 
        FROM `pas_tras` AS past INNER JOIN tratamientos AS tra on past.tra_id = tra.tra_id 
        INNER JOIN pasos AS pas on past.pas_id = pas.pas_id 
        WHERE past.tra_id = " . $gestion[0]->tra_id;

        $pacientes = paciente::where("pac_id", $gestion[0]->pac_id)->get();
        $pasos = DB::select("SELECT * FROM `ges_pas` WHERE `ges_id` = " . $gestion[0]->ges_id);
        $pasos_tra = DB::select($sql);
        $tratamiento = DB::select($sql);

        $sql2 = "SELECT * FROM `doctores` WHERE `doc_id` = " . $gestion[0]->doc_id;
        $doctor = DB::select($sql2);

        $sql3 = "SELECT * FROM `tratamientos` WHERE `tra_id` = " . $gestion[0]->tra_id;
        $tratamiento = DB::select($sql3);

        $pdfInfo[] = array(
            "fecha_atencion" => $gestion[0]->ges_fecha_atencion,
            "nombre_paciente" => $pacientes[0]->pac_nombres . ' ' . $pacientes[0]->pac_apellidos,
            "tipo_identificacion" => $pacientes[0]->pac_tipo_identificacion,
            "documento" => $pacientes[0]->pac_identificacion,
            "telefono" => $pacientes[0]->pac_telefono,
            "edad" => $pacientes[0]->pac_edad,
            "nombre_doctor" => $doctor[0]->doc_nombres . ' ' . $doctor[0]->doc_apellidos,
            "correo" => $pacientes[0]->pac_correo,
            "nombre_tratamiento" => $tratamiento[0]->tra_nombres,
            "fecha_prox_gestion" => $gestion[0]->ges_fecha_prox_atencion,
            "observacion" => $gestion[0]->ges_notas
        );

        if(count($pasos_tra) != 0){
            for ($i = 0; $i < count($pasos_tra); $i++) {

                $p = 0;
                for ($a = 0; $a < count($pasos); $a++) {
                    if ($a != count($pasos) + 1) {
                        if ($pasos_tra[$i]->pas_id == $pasos[$a]->pas_id) {
                            $pasospdf[] = array(
                                "paso_descripcion" => $pasos_tra[$i]->pas_descripcion,
                                "verificador" => "SI",
                                "comentario" => $pasos[$a]->gep_notas
    
                            );
                            $p = 1;
                        }
                    }
                }
    
                if ($p == 0) {
                    $pasospdf[] = array(
                        "paso_descripcion" => $pasos_tra[$i]->pas_descripcion,
                        "verificador" => "NO",
                        "comentario" => ""
                    );
                }
            }
        }
        
        $pasospdf[] = null;

        $email = $pacientes[0]->pac_correo;
        $pdf = PDF::loadView('pdfgestion', compact('pdfInfo', 'pasospdf'));

        $fecha = $gestion[0]->ges_fecha_prox_atencion;
        date_default_timezone_set('America/Bogota');
        $fpa = date("Y-m-d H:i:s", strtotime($fecha));

        $dataemail[] = array(
            "fecha_prox_atencion" => $fpa
        );

        Mail::send('email', compact('dataemail'), function ($mail) use ($pdf, $email) {
            $mail->from('adminCFC@gmail.com', 'CFC');
            $mail->to($email);
            $mail->attachData($pdf->output(), 'gestion.pdf');
        });

        return $pdf->download();
    }

    //ENVIO DE DATOS A GESTION
    public function sendData(request $request)
    {
        $ids_pasos = $request->pasos;

        list($year, $mes, $dia) = explode("-", $request->ges_fecha_prox_atencion);
        $fecha = $year . '-' . $mes . '-' . $dia . ' ' . $request->ges_hora_prox_atencion;
        $fecha2 = date("Y-m-d H:i:s", strtotime($fecha));

        $gestion = new gestione();
        $gestion->pac_id = $request->pac_id;
        $gestion->tra_id = $request->tra_id;
        $gestion->doc_id = $request->doc_id;
        $gestion->ges_fecha_prox_atencion = $fecha2;
        $gestion->ges_notas = $request->ges_notas;
        $gestion->ges_frecuencia_mantenimiento_numero = $request->ges_frecuencia_mantenimiento_numero;
        $gestion->ges_frecuencia_mantenimiento = $request->ges_frecuencia_mantenimiento;
        $gestion->save();



        if ($ids_pasos != null) {
            for ($i = 0; $i < count($ids_pasos); $i++) {

                $pasos[] = array(
                    "ges_id" => $gestion->id,
                    "pas_id" => $ids_pasos[$i],
                    "gep_notas" => $request->comentariocheck[$ids_pasos[$i]]
                );
            }
            ges_pa::insert($pasos);
        }
        return back();
    }

    //FECHA CALCULO
    public function fecha(request $request)
    {
        $a = 0;

        $fecha = $this->calculo_fecha($request->numero, $request->tipo);

        while ($a == 0) {
        
            $bd_validador = dias_inhabilitado::where('inh_fecha', $fecha)->get();

            if(count($bd_validador) != 0){
                $fecha = date("Y-m-d",strtotime($fecha."+ 1 days"));
            }else{
               $a = 1;
            }
        }    

        echo json_encode(
            array(
                "success" => true,
                "a" => $fecha
            )
        );
    }

    public function calculo_fecha($numero, $tipo){

        $fecha_actual = date("Y-m-d");
        switch ($tipo) {
            case 'dias':
                $fecha = date("Y-m-d",strtotime($fecha_actual."+ ".$numero." days")); 
                break;

                case 'semanas':
                    $fecha = date("Y-m-d",strtotime($fecha_actual."+ ".$numero." week")); 
                    break;

                    case 'meses':
                        $fecha = date("Y-m-d",strtotime($fecha_actual."+ ".$numero." month")); 
                        break;
        
                        case 'years':
                            $fecha = date("Y-m-d",strtotime($fecha_actual."+ ".$numero." year")); 
                            break;
        
            default:
                # code...
                break;
        }

        return $fecha;
    }

    //COMBO AJAX
    public function buscar_doctores(request $request){

        $sql = "SELECT doc.* 
        FROM ser_tra_tips AS stt 
        INNER JOIN stt_doc AS sd ON sd.stt_id = stt.stt_id
        INNER JOIN doctores AS doc ON doc.doc_id = sd.doc_id
        WHERE stt.tra_id = ".$request->tra_id;

        $doctores = DB::select($sql);

        echo json_encode(
            array(
                "success" => true,
                "doctores" => $doctores
            )
        );

    }

    //EDITAR Y ACTUALIZAR
    public function update(Request $request, $id)
    {

        $datosPaciente = request()->except(['_token','_method']);
        Paciente::where('pac_id','=', $id)->update($datosPaciente);
        return redirect('/paciente');
    }

    //DELETE
    public function destroy($id){
        Paciente::where('pac_id', $id)->update(['pac_estado' => '0']);
        return redirect('/paciente');
    }


}
