<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $req){
        $credentials = [
            'email' => $req->email,
            'password' => $req->password
        ];
        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->withErrors(['error' => 'El Usuario o Contraseña con Incorrectas']);
        }
    }
}
