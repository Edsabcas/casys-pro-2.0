<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistaAlumnoController extends Controller
{
    //
    public function panel_general($id_alumno){
        $op="alumnosupervisado";
        session(['id_alumno_supervisado' => $id_alumno]);
        return view('home', compact('op'));

    }
}
