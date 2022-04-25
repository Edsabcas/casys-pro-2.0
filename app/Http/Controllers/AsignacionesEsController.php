<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsignacionesEsController extends Controller
{
    public function agregar_e(){
        $op=6;
        return view('home', compact('op'));
    }
}
