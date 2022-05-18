<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

class AnunciosComponents extends Component
{
    use WithFileUploads;

    
    public $texto_anuncio, $archivo_anuncio, $calidad_anuncio;
    public $prueba, $op, $mensaje, $mensaje1, $file, $date, $dia2, $message, $file2, $img, $vid, $pdf, $tipo;
    public $tanuncio, $publico_anuncio, $op_grado, $grado_anuncio, $idioma_maestro, $tipoanuncio, $grado_objetivo;
    public $rol, $idiomas;
    

    public function render()
    {
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
        //$this->tipoanuncio = 0; no poner variable seteada en 0 acá.
        $sql="SELECT * FROM tb_grados";
        $this->grado_objetivo=DB::select($sql);
        $sql="SELECT * FROM rol";
        $this->rol=DB::select($sql);
        $sql="SELECT * FROM idiomasmaestros";
        $this->idiomas=DB::select($sql);
        
        
        return view('livewire.anuncios-components');
    }
    public function guardaranuncio(){
        if($this->validate([
            'calidad_anuncio' => 'required',
        ])==false){
            $advertencia="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['advertencia'=>'validar el input vacío']);

        }
        else{
            
            $textoanuncio = $this->texto_anuncio;
        
        $calidadanuncio = $this->calidad_anuncio;
        $publicoanuncio = $this->publico_anuncio;
        $gradoanuncio = $this->grado_anuncio;
        $idiomamaestro = $this->idioma_maestro;
        $opgrado=$this->op_grado;
        $this->prueba=$calidadanuncio;
        $estadoanuncio =1;

        if($this->tanuncio==null){
            $gradoanuncio=0;
            $this->tanuncio=0;
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
        
        DB::beginTransaction();

        $anuncio=DB::table('tb_anuncios')->insert(
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
                $this->mensaje='insertado correctamente';
               

            }
            else{
                
                $this->op=2;
                $this->mensaje1='No fue insertado correctamente';
            }
        }
        
        

    }

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
    
}
