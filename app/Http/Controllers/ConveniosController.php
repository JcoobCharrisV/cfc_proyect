<?php

namespace App\Http\Controllers;

use App\Models\convenio;
use Illuminate\Http\Request;

class ConveniosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = convenio::count();
        $convenios = convenio::where('con_estado', '=', '1')->get();
        return view("convenios.convenios", compact("convenios", "total"));
    }


    public function store(Request $request)
    {
        
        $Convenios = request()->except('_token');
        convenio::insert($Convenios);
        $notification = "!Convenio creado con exito!";
        return redirect('/convenios')->with(compact('notification'));
    }

  
    public function update(Request $request, $id)
    {
        
        $datosconvenios = request()->except(['_token', '_method']);
        convenio::where('con_id', '=', $id)->update($datosconvenios);
        $notification2 = "!Convenio ACTUALIZADO con exito!";
        return redirect('/convenios')->with(compact('notification2'));
    }

 
    public function destroy($id)
    {
         // desactiva el estado a inactio = 0
         convenio::where('con_id', $id)->update(['con_estado' => '0']);
         $notification3 = "!Convenio ELIMINADO con exito!";
         return redirect('/convenios')->with(compact('notification3'));
    }
}
