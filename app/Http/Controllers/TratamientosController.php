<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\tratamiento;
use App\Models\ser_tra_tip;

class TratamientosController extends Controller
{
    
    public function index()
    {
        //trae los servicios con estado activo
        $sql = "SELECT * FROM `servicios` WHERE `ser_id` and `ser_estados` = 1";
        $servicio = DB::select($sql);

        //trae los tipos de tratamientos con estado activo
        $sql2 = "SELECT * FROM `tipos_tratamientos` WHERE `tit_id` AND `tit_estado` = 1";
        $tipos_tratamientos = DB::select($sql2);

        $sql3 = "SELECT ser.ser_id, ser.ser_nombres, tit.tit_id, tit.tit_nombres, tra.tra_id, tra.tra_nombres, stt.stt_id, stt.tra_nombre
        FROM `ser_tra_tips` as stt
        INNER JOIN servicios AS ser on stt.ser_id = ser.ser_id
        INNER JOIN tipos_tratamientos AS tit on stt.tit_id = tit.tit_id
        INNER JOIN tratamientos AS tra on stt.tra_id = tra.tra_id
        WHERE stt.stt_estado = 1";
        $tratamientos = DB::select($sql3);
        

        return view("tratamiento.tratamiento", compact('servicio', 'tipos_tratamientos', 'tratamientos'));
    }
    
    public function store(Request $request)
    {

        $tratamiento = new tratamiento();
        $tratamiento->tra_nombres = $request->tra_nombres;
        $tratamiento->save();

        $ser_tra_tip = new ser_tra_tip();
        $ser_tra_tip->ser_id = $request->ser_id;
        $ser_tra_tip->tit_id = $request->tit_id;
        $ser_tra_tip->tra_id = $tratamiento->id;
        $ser_tra_tip->tra_nombre = $request->tra_nombres;
        $ser_tra_tip->save();

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        tratamiento::where('tra_id', $id)->update(['tra_nombres'=> $request->tra_nombres]);

        ser_tra_tip::where('tra_id', $id)->update(['ser_id'=> $request->ser_id]);
        ser_tra_tip::where('tra_id', $id)->update(['tit_id'=> $request->tit_id]);
        ser_tra_tip::where('tra_id', $id)->update(['tra_nombre'=> $request->tra_nombres]);

        return redirect()->back();
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
