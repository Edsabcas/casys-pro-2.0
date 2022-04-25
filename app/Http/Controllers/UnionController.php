<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnionController extends Controller
{
    public function Union(){
        $op=31;
        return view('home',compact('op',));
    }
}
