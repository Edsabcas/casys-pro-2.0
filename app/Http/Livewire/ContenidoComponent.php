<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;
use Livewire\WithFileUploads;


class ContenidoComponent extends Component
{
    use WithFileUploads;

   public $grado,$mat, $nombre_g, $nombre_s, $unidad1, $NOMBRE_MATERIA, $ID_DOCENTE,$op2,$asig, $usuario,$idsecc,$unidadfija,$unidadn,$idusuario;
   public $option1,$option2,$option3,$option4,$vista,$vista2;
   public $prueba, $op, $mensaje, $mensaje1, $file, $date, $dia2, $message, $file2, $arch, $vid, $pdf, $formato, $tipo, $id_act;
   public $titulo, $punteo, $fecha_e, $fecha_ext, $descripcion, $act,$tema_a,$descripciont,$tema,$unidad, $temasb, $archivo, $nota, $descripciona;

public     $titulo2, $punteo2, $fecha_e2, $descripcion2, $fecha_ext2, $temasb2, $grado2, $idsecc2, $arch2,$tema2, $unidad2, $descripciont2, $nombreu;

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
        if($this->unidadfija!=null){
            $actividades=DB::table('tb_actividades')
            ->join('tb_materias','tb_actividades.ID_MATERIA','=','tb_materias.ID_MATERIA')
            ->join('tb_grados', 'tb_actividades.ID_GR', '=', 'tb_grados.ID_GR')
            ->join('tb_seccions', 'tb_actividades.ID_SC', '=', 'tb_seccions.ID_SC')
            ->join('users', 'tb_actividades.ID', '=', 'users.id')
            ->join('tb_unidades_fijas', 'tb_actividades.ID_UNIDADES_FIJAS', '=', 'tb_unidades_fijas.ID_UNIDADES_FIJAS')
            ->select('tb_actividades.ID_ACTIVIDADES', 'tb_materias.NOMBRE_MATERIA', 'tb_grados.ID_GR', 'tb_seccions.ID_SC', 'tb_materias.ID_MATERIA', 'users.name', 'tb_actividades.NOMBRE_ACTIVIDAD', 'tb_unidades_fijas.ID_UNIDADES_FIJAS','tb_actividades.fecha_cr','tb_actividades.fecha_entr','tb_actividades.descripcion','tb_actividades.archivos')
            ->where('tb_actividades.ID_UNIDADES_FIJAS','=',$this->unidadfija)
            ->where('tb_actividades.ID_GR','=',$this->grado)
            ->where('tb_actividades.ID_SC','=',$this->idsecc)
            ->where('tb_actividades.ID_MATERIA','=',$this->unidad1)
            ->get();
        }

        
        $actividades2="";
        if($this->unidadn!=null){
            $actividades2=DB::table('tb_actividades')
            ->join('tb_materias','tb_actividades.ID_MATERIA','=','tb_materias.ID_MATERIA')
            ->join('tb_grados', 'tb_actividades.ID_GR', '=', 'tb_grados.ID_GR')
            ->join('tb_seccions', 'tb_actividades.ID_SC', '=', 'tb_seccions.ID_SC')
            ->join('users', 'tb_actividades.ID', '=', 'users.id')
            ->join('tb_unidades', 'tb_actividades.ID_UNIDADES', '=', 'tb_unidades.ID_UNIDADES')
            ->select('tb_actividades.ID_ACTIVIDADES', 'tb_materias.NOMBRE_MATERIA', 'tb_grados.ID_GR', 'tb_seccions.ID_SC', 'tb_materias.ID_MATERIA', 'users.name', 'tb_actividades.NOMBRE_ACTIVIDAD', 'tb_unidades.ID_UNIDADES')
            ->where('tb_actividades.ID_UNIDADES','=',$this->unidadn)
            ->where('tb_actividades.ID_GR','=',$this->grado)
            ->where('tb_actividades.ID_SC','=',$this->idsecc)
            ->where('tb_actividades.ID_MATERIA','=',$this->unidad1)
            ->get();
        }

        $PlanUnion="";
        if($this->grado!=null){
            $PlanUnion=DB::table('tb_planificacionanual')
        ->join('tb_materias','tb_planificacionanual.ID_MATERIA','=','tb_materias.ID_MATERIA')
        ->join('tb_grados', 'tb_planificacionanual.ID_GR', '=', 'tb_grados.ID_GR')
        ->join('tb_seccions', 'tb_planificacionanual.ID_SC', '=', 'tb_seccions.ID_SC')
        ->select('tb_planificacionanual.ID_PLAN', 'tb_planificacionanual.DESCRIPCION', 'tb_materias.NOMBRE_MATERIA', 'tb_grados.GRADO', 'tb_seccions.SECCION','tb_materias.ID_MATERIA')
        ->where('tb_planificacionanual.ID_GR','=',$this->grado)
        ->where('tb_planificacionanual.ID_MATERIA','=',$this->unidad1)
        ->get();
        }

        $temas="";
        if($this->unidadfija!=null){
            $temas=DB::table('tb_temas')
            ->join('tb_materias','tb_temas.ID_MATERIA','=','tb_materias.ID_MATERIA')
            ->join('tb_grados', 'tb_temas.ID_GR', '=', 'tb_grados.ID_GR')
            ->join('tb_seccions', 'tb_temas.ID_SC', '=', 'tb_seccions.ID_SC')
            ->join('users', 'tb_temas.ID', '=', 'users.id')
            ->join('tb_unidades_fijas', 'tb_temas.ID_UNIDADES_FIJAS', '=', 'tb_unidades_fijas.ID_UNIDADES_FIJAS')
            ->select('tb_temas.ID_TEMA', 'tb_materias.NOMBRE_MATERIA', 'tb_grados.ID_GR', 'tb_seccions.ID_SC', 'tb_materias.ID_MATERIA', 'users.name', 'tb_temas.NOMBRE_TEMA', 'tb_unidades_fijas.ID_UNIDADES_FIJAS','tb_temas.DESCRIPCION')
            ->where('tb_temas.ID_UNIDADES_FIJAS','=',$this->unidadfija)
            ->where('tb_temas.ID_GR','=',$this->grado)
            ->where('tb_temas.ID_SC','=',$this->idsecc)
            ->where('tb_temas.ID_MATERIA','=',$this->unidad1)
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
        $sql= 'SELECT * FROM tb_unidades_fijas';
        $unidadesf=DB::select($sql);
        $sql= 'SELECT * FROM users';
        $Usuarios=DB::select($sql);
        return view('livewire.contenido-component',compact('materias','grados','secciones','uniones','unidades','maestros','actividades','asignaciones','estu','unidadesf','temas','Usuarios','PlanUnion','actividades2'));

    }
    
    public function mostrar_m($id,$nomb,$secc,$ids,$num)
    {
        unset($this->mat);
        $this->grado=$id;
        $this->nombre_g=$nomb;
        $this->nombre_s=$secc;
        $this->idsecc=$ids;
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

    public function vista_a($num)
    {
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
        elseif($num==3){
            $this->op2=3;
        }

    }
    public function validar_u($nunif){
        $this->unidadfija=$nunif;
 
        if($this->unidadfija==1){
            if($this->vista!=null && $this->vista==1){
                unset($this->unidadn);
                $this->vista=0;
                $this->vista2=0;

            }
            else{
                $this->vista2=0;
                $this->vista=1;
            }
        }

        if($this->unidadfija==2){
            if($this->vista!=null && $this->vista==2){
                unset($this->unidadn);
                $this->vista=0;
                $this->vista2=0;

            }
            else{
                $this->vista2=0;
                $this->vista=2;
            }
        }

        if($this->unidadfija==3){
            if($this->vista!=null && $this->vista==3){
                unset($this->unidadn);
                $this->vista=0;
                $this->vista2=0;
            }
            else{
                $this->vista2=0;
                $this->vista=3;
            }
        }

        if($this->unidadfija==4){
            if($this->vista!=null && $this->vista==4){
                $this->vista=0;
                $this->unidadn=null;
            }
            else{
                $this->vista2=0;
                $this->vista=4;
            }
        }
        
        if($this->unidadfija==5){
            if($this->vista!=null && $this->vista==5){
                $this->vista=0;
                $this->unidadn=null;
            }
            else{
                $this->vista2=0;
                $this->vista=5;
            }
        }  
    }

    public function validar_u2($nun,$nomu){
        unset($this->unidadn);
        $this->unidadn=$nun;
        $this->nombreu=$nomu;

 
        if($this->unidadn==$this->unidadn){
            if($this->vista2!=null && $this->vista2==$this->unidadn){
                $this->vista=0;
            }
            else{
                $this->vista=0;
                $this->vista2=6;
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
        $grado=$this->grado;
        $idsecc=$this->idsecc;
        $unidad1=$this->unidad1;
        $unidadfija=$this->unidadfija;
        $this->idusuario=auth()->user()->id;
        


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

        DB::begintransaction();


        $actividades=DB::table('tb_actividades')->insert(
            [
                'NOMBRE_ACTIVIDAD'=>$titulo,
                'descripcion'=>$descripcion,
                'archivos'=>$this->arch,
                'punteo'=>$punteo,
                'fecha_entr'=>$fecha_e,
                'fecha_extr'=>$fecha_ext,
                'ID_TEMA'=>$temasb,
                'ID_MATERIA'=>$unidad1,
                'ID_GR'=>$grado,
                'ID_SC'=>$idsecc,
                'ID_UNIDADES_FIJAS'=>$unidadfija,
                'ID'=>$this->idusuario,

            ]);

            if($actividades){
                DB::commit();
                unset($this->mensaje);
                unset($this->mensaje1);
                $this->op='addcontenidos';
                $this->mensaje='Insertado correctamente';
                }
                else {
                DB::rollback();
                unset($this->mensaje);
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
        DB::begintransaction();
        

        $temas=DB::table('tb_temas')->insert(
            [
                'NOMBRE_TEMA'=>$tema,
                'ID_UNIDADES'=>$unidad,
                'DESCRIPCION'=>$descripciont,
            ]);

            if($temas){
                DB::commit();
                unset($this->mensaje);
                unset($this->mensaje1);
                $this->op='addcontenidos';
                $this->mensaje='Insertado correctamente';
                }
                else {
                DB::rollback();
                unset($this->mensaje);
                unset($this->mensaje1);
                $this->op='addcontenidos';
                $this->mensaje1='Datos no  insertados correctamente';
                }
    }
}

Public function editt($id){
    $id_tem=$id;
    $sql='SELECT * FROM tb_calendarizacion WHERE ID_CALENDARIZACION=?';
    $calendarizacion=DB:: select($sql, array($id_cal));
    $sql= 'SELECT * FROM tb_unidades_fijas';
    $unidades=DB::select($sql);

    if($calendarizacion !=null){
        foreach($calendarizacion as $calen)
        {
            $this->id_cal=$calen->ID_CALENDARIZACION;
            $this->unidad=$calen->ID_UNIDADES_FIJAS;
            $this->fecha_ini=$calen->FECHA_INICIO;
            $this->fecha_final=$calen->FECHA_FINAL;

        }
    }

    $this->op=43;
   $this->edit=1;
}

    public function Subir_Tema2(){
        if($this->validate([
            'tema2' => 'required',
            'unidad2' => 'required',
            'descripciont2' => 'required',

        ])==false){
            $error="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['error' => 'Validar el input vacio']);
        }

        else{
        $tema2=$this->tema2;
        $unidad2=$this->unidad2;
        $descripciont2=$this->descripciont2;
        DB::begintransaction();
        

        $temas=DB::table('tb_temas')->insert(
            [
                'NOMBRE_TEMA'=>$tema2,
                'ID_UNIDADES_FIJAS'=>$unidad2,
                'DESCRIPCION'=>$descripciont2,
            ]);

            if($temas){
                DB::commit();
                unset($this->mensaje);
                unset($this->mensaje1);
                $this->op='addcontenidos';
                $this->mensaje='Insertado correctamente';
                }
                else {
                DB::rollback();
                unset($this->mensaje);
                unset($this->mensaje1);
                $this->op='addcontenidos';
                $this->mensaje1='Datos no  insertados correctamente';
                }
    }
}

public function nota($ida){
    $nota=$this->nota;
    $this->id_act=$ida;
    $grado=$this->grado;
    $idsecc=$this->idsecc;
    $unidad1=$this->unidad1;
    $unidadfija=$this->unidadfija;
    $unidadn=$this->unidadn;
    $this->idusuario=auth()->user()->id;
    


    DB::begintransaction();



    $notas=DB::table('tb_notas')->insert(
        [
            'NOTA'=>$nota,
            'ID_ACTIVIDADES'=>$this->id_act,
            'ID_MATERIA'=>$unidad1,
            'ID_GR'=>$grado,
            'ID_SC'=>$idsecc,
            'ID_UNIDADES_FIJAS'=>$unidadfija,
            'ID_UNIDADES'=>$this->unidadn,
            'id_user'=>$this->idusuario,

        ]);


}

public function Subir_Plan(){
    if($this->validate([
        'descripciona' => 'required',

    ])==false){
        $error="no encontrado";
        session(['message'=>'no encontrado']);
        return back()->withErrors(['error' => 'Validar el input vacio']);
    }

    else{
    $descripciona=$this->descripciona;
    $grado=$this->grado;
    $idsecc=$this->idsecc;
    $unidad1=$this->unidad1;
    
    DB::begintransaction();
    

    $planificacion=DB::table('tb_planificacionanual')->insert(
        [
            'DESCRIPCION'=>$descripciona,
            'ID_MATERIA'=>$unidad1,
            'ID_GR'=>$grado,
            'ID_SC'=>$idsecc,
        ]);

        if($planificacion){
            DB::commit();
            unset($this->mensaje);;
            unset($this->mensaje1);
            $this->op='addcontenidos';
            $this->mensaje='Insertado correctamente';
            }
            else {
            DB::rollback();
            unset($this->mensaje);;
            unset($this->mensaje1);
            $this->op='addcontenidos';
            $this->mensaje1='Datos no  insertados correctamente';
            }
}

}

public function Subir_Act2(){
    if($this->validate([
        'titulo2' => 'required',
        'punteo2' => 'required',
        'fecha_e2' => 'required',
        'descripcion2' => 'required',
        'temasb2' => 'required',
    ])==false){
        $error="no encontrado";
        session(['message'=>'no encontrado']);
        return back()->withErrors(['error' => 'Validar el input vacio']);
    }

    else{
    $titulo2=$this->titulo2;
    $punteo2=$this->punteo2;
    $fecha_e2=$this->fecha_e2;
    $descripcion2=$this->descripcion2;
    $fecha_ext2=$this->fecha_ext2;
    $temasb2=$this->temasb2;
    $grado=$this->grado;
    $idsecc=$this->idsecc;
    $unidad1=$this->unidad1;
    $unidadn=$this->unidadn;
    $this->idusuario=auth()->user()->id;
    


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

    DB::begintransaction();


    $actividades2=DB::table('tb_actividades')->insert(
        [
            'NOMBRE_ACTIVIDAD'=>$titulo2,
            'descripcion'=>$descripcion2,
            'archivos'=>$this->arch,
            'punteo'=>$punteo2,
            'fecha_entr'=>$fecha_e2,
            'fecha_extr'=>$fecha_ext2,
            'ID_TEMA'=>$temasb2,
            'ID_MATERIA'=>$unidad1,
            'ID_GR'=>$grado,
            'ID_SC'=>$idsecc,
            'ID_UNIDADES'=>$this->unidadn,
            'ID'=>$this->idusuario,

        ]);

        if($actividades2){
            DB::commit();
            unset($this->mensaje);;
            unset($this->mensaje1);
            $this->op='addcontenidos';
            $this->mensaje='Insertado correctamente';
            }
            else {
            DB::rollback();
            unset($this->mensaje);;
            unset($this->mensaje1);
            $this->op='addcontenidos';
            $this->mensaje1='Datos no  insertados correctamente';
            }        
    }


}


}