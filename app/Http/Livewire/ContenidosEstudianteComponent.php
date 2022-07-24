<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;


class ContenidosEstudianteComponent extends Component
{
    public $op2;

    public function render()
    {
        $usuario_activo = auth()->user()->id;
        
        $unidades="";
        if($this->unidad1!=null){
            $unidades=DB::table('tb_unidades')
            ->join('tb_materias','tb_unidades.ID_MATERIA','=','tb_materias.ID_MATERIA')
            ->select('tb_unidades.ID_UNIDADES', 'tb_materias.ID_MATERIA', 'tb_unidades.ESTADO','tb_unidades.NOMNBRE_UNIDAD')
            ->where('tb_unidades.ID_MATERIA','=',$this->unidad1)
            ->get();
        }

        $sql="SELECT SECCION_ASIGNADA, GRADO_INGRESO FROM tb_alumnos WHERE ID_USER=$usuario_activo";
        $uniones=DB::select($sql);
        $sql= 'SELECT * FROM tb_rel';
        $relaciones=DB::select($sql);
        $sql= 'SELECT * FROM tb_materias';
        $materias=DB::select($sql);
        $sql= 'SELECT * FROM tb_unidades_fijas';
        $unidadesf=DB::select($sql);
        return view('livewire.contenidos-estudiante-component', compact('uniones','materias','relaciones'));
    }
}
