<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnunciosNoAdController extends Controller
{
    public function vistanoadmin(){
        $op='vistanoadanuncios';
        return view('home', compact('op'));
    }
}
