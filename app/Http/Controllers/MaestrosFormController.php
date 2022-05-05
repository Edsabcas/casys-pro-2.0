<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaestrosFormController extends Controller
{
    public function edicionmaestro(){
        $op="addanunciomaestro";
        return view('home', compact('op'));
    }
}
