<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AnunciosNoAdmin extends Component
{
    public $id_com, $op, $comentarios, $texto_comentario, $op2, $mensaje, $mensaje1;
    public $id_megusta, $valorlike, $idusuario, $idcomparacion, $mensaje3, $mensaje4;
    public $ver_ocultos1, $ocultarc, $ver_oculto, $admin_rol, $id_publicacion, $mensaje5, $mensaje6, $usuario_id;
    public $vistas_totales_id;
    public function render()
    {
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
        
        $this->admin_rol = 2;
        $fecha_vista=date("Y-m-d H:i:s");
        $estado_vista=1;
        $this->usuario_id = 5;
        $this->vistas_totales_id=5;
        //en el where id_usuario después del signo igual va el id del usuario logeado en ese momento y en el inserte de id_usuario.
        
        foreach($anuncios as $anuncio){
            $sql="SELECT * FROM tb_vistas WHERE ID_USUARIO=9 AND ID_ANUNCIO = ".$anuncio->ID_ANUNCIOS;
            $vistos=DB::select($sql);
                if($vistos!=null){
                }
                else{
                    $vistas=DB::table('tb_vistas')->insert(
                        [
                            'ID_USUARIO'=>9,
                            'VALOR_VISTA'=>1,
                            'ID_ANUNCIO'=>$anuncio->ID_ANUNCIOS,
                            'FECHA_VISTA'=>$fecha_vista,
                            'ESTADO_VISTA'=>$estado_vista,
                        ]
                    );
                    if($vistas){
            
                        $this->mensaje3="Insertado correctamente";
                        
            
                    }
                    else{
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
        $textocomentario = $this->texto_comentario;
        $fechacomentario =  date("Y-m-d H:i:s");

        $comentario2=DB::table('tb_comentarios')->insert(
            [
                'TEXTO_COMENTARIO'=>$textocomentario,
                'FECHA_COMENTARIO'=>$fechacomentario,
                'ID_ANUNCIOS'=>$this->id_com,
            ]
        );

        if($comentario2){

            $id_a = $this->id_com;
            $sql="SELECT * FROM tb_comentarios WHERE ID_ANUNCIOS= $id_a ORDER BY FECHA_COMENTARIO DESC";
            $comentarios=DB::select($sql);
            session(['comentarios' => $comentarios]);
            //$this->reset();
            //$this->op2=1;
            //$this->op=4;
            $this->mensaje="Insertado correctamente";
        }
        else{
            //$this->reset();
            $this->op2=1;
            $this->op=2;
            $this->mensaje1="No fue insertado correctamente";
        }

    }

    public function cancel(){
        session()->forget('comentarios'); 
    }

    public function megusta($id_like){
        $this->id_megusta=$id_like;
        $this->valorlike+=1;
        $estadolike = 1;
        $fechamegusta = date("Y-m-d H:i:s");
        $this->idusuario = 5;
        $this->idcomparacion = 5;

        if($this->valorlike==1){
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
            
                $this->mensaje3="Insertado correctamente";
                return view('livewire.anuncios-admin');
    
            }
            else{
                $this->mensaje4="Insertado correctamente";
            }
        }
        elseif($this->valorlike==2){
            $this->valorlike=0;
            $loslikes=DB::table('tb_megusta')

               ->where('ID_USUARIO', $this->idusuario) 
               ->where('ID_PUBLICACION', $this->id_megusta)

               ->update(

                   [

                    'CONTENIDO_LIKE' => $this->valorlike,

                    'FECHA_LIKE' =>date('Y-m-d H:i:s'),

                   ]);
        }
        else{

        } 
    }

    public function fechamora(){
        $this->mora= date("Y-m-d H:i:s");
        
    }

    public function guardar($id_p){
        $this->id_publicacion = $id_p;
        
        $id_usuario = 5;
        $fecha_guardado = date("Y-m-d H:i:s");
        $estadoguardado = 1;
        
        
        //return view('livewire.anuncios-admin', compact('guardados'));

        $anunciosguardados=DB::table('tb_guardados')->insert(

            [

             'ID_ANUNCIO'=> $this->id_publicacion,
             'ESTADO' => $estadoguardado,
             'ID_USUARIO'=>$id_usuario,
             'FECHA_GUARDADO'=>$fecha_guardado,
             

             

            ]);
        if($anunciosguardados){
            $this->mensaje5="Guardado correctamente";
            return redirect ('/guardar');

        }
        else{
            $this->mensaje6="No se guardó correctamente";
        }

        
        
        
    }

    public function vistas(){
        

    }

}
