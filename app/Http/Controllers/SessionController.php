<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(){
        return view(auth.login);
    }

    public function store(){
        if(auth()->attempt(request(['login', 'password']))== false){
            return back()->withErrors([
                'message'=> 'el correo o contraseña son invalidos, por favor verificar'
            ]);
        }
    }
}
