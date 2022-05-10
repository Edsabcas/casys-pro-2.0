<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class GuardarComponent extends Component
{
    
    public $id_com, $op, $comentarios, $texto_comentario, $op2, $mensaje, $mensaje1, $anuncios, $id_publicacion;
    public $op3, $id_megusta, $mensaje3, $mensaje4, $valorlike, $idcomparacion, $likes3, $mensaje5, $mensaje6;
    public $idusuario, $mensaje7, $mensaje8, $ver_ocultos1, $ocultarc, $admin_rol, $usuario_id, $vistas_totales_id;
    public $usuario_publicacion, $rol_publicado, $mensaje9, $mensaje10, $contadorlikes, $cambiolike;
    public function render()
    {
        $sql="SELECT * FROM tb_anuncios ORDER BY FECHA_HORA DESC";
        $this->anuncios=DB::select($sql);
        $sql="SELECT * FROM tb_guardados";
        $guardados=DB::select($sql);
        $sql="SELECT * FROM tb_megusta";
        $me_gusta=DB::select($sql);
        $sql="SELECT * FROM tb_vistas";
        $vistoss=DB::select($sql);
        $sql="SELECT * FROM users";
        $this->usuario_publicacion=DB::select($sql);
        $sql="SELECT * FROM rol_usuario";
        $this->rol_publicado=DB::select($sql);
        $this->usuario_id=auth()->user()->id;
        $this->vistas_totales_id=5;
        return view('livewire.guardar-component', compact('guardados', 'me_gusta', 'vistoss'));
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
}
