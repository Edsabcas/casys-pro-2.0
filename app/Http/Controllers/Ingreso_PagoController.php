<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ingreso_PagoController extends Controller
{
    public function Pagos(){
        $op='ingreso_pagos';
        return view('home', compact('op'));
    }
/*     public function Pagos2(){
        $op='vistapagos2';
        return view('home', compact('op'));
    } */
}
