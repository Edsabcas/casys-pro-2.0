<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelAnunciosController extends Controller
{
    //
    public function panel_anuncios(){
        $op="panelanuncios";
        session(['op' => $op]);
        return view('home', compact('op'));

    }

    public function panel_editar(){
        $op="paneleditar";
        session(['op' => $op]);
        return view('home', compact('op'));

    }
}
