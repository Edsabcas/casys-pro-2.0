<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarizacionController extends Controller
{
    public function Calendarizacion(){
        $op=40;
        return view('home',compact('op'));
    }
}
