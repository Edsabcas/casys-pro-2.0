<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AsignacionesEsComponents extends Component
{
    public $nombres_e,$apellidos_e,$grado_e,$seccion_e,$estado_e,$op,$mensaje,$mensaje1,$id_e,$mensaje2,$mensaje3,$mensajeeliminar,$mensajeeliminar1,$edit;
    public function render()
    {
        $estudiante= DB::table('TB_ASIGNACIONES_E')

                ->join('TB_ESTUDIANTES', 'TB_ASIGNACIONES_E.ID_ESTUDIANTE', '=', 'TB_ESTUDIANTES.ID_ESTUDIANTE')

                ->join('TB_GRADOS', 'TB_ASIGNACIONES_E.ID_GR', '=', 'TB_GRADOS.ID_GR')

                ->join('TB_SECCIONS', 'TB_ASIGNACIONES_E.ID_SC', '=', 'TB_SECCIONS.ID_SC')

                ->select('TB_ASIGNACIONES_E.ID_E','TB_ASIGNACIONES_E.ID_SC','TB_ASIGNACIONES_E.ID_GR','TB_ASIGNACIONES_E.ID_ESTUDIANTE',
                'TB_ESTUDIANTES.NOMBRE_ESTUDIANTE','TB_ESTUDIANTES.APELLIDOS_ESTUDIANTE','TB_GRADOS.GRADO','TB_SECCIONS.SECCION','TB_ASIGNACIONES_E.ESTADO','TB_ASIGNACIONES_E.FECHA_ASIGNACION')

                ->get();

        $sql="SELECT * FROM TB_GRADOS";
        $grados=DB::select($sql);
        $sql="SELECT * FROM TB_SECCIONS";
        $secciones=DB::select($sql);
        $sql="SELECT * FROM TB_ESTUDIANTES";
        $estudiantes=DB::select($sql);
        return view('livewire.asignaciones-es-components', compact('estudiante','grados','secciones','estudiantes'));
    }
    public function guardar_e(){

        if($this->validate([
            'nombres_e' => 'required',
            'apellidos_e' => 'required',
            'grado_e' => 'required',
            'seccion_e' => 'required',
            'estado_e' => 'required',
    
        ])==false)
        {
            $mensaje="no encontrado";
            session(['message' => 'no encontrado']);
            return back()->withErrors(['mensaje' =>'Validar el input vacio']);
        }
        else
        {
        $nombres_e=$this->nombres_e;
        $apellidos_e=$this->apellidos_e;
        $grado_e=$this->grado_e;
        $seccion_e=$this->seccion_e;
        $estado_e=$this->estado_e;
        $estudiante=DB::table('TB_ASIGNACIONES_E')->insert(
            [
                'ID_ESTUDIANTE'=> $nombres_e,
                'ID_ESTUDIANTE'=> $apellidos_e,
                'ID_GR'=> $grado_e,
                'ID_SC'=> $seccion_e,
                'FECHA_ASIGNACION'=> date('y-m-d:h:m:s'),
                'ESTADO'=> $estado_e,
            ]);
            if($estudiante){
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
    public function listar_e(){ 
        $sql="SELECT * FROM TB_ASIGNACIONES_E";
        $estudiantes=DB::select($sql);
        $op=6;
        return view('home', compact('estudiantes', 'op'));
    }  
    public function edit($id){
        $id_e=$id;
        $sql='SELECT * FROM TB_ASIGNACIONES_E WHERE ID_E=?';
        $estudiante=DB::select($sql,array($id_e));

        if($estudiante!=null){
            foreach($estudiante as $est)
            {
                $this->id_e=$est->ID_E;
                $this->nombres_e=$est->ID_ESTUDIANTE;
                $this->grado_e=$est->ID_GR;
                $this->seccion_e=$est->ID_SC;
                $this->estado_e=$est->ESTADO;
            }
        }
        $this->op=6;

        $this->edit=1;
    }
    public function update_e_p(){
        $id_e=$this->id_e;
        $nombres_e=$this->nombres_e;
        $grado_e=$this->grado_e;
        $seccion_e=$this->seccion_e;
        $estado_e=$this->estado_e;

        $est=DB::table('TB_ASIGNACIONES_E')
        ->where('ID_E',$id_e)
        ->update(
            [
                'ID_ESTUDIANTE'=> $nombres_e,
                'ID_GR'=> $grado_e,
                'ID_SC'=> $seccion_e,
                'ESTADO'=> $estado_e,
            ]
            );

            if($est){
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
        $id_e=$id;
        $est=DB::table('TB_ASIGNACIONES_E')->where('ID_E','=', $id_e)->delete();

        if ($est){
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

