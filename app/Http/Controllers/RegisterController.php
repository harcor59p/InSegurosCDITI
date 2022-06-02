<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function show(){
        return view('register');
    }

    public function register(Request $request){
    $user = User::create($request->all());
    return view('welcome')->with('success','usuario creado correctamente');
    }

}
