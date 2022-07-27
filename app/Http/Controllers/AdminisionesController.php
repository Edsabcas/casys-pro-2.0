<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminisionesController extends Controller
{
    public function adm(){
        $op="inscripcion";
        return view("home", compact("op"));
    }
    public function admisiones(){
        $op="admisiones";
        return view("home", compact("op"));
    }
}
