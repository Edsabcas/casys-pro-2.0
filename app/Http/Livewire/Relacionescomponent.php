<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;

class Relacionescomponent extends Component
{
    public $id_rel,$id_materias, $id_docente,$id_gr,$id_sc,$edit;

    public  $op, $mensaje, $mensaje1,  $mensaje3, $mensaje4, $mensaje_eliminar, $mensaje_eliminar2;
    
    public function render()
    {
        $relaciones=DB::table('tb_rel')
        ->join('tb_materias','tb_rel.id_materia','=','tb_materias.id_materia')
        ->join('tb_docentes', 'tb_rel.id_docente', '=', 'tb_docentes.id_docente')
        ->join('tb_grados', 'tb_rel.id_gr', '=', 'tb_grados.id_gr')
        ->join('tb_seccions', 'tb_rel.id_sc', '=', 'tb_seccions.id_sc')
        ->select('tb_rel.id_rel', 'tb_materias.nombre_materia', 'tb_docentes.nombre_docente', 'tb_grados.grado', 'tb_seccions.seccion')
        ->get();
        $sql= 'SELECT id_materia , nombre_materia FROM tb_materias';
        $materias=DB::select($sql);
        $sql= 'SELECT id_docente , nombre_docente FROM tb_docentes';
        $maestros=DB::select($sql);
        $sql= 'SELECT id_gr , grado FROM tb_grados';
        $grados=DB::select($sql);
        $sql= 'SELECT id_sc , seccion FROM tb_seccions';
        $secciones=DB::select($sql);
        return view('livewire.relacionescomponent',compact('relaciones', 'materias','maestros','maestros','grados','secciones'));
    }

    public function guardar_rel(){
        if($this->validate([
            'id_materias' => 'required',
            'id_docente' => 'required',
            'id_gr' => 'required',
            'id_sc' => 'required',

        ])==false){
            $error="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['error' => 'Validar el input vacio']);
        }

        else{
           $id_materias=$this->id_materias;
        $id_docente=$this->id_docente;
        $id_gr=$this->id_gr;
        $id_sc=$this->id_sc;


        $secciones=DB::table('tb_rel')->insert(
            [
                'id_materia'=>$id_materias,
                'id_docente'=>$id_docente,
                'id_gr'=>$id_gr,
                'id_sc'=>$id_sc,

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
        $sql= 'SELECT * FROM tb_materias';
        $materias=DB::select($sql);
        $sql= 'SELECT * FROM tb_docentes';
        $maestros=DB::select($sql);
        $sql= 'SELECT * FROM tb_grados';
        $grados=DB::select($sql);
        $sql= 'SELECT * FROM tb_seccions';
        $secciones=DB::select($sql);
        $op=28;
        return view('home', compact('materias','maestros','grados','secciones','op'));
     }

     Public function edit($id){
        $id_rel=$id;
        $sql='SELECT * FROM tb_rel WHERE id_rel=?';
        $relaciones=DB:: select($sql, array($id_rel));
        $sql= 'SELECT * FROM tb_materias';
        $materias=DB::select($sql);
        $sql= 'SELECT * FROM tb_docentes';
        $maestros=DB::select($sql);
        $sql= 'SELECT * FROM tb_grados';
        $grados=DB::select($sql);
        $sql= 'SELECT * FROM tb_seccions';
        $secciones=DB::select($sql);

        if($relaciones !=null){
            foreach($relaciones as $rel)
            {
                $this->id_rel=$rel->id_rel;
                $this->id_materias=$rel->id_materia;
                $this->id_docente=$rel->id_docente;
                $this->id_gr=$rel->id_gr;
                $this->id_sc=$rel->id_sc;

            }
        }

        $this->op=29;
       $this->edit=1;
    }
    
    public function update_rel(){
        $id_rel=$this->id_rel;
        $id_materias=$this->id_materias;
        $id_docente=$this->id_docente;
        $id_gr=$this->id_gr;
        $id_sc=$this->id_sc;

        $rel=DB::table('tb_rel')
        ->where('id_rel', $id_rel)
        ->update( 
            [
                'id_materia'=>$id_materias,
                'id_docente'=>$id_docente,
                'id_gr'=>$id_gr,
                'id_sc'=>$id_sc,
            ]
            );

            if($rel){
                unset($this->mensaje);
                unset($this->mensaje3);
                unset($this->mensaje_eliminar);
                $this->reset();
                $sql= 'SELECT * FROM tb_materias';
                $materias=DB::select($sql);
                $sql= 'SELECT * FROM tb_docentes';
                $maestros=DB::select($sql);
                $sql= 'SELECT * FROM tb_grados';
                $grados=DB::select($sql);
                $sql= 'SELECT * FROM tb_seccions';
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
        $rel=DB::table('tb_rel')->where('id_rel','=', $id_rel)->delete();

        if($rel){
            unset($this->mensaje);
            unset($this->mensaje3);
            unset($this->mensaje_eliminar);
            $sql='SELECT * FROM tb_rel WHERE id_rel=?';
            $relaciones=DB:: select($sql, array($id_rel));
            $sql= 'SELECT * FROM tb_materias';
            $materias=DB::select($sql);
            $sql= 'SELECT * FROM tb_docentes';
            $maestros=DB::select($sql);
            $sql= 'SELECT * FROM tb_grados';
            $grados=DB::select($sql);
            $sql= 'SELECT * FROM tb_seccions';
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
