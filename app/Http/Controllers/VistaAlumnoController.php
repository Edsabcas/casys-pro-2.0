<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistaAlumnoController extends Controller
{
    //
    public function panel_general($id_alumno){
        $op="alumnosupervisado";
        session(['id_alumno_supervisado' => $id_alumno]);
        session(['op' => $op]);
        return view('home', compact('op'));

    }

    public function anuncios_alumnos(){
        $op="alumnosupervisadoanuncios";
        session(['op' => $op]);
        return view('home', compact('op'));

    }
}
