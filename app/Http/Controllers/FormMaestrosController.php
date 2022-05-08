<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormMaestrosController extends Controller
{
    public function edicionmaestro(){
        $op="addanunciomaestro";
        return view('home', compact('op'));
    }
}
