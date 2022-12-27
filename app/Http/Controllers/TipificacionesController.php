<?php

namespace App\Http\Controllers;

use App\Models\tipificacione;
use Illuminate\Http\Request;

class TipificacionesController extends Controller
{

    public function index()
    {

        $sql = "SELECT * FROM `tipificaciones` WHERE `tip_estado` = 1";
        $total = tipificacione::count();
        $tipificaciones = tipificacione::where('tip_estado', '=', '1')->get();
        return view("tipificacion.tipificacion", compact("tipificaciones", "total"));
    }


    public function store(Request $request)
    {
        $tipificaciones = request()->except('_token');
        tipificacione::insert($tipificaciones);
        $notification = "!Tipificación CREADA con exito!";
        return redirect('/Tipificacion')->with(compact('notification'));
    }


    public function update(Request $request, $id)
    {
        $datostipificacion = request()->except(['_token', '_method']);
        tipificacione::where('tip_id', '=', $id)->update($datostipificacion);
        $notification2 = "!Tipificación ACTUALIZADA con exito!";
        return redirect('/tipificacion')->with(compact('notification2'));
    }


    public function destroy($id)
    {        
        tipificacione::where('tip_id', $id)->update(['tip_estado' => '0']);
        $notification3 = "!Tipificación ELIMINADA con exito!";
        return redirect('/tipificacion')->with(compact('notification3'));
    }
}
