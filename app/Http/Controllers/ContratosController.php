<?php

namespace App\Http\Controllers;

use App\Models\stt_doc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContratosController extends Controller
{
    //INDEX
    public function index()
    {
        $sql = "SELECT * FROM `doctores` WHERE `doc_id` AND `doc_estado` = 1";
        $doctores = DB::select($sql);

        $sql2 = "SELECT ser.ser_id, ser.ser_nombres, tra.tra_id, tra.tra_nombres, stt.stt_id, stt.tra_nombre, stt.stt_precio
        FROM `ser_tra_tips` as stt
        INNER JOIN especialidades AS ser on stt.ser_id = ser.ser_id
        INNER JOIN tratamientos AS tra on stt.tra_id = tra.tra_id
        WHERE stt.stt_estado = 1
        ORDER BY tra.tra_nombres ASC";
        $tratamiento = DB::select($sql2);
        
        $sql3 = "SELECT sd.stdoc_id, doc.doc_id, doc.doc_nombres, stt.tra_nombre, tra.tra_id, tra.tra_nombres
        FROM stt_docs AS sd 
        INNER JOIN doctores AS doc ON doc.doc_id = sd.doc_id
        INNER JOIN ser_tra_tips AS stt ON stt.tra_id = sd.stt_id 
        INNER JOIN tratamientos AS tra ON stt.tra_id = tra.tra_id
        WHERE sd.sttdoc_estado = 1
        AND doc.doc_estado = 1"; 
        $contratos = DB::select($sql3);

        return view("contratos.cfc", compact("doctores", "tratamiento", "contratos"));
    }

    

   //STORE
    public function store(Request $request)
    {

        foreach ($request->doc_id as $list) {
            $contrato = new stt_doc();
            $contrato->doc_id = $list;
            $contrato->stt_id = $request->stt_id;
            $contrato->save();
        }

        return redirect()->back();
    }


    //ACTUALIZAR
    public function update(Request $request, $id)
    {
        $datosContrato = request()->except(['_token','_method']);
        stt_doc::where('stdoc_id','=', $id)->update($datosContrato);
        return redirect()->back();
    }

    //DELETE
    public function destroy($id)
    {
        stt_doc::where('stdoc_id', $id)->update(['sttdoc_estado' => '0']);
        return redirect()->back();
    }
}
