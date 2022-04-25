<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class Conusltarcontroller extends Controller
{
    public function Consultar(){
        $op=37;
        return view('home',compact('op',));
    }
}
