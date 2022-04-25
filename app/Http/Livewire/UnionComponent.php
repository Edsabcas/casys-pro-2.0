<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;

class UnionComponent extends Component
{
    public $id_union,$id_materias,$id_grados,$edit,$estado_union;

    public  $op, $mensaje, $mensaje1,  $mensaje3, $mensaje4, $mensaje_eliminar, $mensaje_eliminar2;
    
    public function render()
    {
        $uniones=DB::table('TB_ASIGNACION')
        ->join('TB_MATERIAS','TB_ASIGNACION.ID_MATERIA','=','TB_MATERIAS.ID_MATERIA')
        ->join('TB_GRADOS', 'TB_ASIGNACION.ID_GRADOS', '=', 'TB_GRADOS.ID_GRADOS')
        ->select('TB_ASIGNACION.ID_ASIGNACION', 'TB_MATERIAS.NOMBRE_MATERIA', 'TB_GRADOS.NOMBRE_GRADO', 'TB_ASIGNACION.ESTADO')
        ->get();
        $sql= 'SELECT ID_MATERIA , NOMBRE_MATERIA FROM TB_MATERIAS';
        $materias=DB::select($sql);
        $sql= 'SELECT ID_GRADOS , NOMBRE_GRADO FROM TB_GRADOS';
        $grados=DB::select($sql);
        return view('livewire.union-component',compact('uniones', 'materias','grados'));
    }

    public function guardar_union(){
        if($this->validate([
            'id_grados' => 'required',
            'id_materias' => 'required',
            'estado_union' => 'required',

        ])==false){
            $error="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['error' => 'Validar el input vacio']);
        }

        else{
           $id_grados=$this->id_grados;
           $id_materias=$this->id_materias;
           $estado_union=$this->estado_union;


        $uniones=DB::table('TB_ASIGNACION')->insert(
            [
                'ID_GRADOS'=>$id_grados,
                'ID_MATERIA'=>$id_materias,
                'ESTADO'=>$estado_union,

            ]);
        if($uniones){
            unset($this->mensaje);
            unset($this->mensaje3);
            unset($this->mensaje_eliminar);
            $this->reset();
            $this->op=32;
            $this->mensaje='Insertado correctamente';
        }
        else {
            unset($this->mensaje1);
            unset($this->mensaje4);
            unset($this->mensaje_eliminar2);
            $this->op=32;
            $this->mensaje1='Datos no  insertados correctamente';
        }  
        }
       

    }

    public function list_union(){
        $sql= 'SELECT * FROM TB_MATERIAS';
        $materias=DB::select($sql);
        $sql= 'SELECT * FROM TB_GRADOS';
        $grados=DB::select($sql);
        $op=33;
        return view('home', compact('materias','grados','op'));
     }

     Public function edit($id){
        $id_union=$id;
        $sql='SELECT * FROM TB_ASIGNACION WHERE ID_ASIGNACION=?';
        $uniones=DB:: select($sql, array($id_union));
        $sql= 'SELECT * FROM TB_MATERIAS';
        $materias=DB::select($sql);
        $sql= 'SELECT * FROM TB_GRADOS';
        $grados=DB::select($sql);

        if($uniones !=null){
            foreach($uniones as $union)
            {
                $this->id_union=$union->ID_ASIGNACION;
                $this->id_grados=$union->ID_GRADOS;
                $this->id_materias=$union->ID_MATERIA;
                $this->estado_union=$union->ESTADO;

            }
        }

        $this->op=34;
       $this->edit=1;
    }
    
    public function update_union(){
        $id_union=$this->id_union;
        $id_grados=$this->id_grados;
        $id_materias=$this->id_materias;
        $estado_union=$this->estado_union;

        $union=DB::table('TB_ASIGNACION')
        ->where('ID_ASIGNACION', $id_union)
        ->update( 
            [
                'ID_GRADOS'=>$id_grados,
                'ID_MATERIA'=>$id_materias,
                'ESTADO'=>$estado_union,
            ]
            );

            if($union){
                unset($this->mensaje);
                unset($this->mensaje3);
                unset($this->mensaje_eliminar);
                $this->reset();
                $sql= 'SELECT * FROM TB_MATERIAS';
                $materias=DB::select($sql);
                $sql= 'SELECT * FROM TB_GRADOS';
                $grados=DB::select($sql);
                $this->op=31;
                $this->mensaje3='Editado Correctamente';
            }
            else{
                unset($this->mensaje1);
                unset($this->mensaje4);
                unset($this->mensaje_eliminar2);
                $this->op=31;
                $this->mensaje4='No fue posible editarlo Correctamente';
            }
    }


    Public function delete($id){
        $id_union=$id;
        $union=DB::table('TB_ASIGNACION')->where('ID_ASIGNACION','=', $id_union)->delete();

        if($union){
            unset($this->mensaje);
            unset($this->mensaje3);
            unset($this->mensaje_eliminar);
            $sql='SELECT * FROM TB_ASIGNACION WHERE ID_ASIGNACION=?';
            $uniones=DB:: select($sql, array($id_union));
            $sql= 'SELECT * FROM TB_MATERIAS';
            $materias=DB::select($sql);
            $sql= 'SELECT * FROM TB_GRADOS';
            $grados=DB::select($sql);
            $this->op=31;
            $this->mensaje_eliminar='Eliminado Correctamente';
        }
        else{
            unset($this->mensaje1);
            unset($this->mensaje4);
            unset($this->mensaje_eliminar2);
            $this->op=31;  
            $this->mensaje_eliminar2='No fue posible eliminarlo';
        }
    }



}

