<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
class LoginController extends Controller
{
    public function loginForm(){

        return view('auth.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('libreria.index');
    }

    public function login(Request $request){
        $credenciales = $request->only('login', 'password');
        if (Auth::attempt($credenciales)){
            return redirect()->intended(route('libreria.index'));
        }else{
            $error = 'Usuario incorrecto';
            return view('auth.login', compact('error'));
        }
    }
}