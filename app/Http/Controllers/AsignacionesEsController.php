<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AsignacionesEsController extends Controller
{
    public function agregar_e(){
        $op='asignacionestudiantes';
        return view('home', compact('op'));
    }
}
