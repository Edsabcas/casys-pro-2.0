<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BotonesController extends Controller
{
    public function Pre_Kinder(){
        $op='botones';
        return view('home',compact('op',));
    }
}
