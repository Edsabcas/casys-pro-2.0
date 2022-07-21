<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelAnunciosController extends Controller
{
    //
    public function panel_anuncios(){
        $op="panelanuncios";
        return view('home', compact('op'));

    }
}
