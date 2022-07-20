<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AnunciosNoAdmin extends Component
{
    public $id_com, $op, $comentarios, $texto_comentario, $op2, $mensaje, $mensaje1;
    public $id_megusta, $valorlike, $idusuario, $idcomparacion, $mensaje3, $mensaje4;
    public $ver_ocultos1, $ocultarc, $ver_oculto, $admin_rol, $id_publicacion, $mensaje5, $mensaje6, $usuario_id;
    public $vistas_totales_id, $rol_activo, $grado_activo_estudiante, $mensaje9, $mensaje10, $usuario_publicacion2;
    public $filtros, $filt, $cero, $filtros_alumnos, $filtros_encargado, $rol_u, $rol_usuario;
    public function render()
    {
        $usuario_activo = auth()->user()->id;
        $this->ver_ocultos1=0;
        $this->ocultarc = 0;
        $this->ver_oculto =1;
        $sql="SELECT * FROM tb_anuncios ORDER BY FECHA_HORA DESC";
        $anuncios=DB::select($sql);
        $sql="SELECT * FROM tb_megusta";
        $me_gusta=DB::select($sql);
        $sql="SELECT * FROM tb_oculto";
        $ocultos=DB::select($sql);
        $sql="SELECT * FROM tb_guardados";
        $guardar=DB::select($sql);
        $sql="SELECT * FROM tb_vistas";
        $vistoss=DB::select($sql);
        $sql="SELECT ID_ROL FROM rol_usuario WHERE ID_USUARIO=$usuario_activo";
        $this->rol_activo=DB::select($sql);
        $sql="SELECT ID_GR FROM tb_asignaciones WHERE ID_DOCENTE=$usuario_activo";
        $this->grado_activo=DB::select($sql);
        $sql="SELECT ID_GR FROM tb_asignaciones_e WHERE id=$usuario_activo";
        $this->grado_activo_estudiante=DB::select($sql);
        $sql="SELECT * FROM users";
        $this->usuario_publicacion=DB::select($sql);
        $sql="SELECT * FROM users";
        $this->usuario_publicacion2=DB::select($sql);
        $sql="SELECT * FROM rol_usuario";
        $this->rol_publicado=DB::select($sql);
        $sql="SELECT ID_ROL FROM rol_usuario WHERE ID_USUARIO=$usuario_activo";
        $this->rol_u=DB::select($sql);

        $sql="SELECT tb_anuncios.ID_ANUNCIOS,tb_anuncios.TEXTO_PUBLICACION, tb_anuncios.MULTIMEDIA, tb_anuncios.FECHA_HORA, tb_anuncios.TIPO_ANUNCIO, tb_anuncios.PUBLICO_ANUNCIO, 
        tb_anuncios.GRADO_ANUNCIO, tb_anuncios.IDIOMA_MAESTRO, tb_anuncios.CALIDAD_ANUNCIO, tb_anuncios.ESTADO_ANUNCIO, tb_anuncios.ID_USUARIO FROM tb_anuncios 
        INNER JOIN rol_usuario on (tb_anuncios.PUBLICO_ANUNCIO=rol_usuario.ID_ROL AND rol_usuario.ID_USUARIO=$usuario_activo) OR (tb_anuncios.TIPO_ANUNCIO=0 AND rol_usuario.ID_USUARIO=$usuario_activo)
        INNER JOIN tb_docentes on tb_docentes.ID_USER=$usuario_activo
        INNER JOIN tb_rel on (tb_anuncios.GRADO_ANUNCIO=tb_rel.ID_GR OR tb_anuncios.GRADO_ANUNCIO=0) AND tb_docentes.ID_DOCENTE=tb_rel.ID_DOCENTE 
        ORDER BY tb_anuncios.FECHA_HORA DESC;";
        $this->filtros=DB::select($sql);
        
        $sql="SELECT tb_anuncios.ID_ANUNCIOS,tb_anuncios.TEXTO_PUBLICACION, tb_anuncios.MULTIMEDIA, tb_anuncios.FECHA_HORA, tb_anuncios.TIPO_ANUNCIO, tb_anuncios.PUBLICO_ANUNCIO, 
        tb_anuncios.GRADO_ANUNCIO, tb_anuncios.IDIOMA_MAESTRO, tb_anuncios.CALIDAD_ANUNCIO, tb_anuncios.ESTADO_ANUNCIO, tb_anuncios.ID_USUARIO FROM tb_anuncios
        INNER JOIN rol_usuario on (tb_anuncios.PUBLICO_ANUNCIO=rol_usuario.ID_ROL AND rol_usuario.ID_USUARIO=$usuario_activo) OR (tb_anuncios.TIPO_ANUNCIO=0 AND rol_usuario.ID_USUARIO=$usuario_activo)
        INNER JOIN tb_alumnos on tb_alumnos.ID_USER=$usuario_activo
        INNER JOIN TB_PRE_INS on (tb_anuncios.GRADO_ANUNCIO=TB_PRE_INS.GRADO_ING_ES OR tb_anuncios.GRADO_ANUNCIO=0) AND tb_alumnos.ID_PRE=TB_PRE_INS.ID_PRE 
        ORDER BY tb_anuncios.FECHA_HORA DESC;";
        $this->filtros_alumnos=DB::select($sql);
        
        $sql="SELECT tb_anuncios.ID_ANUNCIOS,tb_anuncios.TEXTO_PUBLICACION, tb_anuncios.MULTIMEDIA, tb_anuncios.FECHA_HORA, tb_anuncios.TIPO_ANUNCIO, tb_anuncios.PUBLICO_ANUNCIO, 
        tb_anuncios.GRADO_ANUNCIO, tb_anuncios.IDIOMA_MAESTRO, tb_anuncios.CALIDAD_ANUNCIO, tb_anuncios.ESTADO_ANUNCIO, tb_anuncios.ID_USUARIO FROM tb_anuncios
        INNER JOIN rol_usuario on (tb_anuncios.PUBLICO_ANUNCIO=rol_usuario.ID_ROL AND rol_usuario.ID_USUARIO=$usuario_activo) OR (tb_anuncios.TIPO_ANUNCIO=0 AND rol_usuario.ID_USUARIO=$usuario_activo)
        INNER JOIN tb_encargados on tb_encargados.ID_USER=$usuario_activo
        INNER JOIN TB_PRE_INS on (tb_anuncios.GRADO_ANUNCIO=TB_PRE_INS.GRADO_ING_ES OR tb_anuncios.GRADO_ANUNCIO=0) AND tb_encargados.ID_PRE=TB_PRE_INS.ID_PRE 
        ORDER BY tb_anuncios.FECHA_HORA DESC;";
        $this->filtros_encargado=DB::select($sql);

       /*  $sql="SELECT users.img_users, tb_alumnos.ID_USERALUMNO, tb_alumnos.NOMBRE, tb_alumnos.ID_PRE, tb_alumnos.ID_USER, tb_relacion_encargado.ID_RELACION, 
        tb_relacion_encargado.ID_USERALUMNO, tb_relacion_encargado.ID_USERENCARGADO, tb_relacion_encargado.ESTADO  FROM tb_relacion_encargado
		INNER JOIN users on users.id=tb_relacion_encargado.ID_USERALUMNO
             INNER JOIN tb_alumnos on tb_alumnos.ID_USER=tb_relacion_encargado.ID_USERALUMNO WHERE tb_relacion_encargado.ID_USERENCARGADO=$usuario_activo";
        $this->alumnos_asignados=DB::select($sql); */
        
        $sql="SELECT tb_alumnos.ID_USERALUMNO, tb_alumnos.NOMBRE, tb_alumnos.ID_PRE, tb_alumnos.ID_USER, tb_relacion_encargado.ID_RELACION, 
        tb_relacion_encargado.ID_USERALUMNO, tb_relacion_encargado.ID_USERENCARGADO, tb_relacion_encargado.ESTADO, users.img_users FROM tb_relacion_encargado
        INNER JOIN tb_alumnos on tb_alumnos.ID_USER=tb_relacion_encargado.ID_USERALUMNO AND tb_relacion_encargado.ID_USERENCARGADO=?
        INNER JOIN users on tb_alumnos.ID_USER=users.id;";
        $this->alumnos_asignados=DB::select($sql, array(auth()->user()->id));

        $this->cero=0;
        $this->admin_rol = 2;
        $fecha_vista=date("Y-m-d H:i:s");
        $estado_vista=1; 
        $this->usuario_id = auth()->user()->id;
        $this->vistas_totales_id=5;
        
        //en el where id_usuario después del signo igual va el id del usuario logeado en ese momento y en el inserte de id_usuario.

        foreach($this->rol_u as $rol){
            $this->rol_usuario = $rol->ID_ROL;
        }


        foreach($anuncios as $anuncio){
            $sql="SELECT * FROM tb_vistas WHERE ID_USUARIO=$usuario_activo AND ID_ANUNCIO = ".$anuncio->ID_ANUNCIOS;
            $vistos=DB::select($sql);
                if($vistos!=null){
                }
                else{
                    DB::beginTransaction();
                    $vistas=DB::table('tb_vistas')->insert(
                        [
                            'ID_USUARIO'=>auth()->user()->id,
                            'VALOR_VISTA'=>1,
                            'ID_ANUNCIO'=>$anuncio->ID_ANUNCIOS,
                            'FECHA_VISTA'=>$fecha_vista,
                            'ESTADO_VISTA'=>$estado_vista,
                        ]
                    );
                    if($vistas){
                        DB::commit();
                        $this->mensaje3="Insertado correctamente";
                        
            
                    }
                    else{
                        DB::rollback();
                        $this->mensaje4="Insertado correctamente";
                    }
                }
            
            

        }
        return view('livewire.anuncios-no-admin', compact('anuncios', 'me_gusta', 'ocultos', 'guardar', 'vistos', 'vistoss'));
    }
    public function comentario($id){
        $this->id_com = $id;
        
        $sql="SELECT * FROM tb_comentarios WHERE ID_ANUNCIOS=$id ORDER BY FECHA_COMENTARIO DESC";
        $comentarios=DB::select($sql);
        //$this->guardarcomentario();
        session(['comentarios' => $comentarios]);
        //return view('livewire.anuncios-admin', compact('comentarios'));
    }

    public function guardarcomentario(){
        if($this->validate([
            'texto_comentario' => 'required',
        ])==false){
            $advertencia="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['advertencia'=>'validar el input vacío']);

        }
        else{
            $textocomentario = $this->texto_comentario;
        $id_a = $this->id_com;
        $fechacomentario =  date("Y-m-d H:i:s");
        

        DB::beginTransaction();
        $comentario2=DB::table('tb_comentarios')->insert(
            [
                'TEXTO_COMENTARIO'=>$textocomentario,
                'FECHA_COMENTARIO'=>$fechacomentario,
                'ID_ANUNCIOS'=>$id_a,
                'ID_USUARIO'=>auth()->user()->id,
            ]
        );

        if($comentario2){

            DB::commit();
            $sql="SELECT * FROM tb_comentarios WHERE ID_ANUNCIOS=? ORDER BY FECHA_COMENTARIO DESC";
            $comentarios=DB::select($sql, array($id_a));
            session(['comentarios' => $comentarios]);
            //$this->reset();
            //$this->op2=1;
            //$this->op=4;
            $this->mensaje="Insertado correctamente";
        }
        else{
            //$this->reset();
            DB::rollback();
            $this->op2=1;
            $this->op=2;
            $this->mensaje1="No fue insertado correctamente";
        }
        }
        

    }

    public function cancel(){
        session()->forget('comentarios'); 
    }

    
    public function insertar_like($id_like){
        $this->id_megusta=$id_like;
        $this->valorlike+=1;
        $estadolike = 1;
        $fechamegusta = date("Y-m-d H:i:s");
        $this->idusuario = auth()->user()->id;

        DB::beginTransaction();
            $megusta=DB::table('tb_megusta')->insert(
                [
                    'CONTENIDO_LIKE'=>$this->valorlike,
                    'ID_PUBLICACION'=>$this->id_megusta,
                    'ID_USUARIO'=>$this->idusuario,
                    'FECHA_LIKE'=>$fechamegusta,
                    'ESTADO'=>$estadolike,
                ]
            );
            if($megusta){
        
                DB::commit();
                $this->can = 0;
                $this->mensaje3="Insertado correctamente";
                return view('livewire.anuncios-admin');
    
            }
            else{
                DB::rollback();
                $this->mensaje4="Insertado correctamente";
            }
        

    }   

    public function eliminarmegusta(){
        $this->id_megusta=$id_like;
        $this->valorlike+=1;
        $estadolike = 1;
        $fechamegusta = date("Y-m-d H:i:s");
        $this->idusuario = auth()->user()->id;
        $this->idcomparacion = 5;

        $loslikes=DB::table('tb_megusta')

        ->where('ID_USUARIO', $this->idusuario) 
        ->where('ID_PUBLICACION', $this->id_megusta)
        ->delete();

        if($loslikes){
            DB::commit();
            unset($this->mensaje9);
            $this->mensaje9="Insertado correctamente";

        }
         else{
            DB::rollback();
            unset($this->mensaje10);
            $this->mensaje10="Insertado correctamente";
        }

    }

    public function fechamora(){
        $this->mora= date("Y-m-d H:i:s");
        
    }

    public function guardar($id_p){
        $this->id_publicacion = $id_p;
        
        $id_usuario = auth()->user()->id;
        $fecha_guardado = date("Y-m-d H:i:s");
        $estadoguardado = 1;
        
        
        //return view('livewire.anuncios-admin', compact('guardados'));
        DB::beginTransaction();
        $anunciosguardados=DB::table('tb_guardados')->insert(

            [

             'ID_ANUNCIO'=> $this->id_publicacion,
             'ESTADO' => $estadoguardado,
             'ID_USUARIO'=>$id_usuario,
             'FECHA_GUARDADO'=>$fecha_guardado,
             

             

            ]);
        if($anunciosguardados){
            DB::commit();
            $this->mensaje5="Guardado correctamente";
            return redirect ('/guardar');

        }
        else{
            DB::rollback();
            $this->mensaje6="No se guardó correctamente";
        }

        
        
        
    }

    public function ver_estu($id){
        session()->forget('id_alumno_supervisado');
        session(['id_alumno_supervisado' =>$id]);
    }

}
