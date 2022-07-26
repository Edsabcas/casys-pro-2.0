<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AsignacionesEsController extends Controller
{
    public function agregar_e(){
        $op='asignacionestudiantes';
        session(['op' => $op]);
        return view('home', compact('op'));
    }

    public function agregar_e_presencial(){
        $op="asignacionestudiantespresencial";
        session(['op' => $op]);
        return view('home', compact('op'));
    }

    public function agregar_e_virtual(){
        $op='asignacionestudiantesvirtual';
        session(['op' => $op]);
        return view('home', compact('op'));
    }

    public function ver_e_presencial(){
        $op='verestudiantespresencial';
        session(['op' => $op]);
        return view('home', compact('op'));
    }

    public function ver_e_virtual(){
        $op='verestudiantesvirtual';
        session(['op' => $op]);
        return view('home', compact('op'));
    }

    public function ver_e_asignados(){
        $op='verestudiantesasignados';
        session(['op' => $op]);
        return view('home', compact('op'));
    }
}
