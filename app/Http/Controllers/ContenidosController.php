<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContenidosController extends Controller
{
    public function contenidos(){
        $op="addContenidos";
        return view('home',compact('op'));
    }


}
