<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsignacionController extends Controller
{
    public function agregar_a(){
        $op='asignacion';
        return view('home', compact('op'));
    }
}
