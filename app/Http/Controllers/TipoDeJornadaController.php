<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TipoDeJornadaController extends Controller
{
    public function agregar_jornada(){
        $op='jornada';
        return view('home', compact('op'));
    }
}
