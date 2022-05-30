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
    public $password, $id_p, $name, $email, $usuario, $mensaje5, $mensaje6, $mensaje7, $mensaje10, $mensaje11, $n_name, $fotoss, $n_email, $n_user, $n_password, $mensaje24, $mensaje25;
    
    use WithFileUploads;

    use WithPagination;

    public $imagen,$tp,$archivo_usuarios;

    public $search;

    public $img,$tipo,$archivo_perfil,$edit;

    public $apelli,$nombre,$pass,$correoed,$usuario1,$rol,$op;

    public function render()
    {
        if($this->archivo_perfil!=null){
            if($this->archivo_perfil->getClientOriginalExtension()=="jpg" or $this->archivo_perfil->getClientOriginalExtension()=="png" or $this->archivo_perfil->getClientOriginalExtension()=="jpeg"){
                $this->tipo=1;
            }
        }

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

        $sql="SELECT * FROM rol Where ID_ROL IN (2,6,7,8)";
        $rols=DB::select($sql);

        $this->op=1;
        $this->edit=1;

        //$listadousers = array_slice($listadousers, 10 * (4 - 1), 10);
        //$listadousers = new Paginator($listadousers, 10, 4);

        return view('livewire.listadeusuarios-component', compact('listadousers','rols'));
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
                        $this->reset();
                        $this->mensaje5='se cambio de manera correcta';
                    }
                    else {
                        DB::rollback();
                        unset($this->mensaje5);
                        $this->mensaje6='no se cambio de manera correcta';
                    }
                    DB::commit();
                    unset($this->mensaje6);
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
                        $this->reset();
                        $this->mensaje5='se cambio de manera correcta';
                    }
                    else {
                        DB::rollback();
                        unset($this->mensaje5);
                        $this->mensaje6='no se cambio de manera correcta';
                    }
                    DB::rollback();
                    unset($this->mensaje6);
                    $this->mensaje11='Se actualizo de manera correcta';
                }       

        }
    }

    public function cambiofotolist($id){

        $archivo_perfil="";
            if($this->archivo_perfil!=null){
                if($this->archivo_perfil->getClientOriginalExtension()=="jpg" or $this->archivo_perfil->getClientOriginalExtension()=="png" or $this->archivo_perfil->getClientOriginalExtension()=="jpeg"){
                    $archivo_perfil = "img".time().".".$this->archivo_perfil->getClientOriginalExtension();
                    $this->img=$archivo_perfil;
                    $this->archivo_perfil->storeAS('imagen/perfil/', $this->img,'public_up');
                    $this->tipo=1;

                    DB::beginTransaction();
                    $listadousers2=DB::table('users')
                    ->where('id',$id)
                    ->update ([ 
                        
                        'img_users'=>$this->img
                     ]);

                     if($listadousers2){
                        DB::commit();
                        $this->reset();
                        $this->mensaje24="Foto de perfil actualizada";
                    }
                    else{
                        DB::rollback();
                        unset($this->mensaje24);
                        $this->mensaje25="No se logró actualizar";
                    }
                }
            
            }
            
            
        }
        public function delete($id){
            $id=$id;
    
            DB::beginTransaction();
    
            $lista=DB::table('users')->where('id','=', $id)->delete();
    
            if ($lista){
                DB::commit();
                $this->reset();
                $this->mensajeeliminar='Eliminado correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensajeeliminar);
                $this->mensajeeliminar1='No fue posible eliminar correctamente';
            }
        }  

        public function guardar_trigliceridos(){

            $sql='SELECT * FROM users WHERE usuario=?';
            $maes=DB::select($sql,array($this->usuario));
    
            if($maes !=null){
    
                $inicial=substr($this->nombre,0,1);
                $iniciales=explode(" ", $this->nombre);
                $inicial2=substr($iniciales[1],0,1);
                $apellidos=explode(" ", $this->apelli);
                $apellido=$apellidos[0];
                $apellido2=substr($apellidos[1],0,1);
                
    
                $this->usuario1=$this->usuario1.$inicial2;
    
                $this->correoed=$inicial.$inicial2.$apellido.$apellido2.$inicial2.'@colegioelcastano.edu.gt';
                $this->usuario1 = strtolower($this->usuario1);
                $this->correoed = strtolower($this->correoed);
            }
    
    
            if($this->validate([
                'nombre' => 'required',
                'apelli' => 'required',
                'rol' => 'required',

            ])==false){
                $mensaje="no encontrado";
                session(['message' => 'no encontrado']);
                return back()->withErrors(['mensaje' =>'Validar el input vacio']);
            }
            else{
            $nombre=$this->nombre;
            $apelli=$this->apelli;
            $rol=$this->rol;
    
            $usuario1=$this->usuario1;
            $correoed=$this->correoed;
            $pass=bcrypt($this->pass);
    
    
            $id=0;
    
    
            $sql='SELECT MAX(id+1) AS id FROM users;';
            $valor=DB::select($sql);
    
            foreach($valor as $val){
    
                $id=$val->id;
            }  
    
            DB::beginTransaction();
    
    
            $usuario=DB::table('users')->insert(
                [
                    'id'=>$id,
                    'name'=>$usuario1,
                    'email'=>$correoed,  
                    'usuario'=>$usuario1,
                    'password'=>$pass,  
                ]);
    
                $id_rol=$this->rol;
    
                $rolusuario=DB::table('rol_usuario')->insert(
                    [
                        'ID_ROL'=>$id_rol,
                        'ID_USUARIO'=>$id,  
                    ]);
    
                if($usuario && $rolusuario){
                    DB::commit();
                    $this->reset();
                    $this->mensaje1='Insertado correctamente';
                }
                else{
                    DB::rollback();
                    unset($this->mensaje1);
                    $this->mensaje2='No fue posible insertar correctamente';
                }
            }
    
        }


        public function generar_use(){

        
            $this->nomb=$this->nombre;
            $this->apelli=$this->apelli;
    
            $primerNombre = explode(" ",$this->nomb);
            $primerApellido = explode(" ", $this->apelli);
    
            $this->usuario1 = substr($primerNombre[0],0,10) . '.' . $primerApellido[0];
    
            $this->usuario1 = strtolower($this->usuario1);
    
            $inicial=substr($this->nombre,0,1);
            $iniciales=explode(" ", $this->nombre);
            $inicial2=substr($iniciales[1],0,1);
            $apellidos=explode(" ", $this->apelli);
            $apellido=$apellidos[0];
            $apellido2=substr($apellidos[1],0,1);
            
            $this->correoed=$inicial.$inicial2.$apellido.$apellido2.'@colegioelcastano.edu.gt';
            $this->correoed=strtolower($this->correoed);
            $this->pass='Cole123';
            
        }

}
