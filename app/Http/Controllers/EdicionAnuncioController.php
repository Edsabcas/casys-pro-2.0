<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdicionAnuncioController extends Controller
{
    public function edicion(){
        $op="addanuncio";
        return view('home', compact('op'));
    }
}
