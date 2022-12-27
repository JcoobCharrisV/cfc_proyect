<?php

namespace App\Http\Controllers;

use App\Models\dias_inhabilitado;
use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view("calendario");
    }

   
    public function store(Request $request)
    {
        
        $fechas = request()->except('_token');
        dias_inhabilitado::insert($fechas);
        $notification = "!Fecha creada con exito!";
        return redirect('/calendario')->with(compact('notification'));
    }

 
  
    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
