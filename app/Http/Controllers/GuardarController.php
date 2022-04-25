<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuardarController extends Controller
{
    public function guardar(){
        $op='guardaranun';
        return view('home', compact('op'));
    }
}
