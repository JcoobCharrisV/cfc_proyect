<?php

namespace App\Http\Controllers;

use App\Models\role;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;



class RolController extends Controller
{

    public function index()
    {
        $permission = Permission::get();
        return view('roles.roles', compact("permission"));
    }

    public function store(Request $request)
    {

        dd($request->request);
        $rol = request()->except('_token');
        role::insert($rol);
        $notification = "!Rol CREADO con exito!";
        return redirect('/roles')->with(compact('notification'));
    }
}
