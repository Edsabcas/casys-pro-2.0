<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;

class ContUComponent extends Component
{
    public $unidad,$mat, $nombre_g, $nombre_s;

    public function render()
    {
        $unidades="";
        if($this->unidad!=null){
            $unidades=DB::table('TB_UNIDADES')
            ->join('TB_MATERIAS','TB_UNIDADES.ID_MATERIA','=','TB_MATERIAS.ID_MATERIA')
            ->select('TB_UNIDADES.ID_UNIDADES', 'TB_MATERIAS.ID_MATERIA', 'TB_UNIDADES.ESTADO')
            ->where('TB_UNIDADES.ID_MATERIA','=',$this->unidad)
            ->get();
        }

        $sql= 'SELECT * FROM TB_MATERIAS';
        $materias=DB::select($sql);
        return view('livewire.cont-u-component',compact('unidades','materias'));
    }

    public function mostrar_U($id,$nomb,$secc)
    {
        unset($this->mat);
        $this->unidad=$id;
        $this->nombre_g=$nomb;
        $this->nombre_s=$secc;
    
    }
}
