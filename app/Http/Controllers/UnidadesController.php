<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnidadesController extends Controller
{
    public function Unidades(){
        $op='addunidades';
        return view('home',compact('op',));
    }
}
