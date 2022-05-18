<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Livewire\WithFileUploads;

class ListadeusuariosComponent extends Component
{
    public $password, $id_p, $name, $email, $usuario, $mensaje5, $mensaje6, $mensaje7, $mensaje10, $mensaje11, $n_name, $fotoss, $n_email, $n_user, $n_password;
    
    use WithFileUploads;

    public $imagen,$tp,$archivo_usuarios;

    public function render()
    {
        $sql='SELECT * FROM users';
        $listadousers=DB::select($sql);
        $sql='SELECT * FROM rol_usuario';
        $listadousers_rols=DB::select($sql);

        $this->op=1;
        $this->edit2=1;
        return view('livewire.listadeusuarios-component', compact('listadousers', 'listadousers_rols'));
    }

    public function cargar_datos($id_p, $name, $email, $usuario){

        $this->id_p = $id_p;
        $this->name = $name;
        $this->email = $email;
        $this->usuario = $usuario;
        
    }

    public function e_perfiles(){

        if($this->validate([
            'name' => 'required',
            'email' => 'required',
            'usuario' => 'required',


        ])==false){
            return back()->withErrors(['advertencia'=>'validar el input vacío']);


            
        }
        else{
            if($this->n_password != null ){
                DB::beginTransaction(); 
                    $usuarios=DB::table('users')
                    ->where('id', $this->id_p)
                     ->update(
                         [
                             'password'=>bcrypt($this->n_password),
                             'name'=>($this->name),
                             'email'=>($this->email),
                             'usuario'=>($this->usuario),
                        ]
                    );
                    if ($usuarios){
                        DB::commit();
                        $this->mensaje5='se cambio de manera correcta';
                    }
                    else {
                        DB::rollback();
                        $this->mensaje6='no se cambio de manera correcta';
                    }
                    DB::commit();
                $this->mensaje10='Se actualizo de manera correcta';
                
                }
                else{
                    DB::beginTransaction();
                    $usuarios=DB::table('users')
                    ->where('id', $this->id_p)
                     ->update(
                         [

                             'name'=>($this->name),
                             'email'=>($this->email),
                             'usuario'=>($this->usuario),
                        ]
                    );
                    if ($usuarios){
                        DB::commit();
                        $this->mensaje5='se cambio de manera correcta';
                    }
                    else {
                        DB::rollback();
                        $this->mensaje6='no se cambio de manera correcta';
                    }
                    DB::rollback();
                $this->mensaje11='Se actualizo de manera correcta';
                }       

        }
    }

    /*public function cambiofotousuario(){

        $archivo_usuarios="";
            if($this->archivo_usuarios!=null){
                if($this->archivo_usuarios->getClientOriginalExtension()=="jpg" or $this->archivo_usuarios->getClientOriginalExtension()=="png" or $this->archivo_usuarios->getClientOriginalExtension()=="jpeg"){
                    $archivo_usuarios = "img".time().".".$this->archivo_usuarios->getClientOriginalExtension();
                    $this->imagen=$archivo_usuarios;
                    $this->archivo_usuarios->storeAS('imagen/perfil/', $this->imagen,'public_up');
                    $this->tp=1;
                }
            }
            DB::beginTransaction();
            $foto=DB::table('users')->update([

                'img_users'=>$this->img

            ]);
    }*/

}
