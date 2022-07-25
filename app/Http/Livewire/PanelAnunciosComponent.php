<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

class PanelAnunciosComponent extends Component
{
    use WithFileUploads;
    public $anuncios, $anuncios2, $id_eliminar, $usuario_publicacion, $rol, $grado_objetivo, $tipoanuncio, $tanuncio;
    public $idiomas, $tipo, $img, $mensaje_random, $probando, $fecha_guia, $mensaje_eliminacion;
    //variables editar
    public $anuncio_dato1, $anuncio_dato2, $anuncio_dato3, $anuncio_dato4, $anuncio_dato5, $anuncio_dato6;
    public $anuncio_dato7, $anuncio_dato8, $anuncio_dato9, $anuncio_dato10, $anuncio_dato11;
    //variables de update
    public $archivo_anuncio, $texto_anuncio, $calidad_anuncio, $publico_anuncio, $grado_anuncio; 
    public $idioma_maestro, $op_grado, $prueba, $message, $mensaje, $mensaje1, $op, $dia2, $id_anuncio;
    public function render()
    {
        $this->fecha_guia = date('Y-m-d H:i:s'); 
        $sql="SELECT * FROM tb_anuncios ORDER BY FECHA_HORA DESC";
        $this->anuncios=DB::select($sql);
        $sql="SELECT * FROM tb_anuncios WHERE ID_ANUNCIOS=? ORDER BY FECHA_HORA DESC";
        $this->anuncios2=DB::select($sql, array($this->id_eliminar));
        $sql="SELECT * FROM users";
        $this->usuario_publicacion=DB::select($sql);
        $sql="SELECT * FROM tb_grados";
        $this->grado_objetivo=DB::select($sql);
        $sql="SELECT * FROM rol";
        $this->rol=DB::select($sql);
        $sql="SELECT * FROM idiomasmaestros";
        $this->idiomas=DB::select($sql);
        //Parte de Editar
        if($this->archivo_anuncio!=null){
            if($this->archivo_anuncio->getClientOriginalExtension()=="pdf"){
                $archivo_anuncio = "pdf".time().".".$this->archivo_anuncio->getClientOriginalExtension();
                $this->img=$archivo_anuncio;
                $this->archivo_anuncio->storeAS('imagen/temporalpdf/', $this->img,'public_up');
            }
            if($this->archivo_anuncio->getClientOriginalExtension()=="jpg" or $this->archivo_anuncio->getClientOriginalExtension()=="png" or $this->archivo_anuncio->getClientOriginalExtension()=="jpeg"){
                $this->tipo=1;
            }
            elseif($this->archivo_anuncio->getClientOriginalExtension()=="mp4" or $this->archivo_anuncio->getClientOriginalExtension()=="mpeg"){
                $this->tipo=2;
            }
            elseif($this->archivo_anuncio->getClientOriginalExtension()=="pdf"){
                $this->tipo=3;
            }

        }
        return view('livewire.panel-anuncios-component');
    }

    public function eliminar_anuncio($id_elim){
        $id_eliminacion=$id_elim;
        $eliminacion=DB::table('tb_anuncios')->where('ID_ANUNCIOS','=', $id_eliminacion)->delete();
        if($eliminacion){
            unset($this->mensaje_eliminacion);
                $this->mensaje_eliminacion = 1;
        }
        else{
            unset($this->mensaje_eliminacion);
            $this->mensaje_eliminacion = 0;
        }
    }

    public function id_a_eliminar($id_a_eliminar){
        $this->id_eliminar=$id_a_eliminar;

    }

    //Parte de Editar
    public function tipo_anuncio(){
        
        $this->tipoanuncio += 1;

        if($this->tipoanuncio == 1){
            $this->tanuncio = $this->tipoanuncio;
        }
        elseif($this->tipoanuncio==2){
            $this->tanuncio= 0;
            $this->tipoanuncio =0;
        }
        else{
            $this->tanuncio = 0;
        }
    }

    //funciones de editar directamente
    public function editar_anuncio($id){
        $this->id_anuncio=$id;
        $this->anuncio_dato1 = $id;
        $sql="SELECT * FROM tb_anuncios WHERE ID_ANUNCIOS=?";
        $anunciosss=DB::select($sql, array($this->id_anuncio));
        unset($this->mensaje_eliminacion);
        unset($this->mensaje);
        unset($this->mensaje1);

        if($anunciosss!=null){
        foreach($anunciosss as $anuncioss){
            $this->anuncio_dato1 = $anuncioss->ID_ANUNCIOS;
            $this->anuncio_dato2 = $anuncioss->TEXTO_PUBLICACION;
            $this->anuncio_dato3 = $anuncioss->MULTIMEDIA;
            $this->anuncio_dato4 = $anuncioss->FECHA_HORA;
            $this->anuncio_dato5 = $anuncioss->TIPO_ANUNCIO;
            $this->anuncio_dato6 = $anuncioss->PUBLICO_ANUNCIO;
            $this->anuncio_dato7 = $anuncioss->GRADO_ANUNCIO;
            $this->anuncio_dato8 = $anuncioss->IDIOMA_MAESTRO;
            $this->anuncio_dato9 = $anuncioss->CALIDAD_ANUNCIO;
            $this->anuncio_dato10 = $anuncioss->ESTADO_ANUNCIO;
            $this->anuncio_dato11 = $anuncioss->ID_USUARIO;
        }
    }
    else{
        if($this->anuncios_dato1 == null){
            $this->probando = 890;
        }
    }
        

        $this->mensaje_random=75;
    }

    public function update_anuncio(){
        if($this->validate([
            'anuncio_dato9' => 'required',
        ])==false){
            $advertencia="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['advertencia'=>'validar el input vacío']);

        }
        else{
            $idanuncio = $this->id_anuncio;
            $textoanuncio = $this->anuncio_dato2;
        
        $calidadanuncio = $this->anuncio_dato9;
        $publicoanuncio = $this->anuncio_dato6;
        $gradoanuncio = $this->anuncio_dato7;
        $opgrado=$this->op_grado;
        $this->prueba=$calidadanuncio;
        $estadoanuncio =1;
        $idiomamaestro=0;

        if($this->tanuncio==null){
            $this->tanuncio=0;
        }
        
        if($this->anuncio_dato6!=null){
            $this->tanuncio=1;
        }
        elseif($this->anuncio_dato6==null){
            $gradoanuncio=0;
        }


        $archivo_anuncio="";
            if($this->archivo_anuncio!=null){
              //  $mensaje="no encontrado";
               //session(['message' => 'no encontradso']);
                //return  back()->withErrors(['mensaje'=>'Validar el input vacio']);
                if($this->archivo_anuncio->getClientOriginalExtension()=="jpg" or $this->archivo_anuncio->getClientOriginalExtension()=="png" or $this->archivo_anuncio->getClientOriginalExtension()=="jpeg"){
                    $archivo_anuncio = "img".time().".".$this->archivo_anuncio->getClientOriginalExtension();
                    $this->img=$archivo_anuncio;
                    $this->archivo_anuncio->storeAS('imagen/anuncios/', $this->img,'public_up');
                    $this->tipo=1;
                }
                elseif($this->archivo_anuncio->getClientOriginalExtension()=="mp4" or $this->archivo_anuncio->getClientOriginalExtension()=="mpeg"){
                    $archivo_anuncio = "vid".time().".".$this->archivo_anuncio->getClientOriginalExtension();
                    $this->img=$archivo_anuncio;
                    $this->archivo_anuncio->storeAS('imagen/videos/', $this->img,'public_up');
                    $this->tipo=2;
                }
                elseif($this->archivo_anuncio->getClientOriginalExtension()=="pdf"){
                    $archivo_anuncio = "pdf".time().".".$this->archivo_anuncio->getClientOriginalExtension();
                    $this->img=$archivo_anuncio;
                    $this->archivo_anuncio->storeAS('imagen/pdfs/', $this->img,'public_up');
                    $this->tipo=3;
                }
            }
            else{
                $this->message = "error al subir";
            }

        

        
        $fechaanuncio = $this->dia2 = date("Y-m-d H:i:s");

        //por si, si suben nueva multimedia
        if($this->archivo_anuncio!=""){
            DB::beginTransaction();

        $anuncio=DB::table('tb_anuncios')->where('ID_ANUNCIOS', $idanuncio)
        ->update(
            [
                'TEXTO_PUBLICACION'=>$textoanuncio,
                'MULTIMEDIA'=>$this->img,
                'CALIDAD_ANUNCIO'=>$calidadanuncio,
                'FECHA_HORA'=>$fechaanuncio,
                'TIPO_ANUNCIO'=>$this->tanuncio,
                'PUBLICO_ANUNCIO'=>$publicoanuncio,
                'IDIOMA_MAESTRO'=>$idiomamaestro,
                'GRADO_ANUNCIO'=>$gradoanuncio,
                'ESTADO_ANUNCIO'=>$estadoanuncio,
                'ID_USUARIO'=>auth()->user()->id,

            ]
            );
            if($anuncio){
                $this->reset();
                
                DB::commit();
                $this->op=2;
                unset($this->mensaje_eliminacion);
                unset($this->mensaje);
                unset($this->mensaje1);
                $this->mensaje=1;
               

            }
            else{
                DB::rollback();
                $this->op=2;
                unset($this->mensaje_eliminacion);
                unset($this->mensaje1);
                unset($this->mensaje);
                $this->mensaje1=1;
            }
        }
        
        //por si es no suben nueva multimedia, se dej ala que estaba antes
            if($archivo_anuncio==""){
                DB::beginTransaction();

        $anuncio=DB::table('tb_anuncios')->where('ID_ANUNCIOS', $idanuncio)
        ->update(
            [
                'TEXTO_PUBLICACION'=>$textoanuncio,
                'CALIDAD_ANUNCIO'=>$calidadanuncio,
                'FECHA_HORA'=>$fechaanuncio,
                'TIPO_ANUNCIO'=>$this->tanuncio,
                'PUBLICO_ANUNCIO'=>$publicoanuncio,
                'IDIOMA_MAESTRO'=>$idiomamaestro,
                'GRADO_ANUNCIO'=>$gradoanuncio,
                'ESTADO_ANUNCIO'=>$estadoanuncio,
                'ID_USUARIO'=>auth()->user()->id,

            ]
            );
            if($anuncio){
                $this->reset();
                
                DB::commit();
                $this->op=2;
                unset($this->mensaje_eliminacion);
                unset($this->mensaje);
                unset($this->mensaje1);
                $this->mensaje=1;
               

            }
            else{
                DB::rollback();
                $this->op=2;
                unset($this->mensaje_eliminacion);
                unset($this->mensaje1);
                unset($this->mensaje);
                $this->mensaje1=1;
            }
            }
            
            
        }
        
          
    }
}
