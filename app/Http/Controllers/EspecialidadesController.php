<?php

namespace App\Http\Controllers;

use App\Models\especialidade;
use App\Models\Especialidades;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EspecialidadesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //INDEX
    public function index()
    {
        $sql = "SELECT * FROM `especialidades` WHERE `ser_id` =";
        $especialidades = DB::select($sql);
        return view("paciente.paciente-mantenimiento-nuevo", compact("especialidades"));
    }

    //CREAR
    public function create()
    {
        //trae los registro con el estado = 1
        $total= especialidade::count();
        $especialidades = especialidade::where('ser_estados', '=', '1')->get();
        return view("servicios.servicios", compact('especialidades', 'total'));
    }

    //STORE
    public function store(Request $request)
    {

        $Servicios = request()->except('_token');
        especialidade::insert($Servicios);
        $notification = "!Especialidad CREADA con exito!";
        return redirect('/servicios')->with(compact('notification'));
    }


    //ACTUALIZAR
    public function update(Request $request, $id)
    {
      
        $datosServicio = request()->except(['_token', '_method']);
        especialidade::where('ser_id', '=', $id)->update($datosServicio);
        $notification2 = "!Especialidad ACTUALIZADA con exito!";
        return redirect('/servicios')->with(compact('notification2'));
    }

    //DELETE
    public function destroy($id)
    {
        // desactiva el estado a inactio = 0
        especialidade::where('ser_id', $id)->update(['ser_estados' => '0']);
        $notification3 = "!Especialidad ELIMINADA con exito!";
        return redirect('/servicios')->with(compact('notification3'));
    }
}
