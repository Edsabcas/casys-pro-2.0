<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistaPruebaController extends Controller
{
    public function vistaprueba(){
        $op=6;
        return view('home', compact('op'));
    }
}
