<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        return view("user.user");
    }

    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        dd($request->request);
    }

    public function destroy($id)
    {
        //
    }
}
