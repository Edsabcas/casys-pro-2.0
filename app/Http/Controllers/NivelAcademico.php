<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NivelAcademico extends Controller
{
    public function agregar_nivelacedemico(){
        $op='nivelacademico';
        return view('home', compact('op'));
    }
}
