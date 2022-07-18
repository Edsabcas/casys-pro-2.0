<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistaAlumnoController extends Controller
{
    //
    public function panel_general($id){
        $op="alumnosupervisado";
        session(['idalumnosupervisado' => $id]);
        session(['op' => $op]);
        return view('home', compact('op'));

    }

    public function anuncios_alumnos(){
        $op="alumnosupervisadoanuncios";
        session(['op' => $op]);
        return view('home', compact('op'));

    }

    public function calificaciones_alumnos(){
        $op="alumnosupervisadocalificaiones";
        session(['op' => $op]);
        return view('home', compact('op'));

    }

    public function calendario_alumnos(){
        $op="alumnosupervisadocalendario";
        session(['op' => $op]);
        return view('home', compact('op'));

    }

    public function reportes_alumnos(){
        $op="alumnosupervisadoreportes";
        session(['op' => $op]);
        return view('home', compact('op'));

    }

    public function pagos_alumnos(){
        $op="alumnosupervisadopagos";
        session(['op' => $op]);
        return view('home', compact('op'));

    }
}
