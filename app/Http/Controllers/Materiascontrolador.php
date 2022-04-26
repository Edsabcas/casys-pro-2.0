<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Materiascontrolador extends Controller
{
    public function Materias(){
        $op='addmaterias';
        return view('home',compact('op',));
    }
}
