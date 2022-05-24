<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;



class SessionController extends Controller
{
    public function index(){

        return view('auth.hola');
    }
    public function inicio(){
        $op=0;
        return view('home', compact('op'));
    }
    
    public function guardar2(){

        $this->validate(request(),[
            'name'=>'required',
            'usuario' =>'required',
            'email'=>'required',
            'password'=>'required|confirmed',
            
        ]);

        $user= User::create(request(['name','usuario','email','password']));
        auth()->login($user);   
        return view('/');
    }

    

    public function register(){
        return view('auth.register');
    }


    public function destroy(){
        auth()->logout();
        session_unset();
        Session::flush();
        return redirect()->to('/');
    }
}
