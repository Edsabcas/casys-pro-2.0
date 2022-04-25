<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class VistaPruebaComponent extends Component
{
    public $id_com, $op, $comentarios, $texto_comentario, $op2, $mensaje, $mensaje1, $anuncios, $id_publicacion;
    public $op3, $id_megusta, $mensaje3, $mensaje4, $valorlike, $idcomparacion, $likes3, $mensaje5, $mensaje6;
    public $guar, $idusuario, $receptor_anuncio, $receptor_grado, $tipoanuncio, $idiomademaestro, $idiomademaestro1;
    public $admin_rol, $ocultarc;
    public function render()
    {
        $sql="SELECT * FROM TB_ANUNCIOS ORDER BY FECHA_HORA DESC";
        $this->anuncios=DB::select($sql);
        $sql="SELECT SUM(CONTENIDO_LIKE) FROM TB_MEGUSTA WHERE ID_PUBLICACION=32";
        $likes=DB::select($sql);
        $sql="SELECT * FROM TB_MEGUSTA";
        $me_gusta=DB::select($sql);

        $this->receptor_anuncio = 2;
        $this->receptor_grado = 14;
        $this->tipoanuncio= null;
        $this->idiomademaestro = 1;
        $this->idiomademaestro1 = 2;
        $this->admin_rol = 1;
        $this->ocultarc = 0;

        return view('livewire.vista-prueba-component', compact('likes', 'me_gusta'));
    }

    public function comentario($id){
        $this->id_com = $id;
        
        $sql="SELECT * FROM TB_COMENTARIOS WHERE ID_ANUNCIOS=$id ORDER BY FECHA_COMENTARIO DESC";
        $comentarios=DB::select($sql);
        $this->guardarcomentario();
        session(['comentarios' => $comentarios]);
        //return view('livewire.anuncios-admin', compact('comentarios'));
    }

    public function guardarcomentario(){
        $textocomentario = $this->texto_comentario;
        $id_a = $this->id_com;
        $fechacomentario =  date("Y-m-d H:i:s");
        

        $comentario2=DB::table('TB_COMENTARIOS')->insert(
            [
                'TEXTO_COMENTARIO'=>$textocomentario,
                'FECHA_COMENTARIO'=>$fechacomentario,
                'ID_ANUNCIOS'=>$id_a,
            ]
        );

        if($comentario2){

           
            $sql="SELECT * FROM TB_COMENTARIOS WHERE ID_ANUNCIOS=? ORDER BY FECHA_COMENTARIO DESC";
            $comentarios=DB::select($sql, array($id_a));
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

    public function guardar($id_p){
        $this->id_publicacion = $id_p;
        $this->guar= 1;
        $id_usuario = 5;
        $fecha_guardado = date("Y-m-d H:i:s");
        $estadoguardado = 1;
        $sql="SELECT * FROM TB_ANUNCIOS WHERE ID_ANUNCIOS=$id_p ORDER BY FECHA_HORA DESC";
        $guardados=DB::select($sql);
        return view('livewire.vista-prueba-component', compact('guardados'));

        $anunciosguardados=DB::table('TB_GUARDADOS')->insert([
            'ID_ANUNCIO'=>$this->id_publicacion,
            'ID_USUARIO'=>$id_usuario,
            'FECHA_GUARDADO'=>$fecha_guardado,
            'ESTADO'=>$estadoguardado,
        ]);
        if($anunciosguardados){
            $this->mensaje5="Guardado correctamente";
        }
        else{
            $this->mensaje6="No se guardó correctamente";
        }

        
        
        
    }

    public function megusta($id_like){
        $this->id_megusta=$id_like;
        $this->valorlike=1;
        $estadolike = 1;
        $fechamegusta = date("Y-m-d H:i:s");
        $this->idusuario = 5;
        $this->idcomparacion = 5;

        $megusta=DB::table('TB_MEGUSTA')->insert(
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
            return view('livewire.vista-prueba-component');

        }
        else{
            $this->mensaje4="Insertado correctamente";
        }
    }
    public function cancel(){
        session()->forget('comentarios'); 
    }
   
}
