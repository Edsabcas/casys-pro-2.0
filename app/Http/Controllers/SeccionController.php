<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeccionController extends Controller
{
    public function agregar_sec(){
        $op='addseccion';
        return view('home', compact('op'));
    }
}
