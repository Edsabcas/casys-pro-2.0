<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class RegisterComponent extends Component
{
    public $mensaje30, $mensaje29, $name, $usuario, $email, $password;

    public function render()
    {
        return view('livewire.register-component');
    }

    public function guardar(){

        if($this->validate([
            'name' => 'required',
            'usuario' => 'required',
            'email' => 'required',
            'password' => 'required',

        ])==false)
        {
            $mensaje25="ingrese un dato";
            session(['message' => 'ingrese un dato']);
            return back()->withErrors(['mensaje' =>'Validar el input vacio']);
        }
        else
        {   
            $id=$this->id;
            $name=$this->name;
            $usuario=$this->usuario;
            $email=$this->email;
            $password=$this->password;

        DB::beginTransaction();

        $registrar=DB::table('users')->insert(
            [
                'id'=> $id,
                'name'=> $name,
                'usuario'=> $usuario,
                'email'=> $email,
                'password'=> $password,

            ]);
            if($registrar){
                DB::commit();
                $this->reset();
                unset($this->mensaje29);
                $this->mensaje29='Se logro crear correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensaje30);
                $this->mensaje30='No se logro crear correctamente';
            }
        }
        }
}
