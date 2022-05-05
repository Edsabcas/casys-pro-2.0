<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ListaDeEstudiantesComponent extends Component
{
    public $password, $name, $email, $usuario, $mensaje5, $mensaje6, $mensaje7, $n_name, $n_email, $n_user, $n_password, $c_password;

    public function render()
    {
        $sql='SELECT * FROM users';
        $listadousers=DB::select($sql);
        
        $password = $this->password;
        $name = $this->n_name;
        $email = $this->n_email;
        $usuario = $this->n_user;

        $this->op=1;
        $this->edit2=1;
        return view('livewire.lista-de-estudiantes-component', compact('listadousers'));
    }

    public function e_perfiles(){

        if($this->validate([
            'n_name' => 'required',
            'n_email' => 'required',
            'n_user' => 'required',
            'n_password' => 'required',
            'c_password' => 'required',


        ])==false){
            return back()->withErrors(['advertencia'=>'validar el input vacío']);


            
        }
        else{
            if($this->n_password == $this->c_password){ 
                    $usuarios=DB::table('users')
                    ->where('id',auth()->user()->id)
                     ->update(
                         [
                             'password'=>bcrypt($this->n_password),
                             'name'=>($this->n_name),
                             'email'=>($this->n_email),
                             'usuario'=>($this->n_user),
                        ]
                    );
                    if ($usuarios){
                        $this->mensaje5='se cambio de manera correcta';
                    }
                    else {
                        $this->mensaje6='no se cambio de manera correcta';
                    }
                }
                else{
                    $this->mensaje7='no coinsiden las contraseñas favor validar';
                }       

        }

    }


}
