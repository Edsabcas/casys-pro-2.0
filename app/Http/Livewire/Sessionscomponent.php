<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class Sessionscomponent extends Component
//estos son los roles
{

    public $menu_rol, $submenu_rol, $users, $op, $mensaje20, $mensaje, $rol_usuario_activo;

    public function render()
    {
        return view('livewire.sessionscomponent');
    }
    
    public function validar() {

        $us=request('usuario');
        $pass=request("password");


        if(auth()->attempt(['usuario'=>$us,'password'=>$pass])==false){
            session(['mensaje20'=>'no logro ingresar, valida us/pass']);

            return back()->withErrors(['mensaje20'=> 'no logro ingresar']);

        }

        else{
        $id_rol="";
        $rol=DB::table('users')
        ->join('rol_usuario', function($join){
            $id=auth()->user()->id;
            $join->on('users.id', '=', 'rol_usuario.ID_USUARIO')
            ->where('rol_usuario.ID_USUARIO', '=', $id);
        })
        ->join('rol', 'rol_usuario.ID_ROL', '=', 'rol.ID_ROL')
        ->select('rol.ID_ROL', 'rol.DESCRIPCION')
        ->get();

        session(['rol' => $rol]);
        $ro=array();
        $prueba=0;
        foreach($rol as $rols){
            $ro[]=$rols->ID_ROL;
            
        }
        if($rol==null){
            return redirect()->to('inicio');
        }

        else {
            session(['id_rol' => $id_rol]);
            $menu_rol=DB::table('rol')
            ->join('menu_rol', function($join){
            $rol=session('rol');
            $ro=array();
            foreach($rol as $rols){
            $ro[]=$rols->ID_ROL;
            $id_rol=$rols->ID_ROL;
        }
        session(['ro' => $ro[0]]);
        $join->on('rol.ID_ROL', '=', 'menu_rol.ID_ROL')
        ->where('menu_rol.ID_ROL', '=', intval($ro[0]));
            })
        ->join('menu', 'menu_rol.ID_MENU', '=', 'menu.ID_MENU')
        ->select('menu.ID_MENU', 'menu.DESCRIPCION', 'menu.ICONO')
        ->get();

        $submenu_rol=DB::table('menu_submenu')
        ->join('submenu', function($join){
        $join->on('menu_submenu.ID_SUBMENU', '=', 'submenu.ID_SUBMENU')
        ->where('menu_submenu.ESTADO', '=', 1);
        })
        ->select('submenu.ID_SUBMENU', 'submenu.DESCRIPCION', 'menu_submenu.ID_MENU')
        ->get();

        $users=User::where("id", "=", auth()->user()->id)->select("id")->paginate(10);
        session(['menu_rol' => $menu_rol]);
        session(['submenu_rol' => $submenu_rol]);
        session(['users' => $users]);

        $op=0;
        $rol=$ro[0];     
        return redirect()->to('/');
        }
    }
}
}