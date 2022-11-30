<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ServiciosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $sql= "SELECT * FROM `servicios` WHERE `ser_id` =";
        $servicios = DB::select($sql);
        return view("paciente.paciente-mantenimiento-nuevo", compact("servicios"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //trae los registro con el estado = 1
        $total = Servicios::count();
        $servicios = Servicios::where('ser_estados', '=', '1')->get();
        return view("servicios.servicios", compact('servicios', 'total'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $Servicios = request()->except('_token');
        Servicios::insert($Servicios);
        return redirect('/servicios');

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
    public function edit(Servicios $servicios)
    {
        
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

        $datosServicio = request()->except(['_token','_method']);
        Servicios::where('ser_id','=', $id)->update($datosServicio);
        return redirect('/servicios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // desactiva el estado a inactio = 0
        Servicios::where('ser_id', $id)->update(['ser_estados' => '0']);
        return redirect('/servicios');
    }
}
