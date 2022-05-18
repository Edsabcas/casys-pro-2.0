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
        $relaciones=DB::table('tb_rel')
        ->join('tb_materias','tb_rel.ID_MATERIA','=','tb_materias.ID_MATERIA')
        ->join('tb_docentes', 'tb_rel.ID_DOCENTE', '=', 'tb_docentes.ID_DOCENTE')
        ->join('tb_grados', 'tb_rel.ID_GR', '=', 'tb_grados.ID_GR')
        ->join('tb_seccions', 'tb_rel.ID_SC', '=', 'tb_seccions.ID_SC')
        ->select('tb_rel.ID_REL', 'tb_materias.NOMBRE_MATERIA', 'tb_materias.TIPO_DE_MATERIA', 'tb_materias.ID_MATERIA' , 'tb_docentes.NOMBRE_DOCENTE', 'tb_grados.GRADO', 'tb_seccions.SECCION','tb_docentes.DPI','tb_docentes.TELEFONO','tb_docentes.CORREO','tb_docentes.ID_DOCENTE')
        ->get();

        

        
        
        $sql= 'SELECT ID_MATERIA , NOMBRE_MATERIA FROM tb_materias';
        $materias=DB::select($sql);
        $sql= 'SELECT ID_GR , GRADO FROM tb_grados';
        $grados=DB::select($sql);
        $sql= 'SELECT ID_SC , SECCION FROM tb_seccions';
        $secciones=DB::select($sql);
        $sql= 'SELECT ID_DOCENTE , NOMBRE_DOCENTE , DPI , TELEFONO , CORREO FROM tb_docentes';
        $info=DB::select($sql);
        
        return view('livewire.consultarcomponent',compact('relaciones', 'materias','grados','secciones','info'));
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
    $sql= 'SELECT * FROM tb_materias';
    $materias=DB::select($sql);
    $sql= 'SELECT * FROM tb_docentes';
    $info=DB::select($sql);
    $sql= 'SELECT * FROM tb_grados';
    $grados=DB::select($sql);
    $sql= 'SELECT * FROM tb_seccions';
    $secciones=DB::select($sql);
    $op=38;
    return view('home', compact('materias','info','grados','secciones','op'));
 }

 public function list_g(){
    $sql= 'SELECT * FROM tb_grados';
    $grados=DB::select($sql);
    $sql= 'SELECT * FROM tb_seccions';
    $secciones=DB::select($sql);
    $op=39;
    return view('home', compact('grados','op','secciones'));
 }

   
}

