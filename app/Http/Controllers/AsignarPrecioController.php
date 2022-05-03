<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsignarPrecioController extends Controller
{
    public function precios(){
        $op="asigprecios";
        return view("home", compact('op'));
    }
}
