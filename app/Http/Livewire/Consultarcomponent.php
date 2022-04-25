<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;



class Consultarcomponent extends Component
{

public $option1,$option2,$option3, $vista,  $segunda,$tercera=1,$primera,$var2=null;

public $vista2, $vista3;

    public function render()
    {
        $relaciones=DB::table('TB_REL')
        ->join('TB_MATERIAS','TB_REL.ID_MATERIA','=','TB_MATERIAS.ID_MATERIA')
        ->join('TB_MAESTROS', 'TB_REL.ID_MAESTROS', '=', 'TB_MAESTROS.ID_MAESTROS')
        ->join('TB_GRADOS', 'TB_REL.ID_GRADOS', '=', 'TB_GRADOS.ID_GRADOS')
        ->join('TB_SECCIONES', 'TB_REL.ID_SECCIONES', '=', 'TB_SECCIONES.ID_SECCIONES')
        ->select('TB_REL.ID_REL', 'TB_MATERIAS.NOMBRE_MATERIA', 'TB_MATERIAS.TIPO_DE_MATERIA', 'TB_MAESTROS.NOMBRE_MAESTROS', 'TB_GRADOS.NOMBRE_GRADO', 'TB_SECCIONES.SECCION')
        ->get();

        $relainfo=DB::table('TB_INFO_MAESTRO')
        ->join('TB_MATERIAS','TB_INFO_MAESTRO.ID_MATERIA','=','TB_MATERIAS.ID_MATERIA')
        ->join('TB_MAESTROS', 'TB_INFO_MAESTRO.ID_MAESTROS', '=', 'TB_MAESTROS.ID_MAESTROS')
        ->join('TB_GRADOS', 'TB_INFO_MAESTRO.ID_GRADOS', '=', 'TB_GRADOS.ID_GRADOS')
        ->select('TB_INFO_MAESTRO.ID_I_MAESTRO', 'TB_MATERIAS.NOMBRE_MATERIA', 'TB_MATERIAS.TIPO_DE_MATERIA', 'TB_MAESTROS.NOMBRE_MAESTROS', 'TB_GRADOS.NOMBRE_GRADO','TB_INFO_MAESTRO.DPI')
        ->get();

        
        
        $sql= 'SELECT ID_MATERIA , NOMBRE_MATERIA FROM TB_MATERIAS';
        $materias=DB::select($sql);
        $sql= 'SELECT ID_MAESTROS , NOMBRE_MAESTROS FROM TB_MAESTROS';
        $maestros=DB::select($sql);
        $sql= 'SELECT ID_GRADOS , NOMBRE_GRADO FROM TB_GRADOS';
        $grados=DB::select($sql);
        $sql= 'SELECT ID_SECCIONES , SECCION FROM TB_SECCIONES';
        $secciones=DB::select($sql);
        $sql= 'SELECT ID_I_MAESTRO, DPI FROM TB_INFO_MAESTRO';
        $info=DB::select($sql);
        
        return view('livewire.consultarcomponent',compact('relaciones', 'materias','maestros','grados','secciones','info','relainfo'));
    }

    public function buscar($var){
        if($var==1){
            if($this->option1!=null && $this->option1==1){
                $this->option1=0;
            }
            else{
                $this->option1=1;
            }
        }
        elseif($var==2){
            if($this->option2!=null && $this->option2==2){
                $this->option2=0;
            }
            else{
                $this->option2=2;
            }
        }
        elseif($var==3){
            if($this->option3!=null && $this->option3==3){
                $this->option3=0;
            }
            else{
                $this->option3=3;
            }
        }

            if($this->option1!=null && $this->option1==1 && $this->option2!=null && $this->option2==2 or $this->option1!=null && $this->option1==1 && $this->option3!=null && $this->option3==3 or $this->option2!=null && $this->option2==2 && $this->option3!=null && $this->option3==3 ){
                $this->primera=1;
            }
            else{
                $this->primera=null;

            }

            if($this->option1!=null && $this->option1==1 && $this->option2!=null && $this->option2==2 &&  $this->option3!=null && $this->option3==3 ){
                $this->tercera=null;
                
            }
            else{
                $this->tercera=1;
                unset($this->segunda);
    
            }
            if($this->option1!=null && $this->option1==1 && $this->option2!=null && $this->option2==2 or $this->option1!=null && $this->option1==1 && $this->option3!=null && $this->option3==3 or $this->option2!=null && $this->option2==2 && $this->option3!=null && $this->option3==3){
                $this->segunda=1;
                
            }
            else{
                $this->segunda=null;
    
            }

           
   }

   public function validar_check(){
       
       if($this->option1==1){
        unset($this->vista2);
        unset($this->vista3);

           $this->vista=1;
       }
       elseif($this->option2==2){
        unset($this->vista2);
        unset($this->vista3);

        $this->vista=2;
        }
        elseif($this->option3==3){
        unset($this->vista1);
        unset($this->vista2);

        $this->vista=3;
        }


   }
   public function validar_check2(){
      if($this->option1==1 && $this->option2==2){
           unset($this->vista);
           unset($this->vista3);

           $this->vista2=1;
      }

      elseif($this->option1==1 && $this->option3==3){
        unset($this->vista);
        unset($this->vista3);

        $this->vista2=2;
         }
         elseif($this->option2==2 && $this->option3==3){
            unset($this->vista);
            unset($this->vista3);
            $this->vista2=3;
          }
   }

   public function validar_check3(){
    if($this->option1==1 && $this->option2==2 && $this->option3==3 ){
         unset($this->vista);
         unset($this->vista2);
         $this->vista3=1;
    }

 }

 public function list_Maestros(){
    $sql= 'SELECT * FROM TB_MATERIAS';
    $materias=DB::select($sql);
    $sql= 'SELECT * FROM TB_MAESTROS';
    $maestros=DB::select($sql);
    $sql= 'SELECT * FROM TB_GRADOS';
    $grados=DB::select($sql);
    $sql= 'SELECT * FROM TB_SECCIONES';
    $secciones=DB::select($sql);
    $op=38;
    return view('home', compact('materias','maestros','grados','secciones','op'));
 }

 public function list_g(){
    $sql= 'SELECT * FROM TB_GRADOS';
    $grados=DB::select($sql);
    $sql= 'SELECT * FROM TB_SECCIONES';
    $secciones=DB::select($sql);
    $op=39;
    return view('home', compact('grados','op','secciones'));
 }

   
}

