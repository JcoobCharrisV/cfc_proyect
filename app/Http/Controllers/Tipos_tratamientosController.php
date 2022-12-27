<?php

namespace App\Http\Controllers;

use App\Models\tipos_tratamientos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Tipos_tratamientosController extends Controller
{
    //INDEX
    public function index()
    {

        $total = tipos_tratamientos::count();
        $tipos = tipos_tratamientos::where('tit_estado', '=', '1')->get();
        return view("tipo.tipo", compact("total", "tipos"));
    }

    //STORE
    public function store(Request $request)
    {
        $Tipo = request()->except('_token');
        tipos_tratamientos::insert($Tipo);
        $notification = "!Tipo de tratamiento creado con exito!...";
        return redirect('/tipo')->with(compact('notification'));
    }


    //ACTUALIZAR
    public function update(Request $request, $id)
    {
        $datosTipos = request()->except(['_token', '_method']);
        tipos_tratamientos::where('tit_id', '=', $id)->update($datosTipos);
        return redirect('/tipo');
    }

    //DELETE
    public function destroy($id)
    {
        tipos_tratamientos::where('tit_id', $id)->update(['tit_estado' => '0']);
        return redirect('/tipo');
    }
}
