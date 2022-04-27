<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ComentariosComponent extends Component
{
    public $texto_comentario, $fecha_comentario;
    public function render()
    {
        $sql="SELECT * FROM tb_comentarios ORDER BY FECHA_COMENTARIO DESC";
        $comentarios=DB::select($sql);
        return view('livewire.comentarios-component', compact('comentarios' ));
    }

    public function guardarcomentario(){
        $textocomentario = $this->texto_comentario;
        $fechacomentario = $this->fecha_comentario = date("Y-m-d H:i:s");

        $comentario=DB::table('tb_comentarios')->insert(
            [
                'TEXTO_COMENTARIO'=>$textocomentario,
                'FECHA_COMENTARIO'=>$fechacomentario,
            ]
        );

        if($comentario){
            $this->reset();
            $this->op=4;
            $this->mensaje="Insertado correctamente";
        }
        else{
            $this->reset();
            $this->op=2;
            $this->mensaje1="No fue insertado correctamente";
        }

    }
}
