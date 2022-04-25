<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GradosController extends Controller
{
    public function agregar_gr(){
        $op='addgrado';
        return view('home', compact('op'));
    }
    
}
