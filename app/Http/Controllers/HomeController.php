<?php

namespace App\Http\Controllers;

use App\Models\gestione;
use App\Models\proxima_atencione;
use App\Models\recordatorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //consulta en la base de datos los paciente
        $pacientes = DB::table("pacientes")->get();

        $sql3 = "SELECT * FROM `pacientes` WHERE `pac_estado` = 1";
        $paciente = DB::select($sql3);

        $sql = "SELECT tra.tra_nombres, ges.ges_frecuencia_mantenimiento, ges.ges_id, ges.ges_frecuencia_mantenimiento_numero
        , ges.ges_fecha_atencion, ges.ges_fecha_prox_atencion, tra.tra_id, pac.pac_id, pac.pac_nombres, pac.pac_telefono 
        FROM `gestiones` AS ges 
        INNER JOIN tratamientos AS tra on ges.tra_id = tra.tra_id
        INNER JOIN pacientes AS pac on ges.pac_id = pac.pac_id
        WHERE `ges_estado`= 1";
        $gestion = DB::select($sql);
        
        $sql2 ="SELECT * FROM `tipificaciones` WHERE `tip_estado`= 1";
        $tipificacion = DB::select($sql2);

        $total = gestione::all()->count();
        $total2 = proxima_atencione::all()->count();

    

        //retorna a la vista
        return view("home", compact("pacientes", "gestion", "tipificacion", "paciente", "total", "total2"));

    }

    //FUNCION CONTACTABILIDAD
    public function store(Request $request){
     $recordatorio = request()->except('_token');
     recordatorio::insert($recordatorio);
     $notification = "!Contactabilidad CREADA con exito!";
     return redirect('/home')->with(compact('notification'));
    }
}
