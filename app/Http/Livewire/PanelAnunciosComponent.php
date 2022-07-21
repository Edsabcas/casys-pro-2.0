<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class PanelAnunciosComponent extends Component
{
    public $anuncios, $id_eliminar, $usuario_publicacion;
    public function render()
    {
        $sql="SELECT * FROM tb_anuncios ORDER BY FECHA_HORA DESC";
        $this->anuncios=DB::select($sql);
        $sql="SELECT * FROM tb_anuncios WHERE ID_ANUNCIOS=? ORDER BY FECHA_HORA DESC";
        $this->anuncios2=DB::select($sql, array($this->id_eliminar));
        $sql="SELECT * FROM users";
        $this->usuario_publicacion=DB::select($sql);
        return view('livewire.panel-anuncios-component');
    }

    public function eliminar_anuncio(){

    }

    public function id_a_eliminar($id_a_eliminar){
        $this->id_eliminar=$id_a_eliminar;

    }
}
