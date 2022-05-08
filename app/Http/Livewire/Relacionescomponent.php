<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;

class Relacionescomponent extends Component
{
    public $ID_REL,$ID_MATERIA, $ID_DOCENTE,$ID_GR,$ID_SC,$edit;

    public  $op, $mensaje, $mensaje1,  $mensaje3, $mensaje4, $mensaje_eliminar, $mensaje_eliminar2;
    
    public function render()
    {
        $relaciones=DB::table('tb_rel')
        ->join('tb_materias','tb_rel.ID_MATERIA','=','tb_materias.ID_MATERIA')
        ->join('tb_docentes', 'tb_rel.ID_DOCENTE', '=', 'tb_docentes.ID_DOCENTE')
        ->join('tb_grados', 'tb_rel.ID_GR', '=', 'tb_grados.ID_GR')
        ->join('tb_seccions', 'tb_rel.ID_SC', '=', 'tb_seccions.ID_SC')
        ->select('tb_rel.ID_REL', 'tb_materias.NOMBRE_MATERIA', 'tb_docentes.NOMBRE_DOCENTE', 'tb_grados.GRADO', 'tb_seccions.SECCION','tb_materias.ID_MATERIA')
        ->get();
        $sql= 'SELECT ID_MATERIA , NOMBRE_MATERIA FROM tb_materias';
        $materias=DB::select($sql);
        $sql= 'SELECT ID_DOCENTE , NOMBRE_DOCENTE FROM tb_docentes';
        $maestros=DB::select($sql);
        $sql= 'SELECT ID_GR , GRADO FROM tb_grados';
        $grados=DB::select($sql);
        $sql= 'SELECT ID_SC , SECCION FROM tb_seccions';
        $secciones=DB::select($sql);
        return view('livewire.relacionescomponent',compact('relaciones', 'materias','maestros','maestros','grados','secciones'));
    }

    public function guardar_rel(){
        if($this->validate([
            'ID_MATERIA' => 'required',
            'ID_DOCENTE' => 'required',
            'ID_GR' => 'required',
            'ID_SC' => 'required',

        ])==false){
            $error="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['error' => 'Validar el input vacio']);
        }

        else{
           $ID_MATERIA=$this->ID_MATERIA;
        $ID_DOCENTE=$this->ID_DOCENTE;
        $ID_GR=$this->ID_GR;
        $ID_SC=$this->ID_SC;

        DB::begintransaction();


        $secciones=DB::table('tb_rel')->insert(
            [
                'ID_MATERIA'=>$ID_MATERIA,
                'ID_DOCENTE'=>$ID_DOCENTE,
                'ID_GR'=>$ID_GR,
                'ID_SC'=>$ID_SC,

            ]);
        if($secciones){
            DB::commit();
            unset($this->mensaje);
            unset($this->mensaje3);
            unset($this->mensaje_eliminar);
            $this->reset();
            $this->op=27;
            $this->mensaje='Insertado correctamente';
        }
        else {
            DB::rollback();
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
        $ID_REL=$id;
        $sql='SELECT * FROM tb_rel WHERE ID_REL=?';
        $relaciones=DB:: select($sql, array($ID_REL));
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
                $this->ID_REL=$rel->ID_REL;
                $this->ID_MATERIA=$rel->ID_MATERIA;
                $this->ID_DOCENTE=$rel->ID_DOCENTE;
                $this->ID_GR=$rel->ID_GR;
                $this->ID_SC=$rel->ID_SC;

            }
        }

        $this->op=29;
       $this->edit=1;
    }
    
    public function update_rel(){
        if($this->validate([
            'ID_MATERIA' => 'required',
            'ID_DOCENTE' => 'required',
            'ID_GR' => 'required',
            'ID_SC' => 'required',

        ])==false){
            $error="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['error' => 'Validar el input vacio']);
        }

        else{
        $ID_REL=$this->ID_REL;
        $ID_MATERIA=$this->ID_MATERIA;
        $ID_DOCENTE=$this->ID_DOCENTE;
        $ID_GR=$this->ID_GR;
        $ID_SC=$this->ID_SC;

        DB::begintransaction();


        $rel=DB::table('tb_rel')
        ->where('ID_REL', $ID_REL)
        ->update( 
            [
                'ID_MATERIA'=>$ID_MATERIA,
                'ID_DOCENTE'=>$ID_DOCENTE,
                'ID_GR'=>$ID_GR,
                'ID_SC'=>$ID_SC,
            ]
            );

            if($rel){
                DB::commit();
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
                DB::rollback();
                unset($this->mensaje1);
                unset($this->mensaje4);
                unset($this->mensaje_eliminar2);
                $this->op=26;
                $this->mensaje4='No fue posible editarlo Correctamente';
            }
        }
    }


    Public function delete($id){
        $ID_REL=$id;

        DB::begintransaction();

        $rel=DB::table('tb_rel')->where('ID_REL','=', $ID_REL)->delete();

        if($rel){
            DB::commit();
            unset($this->mensaje);
            unset($this->mensaje3);
            unset($this->mensaje_eliminar);
            $sql='SELECT * FROM tb_rel WHERE ID_REL=?';
            $relaciones=DB:: select($sql, array($ID_REL));
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
            DB::rollback();
            unset($this->mensaje1);
            unset($this->mensaje4);
            unset($this->mensaje_eliminar2);
            $this->op=26;  
            $this->mensaje_eliminar2='No fue posible eliminarlo';
        }
    }



}
