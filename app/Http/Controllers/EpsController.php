<?php

namespace App\Http\Controllers;

use App\Models\eps;
use Illuminate\Http\Request;

class EpsController extends Controller
{
    
    public function index()
    {
        $total = eps::count();
        $eps = eps::where('eps_estado', '=', '1')->get();
        return view("eps.eps", compact("eps", "total"));
    }

   
    public function store(Request $request)
    {
        $eps = request()->except('_token');
        eps::insert($eps);
        $notification = "!Eps CREADA con exito!";
        return redirect('/eps')->with(compact('notification'));
    }

  
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        $datoseps = request()->except(['_token', '_method']);
        eps::where('eps_id', '=', $id)->update($datoseps);
        $notification2 = "!Eps ACTUALIZADO con exito!";
        return redirect('/eps')->with(compact('notification2'));
    }

    public function destroy($id)
    {
        eps::where('eps_id', $id)->update(['eps_estado' => '0']);
         $notification3 = "!Eps ELIMINADO con exito!";
         return redirect('/eps')->with(compact('notification3'));
    }
}
