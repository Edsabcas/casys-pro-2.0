<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContenidosController extends Controller
{
    public function contenidos(){
        $op='addcontenidos';
        return view('home',compact('op'));
    }


}
