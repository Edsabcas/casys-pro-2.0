<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Materiascontrolador extends Controller
{
    public function Materias(){
        $op=7;
        return view('home',compact('op',));
    }
}
