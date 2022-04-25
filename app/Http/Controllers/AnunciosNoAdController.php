<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnunciosNoAdController extends Controller
{
    public function vistanoadmin(){
        $op=2;
        return view('home', compact('op'));
    }
}
