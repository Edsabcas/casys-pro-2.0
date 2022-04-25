<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsignacionController extends Controller
{
    public function agregar_a(){
        $op=5;
        return view('home', compact('op'));
    }
}
