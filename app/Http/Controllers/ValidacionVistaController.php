<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidacionVistaController extends Controller
{
    public function validacionvista(){
        $op="validacionvista";
        return view('home', compact('op'));
    }
}
