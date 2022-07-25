<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContenidosEstudianteController extends Controller
{
    public function Actividades(){
        $op='addcontenidosest';
        return view('home',compact('op'));
    }
}
