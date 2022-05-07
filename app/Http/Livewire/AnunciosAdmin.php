<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AnunciosAdmin extends Component
{
    public $id_com, $op, $comentarios, $texto_comentario, $op2, $mensaje, $mensaje1, $anuncios, $id_publicacion;
    public $op3, $id_megusta, $mensaje3, $mensaje4, $valorlike, $idcomparacion, $likes3, $mensaje5, $mensaje6;
    public $idusuario, $mensaje7, $mensaje8, $mensaje9, $mensaje10, $ver_ocultos1, $ocultarc, $admin_rol, $guar, $usuario_id;
    public $vistas_totales_id, $contadorlikes, $cambiolike, $can, $usuario_publicacion, $rol_publicado;
    public function render()
    {
        $this->ver_ocultos1 = 0;
        $this->ocultarc = 1;
        $sql="SELECT * FROM tb_anuncios ORDER BY FECHA_HORA DESC";
        $this->anuncios=DB::select($sql);
        $sql="SELECT SUM(CONTENIDO_LIKE) FROM tb_megusta WHERE ID_PUBLICACION=32";
        $likes=DB::select($sql);
        $sql="SELECT * FROM tb_megusta";
        $me_gusta=DB::select($sql);
        $sql="SELECT * FROM tb_oculto";
        $ocultos=DB::select($sql);
        $sql="SELECT * FROM tb_guardados";
        $guardar=DB::select($sql);
        $sql="SELECT * FROM tb_vistas";
        $vistoss=DB::select($sql);
        $sql="SELECT * FROM users";
        $this->usuario_publicacion=DB::select($sql);
        $sql="SELECT * FROM rol_usuario";
        $this->rol_publicado=DB::select($sql);
       
        $this->vistas_totales_id=5;
        $this->usuario_id = 5;
        $this->admin_rol = 1;
        $fecha_vista=date("Y-m-d H:i:s");
        $estado_vista=1;
        $usuario_activo = auth()->user()->id;
        //en el where id_usuario después del signo igual va el id del usuario logeado en ese momento y en el inserte de id_usuario.

        foreach($this->anuncios as $anuncio){
            $sql="SELECT * FROM tb_vistas WHERE ID_USUARIO=$usuario_activo AND ID_ANUNCIO = ".$anuncio->ID_ANUNCIOS;
            $vistos=DB::select($sql);
                if($vistos!=null){
                }
                else{
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
        return view('livewire.anuncios-admin', compact('likes', 'me_gusta', 'ocultos', 'guardar', 'vistoss'));
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

    public function guardar($id_p){
        $this->id_publicacion = $id_p;
        $this->guar= 1;
        $id_usuario = 5;
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
            return redirect ('/PUBLICACIONES_GUARDADAS');

        }
        else{
            DB::rollback();
            $this->mensaje6="No se guardó correctamente";
        }
    }

    public function eliminarmegusta($id_like){
        $this->id_megusta=$id_like;
        $this->valorlike+=1;
        $estadolike = 1;
        $fechamegusta = date("Y-m-d H:i:s");
        $this->idusuario = auth()->user()->id;
        $this->idcomparacion = 5;
        $this->contadorlikes+=1;
        $this->cambiolike+=1;
        
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
    public function cancel(){
        session()->forget('comentarios'); 
    }

    public function ocultar($oculto){
        $this->id_oculto = $oculto;
        $estado_oculto = 1;
        $id_usuario_com = 2;

        DB::beginTransaction();
        $com_oculto=DB::table('tb_comentarios')

               ->where('ID_COMENTARIOS', $this->id_oculto)

               ->update(

                   [

                    'ESTADO' => $estado_oculto,

                    'FECHA_COMENTARIO_AC' =>date('Y-m-d H:i:s'),

                   ]);

        if($com_oculto){
            DB::commit();
            unset($this->mensaje7);
            $this->mensaje7="Insertado correctamente";

        }
        else{
            DB::rollback();
            unset($this->mensaje8);
            $this->mensaje8="Insertado correctamente";
        }

        
        
        
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

}
