<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContenidosEstudianteController extends Controller
{
    public function Actividades(){
        $op='addcontenidosest';
        session(['op' => $op]);
        return view('home',compact('op'));
    }

    public function Archivoact(){
        $op='addarchivosest';
        session(['op' => $op]);
        return view('home',compact('op'));
    }
}
