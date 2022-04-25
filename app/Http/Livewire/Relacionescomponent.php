<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;

class Relacionescomponent extends Component
{
    public $id_rel,$id_materias, $id_maestros,$id_grados,$id_secciones,$edit;

    public  $op, $mensaje, $mensaje1,  $mensaje3, $mensaje4, $mensaje_eliminar, $mensaje_eliminar2;
    
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
        return view('livewire.relacionescomponent',compact('relaciones', 'materias','maestros','maestros','grados','secciones'));
    }

    public function guardar_rel(){
        if($this->validate([
            'id_materias' => 'required',
            'id_maestros' => 'required',
            'id_grados' => 'required',
            'id_secciones' => 'required',

        ])==false){
            $error="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['error' => 'Validar el input vacio']);
        }

        else{
           $id_materias=$this->id_materias;
        $id_maestros=$this->id_maestros;
        $id_grados=$this->id_grados;
        $id_secciones=$this->id_secciones;


        $secciones=DB::table('TB_REL')->insert(
            [
                'ID_MATERIA'=>$id_materias,
                'ID_MAESTROS'=>$id_maestros,
                'ID_GRADOS'=>$id_grados,
                'ID_SECCIONES'=>$id_secciones,

            ]);
        if($secciones){
            unset($this->mensaje);
            unset($this->mensaje3);
            unset($this->mensaje_eliminar);
            $this->reset();
            $this->op=27;
            $this->mensaje='Insertado correctamente';
        }
        else {
            unset($this->mensaje1);
            unset($this->mensaje4);
            unset($this->mensaje_eliminar2);
            $this->op=27;
            $this->mensaje1='Datos no  insertados correctamente';
        }  
        }
       

    }

    public function list_rel(){
        $sql= 'SELECT * FROM TB_MATERIAS';
        $materias=DB::select($sql);
        $sql= 'SELECT * FROM TB_MAESTROS';
        $maestros=DB::select($sql);
        $sql= 'SELECT * FROM TB_GRADOS';
        $grados=DB::select($sql);
        $sql= 'SELECT * FROM TB_SECCIONES';
        $secciones=DB::select($sql);
        $op=28;
        return view('home', compact('materias','maestros','grados','secciones','op'));
     }

     Public function edit($id){
        $id_rel=$id;
        $sql='SELECT * FROM TB_REL WHERE ID_REL=?';
        $relaciones=DB:: select($sql, array($id_rel));
        $sql= 'SELECT * FROM TB_MATERIAS';
        $materias=DB::select($sql);
        $sql= 'SELECT * FROM TB_MAESTROS';
        $maestros=DB::select($sql);
        $sql= 'SELECT * FROM TB_GRADOS';
        $grados=DB::select($sql);
        $sql= 'SELECT * FROM TB_SECCIONES';
        $secciones=DB::select($sql);

        if($relaciones !=null){
            foreach($relaciones as $rel)
            {
                $this->id_rel=$rel->ID_REL;
                $this->id_materias=$rel->ID_MATERIA;
                $this->id_maestros=$rel->ID_MAESTROS;
                $this->id_grados=$rel->ID_GRADOS;
                $this->id_secciones=$rel->ID_SECCIONES;

            }
        }

        $this->op=29;
       $this->edit=1;
    }
    
    public function update_rel(){
        $id_rel=$this->id_rel;
        $id_materias=$this->id_materias;
        $id_maestros=$this->id_maestros;
        $id_grados=$this->id_grados;
        $id_secciones=$this->id_secciones;

        $rel=DB::table('TB_REL')
        ->where('ID_REL', $id_rel)
        ->update( 
            [
                'ID_MATERIA'=>$id_materias,
                'ID_MAESTROS'=>$id_maestros,
                'ID_GRADOS'=>$id_grados,
                'ID_SECCIONES'=>$id_secciones,
            ]
            );

            if($rel){
                unset($this->mensaje);
                unset($this->mensaje3);
                unset($this->mensaje_eliminar);
                $this->reset();
                $sql= 'SELECT * FROM TB_MATERIAS';
                $materias=DB::select($sql);
                $sql= 'SELECT * FROM TB_MAESTROS';
                $maestros=DB::select($sql);
                $sql= 'SELECT * FROM TB_GRADOS';
                $grados=DB::select($sql);
                $sql= 'SELECT * FROM TB_SECCIONES';
                $secciones=DB::select($sql);
                $this->op=26;
                $this->mensaje3='Editado Correctamente';
            }
            else{
                unset($this->mensaje1);
                unset($this->mensaje4);
                unset($this->mensaje_eliminar2);
                $this->op=26;
                $this->mensaje4='No fue posible editarlo Correctamente';
            }
    }


    Public function delete($id){
        $id_rel=$id;
        $rel=DB::table('TB_REL')->where('ID_REL','=', $id_rel)->delete();

        if($rel){
            unset($this->mensaje);
            unset($this->mensaje3);
            unset($this->mensaje_eliminar);
            $sql='SELECT * FROM TB_REL WHERE ID_REL=?';
            $relaciones=DB:: select($sql, array($id_rel));
            $sql= 'SELECT * FROM TB_MATERIAS';
            $materias=DB::select($sql);
            $sql= 'SELECT * FROM TB_MAESTROS';
            $maestros=DB::select($sql);
            $sql= 'SELECT * FROM TB_GRADOS';
            $grados=DB::select($sql);
            $sql= 'SELECT * FROM TB_SECCIONES';
            $secciones=DB::select($sql);
            $this->op=26;
            $this->mensaje_eliminar='Eliminado Correctamente';
        }
        else{
            unset($this->mensaje1);
            unset($this->mensaje4);
            unset($this->mensaje_eliminar2);
            $this->op=26;  
            $this->mensaje_eliminar2='No fue posible eliminarlo';
        }
    }



}
