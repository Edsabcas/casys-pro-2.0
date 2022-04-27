<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class Conusltarcontroller extends Controller
{
    public function Consultar(){
        $op="addConsultar";
        return view('home',compact('op',));
    }
}
