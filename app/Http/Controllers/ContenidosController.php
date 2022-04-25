<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContenidosController extends Controller
{
    public function contenidos(){
        $op=1;
        return view('home',compact('op'));
    }


}
