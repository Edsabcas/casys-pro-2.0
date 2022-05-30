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
        $asignacion= DB::table('tb_asignaciones')

                ->join('tb_docentes', 'tb_asignaciones.ID_DOCENTE', '=', 'tb_docentes.ID_DOCENTE')

                ->join('tb_grados', 'tb_asignaciones.ID_GR', '=', 'tb_grados.ID_GR')

                ->join('tb_seccions', 'tb_asignaciones.ID_SC', '=', 'tb_seccions.ID_SC')

                ->select('tb_asignaciones.ID_A','tb_asignaciones.ID_SC','tb_asignaciones.ID_GR','tb_asignaciones.ID_DOCENTE',
                'tb_docentes.NOMBRE_DOCENTE','tb_grados.GRADO','tb_seccions.SECCION','tb_asignaciones.ESTADO','tb_asignaciones.FECHA_ASIGNACION')

                ->get();

        $sql="SELECT * FROM tb_grados";
        $grados=DB::select($sql);
        $sql="SELECT * FROM tb_seccions";
        $secciones=DB::select($sql);
        $sql="SELECT * FROM tb_docentes";
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

        DB::beginTransaction();

        $asignacion=DB::table('tb_asignaciones')->insert(
            [
                'ID_GR'=> $grado_a,
                'ID_SC'=> $seccion_a,
                'ID_DOCENTE'=> $maestro_a,
                'FECHA_ASIGNACION'=> date('y-m-d:h:m:s'),
                'ESTADO'=> $estado_a,
            ]);
            if($asignacion){
                DB::commit();
                $this->reset();
                $this->mensaje='Insertado correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensaje);
                $this->mensaje1='No fue posible insertar correctamente';
            }
        }
    }
    public function listar_a(){ 
        $sql="SELECT * FROM tb_asignaciones";
        $asignacion=DB::select($sql);
        $op=5;
        return view('home', compact('asignacion', 'op'));
    }  
    public function edit($id){
        $id_a=$id;
        $sql='SELECT * FROM tb_asignaciones WHERE ID_A=?';
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

        DB::beginTransaction();


        $asi=DB::table('tb_asignaciones')
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
                DB::commit();
                $this->reset();
                $this->mensaje2='Editado correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensaje2);
                $this->mensaje3='No fue posible editar correctamente';
            }
    }
    public function delete($id){
        $id_a=$id;

        DB::beginTransaction();

        $asi=DB::table('tb_asignaciones')->where('ID_A','=', $id_a)->delete();

        if ($asi){
            DB::commit();
            $this->reset();
            $this->mensajeeliminar='Eliminado correctamente';
        }
        else{
            DB::rollback();
            unset($this->mensajeeliminar);            
            $this->mensajeeliminar1='No fue posible eliminar correctamente';
        }
    }  
}
