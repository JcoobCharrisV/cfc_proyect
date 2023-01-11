<?php

namespace App\Http\Controllers;

use App\Models\pas_tra;
use App\Models\paso;
use App\Models\pastra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PastratamientoController extends Controller
{
    
    public function index()
    {
        $sql3 = "SELECT ser.ser_id, ser.ser_nombres, tra.tra_id, tra.tra_nombres, stt.stt_id, stt.tra_nombre, stt.stt_precio
        FROM `ser_tra_tips` as stt
        INNER JOIN especialidades AS ser on stt.ser_id = ser.ser_id
        INNER JOIN tratamientos AS tra on stt.tra_id = tra.tra_id
        WHERE stt.stt_estado = 1
        ORDER BY tra.tra_nombres ASC";
        $tratamientos = DB::select($sql3);

        $sql = "SELECT pat.pat_id, pas.pas_id, pas.pas_descripcion, tra.tra_id, tra.tra_nombres
        FROM `pas_tras` AS pat 
        INNER JOIN pasos AS pas on pat.pas_id = pas.pas_id 
        INNER JOIN tratamientos AS tra on pat.tra_id = tra.tra_id WHERE `pat_estado` = 1";
        $pasos = DB::select($sql);

        return view("pasos.pasos", compact("tratamientos", "pasos"));

    }
 
    public function store(Request $request)
    {
        $pasos = new paso();
        $pasos->pas_descripcion = $request->pas_descripcion;
        $pasos->save();

        $pas_tra = new pas_tra();
        $pas_tra->tra_id = $request->tra_id;
        $pas_tra->pas_id = $pasos->id; 
        $pas_tra->save();

        $notification = "!Paso CREADO con exito!...";
        return redirect('/pasos')->with(compact('notification'));
    }


    public function update(Request $request, $id)
    {
        
        paso::where('pas_id', $id)->update(['pas_descripcion'=> $request->pas_descripcion]);
        pas_tra::where('tra_id', $id)->update(['tra_id'=> $request->tra_id]);
        $notificacion2 = "!Pasos ACTUALIZADO con exito!...";
        return redirect('/pasos')->with(compact('notificacion2'));
    }

    public function destroy($id)
    {
        
        pas_tra::where('pat_id', $id)->update(['pat_estado' => '0']);
        $notificacion3 = "!Paso ELIMINADO con exito!...";
        return redirect('/pasos')->with(compact('notificacion3'));
    }
}
