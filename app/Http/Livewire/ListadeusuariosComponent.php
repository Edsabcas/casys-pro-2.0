<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Pagination\Paginator;

class ListadeusuariosComponent extends Component
{
    public $password, $id_p, $name, $email, $usuario, $mensaje5, $mensaje6, $mensaje7, $mensaje10, $mensaje11, $n_name, $fotoss, $n_email, $n_user, $n_password;
    
    use WithFileUploads;

    use WithPagination;

    public $imagen,$tp,$archivo_usuarios;

    public $search;

    public function render()
    {
        if($this->search!=null and $this->search!=""){
            $sql="SELECT rol_usuario.ID_USUARIO, users.name, users.email, users.password, users.usuario, users.img_users, rol.DESCRIPCION 
            FROM rol_usuario inner join users on users.id = rol_usuario.ID_USUARIO inner join rol on rol.ID_ROL = rol_usuario.ID_ROL WHERE email like '%".$this->search."%' or usuario like '%".$this->search."%'";
            $listadousers=DB::select($sql);    
        }
        else{

            $sql='SELECT rol_usuario.ID_USUARIO, users.name, users.email, users.password, users.usuario, users.img_users, rol.DESCRIPCION 
            FROM rol_usuario inner join users on users.id = rol_usuario.ID_USUARIO inner join rol on rol.ID_ROL = rol_usuario.ID_ROL';
            $listadousers=DB::select($sql);
        }

        $this->op=1;
        $this->edit2=1;

        //$listadousers = array_slice($listadousers, 10 * (4 - 1), 10);
        //$listadousers = new Paginator($listadousers, 10, 4);

        return view('livewire.listadeusuarios-component', compact('listadousers'));
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

}
