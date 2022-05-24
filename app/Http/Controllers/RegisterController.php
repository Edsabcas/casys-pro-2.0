<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function regusuario(){
        $op='RegistrarUsuario';
        return view('home',compact('op'));
    }
}
