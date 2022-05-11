<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class PerfilComponent extends Component
{
    public $id_u, $name, $usuario, $email, $password, $op, $mensaje0, $mensaje4, $mensaje12, $mensaje, $mensaje1, $us, $pass, $state,$updater;
    public $current_password, $new_password, $new_password_confirmation;


    public function render()
    {

        $this->id_u=auth()->user()->id;
        $sql='SELECT * FROM users WHERE id=?';
        $perfiles=DB::select($sql,array($this->id_u));
        
        $password = $this->password;

        $this->op=1;
        $this->edit1=1;
        return view('livewire.perfil-component', compact('perfiles'));
    }

    public function c_perfiles($id_u){
        $id_u=$id_u;
        $id_u=auth()->user()->id;
  
    }
       

    public function c_pass(){

        if($this->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'new_password_confirmation' => 'required',

        ])==false){
            return back()->withErrors(['advertencia'=>'validar el input vacío']);

            
        }
        else{
            if(Hash::check($this->current_password, auth()->user()->password)){ 
                if($this->new_password == $this->new_password_confirmation){
                    DB::beginTransaction();
                    $perfil=DB::table('users')
                    ->where('id',auth()->user()->id)
                     ->update(
            [
                'password'=>bcrypt($this->new_password),
            ]
        );
        DB::commit();
        $this->mensaje12='Se actualizo la contraseña de manera correcta';
        
        if ($perfil){
            DB::commit();
            $this->mensaje0='se cambio de manera correcta';
        }
        else {
            DB::rollback();
            $this->mensaje4='no se cambio de manera correcta';
        }
                }
                else{
                    DB::rollback();
                    $this->mensaje='no coinsiden las contraseñas favor validar';
                }       
            }
            else{
                DB::rollback();
                $this->mensaje1='la contraseña ingresada actual no es la correcta';
            }

        }
            
    }

        /*protected function rules(){
        return [
            'current_password' => 'required',
            'new_password' => ['required', 'string', 'confirmed'],
        ];

       
          // Save the New Password.
          $user = auth::users();
          $user->password = bcrypt($request->get('new_password'));
          $user->save();
           return back()->with('message', 'La contraseña fue cambiada');
        

        }
        
        $user = User::find(10);
        $user->username = "new user";
        $user->save();*/
}