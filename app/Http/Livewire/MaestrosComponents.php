<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class MaestrosComponents extends Component{

    public $maestro;

    public $nombre_docente,$apellido_docente,$dpi,$telefono,$correo,$corre,$estado_civil,$estado,$id_docente,$direccion,$fecha_nacimiento;

    public $mensaje1,$mensaje2,$mensaje3,$mensaje4,$mensajeeliminar,$mensajeeliminar1;

    public $ape_casada,$extendido,$iggs,$edad,$nit,$telcasa,$emergencia,$tel1,$tel2,$titulonvl,$cedula,$claseescalonaria,$fecha_ascenso,$no_registro,$universidad,$ceduladocente,$claseescalonaria2,$fecha_ascenso2,$regisescalafon,$otros_estudios,$estudiante,$cursos_aprovados,$graduado;

    public $op,$edit,$edit1;

    public $usuario,$correoed,$pass,$id_usuario,$id_usucorreo,$nomb,$apelli,$id_u,$search;
    
    public function render(){

        
            $sql="SELECT * FROM tb_docentes WHERE nombre_docente like '%".$this->search."%' or apellido_docente like '%".$this->search."%'";
            $maestros=DB::select($sql);    
        

        return view('livewire.maestros-components', compact('maestros'));
    }

    public function guardar_docentes(){

        $sql='SELECT * FROM users WHERE usuario=?';
        $maes=DB::select($sql,array($this->usuario));

        if($maes !=null){

            $inicial=substr($this->nombre_docente,0,1);
            $iniciales=explode(" ", $this->nombre_docente);
            $inicial2=substr($iniciales[1],0,1);
            $apellidos=explode(" ", $this->apellido_docente);
            $apellido=$apellidos[0];
            $apellido2=substr($apellidos[1],0,1);
            

            $this->usuario=$this->usuario.$inicial2;

            $this->correoed=$inicial.$inicial2.$apellido.$apellido2.$inicial2.'@colegioelcastano.edu.gt';
            $this->usuario = strtolower($this->usuario);
            $this->correoed = strtolower($this->correoed);
        }


        if($this->validate([
            /* FORMULARIO 1 */
            'nombre_docente' => 'required',
            'apellido_docente' => 'required',
            'ape_casada' => 'required',  
            'dpi' => 'required',
            'extendido' => 'required', 
            'iggs' => 'required', 
            'fecha_nacimiento' => 'required',
            'edad' => 'required', 
            'estado_civil' => 'required',
            'nit' => 'required', 
            'direccion' => 'required',
            'telefono' => 'required',
            'telcasa' => 'required', 
            'emergencia' => 'required', 
            'tel1' => 'required', 
            'tel2' => 'required', 
            'correo' => 'required',
            'estado' => 'required',

            /* FORMLUARIO 2 */

            'titulonvl' => 'required',
            'cedula' => 'required',
            'claseescalonaria' => 'required',
            'fecha_ascenso' => 'required',
            'no_registro' => 'required',

            /* FORMULARIO 3 */

            'universidad' => 'required',
            'ceduladocente' => 'required',
            'claseescalonaria2' => 'required',
            'fecha_ascenso2' => 'required',
            'regisescalafon' => 'required',

            /* FORMLUARIO 4 */

            'otros_estudios' => 'required',
            'estudiante' => 'required',
            'cursos_aprovados' => 'required',
            'graduado' => 'required',

        ])==false){
            $mensaje="no encontrado";
            session(['message' => 'no encontrado']);
            return back()->withErrors(['mensaje' =>'Validar el input vacio']);
        }
        else{

            /* FORMULARIO 1 */

        $num_docente=$this->nombre_docente;
        $ape_docente=$this->apellido_docente;
        $ape_casada=$this->ape_casada;
        $dpi=$this->dpi;
        $extendido=$this->extendido;
        $iggs=$this->iggs;
        $fecha_nacimiento=$this->fecha_nacimiento;
        $edad=$this->edad;
        $estado_c=$this->estado_civil;
        $nit=$this->nit;
        $direccion=$this->direccion;
        $tel=$this->telefono;
        $telcasa=$this->telcasa;
        $emergencia=$this->emergencia;
        $tel1=$this->tel1;
        $tel2=$this->tel2;
        $corre=$this->correo;
        $estado=$this->estado;

        /* FORMULARIO 2 */

        $titulonvl=$this->titulonvl;
        $cedula=$this->cedula;
        $claseescalonaria=$this->claseescalonaria;
        $fecha_ascenso=$this->fecha_ascenso;
        $no_registro=$this->no_registro;

        /* FORMULARIO 3 */

        $universidad=$this->universidad;
        $ceduladocente=$this->ceduladocente;
        $claseescalonaria2=$this->claseescalonaria2;
        $fecha_ascenso2=$this->fecha_ascenso2;
        $regisescalafon=$this->regisescalafon;

        /* FORMULARIO 4 */

        $otros_estudios=$this->otros_estudios;
        $estudiante=$this->estudiante;
        $cursos_aprovados=$this->cursos_aprovados;
        $graduado=$this->graduado;

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
                /* FORMULARIO 1 */
                
                'NOMBRE_DOCENTE'=>$num_docente,
                'APELLIDO_DOCENTE'=>$ape_docente,
                'APELLIDO_CASADA'=>$ape_casada,
                'DPI'=>$dpi,
                'EXTENDIDO_EN'=>$extendido,
                'NO_IGGS'=>$iggs,
                'FECHA_NACIMIENTO'=>$fecha_nacimiento,
                'EDAD'=>$edad,
                'ESTADO_CIVIL'=>$estado_c,
                'NIT'=>$nit,
                'DIRECCION'=>$direccion,
                'TELEFONO'=>$tel,
                'TELEFONO_CASA'=>$telcasa,
                'EMERGENCIA'=>$emergencia,
                'TELEFONO1'=>$tel1,
                'TELEFONO2'=>$tel2,
                'CORREO'=>$corre,
                'ESTADO'=>$estado,
                'ID_USER'=>$id,

                /* FORMULARIO 2 */

                'TITULO_NIVEL_MEDIO'=>$titulonvl,
                'NO_CEDULA'=>$cedula,
                'CLASE_ESCALONARIA'=>$claseescalonaria,
                'FECHA_ASCENSO'=>$fecha_ascenso,
                'NO_REGISTRO_ESCALAFON'=>$no_registro,

                /* FORMULARIO 3 */

                'TITULO_UNIVERSIDAD'=>$universidad,
                'NO_CEDULA2'=>$ceduladocente,
                'CLASE_ESCALONARIA2'=>$claseescalonaria2,
                'FECHA_ASCENSO2'=>$fecha_ascenso2,
                'NO_REGISTRO_ESCALAFON2'=>$regisescalafon,

                /* FORMULARIO 4 */

                'OTROS_ESTUDIOS'=>$otros_estudios,
                'ESTUDIANTE'=>$estudiante,
                'CURSOS_APROBADOS'=>$cursos_aprovados,
                'GRADUADO'=>$graduado,

            ]);
/* 
            if($usuario && $maestro){

                DB::commit();   
                $subject = "No responder (Notificación Pre-Ins.Castaño)";
                $for = $this->corre;
                $arreglo= array($this->usuario,$this->correoed,$this->pass);
                Mail::send('Maestros.vistacorreo',compact('arreglo'), function($msj) use($subject,$for){
                    $msj->from("ingresos@colegioelcastano.edu.gt","ColegioElCastaño");
                    $msj->subject($subject);
                    $msj->to($for);
                  //  $msj->attach('images/a.jpg');
                   
                });
    
                $this->reset();
    
                $this->mensaje=1;
                
            }
            else{
                //$this->reset();
                DB::rollback();
                $this->mensaje=2;
            } */

            $id_rol=3;

            $rolusuario=DB::table('rol_usuario')->insert(
                [
                    'ID_ROL'=>$id_rol,
                    'ID_USUARIO'=>$id,  
                ]);

            if($usuario && $maestro && $rolusuario){
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
    

    public function listar_docentes(){
        $sql="SELECT * FROM tb_docentes";
        $maestros=DB::select($sql);
        $op=4;
        return view('home', compact('maestros', 'op'));
    }

    public function edit($id){
        $id_usu=$id;
        $sql='SELECT * FROM users WHERE id=?';
        $correousu=DB::select($sql,array($id_usu));

        $this->id_usucorreo=0;
        foreach($correousu as $corre){

            $this->id_usucorreo=$corre->id;
        }

        $ID_USER=$this->id_usucorreo;
        $sql='SELECT * FROM users WHERE id=?';
        $correousu=DB::select($sql,array($ID_USER));

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

                /* FORMULARIO 1 */

                $this->id_docente=$mae->ID_DOCENTE;
                $this->nombre_docente=$mae->NOMBRE_DOCENTE;
                $this->apellido_docente=$mae->APELLIDO_DOCENTE;
                $this->ape_casada=$mae->APELLIDO_CASADA;
                $this->dpi=$mae->DPI;
                $this->extendido=$mae->EXTENDIDO_EN;
                $this->iggs=$mae->NO_IGGS;
                $this->fecha_nacimiento=$mae->FECHA_NACIMIENTO;
                $this->edad=$mae->EDAD;
                $this->estado_civil=$mae->ESTADO_CIVIL;
                $this->nit=$mae->NIT;
                $this->direccion=$mae->DIRECCION;
                $this->telefono=$mae->TELEFONO;
                $this->telcasa=$mae->TELEFONO_CASA;
                $this->emergencia=$mae->EMERGENCIA;
                $this->tel1=$mae->TELEFONO1;
                $this->tel2=$mae->TELEFONO2;
                $this->correo=$mae->CORREO;       
                $this->estado=$mae->ESTADO;

                /* FORMULARIO 2 */

                $this->titulonvl=$mae->TITULO_NIVEL_MEDIO;
                $this->cedula=$mae->NO_CEDULA;
                $this->claseescalonaria=$mae->CLASE_ESCALONARIA;
                $this->fecha_ascenso=$mae->FECHA_ASCENSO;
                $this->no_registro=$mae->NO_REGISTRO_ESCALAFON;

                /* FORMULARIO 3 */

                $this->universidad=$mae->TITULO_UNIVERSIDAD;
                $this->ceduladocente=$mae->NO_CEDULA2;
                $this->claseescalonaria2=$mae->CLASE_ESCALONARIA2;
                $this->fecha_ascenso2=$mae->FECHA_ASCENSO2;
                $this->regisescalafon=$mae->NO_REGISTRO_ESCALAFON2;

                /* FORMULARIO 4 */

                $this->otros_estudios=$mae->OTROS_ESTUDIOS;
                $this->estudiante=$mae->ESTUDIANTE;
                $this->cursos_aprovados=$mae->CURSOS_APROBADOS;
                $this->graduado=$mae->GRADUADO;
            }
        }
        $this->op=4;
        $this->edit=1;
    }

    public function update_docentes(){

        /* FORMULARIO 1 */

        $num_docente=$this->nombre_docente;
        $ape_docente=$this->apellido_docente;
        $ape_casada=$this->ape_casada;
        $dpi=$this->dpi;
        $extendido=$this->extendido;
        $iggs=$this->iggs;
        $fecha_nacimiento=$this->fecha_nacimiento;
        $edad=$this->edad;
        $estado_c=$this->estado_civil;
        $nit=$this->nit;
        $direccion=$this->direccion;
        $tel=$this->telefono;
        $telcasa=$this->telcasa;
        $emergencia=$this->emergencia;
        $tel1=$this->tel1;
        $tel2=$this->tel2;
        $corre=$this->correo;
        $estado=$this->estado;

        /* FORMULARIO 2 */

        $titulonvl=$this->titulonvl;
        $cedula=$this->cedula;
        $claseescalonaria=$this->claseescalonaria;
        $fecha_ascenso=$this->fecha_ascenso;
        $no_registro=$this->no_registro;

        /* FORMULARIO 3 */

        $universidad=$this->universidad;
        $ceduladocente=$this->ceduladocente;
        $claseescalonaria2=$this->claseescalonaria2;
        $fecha_ascenso2=$this->fecha_ascenso2;
        $regisescalafon=$this->regisescalafon;

        /* FORMULARIO 4 */

        $otros_estudios=$this->otros_estudios;
        $estudiante=$this->estudiante;
        $cursos_aprovados=$this->cursos_aprovados;
        $graduado=$this->graduado;

        DB::beginTransaction();
        
        $mae=DB::table('tb_docentes')
        ->where('ID_DOCENTE',$id_docente)
        ->update(
            [
                /* FORMULARIO 1 */
                'NOMBRE_DOCENTE'=>$num_docente,
                'APELLIDO_DOCENTE'=>$ape_docente,
                'APELLIDO_CASADA'=>$ape_casada,
                'DPI'=>$dpi,
                'EXTENDIDO_EN'=>$extendido,
                'NO_IGGS'=>$iggs,
                'FECHA_NACIMIENTO'=>$fecha_nacimiento,
                'EDAD'=>$edad,
                'ESTADO_CIVIL'=>$estado_c,
                'NIT'=>$nit,
                'DIRECCION'=>$direccion,
                'TELEFONO'=>$tel,
                'TELEFONO_CASA'=>$telcasa,
                'EMERGENCIA'=>$emergencia,
                'TELEFONO1'=>$tel1,
                'TELEFONO2'=>$tel2,
                'CORREO'=>$corre,
                'ESTADO'=>$estado,
                'ID_USER'=>$id,

                /* FORMULARIO 2 */

                'TITULO_NIVEL_MEDIO'=>$titulonvl,
                'NO_CEDULA'=>$cedula,
                'CLASE_ESCALONARIA'=>$claseescalonaria,
                'FECHA_ASCENSO'=>$fecha_ascenso,
                'NO_REGISTRO_ESCALAFON'=>$no_registro,

                /* FORMULARIO 3 */

                'TITULO_UNIVERSIDAD'=>$universidad,
                'NO_CEDULA2'=>$ceduladocente,
                'CLASE_ESCALONARIA2'=>$claseescalonaria2,
                'FECHA_ASCENSO2'=>$fecha_ascenso2,
                'NO_REGISTRO_ESCALAFON2'=>$regisescalafon,

                /* FORMULARIO 4 */

                'OTROS_ESTUDIOS'=>$otros_estudios,
                'ESTUDIANTE'=>$estudiante,
                'CURSOS_APROBADOS'=>$cursos_aprovados,
                'GRADUADO'=>$graduado,
            ]
        );
        if($mae){
            DB::commit();
            $this->reset();
            $this->mensaje3='Editado Correctamente';
        }
        else{
            DB::rollback();
            unset($this->mensaje3);
            $this->mensaje4='No fue posible editar correctamente';
        }
    
    }   
    public function delete($id){
        $id_docente=$id;

        DB::beginTransaction();

        $mae=DB::table('tb_docentes')->where('ID_DOCENTE','=', $id_docente)->delete();

        if ($mae){
            DB::commit();
            $this->reset();
            unset($this->mensajeeliminar);
            $this->mensajeeliminar='Eliminado correctamente';
        }
        else{
            DB::rollback();
            unset($this->mensajeeliminar1);
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
 