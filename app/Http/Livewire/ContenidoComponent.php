<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;
use Livewire\WithFileUploads;


class ContenidoComponent extends Component
{
    use WithFileUploads;

   public $grado,$mat, $nombre_g, $nombre_s, $unidad1, $NOMBRE_MATERIA, $ID_DOCENTE,$op2;
   public $texto_anuncio, $archivo_anuncio, $calidad_anuncio;
   public $option1,$option2,$option3,$option4,$vista;
   public $prueba, $op, $mensaje, $mensaje1, $file, $date, $dia2, $message, $file2, $img, $vid, $pdf, $tipo;

   public $titulo, $punteo, $fecha_e, $descripcion, $archivo, $act;


    public function render()
    {
        $uniones="";
        if($this->grado!=null){
            $uniones=DB::table('tb_rel')
        ->join('tb_materias','tb_rel.ID_MATERIA','=','tb_materias.ID_MATERIA')
        ->join('tb_docentes', 'tb_rel.ID_DOCENTE', '=', 'tb_docentes.ID_DOCENTE')
        ->join('tb_grados', 'tb_rel.ID_GR', '=', 'tb_grados.ID_GR')
        ->join('tb_seccions', 'tb_rel.ID_SC', '=', 'tb_seccions.ID_SC')
        ->select('tb_rel.ID_REL', 'tb_materias.NOMBRE_MATERIA', 'tb_docentes.NOMBRE_DOCENTE', 'tb_grados.GRADO', 'tb_seccions.SECCION','tb_materias.ID_MATERIA')
        ->where('tb_rel.ID_GR','=',$this->grado)
        ->get();
        }

        

        $unidades="";
        if($this->unidad1!=null){
            $unidades=DB::table('tb_unidades')
            ->join('tb_materias','tb_unidades.ID_MATERIA','=','tb_materias.ID_MATERIA')
            ->select('tb_unidades.ID_UNIDADES', 'tb_materias.ID_MATERIA', 'tb_unidades.ESTADO','tb_unidades.NOMNBRE_UNIDAD')
            ->where('tb_unidades.ID_MATERIA','=',$this->unidad1)
            ->get();
        }
        

        $actividades="";
        if($this->act!=null){
            $actividades=DB::table('tb_Actividades')
        ->join('tb_materias','tb_Actividades.ID_MATERIA','=','tb_materias.ID_MATERIA')
        ->join('tb_docentes', 'tb_Actividades.ID_DOCENTE', '=', 'tb_docentes.ID_DOCENTE')
        ->join('tb_grados', 'tb_Actividades.ID_GR', '=', 'tb_grados.ID_GR')
        ->join('tb_seccions', 'tb_Actividades.ID_SC', '=', 'tb_seccions.ID_SC')
        ->select('tb_Actividades.ID_ACTIVIDADES', 'tb_materias.NOMBRE_MATERIA', 'tb_docentes.NOMBRE_DOCENTE', 'tb_grados.NOMBRE_GRADO', 'tb_seccions.SECCION','tb_materias.ID_MATERIA')
        ->where('tb_Actividades.ID_GR','=',$this->act)
        ->get();
        }

        $sql= 'SELECT * FROM tb_materias';
        $materias=DB::select($sql);
        $sql= 'SELECT * FROM tb_grados';
        $grados=DB::select($sql);
        $sql= 'SELECT * FROM tb_seccions';
        $secciones=DB::select($sql);
        $sql= 'SELECT * FROM tb_docentes';
        $maestros=DB::select($sql);
  
        return view('livewire.contenido-component',compact('materias','grados','secciones','uniones','unidades','maestros'));
    }
    
    public function mostrar_m($id,$nomb,$secc,$num)
    {
        unset($this->mat);
        $this->grado=$id;
        $this->nombre_g=$nomb;
        $this->nombre_s=$secc;
        $this->op2=$num;
    
    }

    public function mostrar_u($id,$nombm,$nombrem,$num)
    {
        unset($this->unidad1);
        $this->unidad1=$id;
        $this->NOMBRE_MATERIA=$nombm;
        $this->ID_DOCENTE=$nombrem;
        $this->op2=$num;
       

        
    
    }

    public function paginacion($num)
    {
        if($num==1){
            $this->op2=1;

        }
        elseif($num==2){
            $this->op2=2;
        }

    }
    public function validar_u($option1){
 
        if($option1==1){
            if($this->vista!=null && $this->vista==1){
                $this->vista=0;
            }
            else{
                $this->vista=1;
            }
        }

        if($option1==2){
            if($this->vista!=null && $this->vista==2){
                $this->vista=0;
            }
            else{
                $this->vista=2;
            }
        }

        if($option1==3){
            if($this->vista!=null && $this->vista==3){
                $this->vista=0;
            }
            else{
                $this->vista=3;
            }
        }

        if($option1==4){
            if($this->vista!=null && $this->vista==4){
                $this->vista=0;
            }
            else{
                $this->vista=4;
            }
        }
    }

    public function Subir_Act(){
        $titulo=$this->titulo;
        $punteo=$this->punteo;
        $fecha_e=$this->fecha_e;
        $descripcion=$this->descripcion;
        $archivo=$this->archivo;


        $actividades=DB::table('TB_ACTIVIDADES')->insert(
            [
                'NOMBRE_ACTIVIDAD'=>$titulo,
                'Tnstrucciones'=>$descripcion,
                'archivos'=>$archivo,
                'punteo'=>$punteo,
                'fecha_entr'=>$fecha_e,
            ]);
    }



}
