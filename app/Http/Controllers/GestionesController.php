<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionesController extends Controller
{
    public function pendientes(){
        $op='gest_pendi';
        session()->forget('op');
        session(['op' => $op]);
        return view('home', compact('op'));
    }

    public function atendidas(){
        $op='gest_aten';
        session()->forget('op');
        session(['op' => $op]);
        return view('home', compact('op'));
    }
    public function repor(){
        $op='gest_repo';
        session()->forget('op');
        session(['op' => $op]);
        return view('home', compact('op'));
    }

}
