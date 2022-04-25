<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;

class VistUComponent extends Component
{
    public function render()
    {
        $relaciones=DB::table('TB_REL')
        ->join('TB_MATERIAS','TB_REL.ID_MATERIA','=','TB_MATERIAS.ID_MATERIA')
        ->join('TB_MAESTROS', 'TB_REL.ID_MAESTROS', '=', 'TB_MAESTROS.ID_MAESTROS')
        ->join('TB_GRADOS', 'TB_REL.ID_GRADOS', '=', 'TB_GRADOS.ID_GRADOS')
        ->join('TB_SECCIONES', 'TB_REL.ID_SECCIONES', '=', 'TB_SECCIONES.ID_SECCIONES')
        ->select('TB_REL.ID_REL', 'TB_MATERIAS.NOMBRE_MATERIA', 'TB_MAESTROS.NOMBRE_MAESTROS', 'TB_GRADOS.NOMBRE_GRADO', 'TB_SECCIONES.SECCION')
        ->get();
        $sql= 'SELECT ID_MATERIA , NOMBRE_MATERIA FROM TB_MATERIAS';
        $materias=DB::select($sql);
        $sql= 'SELECT ID_MAESTROS , NOMBRE_MAESTROS FROM TB_MAESTROS';
        $maestros=DB::select($sql);
        $sql= 'SELECT ID_GRADOS , NOMBRE_GRADO FROM TB_GRADOS';
        $grados=DB::select($sql);
        $sql= 'SELECT ID_SECCIONES , SECCION FROM TB_SECCIONES';
        $secciones=DB::select($sql);
        return view('livewire.vist-u-component',compact('relaciones', 'materias','maestros','maestros','grados','secciones'));
    }
}
