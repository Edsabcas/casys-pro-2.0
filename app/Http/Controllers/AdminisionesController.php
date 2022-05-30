<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminisionesController extends Controller
{
    public function adm(){
        $op="admisiones";
        return view("home", compact("op"));
    }
}
