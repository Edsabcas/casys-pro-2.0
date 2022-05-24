<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegisterComponent extends Component
{
    public function render()
    {
        return view('livewire.register-component');
    }

    public function guardar(){

        if($this->validate([
            'name' => 'required',
            'usuario' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',

        ])==false)
        {
            $mensaje25="ingrese un dato";
            session(['message' => 'ingrese un dato']);
            return back()->withErrors(['mensaje' =>'Validar el input vacio']);
        }
        else
        {
        $name=$this->name;
        $usuario=$this->usuario;
        $email=$this->email;
        $password=$this->password;

        DB::beginTransaction();

        $registrar=DB::table('users')->insert(
            [
                'name'=> $name,
                'usuario'=> $usuario,
                'email'=> $email,
                'password'=> $password,

            ]);
            if($registrar){
                DB::commit();
                $this->reset();
                unset($this->mensaje26);
                $this->mensaje26='Se logro insertar correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensaje27);
                $this->mensaje27='No se logro insertar correctamente';
            }
        }
        }
}
