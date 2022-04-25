<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaestrosController extends Controller
{
    public function agregar_docentes(){
        $op='addmaestros';
        return view('home', compact('op'));
    }
}
