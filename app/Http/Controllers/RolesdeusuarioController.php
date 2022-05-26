<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesdeusuarioController extends Controller
{
    public function mostrarroles(){
        $op='aMostrarRoles';
        return view('home',compact('op'));
    }
}
