<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnidadesControlador extends Controller
{
    public function Unidad1(){
        $op=11;
        return view('home',compact('op',));
    }
    public function Primer_Unidad(){
        $op=45;
        return view('home',compact('op',));
    }
}
