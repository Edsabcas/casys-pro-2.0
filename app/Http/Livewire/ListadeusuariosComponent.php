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

    public $search;

    public function render()
    {
        if($this->search!=null and $this->search!=""){
            $sql="SELECT * FROM users WHERE email like '%".$this->search."%' or usuario like '%".$this->search."%'";
            $listadousers=DB::select($sql);    
        }
        else{

            $sql='SELECT * FROM users';
            $listadousers=DB::select($sql);
        }

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

    public function cambiofotolist(){

        $archivo_perfil="";
            if($this->archivo_perfil!=null){
                if($this->archivo_perfil->getClientOriginalExtension()=="jpg" or $this->archivo_perfil->getClientOriginalExtension()=="png" or $this->archivo_perfil->getClientOriginalExtension()=="jpeg"){
                    $archivo_perfil = "img".time().".".$this->archivo_perfil->getClientOriginalExtension();
                    $this->img=$archivo_perfil;
                    $this->archivo_perfil->storeAS('imagen/perfil/', $this->img,'public_up');
                    $this->tipo=1;

                    DB::beginTransaction();
                    $foto=DB::table('users')
                    ->where('id',auth()->user()->id)
                    ->update ([
                        
                        'img_users'=>$this->img
                     ]);

                     if($foto){
                        DB::commit();
                        $this->mensaje24="Foto de perfil actualizada";
                    }
                    else{
                        DB::rollback();
                        $this->mensaje25="No se logró actualizar";
                    }
                }
            
            }
            
            
        }

}
