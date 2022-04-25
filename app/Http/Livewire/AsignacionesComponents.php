<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AsignacionesComponents extends Component
{
    public $grado_a,$seccion_a,$maestro_a,$op,$mensaje,$mensaje1,$id_a,$mensaje2,$mensaje3,$mensajeeliminar,$mensajeeliminar1,$edit,$estado_a;
    public function render()
    {
        $asignacion= DB::table('TB_ASIGNACIONES')

                ->join('TB_DOCENTES', 'TB_ASIGNACIONES.ID_DOCENTE', '=', 'TB_DOCENTES.ID_DOCENTE')

                ->join('TB_GRADOS', 'TB_ASIGNACIONES.ID_GR', '=', 'TB_GRADOS.ID_GR')

                ->join('TB_SECCIONS', 'TB_ASIGNACIONES.ID_SC', '=', 'TB_SECCIONS.ID_SC')

                ->select('TB_ASIGNACIONES.ID_A','TB_ASIGNACIONES.ID_SC','TB_ASIGNACIONES.ID_GR','TB_ASIGNACIONES.ID_DOCENTE',
                'TB_DOCENTES.NOMBRE_DOCENTE','TB_GRADOS.GRADO','TB_SECCIONS.SECCION','TB_ASIGNACIONES.ESTADO','TB_ASIGNACIONES.FECHA_ASIGNACION')

                ->get();

        $sql="SELECT * FROM TB_GRADOS";
        $grados=DB::select($sql);
        $sql="SELECT * FROM TB_SECCIONS";
        $secciones=DB::select($sql);
        $sql="SELECT * FROM TB_DOCENTES";
        $maestros=DB::select($sql);
        return view('livewire.asignaciones-components', compact('asignacion','grados','secciones','maestros'));
    }
    public function guardar_a(){

        if($this->validate([
            'grado_a' => 'required',
            'seccion_a' => 'required',
            'maestro_a' => 'required',
            'estado_a' => 'required',
    
        ])==false)
        {
            $mensaje="no encontrado";
            session(['message' => 'no encontrado']);
            return back()->withErrors(['mensaje' =>'Validar el input vacio']);
        }
        else
        {

        $grado_a=$this->grado_a;
        $seccion_a=$this->seccion_a;
        $maestro_a=$this->maestro_a;
        $estado_a=$this->estado_a;
        $asignacion=DB::table('TB_ASIGNACIONES')->insert(
            [
                'ID_GR'=> $grado_a,
                'ID_SC'=> $seccion_a,
                'ID_DOCENTE'=> $maestro_a,
                'FECHA_ASIGNACION'=> date('y-m-d:h:m:s'),
                'ESTADO'=> $estado_a,
            ]);
            if($asignacion){
                $this->reset();
                unset($this->mensaje);
                $this->op=2;
                $this->mensaje='Insertado correctamente';
            }
            else{

                unset($this->mensaje1);
                $this->op=2;
                $this->mensaje1='No fue posible insertar correctamente';
            }
        }
    }
    public function listar_a(){ 
        $sql="SELECT * FROM TB_ASIGNACIONES";
        $asignacion=DB::select($sql);
        $op=5;
        return view('home', compact('asignacion', 'op'));
    }  
    public function edit($id){
        $id_a=$id;
        $sql='SELECT * FROM TB_ASIGNACIONES WHERE ID_A=?';
        $asignacion=DB::select($sql,array($id_a));

        if($asignacion!=null){
            foreach($asignacion as $asi)
            {
                $this->id_a=$asi->ID_A;
                $this->grado_a=$asi->ID_GR;
                $this->seccion_a=$asi->ID_SC;
                $this->maestro_a=$asi->ID_DOCENTE;
                $this->estado_a=$asi->ESTADO;
            }
        }
        $this->op=5;

        $this->edit=1;
    }
    public function update_a_p(){
        $id_a=$this->id_a;
        $grado_a=$this->grado_a;
        $seccion_a=$this->seccion_a;
        $maestro_a=$this->maestro_a;
        $estado_a=$this->estado_a;

        $asi=DB::table('TB_ASIGNACIONES')
        ->where('ID_A',$id_a)
        ->update(
            [
                'ID_GR'=> $grado_a,
                'ID_SC'=> $seccion_a,
                'ID_DOCENTE'=> $maestro_a,
                'ESTADO'=> $estado_a,
            ]
            );

            if($asi){
                $this->reset();
                $this->op=3;
                $this->mensaje2='Editado correctamente';
            }
            else{
                $this->op=3;
                $this->mensaje3='No fue posible editar correctamente';
            }
    }
    public function delete($id){
        $id_a=$id;
        $asi=DB::table('TB_ASIGNACIONES')->where('ID_A','=', $id_a)->delete();

        if ($asi){
            $this->reset();
            $this->op=4;
            $this->mensajeeliminar='Eliminado correctamente';
        }
        else{
            $this->op=4;
            $this->mensajeeliminar1='No fue posible eliminar correctamente';
        }
    }  
}
