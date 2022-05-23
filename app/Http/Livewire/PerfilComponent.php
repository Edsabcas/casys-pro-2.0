<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class PerfilComponent extends Component
{
    public $id_u, $name, $usuario, $email, $password, $op, $mensaje0, $mensaje4, $mensaje12, $mensaje, $mensaje1, $us, $pass, $state,$updater;
    public $current_password, $new_password, $new_password_confirmation,$fotos, $mensaje24;
    
    use WithFileUploads;

    public $img,$tipo,$archivo_perfil;

    public function render()
    {
        $sql="SELECT * FROM users ORDER BY img_users DESC";
        $this->fotos=DB::select($sql);

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

    public function cambiofoto(){

        $archivo_perfil="";
            if($this->archivo_perfil!=null){
                DB::commit();
                if($this->archivo_perfil->getClientOriginalExtension()=="jpg" or $this->archivo_perfil->getClientOriginalExtension()=="png" or $this->archivo_perfil->getClientOriginalExtension()=="jpeg"){
                    DB::commit();
                    $archivo_perfil = "img".time().".".$this->archivo_perfil->getClientOriginalExtension();
                    $this->img=$archivo_perfil;
                    $this->archivo_perfil->storeAS('imagen/perfil/', $this->img,'public_up');
                    $this->tipo=1;
                }
                
                $this->mensaje24='Foto de perfil actualizada';
            
            }
            DB::beginTransaction();
            $foto=DB::table('users')
            ->where('id',auth()->user()->id)
            ->update ([

                'img_users'=>$this->img

            ]);
        }
}