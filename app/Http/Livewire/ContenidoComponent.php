<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;

class ContenidoComponent extends Component
{

   public $grado,$mat, $nombre_g, $nombre_s, $unidad1, $NOMBRE_MATERIA, $id_maestros,$op2;

   public $texto_anuncio, $archivo_anuncio, $calidad_anuncio;
   public $option1,$option2,$option3,$option4,$vista;
   public $prueba, $op, $mensaje, $mensaje1, $file, $date, $dia2, $message, $file2, $img, $vid, $pdf, $tipo;

    public function render()
    {
        $uniones="";
        if($this->grado!=null){
            $uniones=DB::table('TB_REL')
        ->join('TB_MATERIAS','TB_REL.ID_MATERIA','=','TB_MATERIAS.ID_MATERIA')
        ->join('TB_MAESTROS', 'TB_REL.ID_MAESTROS', '=', 'TB_MAESTROS.ID_MAESTROS')
        ->join('TB_GRADOS', 'TB_REL.ID_GRADOS', '=', 'TB_GRADOS.ID_GRADOS')
        ->join('TB_SECCIONES', 'TB_REL.ID_SECCIONES', '=', 'TB_SECCIONES.ID_SECCIONES')
        ->select('TB_REL.ID_REL', 'TB_MATERIAS.NOMBRE_MATERIA', 'TB_MAESTROS.NOMBRE_MAESTROS', 'TB_GRADOS.NOMBRE_GRADO', 'TB_SECCIONES.SECCION','TB_MATERIAS.ID_MATERIA')
        ->where('TB_REL.ID_GRADOS','=',$this->grado)
        ->get();
        }

        

        $unidades="";
        if($this->unidad1!=null){
            $unidades=DB::table('TB_UNIDADES')
            ->join('TB_MATERIAS','TB_UNIDADES.ID_MATERIA','=','TB_MATERIAS.ID_MATERIA')
            ->select('TB_UNIDADES.ID_UNIDADES', 'TB_MATERIAS.ID_MATERIA', 'TB_UNIDADES.ESTADO','TB_UNIDADES.NOMNBRE_UNIDAD')
            ->where('TB_UNIDADES.ID_MATERIA','=',$this->unidad1)
            ->get();
        }
        
        $sql= 'SELECT * FROM TB_MATERIAS';
        $materias=DB::select($sql);
        $sql= 'SELECT * FROM TB_GRADOS';
        $grados=DB::select($sql);
        $sql= 'SELECT * FROM TB_SECCIONES';
        $secciones=DB::select($sql);
        $sql= 'SELECT * FROM TB_MAESTROS';
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
        $this->id_maestros=$nombrem;
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



}
