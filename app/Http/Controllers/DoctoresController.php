<?php

namespace App\Http\Controllers;

use App\Models\Doctores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class DoctoresController extends Controller
{
    //INDEX
    public function index()
    {
        $total = Doctores::count();
        $doctores = Doctores::where('doc_estado', '=', '1')->get();
        return view("doctores.doctores", compact("doctores", "total"));
    }

   //STORE
    public function store(Request $request)
    {

        $Doctores = request()->except('_token');
        if($request->hasFile('doc_foto')){
            $Doctores['doc_foto']=$request->file('doc_foto')->store('uploads','public');
        }
       
        Doctores::insert($Doctores);
        $notification = "!Doctores creado con exito!...";
        return redirect('/doctores')->with(compact('notification'));
    }

    //ACTUALIZAR
    public function update(Request $request, $id)
    {
        
        $datosDoctores = request()->except(['_token','_method']);
        if($request->hasFile('doc_foto')){
            $datosDoctores['doc_foto']=$request->file('doc_foto')->store('uploads','public');
        }      
        Doctores::where('doc_id','=', $id)->update($datosDoctores);
        return redirect('/doctores');
        
    }

    //DELETE
    public function destroy($id)
    {
        // desactiva el estado a inactio = 0
        
        Doctores::where('doc_id', $id)->update(['doc_estado' => '0']);
        return redirect('/doctores');
    }
}
