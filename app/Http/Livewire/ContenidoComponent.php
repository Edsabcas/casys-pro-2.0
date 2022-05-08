<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;
use Livewire\WithFileUploads;


class ContenidoComponent extends Component
{
    use WithFileUploads;

   public $grado,$mat, $nombre_g, $nombre_s, $unidad1, $NOMBRE_MATERIA, $ID_DOCENTE,$op2,$asig, $usuario;
   public $option1,$option2,$option3,$option4,$vista;

   public $prueba, $op, $mensaje, $mensaje1, $file, $date, $dia2, $message, $file2, $arch, $vid, $pdf, $formato, $tipo;
   public $titulo, $punteo, $fecha_e, $fecha_ext, $descripcion, $act,$tema_a,$descripciont,$tema,$unidad, $temasb, $archivo, $nota, $ID_ACTIVIDADES ;



    public function render()
    {
        if($this->archivo!=null){
            if($this->archivo->getClientOriginalExtension()=="pdf"){
                $archivo = "pdf".time().".".$this->archivo->getClientOriginalExtension();
                $this->arch=$archivo;
                $this->archivo->storeAS('imagen/temporalpdf/', $this->arch,'public_up');
            }
            if($this->archivo->getClientOriginalExtension()=="jpg" or $this->archivo->getClientOriginalExtension()=="png" or $this->archivo->getClientOriginalExtension()=="jpeg"){
                $this->formato=1;
            }
            elseif($this->archivo->getClientOriginalExtension()=="mp4" or $this->archivo->getClientOriginalExtension()=="mpeg"){
                $this->formato=2;
            }
            elseif($this->archivo->getClientOriginalExtension()=="pdf"){
                $this->formato=3;
            }

        }

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

        $asignaciones="";
        if($this->asig!=null){
            $asignaciones=DB::table('tb_asignaciones_e')
        ->join('tb_grados', 'tb_asignaciones_e.ID_GR', '=', 'tb_grados.ID_GR')
        ->join('tb_seccions', 'tb_asignaciones_e.ID_SC', '=', 'tb_seccions.ID_SC')
        ->join('tb_estudiantes', 'tb_asignaciones_e.id', '=', 'tb_seccions.id')
        ->select('tb_asignaciones_e.ID_E', 'tb_grados.GRADO', 'tb_seccions.SECCION','tb_estudiantes.TB_INFO_NOMBRE')
        ->where('tb_asignaciones_e.ID_GR','=',$this->grado)
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
            $actividades=DB::table('tb_actividades')
        ->join('tb_materias','tb_actividades.ID_MATERIA','=','tb_materias.ID_MATERIA')
        ->join('tb_docentes', 'tb_actividades.ID_DOCENTE', '=', 'tb_docentes.ID_DOCENTE')
        ->join('tb_grados', 'tb_actividades.ID_GR', '=', 'tb_grados.ID_GR')
        ->join('tb_seccions', 'tb_actividades.ID_SC', '=', 'tb_seccions.ID_SC')
        ->join('users', 'tb_actividades.ID', '=', 'users.ID')
        ->select('tb_actividades.ID_ACTIVIDADES', 'tb_materias.NOMBRE_MATERIA', 'tb_docentes.NOMBRE_DOCENTE', 'tb_grados.NOMBRE_GRADO', 'tb_seccions.SECCION','tb_materias.ID_MATERIA','tb_actividades.NOMBRE_ACTIVIDAD')
        ->where('tb_actividades.ID_GR','=',$this->act)
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
        $sql= 'SELECT  TB_INFO_NOMBRE  FROM tb_estudiantes';
        $estu=DB::select($sql);
        $sql= 'SELECT  ID_ACTIVIDADES  FROM tb_actividades';
        $actividad=DB::select($sql);
        $sql= 'SELECT * FROM tb_unidades_fijas';
        $unidadesf=DB::select($sql);
        $sql= 'SELECT * FROM tb_temas';
        $temas=DB::select($sql);
        $sql= 'SELECT * FROM users';
        $Usuarios=DB::select($sql);
        return view('livewire.contenido-component',compact('materias','grados','secciones','uniones','unidades','maestros','actividades','asignaciones','estu','actividad','unidadesf','temas','Usuarios'));

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
        if($this->validate([
            'titulo' => 'required',
            'punteo' => 'required',
            'fecha_e' => 'required',
            'descripcion' => 'required',
            'temasb' => 'required',
        ])==false){
            $error="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['error' => 'Validar el input vacio']);
        }

        else{
        $titulo=$this->titulo;
        $punteo=$this->punteo;
        $fecha_e=$this->fecha_e;
        $descripcion=$this->descripcion;
        $fecha_ext=$this->fecha_ext;
        $temasb=$this->temasb;

        $archivo="";
        if($this->archivo!=null){
            if($this->archivo->getClientOriginalExtension()=="jpg" or $this->archivo->getClientOriginalExtension()=="png" or $this->archivo->getClientOriginalExtension()=="jpeg"){
                $archivo = "img".time().".".$this->archivo->getClientOriginalExtension();
                $this->arch=$archivo;
                $this->archivo->storeAS('imagen/actividades/', $this->arch,'public_up');
                $this->formato=1;
            }
            elseif($this->archivo->getClientOriginalExtension()=="mp4" or $this->archivo->getClientOriginalExtension()=="mpeg"){
                $archivo = "vid".time().".".$this->archivo->getClientOriginalExtension();
                $this->arch=$archivo;
                $this->archivo->storeAS('imagen/videos_act/', $this->arch,'public_up');
                $this->formato=2;
            }
            elseif($this->archivo->getClientOriginalExtension()=="pdf"){
                $archivo = "pdf".time().".".$this->archivo->getClientOriginalExtension();
                $this->arch=$archivo;
                $this->archivo->storeAS('imagen/pdf_act/', $this->arch,'public_up');
                $this->formato=3;
            }
        }


        $actividades=DB::table('tb_actividades')->insert(
            [
                'NOMBRE_ACTIVIDAD'=>$titulo,
                'descripcion'=>$descripcion,
                'archivos'=>$this->arch,
                'punteo'=>$punteo,
                'fecha_entr'=>$fecha_e,
                'fecha_extr'=>$fecha_ext,
                'ID_TEMA'=>$temasb,
            ]);

            if($actividades){
                unset($this->mensaje);;
                unset($this->mensaje1);
                $this->op='addcontenidos';
                $this->mensaje='Insertado correctamente';
                }
                else {
                unset($this->mensaje);;
                unset($this->mensaje1);
                $this->op='addcontenidos';
                $this->mensaje1='Datos no  insertados correctamente';
                }        
        }


    }

    public function Subir_Tema(){
        if($this->validate([
            'tema' => 'required',
            'unidad' => 'required',
            'descripciont' => 'required',

        ])==false){
            $error="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['error' => 'Validar el input vacio']);
        }

        else{
        $tema=$this->tema;
        $unidad=$this->unidad;
        $descripciont=$this->descripciont;
        

        $temas=DB::table('tb_temas')->insert(
            [
                'NOMBRE_TEMA'=>$tema,
                'ID_UNIDADES_FIJAS'=>$unidad,
                'DESCRIPCION'=>$descripciont,
            ]);

            if($temas){
                unset($this->mensaje);;
                unset($this->mensaje1);
                $this->op='addcontenidos';
                $this->mensaje='Insertado correctamente';
                }
                else {
                unset($this->mensaje);;
                unset($this->mensaje1);
                $this->op='addcontenidos';
                $this->mensaje1='Datos no  insertados correctamente';
                }
    }

    



}
public function nota($nota,$ida){
    $nota=$this->nota;
    $this->ID_ACTIVIDADES=$ida;


    $notas=DB::table('tb_notas')->insert(
        [
            'NOTA'=>$nota,
            'ID_ACTIVIDADES'=>$ida,
        ]);


}
}