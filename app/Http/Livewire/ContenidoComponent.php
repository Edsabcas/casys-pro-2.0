<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use App\Models\Actividad;

class ContenidoComponent extends Component
{
    use WithFileUploads;

   public $grado,$mat, $nombre_g, $nombre_s, $unidad1, $NOMBRE_MATERIA, $ID_DOCENTE,$op2,$asig, $usuario,$idsecc,$unidadfija,$unidadn,$idusuario;
   public $vista,$vista2;
   public $prueba, $op, $mensaje, $mensaje1, $file, $date, $dia2, $message, $file2, $arch, $vid, $pdf, $formato, $tipo, $id_act,$editt,$editp;
   public $titulo, $punteo, $fecha_e, $fecha_ext, $descripcion, $act,$tema_a,$descripciont,$tema,$unidad, $temasb, $archivo, $nota, $descripciona;
   public $restriccion, $fecha_date; 
   public $titulo2, $punteo2, $fecha_e2, $descripcion2, $fecha_ext2, $temasb2, $grado2, $idsecc2, $arch2,$tema2, $unidad2, $descripciont2, $nombreu,$id_tem, $edita,$id_plan,$edita2;
   public $prueba2, $idas, $nombress,$opf;
   public $option1, $option2, $option3, $option4, $option5, $option6;
   public $validation1, $validation2, $validation3, $validation4, $validation5,$validation6;
   public $vistar,$vistar2;
   public $texto_advertencia, $prioridad_advertencia, $fecha_inicio, $fecha_fin, $invalido, $advertencia_adver, $advertenciass, $advertenciasss;
   public $blockadvertencia, $dia_exacto;

    

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

        $unidadesr="";
            $unidadesr=DB::table('tb_unidades')
            ->join('tb_materias','tb_unidades.ID_MATERIA','=','tb_materias.ID_MATERIA')
            ->select('tb_unidades.ID_UNIDADES', 'tb_materias.ID_MATERIA', 'tb_unidades.ESTADO','tb_unidades.NOMNBRE_UNIDAD')
            ->get();
        

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
            ->select('tb_actividades.ID_ACTIVIDADES', 'tb_materias.NOMBRE_MATERIA', 'tb_grados.ID_GR', 'tb_seccions.ID_SC', 'tb_materias.ID_MATERIA', 'users.name', 'tb_actividades.NOMBRE_ACTIVIDAD', 'tb_unidades.ID_UNIDADES','tb_actividades.fecha_cr','tb_actividades.fecha_entr','tb_actividades.descripcion','tb_actividades.archivos')
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
        ->where('tb_planificacionanual.ID_SC','=',$this->idsecc)
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

        $temas2="";
        if($this->unidadn!=null){
            $temas2=DB::table('tb_temas')
            ->join('tb_materias','tb_temas.ID_MATERIA','=','tb_materias.ID_MATERIA')
            ->join('tb_grados', 'tb_temas.ID_GR', '=', 'tb_grados.ID_GR')
            ->join('tb_seccions', 'tb_temas.ID_SC', '=', 'tb_seccions.ID_SC')
            ->join('users', 'tb_temas.ID', '=', 'users.id')
            ->join('tb_unidades', 'tb_temas.ID_UNIDADES', '=', 'tb_unidades.ID_UNIDADES')
            ->select('tb_temas.ID_TEMA', 'tb_materias.NOMBRE_MATERIA', 'tb_grados.ID_GR', 'tb_seccions.ID_SC', 'tb_materias.ID_MATERIA', 'users.name', 'tb_temas.NOMBRE_TEMA', 'tb_unidades.ID_UNIDADES','tb_temas.DESCRIPCION')
            ->where('tb_temas.ID_UNIDADES','=',$this->unidadn)
            ->where('tb_temas.ID_GR','=',$this->grado)
            ->where('tb_temas.ID_SC','=',$this->idsecc)
            ->where('tb_temas.ID_MATERIA','=',$this->unidad1)
            ->get();
        }



        $notas="";
        if($this->unidadfija!=null){
            $notas=DB::table('tb_notas')
        ->join('tb_grados', 'tb_notas.ID_GR', '=', 'tb_grados.ID_GR')
        ->join('tb_seccions', 'tb_notas.ID_SC', '=', 'tb_seccions.ID_SC')
        ->join('tb_estudiantes', 'tb_notas.ID_ESTUDIANTE', '=', 'tb_estudiantes.id')
        ->join('tb_materias','tb_notas.ID_MATERIA','=','tb_materias.ID_MATERIA')
        ->join('tb_unidades_fijas', 'tb_notas.ID_UNIDADES_FIJAS', '=', 'tb_unidades_fijas.ID_UNIDADES_FIJAS')
        ->join('tb_actividades', 'tb_notas.ID_ACTIVIDADES', '=', 'tb_actividades.ID_ACTIVIDADES')
        ->select('tb_notas.ID_NOTA', 'tb_grados.GRADO', 'tb_seccions.SECCION', 'tb_estudiantes.id','tb_actividades.ID_ACTIVIDADES', 'tb_unidades_fijas.ID_UNIDADES_FIJAS', 'tb_grados.ID_GR', 'tb_seccions.ID_SC', 'tb_materias.ID_MATERIA', 'tb_notas.ID_ESTUDIANTE','tb_notas.NOTA')
        ->where('tb_notas.ID_UNIDADES_FIJAS','=',$this->unidadfija)
            ->where('tb_notas.ID_GR','=',$this->grado)
            ->where('tb_notas.ID_SC','=',$this->idsecc)
            ->where('tb_notas.ID_MATERIA','=',$this->unidad1)
            //->where('tb_notas.ID_ESTUDIANTE','=',$this->nombress)
        ->get();
        } 
        
        $estu="";
        $estu=DB::table('tb_asignaciones_e')
        ->join('tb_grados', 'tb_asignaciones_e.ID_GR', '=', 'tb_grados.ID_GR')
        ->join('tb_seccions', 'tb_asignaciones_e.ID_SC', '=', 'tb_seccions.ID_SC')
        ->join('tb_estudiantes', 'tb_asignaciones_e.id', '=', 'tb_estudiantes.id')
        ->select('tb_estudiantes.id','tb_asignaciones_e.ID_E', 'tb_grados.GRADO', 'tb_seccions.SECCION','tb_estudiantes.TB_INFO_NOMBRE','tb_grados.ID_GR')
        ->where('tb_asignaciones_e.ID_GR','=',$this->grado)
        ->where('tb_asignaciones_e.ID_SC','=',$this->idsecc)
        ->get();

        
        $this->dia_exacto=date("Y-m-d");
        $sql= 'SELECT * FROM tb_materias';
        $materias=DB::select($sql);
        $sql= 'SELECT * FROM tb_grados';
        $grados=DB::select($sql);
        $sql= 'SELECT * FROM tb_seccions';
        $secciones=DB::select($sql);
        $sql= 'SELECT * FROM tb_docentes';
        $maestros=DB::select($sql);
        $sql= 'SELECT * FROM tb_unidades_fijas';
        $unidadesf=DB::select($sql);
        $sql= 'SELECT * FROM users';
        $Usuarios=DB::select($sql);
        $sql= 'SELECT * FROM estado_actividades';
        $Estado_acts=DB::select($sql);
        $sql= 'SELECT * FROM tb_advertencias';
        $this->advertenciass=DB::select($sql);
        return view('livewire.contenido-component',compact('materias','grados','secciones','uniones','unidades','maestros','actividades','asignaciones','unidadesf','temas','temas2','Usuarios','PlanUnion','actividades2','notas','estu','Estado_acts','unidadesr'));

    }
    
    //funcion de mostrar todas las mataerias existentes
    public function mostrar_m($id,$nomb,$secc,$ids,$num)
    {
        unset($this->mat);
        $this->grado=$id;
        $this->nombre_g=$nomb;
        $this->nombre_s=$secc;
        $this->idsecc=$ids;
        $this->op2=$num;
    }

    public function mostrar_mef($id,$nomb,$secc,$ids,$num)
    {
        unset($this->mat);
        $this->grado=$id;
        $this->nombre_g=$nomb;
        $this->nombre_s=$secc;
        $this->idsecc=$ids;
        $this->op2=$num;
    }

    //funcion que muestra todas las unidades 
    public function mostrar_u($id,$nombm,$nombrem,$num)
    {
        unset($this->unidad1);
        $this->unidad1=$id;
        $this->NOMBRE_MATERIA=$nombm;
        $this->ID_DOCENTE=$nombrem;
        $this->op2=$num;
        
    }

    public function confirmar_materia($id){
        $this->unidad1=$id;
    }

    //funcion de la visualizacion de las vista de actividades de las unidades fijas
    public function vista_a($num)
    {
        $this->op2=$num;
        
    }

    //funcion de la visualizacion de las vista de actividades de las unidades nuevas
    public function vista_a2($num)
    {
        $this->op2=$num;
            
    }

    //funcion de la vista de temas de unidades fijas
    public function vista_t($num)
    {
        $this->op2=$num;
        
    }


    public function vista_eleccion($num,$flujo)
    {
        $this->op2=$num;
        $this->opf=$flujo;
    }

    public function vista_eleccion2($num,$flujo)
    {
        $this->op2=$num;
        $this->opf=$flujo;

    }
    //funcion de la vista de temas de unidades nuevas
    public function vista_t2($num)
    {
        $this->op2=$num;

        
    }

    //funcion de la paginacion
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

        elseif($num==4){
            $this->op2=4;
        }

        elseif($num==5){
            $this->op2=5;
        }


        elseif($num==6){
            $this->op2=6;
        }


    }

    //validacion de unidades 
    public function validar_u($nunif){
        $this->limpiarplan();
        $this->unidadfija=$nunif;
        $this->fecha_date=date("Y-m-d");

        $sql= 'SELECT ID_UNIDADES_FIJAS, FECHA_INICIO, FECHA_FINAL FROM TB_CALENDARIZACION';
        $fecha_dates=DB::select($sql);

        $this->restriccion;

        foreach($fecha_dates as $fecha_d)
        {
            if($fecha_d->ID_UNIDADES_FIJAS==$this->unidadfija && ($this->fecha_date < $fecha_d->FECHA_INICIO or $this->fecha_date > $fecha_d->FECHA_FINAL)){
                $this->restriccion=1;
            }
            elseif($fecha_d->ID_UNIDADES_FIJAS==$this->unidadfija && ($this->fecha_date > $fecha_d->FECHA_INICIO or $this->fecha_date < $fecha_d->FECHA_FINAL)){
                $this->restriccion=0;
            }
        } 
 
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

    public function validar_ur($nunif){
        $this->unidadfija=$nunif;
        
        if($this->unidadfija==1){
            if($this->vistar!=null && $this->vistar==1){
                unset($this->unidadn);
                $this->vistar=0;
                $this->vistar2=0;

            }
            else{
                $this->vistar2=0;
                $this->vistar=1;
            }
        }

        if($this->unidadfija==2){
            if($this->vistar!=null && $this->vistar==2){
                unset($this->unidadn);
                $this->vistar=0;
                $this->vistar2=0;

            }
            else{
                $this->vistar2=0;
                $this->vistar=2;
            }
        }

        if($this->unidadfija==3){
            if($this->vistar!=null && $this->vistar==3){
                unset($this->unidadn);
                $this->vistar=0;
                $this->vistar2=0;
            }
            else{
                $this->vistar2=0;
                $this->vistar=3;
            }
        }

        if($this->unidadfija==4){
            if($this->vistar!=null && $this->vistar==4){
                $this->vistar=0;
                $this->unidadn=null;
            }
            else{
                $this->vistar2=0;
                $this->vistar=4;
            }
        }
        
        if($this->unidadfija==5){
            if($this->vistar!=null && $this->vistar==5){
                $this->vistar=0;
                $this->unidadn=null;
            }
            else{
                $this->vistar2=0;
                $this->vistar=5;
            }
        }
    }   

    //funcion que envía a advertencias
    public function advertencia($adv){
        $this->vistar=$adv;
        $sql= 'SELECT * FROM tb_advertencias';
        $this->advertenciasss=DB::select($sql);
        $fechadehoy=date("Y-m-d");

        foreach($this->advertenciasss as $advertenciaa){
            if($fechadehoy>=$advertenciaa->FECHA_INICIO && $fechadehoy<=$advertenciaa->FECHA_FIND){
                $this->blockadvertencia=1;
            }
            elseif($fechadehoy>=$advertenciaa->FECHA_INICIO && $fechadehoy>=$advertenciaa->FECHA_FIND){
                $this->blockadvertencia=0;
            }
            else{
                $this->blockadvertencia=0;
            }
        }

    }
    
    //funcion que inserta datos
    public function advertencia_in(){
        if($this->validate([
            'texto_advertencia' => 'required',
            'prioridad_advertencia' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
        ])==false){
            $error="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['error' => 'Validar el input vacio']);
        }
        else{
            $textoadvertencia=$this->texto_advertencia;
            $prioridadadvertencia=$this->prioridad_advertencia;
            $fechainicio=$this->fecha_inicio;
            $fechafin=$this->fecha_fin;

            if($fechainicio>$fechafin){
                $this->invalido=1;
            }
            else{
                $this->invalido=0;
                DB::begintransaction();
                $advertencias=DB::table('tb_advertencias')->insert(
                    [
                        'DESCRIPCION'=>$textoadvertencia,
                        'PRIORIDAD'=>$prioridadadvertencia,
                        'FECHA_INICIO'=>$fechainicio,
                        'FECHA_FIND'=>$fechafin,
        
                    ]
                    );
                if($advertencias){
                    $this->reset();
                
                    DB::commit();
                    $this->advertencia_adver=1;
                }
                else{
                    DB::rollback();
                    $this->advertencia_adver=2;
                }
            }
        }
    }

    //funcion de eliminar advertencias
Public function eliminaradv($id){
    $id_adv=$id;
    DB::begintransaction();

    $adv=DB::table('tb_advertencias')->where('ID_ADVERTENCIA','=', $id_adv)->delete();

    if($adv){
        DB::commit();
        unset($this->mensaje);
        unset($this->mensaje3);
        unset($this->mensaje_eliminar);
        $this->op='addvertencias';
        $this->mensaje_eliminar='Eliminado Correctamente';
    }
    else{
        DB::rollback();
        unset($this->mensaje1);
        unset($this->mensaje4);
        unset($this->mensaje_eliminar2);
        $this->op='addvertencias';
        $this->mensaje_eliminar2='No fue posible eliminarlo';
    }
}

    //funcion que muestra la vista de las unidades nuevas creadas
    public function validar_u2($nun,$nomu){
        unset($this->unidadn);
        $this->unidadn=$nun;
        $this->nombreu=$nomu;
        $this->fecha_date=date("Y-m-d");

        $sql= 'SELECT ID_UNIDADES, FECHA_INICIO, FECHA_FINAL FROM TB_CALENDARIZACION';
        $fecha_dates=DB::select($sql);

        $this->restriccion;

        foreach($fecha_dates as $fecha_d)
        {
            if($fecha_d->ID_UNIDADES==$this->unidadn && ($this->fecha_date < $fecha_d->FECHA_INICIO or $this->fecha_date > $fecha_d->FECHA_FINAL)){
                $this->restriccion=1;
            }
            elseif($fecha_d->ID_UNIDADES==$this->unidadn && ($this->fecha_date > $fecha_d->FECHA_INICIO or $this->fecha_date < $fecha_d->FECHA_FINAL)){
                $this->restriccion=0;
            }
        } 
 
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

   //subida de actividades en las unidades fijas
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
            unset($this->mensaje3);
            unset($this->mensaje4);
            $this->op='addcontenidos';
            $this->mensaje='Insertado correctamente';
            }
            else {
            DB::rollback();
            unset($this->mensaje);
            unset($this->mensaje1);
            unset($this->mensaje4);
            unset($this->mensaje3);
            $this->op='addcontenidos';
            $this->mensaje1='Datos no  insertados correctamente';
            }        
    }


}



//edicion de las actividades de unidades fijas
    Public function edita($id){
        $this->limpiarcract();
        $edita=$id;
        $sql='SELECT * FROM tb_actividades WHERE ID_ACTIVIDADES=?';
        $actividadesedit=DB:: select($sql, array($edita));
    
        if($actividadesedit !=null){
            foreach($actividadesedit as $actu)
            {
                $this->edita=$actu->ID_ACTIVIDADES;
                $this->titulo=$actu->NOMBRE_ACTIVIDAD;
                $this->descripcion=$actu->descripcion;
                $this->arch=$actu->archivos;
                $this->punteo=$actu->punteo;
                $this->fecha_e=$actu->fecha_entr;
                $this->fecha_ext=$actu->fecha_extr;
                $this->unidad1=$actu->ID_MATERIA;
                $this->temasb=$actu->ID_TEMA;
                $this->grado=$actu->ID_GR;
                $this->idsecc=$actu->ID_SC;
                $this->unidadfija=$actu->ID_UNIDADES_FIJAS;    
            }

        }
    
        $this->op='edita';
       $this->editt=1;
    }

    //edicion de las actividades de unidades nuevas
    Public function edita2($id){
        $this->limpiarcract2();
        $edita2=$id;
        $sql='SELECT * FROM tb_actividades WHERE ID_ACTIVIDADES=?';
        $actividadesedit2=DB:: select($sql, array($edita2));
    
        if($actividadesedit2 !=null){
            foreach($actividadesedit2 as $actu)
            {
                $this->edita2=$actu->ID_ACTIVIDADES;
                $this->titulo2=$actu->NOMBRE_ACTIVIDAD;
                $this->descripcion2=$actu->descripcion;
                $this->arch=$actu->archivos;
                $this->punteo2=$actu->punteo;
                $this->fecha_e2=$actu->fecha_entr;
                $this->fecha_ext2=$actu->fecha_extr;
                $this->unidad1=$actu->ID_MATERIA;
                $this->temasb2=$actu->ID_TEMA;
                $this->grado=$actu->ID_GR;
                $this->idsecc=$actu->ID_SC;
                $this->unidadn=$actu->ID_UNIDADES;    
            }

        }
    
        $this->op='edita';
       $this->editt2=1;
    }

    //Actualizar actividades de unidades fijas
    public function update_act(){
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
            $edita=$this->edita;
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
            $this->arch=$this->arch;
            $this->idusuario=auth()->user()->id;

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
        
    
        $actividadesupdate=DB::table('tb_actividades')
        ->where('ID_ACTIVIDADES', $edita)
        ->update(
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
    
            if($actividadesupdate){
                DB::commit();
                unset($this->mensaje);
                unset($this->mensaje);
                unset($this->mensaje3);
                unset($this->mensaje1);
                unset($this->mensaje4);
                $this->op='addcontenidos';
                $this->mensaje3='Editado Correctamente';
                }
                else {
                DB::rollback();
                unset($this->mensaje1);
                unset($this->mensaje4);
                unset($this->mensaje);
                unset($this->mensaje3);
                $this->op='addcontenidos';
                $this->mensaje4='No fue posible editarlo Correctamente';
                }
    }
       
    }

        //Actualizar actividades de unidades nuevas
        public function update_act2(){
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
                $edita2=$this->edita2;
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
                $this->arch=$this->arch;
                $this->idusuario=auth()->user()->id;
    
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
            
        
            $actividadesupdate2=DB::table('tb_actividades')
            ->where('ID_ACTIVIDADES', $edita2)
            ->update(
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
                    'ID_UNIDADES'=>$unidadn,
                    'ID'=>$this->idusuario,
                ]);
        
                if($actividadesupdate2){
                    DB::commit();
                    unset($this->mensaje);
                    unset($this->mensaje);
                    unset($this->mensaje3);
                    unset($this->mensaje1);
                    unset($this->mensaje4);
                    $this->op='addcontenidos';
                    $this->mensaje3='Editado Correctamente';
                    }
                    else {
                    DB::rollback();
                    unset($this->mensaje1);
                    unset($this->mensaje4);
                    unset($this->mensaje);
                    unset($this->mensaje3);
                    $this->op='addcontenidos';
                    $this->mensaje4='No fue posible editarlo Correctamente';
                    }
        }
           
        }


    //borrar actividades creadas en las unidades fijas
    Public function deleteact($id){
        $edita=$id;
        DB::begintransaction();
    
        $borraract=DB::table('tb_actividades')->where('ID_ACTIVIDADES','=', $edita)->delete();
    
        if($borraract){
            DB::commit();
            unset($this->mensaje);
            unset($this->mensaje3);
            unset($this->mensaje_eliminar);
            $this->op='addcontenidos';
            $this->mensaje_eliminar='Eliminado Correctamente';
        }
        else{
            DB::rollback();
            unset($this->mensaje1);
            unset($this->mensaje4);
            unset($this->mensaje_eliminar2);
            $this->op='addcontenidos';  
            $this->mensaje_eliminar2='No fue posible eliminarlo';
        }
    }

        //borrar actividades creadas en las unidades nuevas
        Public function deleteact2($id){
            $edita2=$id;
            DB::begintransaction();
        
            $borraract2=DB::table('tb_actividades')->where('ID_ACTIVIDADES','=', $edita2)->delete();
        
            if($borraract2){
                DB::commit();
                unset($this->mensaje);
                unset($this->mensaje3);
                unset($this->mensaje_eliminar);
                $this->op='addcontenidos';
                $this->mensaje_eliminar='Eliminado Correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensaje1);
                unset($this->mensaje4);
                unset($this->mensaje_eliminar2);
                $this->op='addcontenidos';  
                $this->mensaje_eliminar2='No fue posible eliminarlo';
            }
        }

    //eliminar arhivo de unidades fijas
    public function elminararch(){
            $edita=$this->edita;
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
        
    
        $updatearchiv=DB::table('tb_actividades')
        ->where('ID_ACTIVIDADES', $edita)
        ->update(
            [
                'archivos'=>0,
            ]);
            if($updatearchiv){
                DB::commit();
                unset($this->mensaje);
                unset($this->mensaje3);
                unset($this->mensaje_eliminar);
                $this->op='addcontenidos';
                $this->mensaje_eliminar='Eliminado Correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensaje1);
                unset($this->mensaje4);
                unset($this->mensaje_eliminar2);
                $this->op='addcontenidos';  
                $this->mensaje_eliminar2='No fue posible eliminarlo';
            }
    }

        //eliminar arhivo de unidades nuevas
        public function elminararch2(){
            $edita2=$this->edita2;
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
        
    
        $updatearchiv=DB::table('tb_actividades')
        ->where('ID_ACTIVIDADES', $edita2)
        ->update(
            [
                'archivos'=>0,
            ]);
            if($updatearchiv){
                DB::commit();
                unset($this->mensaje);
                unset($this->mensaje3);
                unset($this->mensaje_eliminar);
                $this->op='addcontenidos';
                $this->mensaje_eliminar='Eliminado Correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensaje1);
                unset($this->mensaje4);
                unset($this->mensaje_eliminar2);
                $this->op='addcontenidos';  
                $this->mensaje_eliminar2='No fue posible eliminarlo';
            }
    }

    //funcion de las suibda de temas en las unidades fijas
    public function Subir_Tema(){
        if($this->validate([
            'tema' => 'required',
            'descripciont' => 'required',

        ])==false){
            $error="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['error' => 'Validar el input vacio']);
        }

        else{
        $tema=$this->tema;
        $descripciont=$this->descripciont;
        $grado=$this->grado;
        $idsecc=$this->idsecc;
        $unidad1=$this->unidad1;
        $unidadfija=$this->unidadfija;
        $this->idusuario=auth()->user()->id;
        DB::begintransaction();
        

        $temas=DB::table('tb_temas')->insert(
            [
                'NOMBRE_TEMA'=>$tema,
                'DESCRIPCION'=>$descripciont,
                'ID_MATERIA'=>$unidad1,
                'ID_GR'=>$grado,
                'ID_SC'=>$idsecc,
                'ID_UNIDADES_FIJAS'=>$unidadfija,
                'ID'=>$this->idusuario,
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

//funcnion de la edicion de temas en las uniddades fijas 
Public function editt($id){
    $id_tem=$id;
    $sql='SELECT * FROM tb_temas WHERE ID_TEMA=?';
    $temast=DB:: select($sql, array($id_tem));
    if($temast !=null){
        foreach($temast as $temat)
        {
            $this->id_tem=$temat->ID_TEMA;
            $this->tema=$temat->NOMBRE_TEMA;
            $this->descripciont=$temat->DESCRIPCION;
            $this->grado=$temat->ID_GR;
            $this->idsecc=$temat->ID_SC;
            $this->unidad1=$temat->ID_MATERIA;
            $this->unidadfija=$temat->ID_UNIDADES_FIJAS;
            $this->idusuario=$temat->ID;

        }
    }

    $this->op='edittemas';
   $this->editt=1;
}

//funcnion de la edicion de temas en las uniddades nuevas 
Public function editt2($id){
    $id_tem=$id;
    $sql='SELECT * FROM tb_temas WHERE ID_TEMA=?';
    $temast=DB:: select($sql, array($id_tem));
    if($temast !=null){
        foreach($temast as $temat)
        {
            $this->id_tem=$temat->ID_TEMA;
            $this->tema2=$temat->NOMBRE_TEMA;
            $this->descripciont2=$temat->DESCRIPCION;
            $this->grado=$temat->ID_GR;
            $this->idsecc=$temat->ID_SC;
            $this->unidad1=$temat->ID_MATERIA;
            $this->unidadn=$temat->ID_UNIDADES;
            $this->idusuario=$temat->ID;

        }
    }

    $this->op='edittemas';
   $this->editt=1;
}

//funcion de edicion de temas en unidades fijas 
public function update_temas(){
    if($this->validate([
        'tema' => 'required',
        'descripciont' => 'required',

    ])==false){
        $error="no encontrado";
        session(['message'=>'no encontrado']);
        return back()->withErrors(['error' => 'Validar el input vacio']);
    }

    else{
    $id_tem=$this->id_tem;
    $tema=$this->tema;
    $descripciont=$this->descripciont;
    $grado=$this->grado;
    $idsecc=$this->idsecc;
    $unidad1=$this->unidad1;
    $unidadfija=$this->unidadfija;
    $this->idusuario=auth()->user()->id;
    DB::begintransaction();
    

    $temat=DB::table('tb_temas')
    ->where('ID_TEMA', $id_tem)
    ->update( 
        [
            'NOMBRE_TEMA'=>$tema,
            'DESCRIPCION'=>$descripciont,
            'ID_MATERIA'=>$unidad1,
            'ID_GR'=>$grado,
            'ID_SC'=>$idsecc,
            'ID_UNIDADES_FIJAS'=>$unidadfija,
            'ID'=>$this->idusuario,
        ]);

        if($temat){
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

//funcion de edicion de temas en unidades nuevas
public function update_temas2(){
    if($this->validate([
        'tema2' => 'required',
        'descripciont2' => 'required',

    ])==false){
        $error="no encontrado";
        session(['message'=>'no encontrado']);
        return back()->withErrors(['error' => 'Validar el input vacio']);
    }

    else{
    $id_tem=$this->id_tem;
    $tema2=$this->tema2;
    $descripciont2=$this->descripciont2;
    $grado=$this->grado;
    $idsecc=$this->idsecc;
    $unidad1=$this->unidad1;
    $unidadn=$this->unidadn;
    $this->idusuario=auth()->user()->id;
    DB::begintransaction();
    

    $temat=DB::table('tb_temas')
    ->where('ID_TEMA', $id_tem)
    ->update( 
        [
            'NOMBRE_TEMA'=>$tema2,
            'DESCRIPCION'=>$descripciont2,
            'ID_MATERIA'=>$unidad1,
            'ID_GR'=>$grado,
            'ID_SC'=>$idsecc,
            'ID_UNIDADES'=>$unidadn,
            'ID'=>$this->idusuario,
        ]);

        if($temat){
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

//funcion de eliminar temas en unidades fijas 
Public function deletet($id){
    $id_tem=$id;
    DB::begintransaction();

    $temat=DB::table('tb_temas')->where('ID_TEMA','=', $id_tem)->delete();

    if($temat){
        DB::commit();
        unset($this->mensaje);
        unset($this->mensaje3);
        unset($this->mensaje_eliminar);
        $this->op='addcontenidos';
        $this->mensaje_eliminar='Eliminado Correctamente';
    }
    else{
        DB::rollback();
        unset($this->mensaje1);
        unset($this->mensaje4);
        unset($this->mensaje_eliminar2);
        $this->op='addcontenidos';  
        $this->mensaje_eliminar2='No fue posible eliminarlo';
    }
}


//funcion de eliminar temas en unidades fijas 
Public function deletet2($id){
    $id_tem=$id;
    DB::begintransaction();

    $temat=DB::table('tb_temas')->where('ID_TEMA','=', $id_tem)->delete();

    if($temat){
        DB::commit();
        unset($this->mensaje);
        unset($this->mensaje3);
        unset($this->mensaje_eliminar);
        $this->op='addcontenidos';
        $this->mensaje_eliminar='Eliminado Correctamente';
    }
    else{
        DB::rollback();
        unset($this->mensaje1);
        unset($this->mensaje4);
        unset($this->mensaje_eliminar2);
        $this->op='addcontenidos';  
        $this->mensaje_eliminar2='No fue posible eliminarlo';
    }
}

//creacion de los temas en las unidades nuevas 
public function Subir_Tema2(){
    if($this->validate([
        'tema2' => 'required',
        'descripciont2' => 'required',

    ])==false){
        $error="no encontrado";
        session(['message'=>'no encontrado']);
        return back()->withErrors(['error' => 'Validar el input vacio']);
    }

    else{
        $tema2=$this->tema2;
        $descripciont2=$this->descripciont2;

    $grado=$this->grado;
    $idsecc=$this->idsecc;
    $unidad1=$this->unidad1;
    $unidadn=$this->unidadn;
    $this->idusuario=auth()->user()->id;
    DB::begintransaction();
    

    $temas=DB::table('tb_temas')->insert(
        [
            'NOMBRE_TEMA'=>$tema2,
            'DESCRIPCION'=>$descripciont2,
            'ID_MATERIA'=>$unidad1,
            'ID_GR'=>$grado,
            'ID_SC'=>$idsecc,
            'ID_UNIDADES'=>$unidadn,
            'ID'=>$this->idusuario,
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




//funcnion de la inserccion de las notas 
public function notas1(Request $request){
    foreach ($request->get('nota') as $key => $value) 
    {
        $asistencia = Actividad::find($request->get('idnota')[$key]);
        $asistencia->ID_NOTA = $request->get('idnota')[$key];
        $asistencia->NOTA = $value;
        //$asistencia->idCursoProg = $request->get('idCursoProg')[$key];
        //$asistencia->IdRegistro = $request->get('IdRegistro')[$key];
        $asistencia->update();
    }
    
    //$this->nota.$ida.$nombre=$this->nota;
    //$this->prueba2=$this->nota.$com;
   /* $this->idas=$ida;
    $this->nombress=$nombre;
    $grado=$this->grado;
    $idsecc=$this->idsecc;
    $unidad1=$this->unidad1;
    $unidadfija=$this->unidadfija;
    $unidadn=$this->unidadn;
    $this->idusuario=auth()->user()->id;
    */

/*
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

*/
}

//funcnion de subir la planificacion anual 
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
    $this->idusuario=auth()->user()->id;
    
    DB::begintransaction();
    

    $planificacion=DB::table('tb_planificacionanual')->insert(
        [
            'DESCRIPCION'=>$descripciona,
            'ID_MATERIA'=>$unidad1,
            'ID_GR'=>$grado,
            'ID_SC'=>$idsecc,
            'ID'=>$this->idusuario,
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

//edicion de las planificaciones anuales 
Public function editp($id){
    $id_plan=$id;
    $sql='SELECT * FROM tb_planificacionanual WHERE ID_PLAN=?';
    $plane=DB:: select($sql, array($id_plan));
    if($plane !=null){
        foreach($plane as $plan)
        {
            $this->id_plan=$plan->ID_PLAN;
            $this->descripciona=$plan->DESCRIPCION;
            $this->grado=$plan->ID_GR;
            $this->idsecc=$plan->ID_SC;
            $this->unidad1=$plan->ID_MATERIA;
            $this->idusuario=$plan->ID;

        }
    }

    $this->op='editplan';
   $this->editp=1;
}

//edicion de la edicion de la planificacion anual 
public function update_plan(){
    if($this->validate([
        'descripciona' => 'required',

    ])==false){
        $error="no encontrado";
        session(['message'=>'no encontrado']);
        return back()->withErrors(['error' => 'Validar el input vacio']);
    }

    else{
        $id_plan=$this->id_plan;
        $descripciona=$this->descripciona;
        $grado=$this->grado;
        $idsecc=$this->idsecc;
        $unidad1=$this->unidad1;
        $this->idusuario=auth()->user()->id;
    DB::begintransaction();
    

    $plan=DB::table('tb_planificacionanual')
    ->where('ID_PLAN', $id_plan)
    ->update( 
        [
            'DESCRIPCION'=>$descripciona,
            'ID_MATERIA'=>$unidad1,
            'ID_GR'=>$grado,
            'ID_SC'=>$idsecc,
            'ID'=>$this->idusuario,
        ]);

        if($plan){
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

//borrar las planificaciones anuales 
Public function deletep($id){
    $id_plan=$id;
    DB::begintransaction();

    $plan=DB::table('tb_planificacionanual')->where('ID_PLAN','=', $id_plan)->delete();

    if($plan){
        DB::commit();
        unset($this->mensaje);
        unset($this->mensaje3);
        unset($this->mensaje_eliminar);
        $this->op='addcontenidos';
        $this->mensaje_eliminar='Eliminado Correctamente';
    }
    else{
        DB::rollback();
        unset($this->mensaje1);
        unset($this->mensaje4);
        unset($this->mensaje_eliminar2);
        $this->op='addcontenidos';  
        $this->mensaje_eliminar2='No fue posible eliminarlo';
    }
}

    //funcnion de crear validaciones en el modal de actividades de las unidades fijas
    public function validaciones($val){
        if($val==1){
            if($this->option1!=null && $this->option1==1){
                $this->option1=0;
            }
            else{
                $this->option1=1;
            }
        }
        if($val==2){
            if($this->option2!=null && $this->option2==2){
                $this->option2=0;
            }
            else{
                $this->option2=2;
            }
        }
        if($val==3){
            if($this->option3!=null && $this->option3==3){
                $this->option3=0;
            }
            else{
                $this->option3=3;
            }
        }
        if($val==4){
            if($this->option4!=null && $this->option4==4){
                $this->option4=0;
            }
            else{
                $this->option4=4;
            }
        }


    }

        //funcnion de crear validaciones en el modal de actividades de las unidades fijas
        public function validaciones_edit($valedit){
            if($valedit==1){
                if($this->validation1!=null && $this->validation1==1){
                    $this->validation1=0;
                }
                else{
                    $this->validation1=1;
                }
            }
            if($valedit==2){
                if($this->validation2!=null && $this->validation2==2){
                    $this->validation2=0;
                }
                else{
                    $this->option2=2;
                }
            }
            if($valedit==3){
                if($this->validation3!=null && $this->validation3==3){
                    $this->validation3=0;
                }
                else{
                    $this->validation3=3;
                }
            }
            if($valedit==4){
                if($this->validation4!=null && $this->validation4==4){
                    $this->validation4=0;
                }
                else{
                    $this->validation4=4;
                }
            }
            if($valedit==5){
                if($this->validation5!=null && $this->validation5==5){
                    $this->validation5=0;
                }
                else{
                    $this->validation5=5;
                }
            }
            if($valedit==6){
                if($this->validation6!=null && $this->validation6==6){
                    $this->validation6=0;
                }
                else{
                    $this->validation6=6;
                }
            }
    
    
        }

//funcion de subir actividades en las unidades creadas
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
    $this->limpiar_act2();
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

//limpiar variables de temas
public function limpiar(){
    $this->tema="";
    $this->descripciont="";
    $this->editt="";
    $this->editt2="";
 
}

//funcion que limpia los datos que se llenaron en los formularios anterirores 
public function limpiar_act(){
    $this->edita="";
    $this->titulo="";
    $this->punteo="";
    $this->fecha_e="";
    $this->fecha_ext="";
    $this->descripcion="";
    $this->temasb="";
    $this->formato="";
    $this->archivo="";
    $this->formato=0;
    $this->option1="";
    $this->option2="";
    $this->option3="";
    $this->option4="";
    $this->option5="";
    $this->validation1="";
    $this->validation2="";
    $this->validation3="";
    $this->validation4="";
    $this->validation5="";
    unset($this->mensaje);
    unset($this->mensaje);
    unset($this->mensaje3);
    unset($this->mensaje1);
    unset($this->mensaje4);
    unset($this->mensaje1);
    unset($this->mensaje4);
    unset($this->mensaje);
    unset($this->mensaje3);

}

//funcion que limpia los datos que se llenaron en los formularios anterirores 
public function limpiar_act2(){
    $this->edita2="";
    $this->titulo2="";
    $this->punteo2="";
    $this->fecha_e2="";
    $this->fecha_ext2="";
    $this->descripcion2="";
    $this->temasb2="";
    $this->archivo="";
    $this->formato=0;
    $this->option1="";
    $this->option2="";
    $this->option3="";
    $this->option4="";
    $this->option5="";
    $this->validation1="";
    $this->validation2="";
    $this->validation3="";
    $this->validation4="";
    $this->validation5="";

    unset($this->mensaje);
    unset($this->mensaje);
    unset($this->mensaje3);
    unset($this->mensaje1);
    unset($this->mensaje4);
    unset($this->mensaje1);
    unset($this->mensaje4);
    unset($this->mensaje);
    unset($this->mensaje3);

}

//limpiar variables de temas en las unidades 2
public function limpiart2(){
    $this->tema2="";
    $this->descripciont2="";
    $this->editt2="";
    $this->editt="";
 
}

    //funcnion que limpia las variables en el modal de edicion 
    public function limpiarcract(){
        unset($this->mensaje);
        unset($this->mensaje1);
        unset($this->mensaje4);
        unset($this->mensaje3);
    }

        //funcnion que limpia las variables en el modal de edicion 
        public function limpiarcract2(){
            unset($this->mensaje);
            unset($this->mensaje1);
            unset($this->mensaje4);
            unset($this->mensaje3);
        }

//funcion de limpiar las variables de la planificacion anual 
public function limpiarplan(){

    $this->descripciona="";
 
}



}