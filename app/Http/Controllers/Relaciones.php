<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Relaciones extends Controller
{
    public function relaciones(){
        $op='addrelaciones';
        return view('home',compact('op',));
    }
}
