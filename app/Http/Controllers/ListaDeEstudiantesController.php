<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListaDeEstudiantesController extends Controller
{
    public function listarusers(){
        $op='aconfigusuarios';
        return view('home',compact('op'));
    }
}
