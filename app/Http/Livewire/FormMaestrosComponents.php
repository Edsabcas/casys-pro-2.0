<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormMaestrosComponents extends Component
{
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

        return view('livewire.form-maestros-components');
    }
}
