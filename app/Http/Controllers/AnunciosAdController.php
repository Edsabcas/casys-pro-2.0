<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnunciosAdController extends Controller
{
    public function vistaadmin(){
        $op="vistaadanuncios";
        return view('home', compact('op'));
    }

}
