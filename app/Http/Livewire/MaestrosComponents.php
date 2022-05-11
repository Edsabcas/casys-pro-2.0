<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class MaestrosComponents extends Component{

    public $maestro;

    public $nombre_docente,$apellido_docente,$dpi,$telefono,$correo,$estado_civil,$estado,$id_docente,$direccion;

    public $mensaje1,$mensaje2,$mensaje3,$mensaje4,$mensajeeliminar,$mensajeeliminar1;

    public $op,$edit,$edit1;

    public $usuario,$correoed,$pass,$id_usuario,$id_usucorreo,$nomb,$apelli;
    
    public function render(){
        $sql="SELECT * FROM tb_docentes";
        $maestros=DB::select($sql);
        return view('livewire.maestros-components', compact('maestros'));
    }

    public function guardar_docentes(){
        if($this->validate([
            'nombre_docente' => 'required',
            'apellido_docente' => 'required',
            'dpi' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'estado_civil' => 'required',
            'direccion' => 'required',
            'estado' => 'required',
        ])==false){
            $mensaje="no encontrado";
            session(['message' => 'no encontrado']);
            return back()->withErrors(['mensaje' =>'Validar el input vacio']);
        }
        else{
        $num_docente=$this->nombre_docente;
        $ape_docente=$this->apellido_docente;
        $dpi=$this->dpi;
        $tel=$this->telefono;
        $corre=$this->correo;
        $estado_c=$this->estado_civil;
        $direccion=$this->direccion;
        $estado=$this->estado;

        $usuario=$this->usuario;
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
                'name'=>$usuario,
                'email'=>$correoed,  
                'usuario'=>$usuario,
                'password'=>$pass,  
            ]);

        $maestro=DB::table('tb_docentes')->insert(
            [
                'NOMBRE_DOCENTE'=>$num_docente,
                'APELLIDO_DOCENTE'=>$ape_docente,
                'DPI'=>$dpi,
                'TELEFONO'=>$tel,
                'CORREO'=>$corre,
                'ESTADO_CIVIL'=>$estado_c,
                'DIRECCION'=>$direccion,
                'ESTADO'=>$estado,
                'ID_USER'=>$id,
            ]);


            $id_rol=3;

            $rolusuario=DB::table('rol_usuario')->insert(
                [
                    'ID_ROL'=>$id_rol,
                    'ID_USUARIO'=>$id,  
                ]);

            if($usuario && $maestro && $rolusuario){
                DB::commit();
                $this->reset();
                unset($this->mensaje1);
                $op=4;
                $this->mensaje1='Insertado correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensaje2);
                $op=4;
                $this->mensaje2='No fue posible insertar correctamente';
            }
        }

    }

    public function listar_docentes(){
        $sql="SELECT * FROM tb_docentes";
        $maestros=DB::select($sql);
        $op=4;
        return view('home', compact('maestros', 'op'));
    }

    public function edit($id){
        $id_usu=$id;
        $sql='SELECT * FROM tb_user_maestros WHERE ID_DOCENTE=?';
        $correousu=DB::select($sql,array($id_usu));

        $this->id_usucorreo=0;
        foreach($correousu as $corre){

            $this->id_usucorreo=$corre->ID_USUARIO;
        }

        $ID_USER=$ID_USER;
        $sql='SELECT * FROM users WHERE id=?';
        $correousu=DB::select($sql,array($this->id_usucorreo));

        $this->id_usucorreo=0;
        foreach($correousu as $corre){

            $this->usuario=$corre->usuario;
            $this->correoed=$corre->email;
            $this->pass=$corre->password;

        }


        $id_docente=$ID_USER;
        $sql='SELECT * FROM tb_docentes WHERE ID_DOCENTE=?';
        $maestro=DB::select($sql,array($id_docente));
        if($maestro !=null){
            foreach($maestro as $mae)
            {
                $this->id_docente=$mae->ID_DOCENTE;
                $this->nombre_docente=$mae->NOMBRE_DOCENTE;
                $this->apellido_docente=$mae->APELLIDO_DOCENTE;
                $this->dpi=$mae->DPI;
                $this->telefono=$mae->TELEFONO;
                $this->correo=$mae->CORREO;
                $this->estado_civil=$mae->ESTADO_CIVIL;
                $this->direccion=$mae->DIRECCION;
                $this->estado=$mae->ESTADO;
            }
        }
        $this->op=4;
        $this->edit=1;
    }

    public function update_docentes(){
        $id_docente=$this->id_docente;
        $nomb_docente=$this->nombre_docente;
        $apelli_docente=$this->apellido_docente;
        $dp=$this->dpi;
        $tl=$this->telefono;
        $corr=$this->correo;
        $estado_ci=$this->estado_civil;
        $direccion=$this->direccion;
        $estado=$this->estado;

        DB::beginTransaction();
        
        $mae=DB::table('tb_docentes')
        ->where('ID_DOCENTE',$id_docente)
        ->update(
            [
                'NOMBRE_DOCENTE'=>$nomb_docente,
                'APELLIDO_DOCENTE'=>$apelli_docente,
                'DPI'=>$dp,
                'TELEFONO'=>$tl,
                'CORREO'=>$corr,
                'ESTADO_CIVIL'=>$estado_ci,
                'DIRECCION'=>$direccion,
                'ESTADO'=>$estado,
            ]
        );


        
        if($mae){
            DB::commit();
            $this->op=4;
            $this->mensaje3='Editado Correctamente';
        }
        else{
            DB::rollback();
            $this->op=4;
            $this->mensaje4='No fue posible editar correctamente';
        }
    
    }   
    public function delete($id){
        $id_docente=$id;

        DB::beginTransaction();

        $mae=DB::table('tb_docentes')->where('ID_DOCENTE','=', $id_docente)->delete();

        if ($mae){
            DB::commit();
            $this->op=4;
            $this->mensajeeliminar='Eliminado correctamente';
        }
        else{
            DB::rollback();
            $this->op=4;
            $this->mensajeeliminar1='No fue posible eliminar correctamente';
        }
    }  
    public function generar_use(){

        
        $this->nomb=$this->nombre_docente;
        $this->apelli=$this->apellido_docente;

        $primerNombre = explode(" ",$this->nomb);
        $primerApellido = explode(" ", $this->apelli);

        $this->usuario = substr($primerNombre[0],0,10) . '.' . $primerApellido[0];

        $this->usuario = strtolower($this->usuario);

        $inicial=substr($this->nombre_docente,0,1);
        $iniciales=explode(" ", $this->nombre_docente);
        $inicial2=substr($iniciales[1],0,1);
        $apellidos=explode(" ", $this->apellido_docente);
        $apellido=$apellidos[0];
        $apellido2=substr($apellidos[1],0,1);
        
        $this->correoed=$inicial.$inicial2.$apellido.$apellido2.'@colegioelcastano.edu.gt';
        $this->correoed=strtolower($this->correoed);
        $this->pass='Cole123';
        
    }
    public function listar_usuario(){
        $sql="SELECT * FROM users";
        $usuarios=DB::select($sql);
        $op=4;  
        return view('home', compact('usuarios', 'op'));
        
    }
    public function editar($id){
        $id_usuario=$id; 
        $sql='SELECT * FROM tb_usuarios WHERE ID_USUARIO=?';
        $usuarios=DB::select($sql,array($id_usuario));
        if($usuarios !=null){
            foreach($usuarios as $usuario)
            {
                $this->id_usuario=$usuario->ID_USUARIO;
                $this->pass=$usuario->CONTRASEÑA;
            }
        }
        $this->op=4;
        $this->edit1=1;
    }
    public function update_usuarios(){
        $id_usucorreo=$this->id_usucorreo;   
        $pass=$this->pass;
        
        DB::beginTransaction();

        $act=DB::table('tb_usuarios')
        ->where('ID_USUARIO',$this->id_usucorreo)
        ->update(
            [
                'CONTRASEÑA'=>$pass,    
            ]
        );
        
        if($act){
            DB::commit();
            $this->op=4;
            $this->mensaje3='Editado Correctamente';
        }
        else{ 
            DB::rollback();
            $this->op=4;
            $this->mensaje4='No fue posible editar correctamente';
        }
    }  
}
 