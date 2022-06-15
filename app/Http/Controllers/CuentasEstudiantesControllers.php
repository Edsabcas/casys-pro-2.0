<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuentasEstudiantesControllers extends Controller
{
    public function montos(){
        $op='amontos';
        return view('home',compact('op'));
    }
}
