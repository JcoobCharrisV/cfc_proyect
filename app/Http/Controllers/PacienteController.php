<?php

namespace App\Http\Controllers;

use App\Models\ges_pa;
use App\Models\gestione;
use App\Models\Paciente;
use App\Models\pas_tra;
use App\Models\paso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //consultas para listar los paciente (panel de control)

        $sql= "SELECT * FROM `pacientes` WHERE `pac_id` = ".$id;

        $pacientes = DB::select($sql);

        //consultas para listar los doctores (modal mantenimiento de perfil)

        $sql= "SELECT * FROM `doctores`";

        $doctores = DB::select($sql);

        //consulta para los combobox de los (servicios)

        $sql= "SELECT tra.tra_id, ser.ser_nombres, tit.tit_nombres, tra.tra_nombres, stt.stt_id
        FROM `ser_tra_tip` AS stt
        INNER JOIN servicios AS ser on stt.ser_id = ser.ser_id
        INNER JOIN tipos_tratamientos AS tit on stt.tit_id = tit.tit_id
        INNER JOIN tratamientos AS tra on stt.tra_id = tra.tra_id
        WHERE stt.stt_estado = 1";
        $mantenimientos = DB::select($sql);

        $sql = "SELECT tra.tra_nombres, ges.ges_frecuencia_mantenimiento, ges.ges_id, ges.ges_frecuencia_mantenimiento_numero, ges.ges_fecha_atencion, ges.ges_fecha_prox_atencion, tra.tra_id 
        FROM `gestiones` AS ges 
        INNER JOIN tratamientos AS tra on ges.tra_id = tra.tra_id 
        WHERE `pac_id`= ".$id;

        $gestiones = DB::select($sql);


       
        //retorna a la vista
        return view("paciente.pacienteperfil", compact("pacientes", "doctores", "mantenimientos","id", "gestiones"));
    }

    //AJAX
    public function cargarDatos(Request $request)
    {

        $tra_id = $request->tra_id;

        $sql = "SELECT pas.pas_id, pas.pas_descripcion
        FROM `pas_tras` As past
        INNER JOIN pasos AS pas on past.pas_id = pas.pas_id
        INNER JOIN tratamientos AS tra on past.tra_id = tra.tra_id
        WHERE past.tra_id = ".$tra_id;
        $pasos = DB::select($sql);


        echo json_encode(
            array(
                "success" => true,
                "pasos" => $pasos
           )
       );
    }

    public function gestion($id) {
        
        $gestion = gestione::where("ges_id", $id)->get();

        $sql = "SELECT pas.pas_descripcion, pas.pas_id, tra.tra_id, tra.tra_nombres 
        FROM `pas_tras` AS past INNER JOIN tratamientos AS tra on past.tra_id = tra.tra_id 
        INNER JOIN pasos AS pas on past.pas_id = pas.pas_id 
        WHERE past.tra_id = ".$gestion[0]->tra_id;

        $pacientes = paciente::where("pac_id", $gestion[0]->pac_id)->get();
        $pasos = DB::select("SELECT * FROM `ges_pas` WHERE `ges_id` = ".$gestion[0]->ges_id);
        $pasos_tra = DB::select($sql);
        $tratamiento = DB::select($sql);

        $sql2 = "SELECT * FROM `doctores` WHERE `doc_id` = ".$gestion[0]->doc_id;
        $doctor = DB::select($sql2);

        $sql3 = "SELECT * FROM `tratamientos` WHERE `tra_id` = ".$gestion[0]->tra_id;
        $tratamiento = DB::select($sql3);

        $pdfInfo[] = array(
            "fecha_atencion" => $gestion[0]->ges_fecha_atencion,
            "nombre_paciente" => $pacientes[0]->pac_nombres.' '.$pacientes[0]->pac_apellidos,
            "tipo_identificacion" => $pacientes[0]->pac_tipo_identificacion,
            "documento" => $pacientes[0]->pac_identificacion,
            "telefono" => $pacientes[0]->pac_telefono,
            "edad" => $pacientes[0]->pac_edad,
            "nombre_doctor" => $doctor[0]->doc_nombres.' '.$doctor[0]->doc_apellidos,
            "correo" => $pacientes[0]->pac_correo,
            "nombre_tratamiento" => $tratamiento[0]->tra_nombres,
            "fecha_prox_gestion" => $gestion[0]->ges_fecha_prox_atencion
        );

        for ($i=0; $i < count($pasos_tra); $i++) { 
            
            $p = 0;
            for ($a=0; $a < count($pasos); $a++) { 
                
                if($pasos_tra[$i]->pas_id == $pasos[$a]->pas_id){
                    $pasospdf[] = array(
                        "paso_descripcion" => $pasos_tra[$i]->pas_descripcion,
                        "verificador" => "SI",
                        "comentario" => ""
                    );
                    $p = 1;
                }
                
            }

            if($p == 0){
                $pasospdf[] = array(
                    "paso_descripcion" => $pasos_tra[$i]->pas_descripcion,
                    "verificador" => "NO",
                    "comentario" => ""
                );
            }
            
        } 
        return PDF::loadView('pdfgestion', compact('pdfInfo','pasospdf'))->stream('reporte.pdf');
    }


    public function sendData(request $request){
         $ids_pasos = $request->pasos;

         list($dia, $mes, $año) = explode("/", $request->ges_fecha_prox_atencion);
         $fecha = $año.'-'.$mes.'-'.$dia.' '.$request->ges_hora_prox_atencion;
         $fecha2 = date("Y-m-d H:i:s", strtotime($fecha));

         $gestion = new gestione();
         $gestion->pac_id=$request->pac_id;
         $gestion->tra_id=$request->tra_id;
         $gestion->doc_id=$request->doc_id;
         $gestion->ges_fecha_prox_atencion=$fecha2;
         $gestion->ges_notas=$request->ges_notas;
         $gestion->ges_frecuencia_mantenimiento_numero=$request->ges_frecuencia_mantenimiento_numero;
         $gestion->ges_frecuencia_mantenimiento=$request->ges_frecuencia_mantenimiento;
         $gestion->save();
        
        
        if ($ids_pasos != null) {
            for ($i=0; $i < count($ids_pasos); $i++) { 

                $pasos[] = array(
                    "ges_id" => $gestion->id, 
                    "pas_id" => $ids_pasos[$i]
                ); 
            } 
            ges_pa::insert($pasos);
        }
         return back();    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
