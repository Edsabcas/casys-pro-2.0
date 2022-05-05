<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function configperfil(){
        $op='aconfigperfil';
        return view('home',compact('op'));
    }

    
}
