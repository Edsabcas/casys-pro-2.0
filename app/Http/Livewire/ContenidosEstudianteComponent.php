<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use App\Models\Actividad;
use App\Http\Livewire\ContenidosEstudianteComponent;


class ContenidosEstudianteComponent extends Component
{
    use WithFileUploads;

    public $grado,$mat, $nombre_g, $nombre_s, $unidad1, $NOMBRE_MATERIA, $ID_DOCENTE,$op2,$asig, $usuario,$idsecc,$unidadfija,$unidadn,$idusuario;
    public $vista,$vista2;
    public $prueba, $op, $mensaje, $mensaje1, $file, $date, $dia2, $message, $file2, $arch, $vid, $pdf, $formato, $tipo, $id_act,$editt,$editp;
    public $titulo, $punteo, $fecha_e, $fecha_ext, $descripcion, $act,$tema_a,$descripciont,$tema,$unidad, $temasb, $archivo, $nota, $descripciona;
    public $restriccion, $fecha_date, $sancion, $mas_arch; 
    public $prueba2, $idas, $nombress,$opf, $estado_tarea;
    public $option1, $option2, $option3, $option4, $option5, $option6,$materia_revi;
    public $validation1, $validation2, $validation3, $validation4, $validation5,$validation6,$nombre_act, $descripact;
    public $vistar,$vistar2, $unidadfija_t,$actib, $nombre_alum;
    public $texto_advertencia, $prioridad_advertencia, $fecha_inicio, $fecha_fin, $invalido, $advertencia_adver, $advertenciass, $advertenciasss;
    public $blockadvertencia, $dia_exacto, $mensaje_eliminar, $mensaje_eliminar2,$editrevisar,$comentario_r,$comentario_d_r,$id_estado_act, $editaadv;
    public $DOCUMENTO1, $DOCUMENTO2, $DOCUMENTO3, $DOCUMENTO4, $DOCUMENTO5;  
    public $archivo2, $formato2, $arch2, $archivo3, $formato3, $arch3,$archivo4, $formato4, $arch4, $archivo5, $formato5, $arch5;
    public function render()
    {
        

        $usuario_activo = auth()->user()->id;
        
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

        if($this->archivo2!=null){
            if($this->archivo2->getClientOriginalExtension()=="pdf"){
                $archivo2 = "pdf".time().".".$this->archivo2->getClientOriginalExtension();
                $this->arch2=$archivo2;
                $this->archivo2->storeAS('imagen/temporalpdf/', $this->arch2,'public_up');
            }
            if($this->archivo2->getClientOriginalExtension()=="jpg" or $this->archivo2->getClientOriginalExtension()=="png" or $this->archivo2->getClientOriginalExtension()=="jpeg"){
                $this->formato2=1;
            }
            elseif($this->archivo2->getClientOriginalExtension()=="mp4" or $this->archivo2->getClientOriginalExtension()=="mpeg"){
                $this->formato2=2;
            }
            elseif($this->archivo2->getClientOriginalExtension()=="pdf"){
                $this->formato2=3;
            }

        }

        if($this->archivo3!=null){
            if($this->archivo3->getClientOriginalExtension()=="pdf"){
                $archivo3 = "pdf".time().".".$this->archivo3->getClientOriginalExtension();
                $this->arch3=$archivo3;
                $this->archivo3->storeAS('imagen/temporalpdf/', $this->arch3,'public_up');
            }
            if($this->archivo3->getClientOriginalExtension()=="jpg" or $this->archivo3->getClientOriginalExtension()=="png" or $this->archivo3->getClientOriginalExtension()=="jpeg"){
                $this->formato3=1;
            }
            elseif($this->archivo3->getClientOriginalExtension()=="mp4" or $this->archivo3->getClientOriginalExtension()=="mpeg"){
                $this->formato3=2;
            }
            elseif($this->archivo3->getClientOriginalExtension()=="pdf"){
                $this->formato3=3;
            }

        }

        if($this->archivo4!=null){
            if($this->archivo4->getClientOriginalExtension()=="pdf"){
                $archivo4 = "pdf".time().".".$this->archivo4->getClientOriginalExtension();
                $this->arch4=$archivo4;
                $this->archivo4->storeAS('imagen/temporalpdf/', $this->arch4,'public_up');
            }
            if($this->archivo4->getClientOriginalExtension()=="jpg" or $this->archivo4->getClientOriginalExtension()=="png" or $this->archivo4->getClientOriginalExtension()=="jpeg"){
                $this->formato4=1;
            }
            elseif($this->archivo4->getClientOriginalExtension()=="mp4" or $this->archivo4->getClientOriginalExtension()=="mpeg"){
                $this->formato4=2;
            }
            elseif($this->archivo3->getClientOriginalExtension()=="pdf"){
                $this->formato4=3;
            }

        }

        if($this->archivo5!=null){
            if($this->archivo5->getClientOriginalExtension()=="pdf"){
                $archivo5 = "pdf".time().".".$this->archivo5->getClientOriginalExtension();
                $this->arch5=$archivo5;
                $this->archivo5->storeAS('imagen/temporalpdf/', $this->arch5,'public_up');
            }
            if($this->archivo5->getClientOriginalExtension()=="jpg" or $this->archivo5->getClientOriginalExtension()=="png" or $this->archivo5->getClientOriginalExtension()=="jpeg"){
                $this->formato5=1;
            }
            elseif($this->archivo5->getClientOriginalExtension()=="mp4" or $this->archivo5->getClientOriginalExtension()=="mpeg"){
                $this->formato5=2;
            }
            elseif($this->archivo5->getClientOriginalExtension()=="pdf"){
                $this->formato5=3;
            }

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
            ->join('tb_tareas', 'tb_actividades.ID_ACTIVIDADES', '=', 'tb_tareas.ID_ACTIVIDADES')
            ->join('tb_unidades_fijas', 'tb_actividades.ID_UNIDADES_FIJAS', '=', 'tb_unidades_fijas.ID_UNIDADES_FIJAS')
            ->select('tb_actividades.ID_ACTIVIDADES', 'tb_materias.NOMBRE_MATERIA', 'tb_grados.ID_GR', 'tb_seccions.ID_SC', 'tb_materias.ID_MATERIA', 'users.name', 'tb_actividades.NOMBRE_ACTIVIDAD', 'tb_unidades_fijas.ID_UNIDADES_FIJAS','tb_actividades.fecha_cr','tb_actividades.fecha_entr','tb_actividades.descripcion','tb_actividades.archivos','tb_actividades.fecha_cr','tb_tareas.ESTADO','tb_tareas.DOCUMENTO1','tb_tareas.DOCUMENTO2','tb_tareas.DOCUMENTO3','tb_tareas.DOCUMENTO4','tb_tareas.DOCUMENTO5')
            ->where('tb_actividades.ID_UNIDADES_FIJAS','=',$this->unidadfija)
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



        $sql="SELECT SECCION_ASIGNADA, GRADO_INGRESO FROM tb_alumnos WHERE ID_USER=$usuario_activo OR ID_USER=?";
        $uniones=DB::select($sql, array(session('id_alumno_supervisado')));
        $sql= 'SELECT * FROM tb_rel';
        $relaciones=DB::select($sql);
        $sql= 'SELECT * FROM tb_materias';
        $materias=DB::select($sql);
        $sql= 'SELECT * FROM tb_unidades_fijas';
        $unidadesf=DB::select($sql);
        $sql= 'SELECT * FROM tb_docentes';
        $maestros=DB::select($sql);
        return view('livewire.contenidos-estudiante-component', compact('maestros','uniones','materias','relaciones','unidadesf','unidades', 'actividades','PlanUnion'));
    }

    public function mostrar_u_a($id,$nombm,$nombrem,$nombrem2,$num,$gr,$secc)
    {
        unset($this->unidad1);
        $this->unidad1=$id;
        $this->NOMBRE_MATERIA=$nombm;
        $this->ID_DOCENTE=$nombrem;
        $this->NOMBRE_DOCENTE=$nombrem2;
        $this->op2=$num;
        $this->grado=$gr;
        $this->idsecc=$secc;
        
    }

    public function validar_u_a($nunif){
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

    public function modalsubact($nomb, $descp,$actividad){
        $this->nombre_act=$nomb;
        $this->descripact=$descp;
        $this->actib=$actividad;

    }

    public function archivos_t($DOC1, $DOC2,$DOC3,$DOC4,$DOC5){
        $this->DOCUMENTO1=$DOC1;
        $this->DOCUMENTO2=$DOC2;
        $this->DOCUMENTO3=$DOC3;
        $this->DOCUMENTO4=$DOC4;
        $this->DOCUMENTO5=$DOC5;


    }

       //subida de actividades en las unidades fijas
   public function Subir_T(){

    $actib=$this->actib;
    $grado=$this->grado;
    $idsecc=$this->idsecc;
    $unidad1=$this->unidad1;
    $unidadfija=$this->unidadfija;
    $nombre_alum=$this->nombre_alum;
    $this->estado_tarea=1;

    $this->idusuario=auth()->user()->id;
    


    $archivo=$this->archivo;
    if($this->archivo!=null){
        if($this->archivo->getClientOriginalExtension()=="jpg" or $this->archivo->getClientOriginalExtension()=="png" or $this->archivo->getClientOriginalExtension()=="jpeg"){
            $archivo = "img".time().".".$this->archivo->getClientOriginalExtension();
            $this->arch=$archivo;
            $this->archivo->storeAS('imagen/tareas/', $this->arch,'public_up');
            $this->formato=1;
        }
        elseif($this->archivo->getClientOriginalExtension()=="mp4" or $this->archivo->getClientOriginalExtension()=="mpeg"){
            $archivo = "vid".time().".".$this->archivo->getClientOriginalExtension();
            $this->arch=$archivo;
            $this->archivo->storeAS('imagen/tareas/', $this->arch,'public_up');
            $this->formato=2;
        }
        elseif($this->archivo->getClientOriginalExtension()=="pdf"){
            $archivo = "pdf".time().".".$this->archivo->getClientOriginalExtension();
            $this->arch=$archivo;
            $this->archivo->storeAS('imagen/tareas/', $this->arch,'public_up');
            $this->formato=3;
        }
    }

    DB::begintransaction();


    $tareas=DB::table('tb_tareas')->insert(
        [
            'DOCUMENTO1'=>$this->arch,
            'ID_ACTIVIDADES'=>$actib,
            'ID_MATERIA'=>$unidad1,
            'ID_GR'=>$grado,
            'ID_SC'=>$idsecc,
            'ID_UNIDADES_FIJAS'=>$unidadfija,
            'ID_USER'=>$this->idusuario,
            'ESTADO'=>$this->estado_tarea,

        ]);


        if($tareas ){
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

    public function Subir_T2(){

        $actib=$this->actib;
        $grado=$this->grado;
        $idsecc=$this->idsecc;
        $unidad1=$this->unidad1;
        $unidadfija=$this->unidadfija;
        $nombre_alum=$this->nombre_alum;
        $this->estado_tarea=1;
    
        $this->idusuario=auth()->user()->id;
        
    
    
        $archivo=$this->archivo;
        if($this->archivo!=null){
            if($this->archivo->getClientOriginalExtension()=="jpg" or $this->archivo->getClientOriginalExtension()=="png" or $this->archivo->getClientOriginalExtension()=="jpeg"){
                $archivo = "img".time().".".$this->archivo->getClientOriginalExtension();
                $this->arch=$archivo;
                $this->archivo->storeAS('imagen/tareas/', $this->arch,'public_up');
                $this->formato=1;
            }
            elseif($this->archivo->getClientOriginalExtension()=="mp4" or $this->archivo->getClientOriginalExtension()=="mpeg"){
                $archivo = "vid".time().".".$this->archivo->getClientOriginalExtension();
                $this->arch=$archivo;
                $this->archivo->storeAS('imagen/tareas/', $this->arch,'public_up');
                $this->formato=2;
            }
            elseif($this->archivo->getClientOriginalExtension()=="pdf"){
                $archivo = "pdf".time().".".$this->archivo->getClientOriginalExtension();
                $this->arch=$archivo;
                $this->archivo->storeAS('imagen/tareas/', $this->arch,'public_up');
                $this->formato=3;
            }
        }

        $archivo2=$this->archivo2;
        if($this->archivo2!=null){
            if($this->archivo2->getClientOriginalExtension()=="jpg" or $this->archivo2->getClientOriginalExtension()=="png" or $this->archivo2->getClientOriginalExtension()=="jpeg"){
                $archivo2 = "img".time().".".$this->archivo2->getClientOriginalExtension();
                $this->arch2=$archivo2;
                $this->archivo2->storeAS('imagen/tareas/', $this->arch2,'public_up');
                $this->formato2=1;
            }
            elseif($this->archivo2->getClientOriginalExtension()=="mp4" or $this->archivo2->getClientOriginalExtension()=="mpeg"){
                $archivo2 = "vid".time().".".$this->archivo2->getClientOriginalExtension();
                $this->arch2=$archivo2;
                $this->archivo2->storeAS('imagen/tareas/', $this->arch2,'public_up');
                $this->formato2=2;
            }
            elseif($this->archivo2->getClientOriginalExtension()=="pdf"){
                $archivo2 = "pdf".time().".".$this->archivo2->getClientOriginalExtension();
                $this->arch2=$archivo2;
                $this->archivo2->storeAS('imagen/tareas/', $this->arch2,'public_up');
                $this->formato2=3;
            }
        }
    
        DB::begintransaction();
    
    
        $tareas=DB::table('tb_tareas')->insert(
            [
                'DOCUMENTO1'=>$this->arch,
                'DOCUMENTO2'=>$this->arch2,
                'ID_ACTIVIDADES'=>$actib,
                'ID_MATERIA'=>$unidad1,
                'ID_GR'=>$grado,
                'ID_SC'=>$idsecc,
                'ID_UNIDADES_FIJAS'=>$unidadfija,
                'ID_USER'=>$this->idusuario,
                'ESTADO'=>$this->estado_tarea,
    
            ]);
    
    
            if($tareas ){
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

        public function Subir_T3(){

            $actib=$this->actib;
            $grado=$this->grado;
            $idsecc=$this->idsecc;
            $unidad1=$this->unidad1;
            $unidadfija=$this->unidadfija;
            $nombre_alum=$this->nombre_alum;
            $this->estado_tarea=1;
        
            $this->idusuario=auth()->user()->id;
            
        
        
            $archivo=$this->archivo;
            if($this->archivo!=null){
                if($this->archivo->getClientOriginalExtension()=="jpg" or $this->archivo->getClientOriginalExtension()=="png" or $this->archivo->getClientOriginalExtension()=="jpeg"){
                    $archivo = "img".time().".".$this->archivo->getClientOriginalExtension();
                    $this->arch=$archivo;
                    $this->archivo->storeAS('imagen/tareas/', $this->arch,'public_up');
                    $this->formato=1;
                }
                elseif($this->archivo->getClientOriginalExtension()=="mp4" or $this->archivo->getClientOriginalExtension()=="mpeg"){
                    $archivo = "vid".time().".".$this->archivo->getClientOriginalExtension();
                    $this->arch=$archivo;
                    $this->archivo->storeAS('imagen/tareas/', $this->arch,'public_up');
                    $this->formato=2;
                }
                elseif($this->archivo->getClientOriginalExtension()=="pdf"){
                    $archivo = "pdf".time().".".$this->archivo->getClientOriginalExtension();
                    $this->arch=$archivo;
                    $this->archivo->storeAS('imagen/tareas/', $this->arch,'public_up');
                    $this->formato=3;
                }
            }
    
            

            $archivo2=$this->archivo2;
            if($this->archivo2!=null){
                if($this->archivo2->getClientOriginalExtension()=="jpg" or $this->archivo2->getClientOriginalExtension()=="png" or $this->archivo2->getClientOriginalExtension()=="jpeg"){
                    $archivo2 = "img".time().".".$this->archivo2->getClientOriginalExtension();
                    $this->arch2=$archivo2;
                    $this->archivo2->storeAS('imagen/tareas/', $this->arch2,'public_up');
                    $this->formato2=1;
                }
                elseif($this->archivo2->getClientOriginalExtension()=="mp4" or $this->archivo2->getClientOriginalExtension()=="mpeg"){
                    $archivo2 = "vid".time().".".$this->archivo2->getClientOriginalExtension();
                    $this->arch2=$archivo2;
                    $this->archivo2->storeAS('imagen/tareas/', $this->arch2,'public_up');
                    $this->formato2=2;
                }
                elseif($this->archivo2->getClientOriginalExtension()=="pdf"){
                    $archivo2 = "pdf".time().".".$this->archivo2->getClientOriginalExtension();
                    $this->arch2=$archivo2;
                    $this->archivo2->storeAS('imagen/tareas/', $this->arch2,'public_up');
                    $this->formato2=3;
                }
            }


            $archivo3=$this->archivo3;

            if($this->archivo3!=null){
                if($this->archivo3->getClientOriginalExtension()=="jpg" or $this->archivo3->getClientOriginalExtension()=="png" or $this->archivo3->getClientOriginalExtension()=="jpeg"){
                    $archivo3 = "img".time().".".$this->archivo3->getClientOriginalExtension();
                    $this->arch3=$archivo3;
                    $this->archivo3->storeAS('imagen/tareas/', $this->arch3,'public_up');
                    $this->formato3=1;
                }
                elseif($this->archivo3->getClientOriginalExtension()=="mp4" or $this->archivo3->getClientOriginalExtension()=="mpeg"){
                    $archivo3 = "vid".time().".".$this->archivo2->getClientOriginalExtension();
                    $this->arch3=$archivo3;
                    $this->archivo3->storeAS('imagen/tareas/', $this->arch3,'public_up');
                    $this->formato3=2;
                }
                elseif($this->archivo3->getClientOriginalExtension()=="pdf"){
                    $archivo3 = "pdf".time().".".$this->archivo3->getClientOriginalExtension();
                    $this->arch3=$archivo3;
                    $this->archivo3->storeAS('imagen/tareas/', $this->arch3,'public_up');
                    $this->formato3=3;                 
                }
            }
        
            DB::begintransaction();
        
        
            $tareas=DB::table('tb_tareas')->insert(
                [
                    'DOCUMENTO1'=>$this->arch,
                    'DOCUMENTO2'=>$this->arch2,
                    'DOCUMENTO3'=>$this->arch3,
                    'ID_ACTIVIDADES'=>$actib,
                    'ID_MATERIA'=>$unidad1,
                    'ID_GR'=>$grado,
                    'ID_SC'=>$idsecc,
                    'ID_UNIDADES_FIJAS'=>$unidadfija,
                    'ID_USER'=>$this->idusuario,
                    'ESTADO'=>$this->estado_tarea,
        
                ]);
        
        
                if($tareas ){
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
            public function Subir_T4(){

                $actib=$this->actib;
                $grado=$this->grado;
                $idsecc=$this->idsecc;
                $unidad1=$this->unidad1;
                $unidadfija=$this->unidadfija;
                $nombre_alum=$this->nombre_alum;
                $this->estado_tarea=1;
            
                $this->idusuario=auth()->user()->id;
                
            
            
                $archivo=$this->archivo;
                if($this->archivo!=null){
                    if($this->archivo->getClientOriginalExtension()=="jpg" or $this->archivo->getClientOriginalExtension()=="png" or $this->archivo->getClientOriginalExtension()=="jpeg"){
                        $archivo = "img".time().".".$this->archivo->getClientOriginalExtension();
                        $this->arch=$archivo;
                        $this->archivo->storeAS('imagen/tareas/', $this->arch,'public_up');
                        $this->formato=1;
                    }
                    elseif($this->archivo->getClientOriginalExtension()=="mp4" or $this->archivo->getClientOriginalExtension()=="mpeg"){
                        $archivo = "vid".time().".".$this->archivo->getClientOriginalExtension();
                        $this->arch=$archivo;
                        $this->archivo->storeAS('imagen/tareas/', $this->arch,'public_up');
                        $this->formato=2;
                    }
                    elseif($this->archivo->getClientOriginalExtension()=="pdf"){
                        $archivo = "pdf".time().".".$this->archivo->getClientOriginalExtension();
                        $this->arch=$archivo;
                        $this->archivo->storeAS('imagen/tareas/', $this->arch,'public_up');
                        $this->formato=3;
                    }
                }
        
                
                $archivo2=$this->archivo2;
                if($this->archivo2!=null){
                    if($this->archivo2->getClientOriginalExtension()=="jpg" or $this->archivo2->getClientOriginalExtension()=="png" or $this->archivo2->getClientOriginalExtension()=="jpeg"){
                        $archivo2 = "img".time().".".$this->archivo2->getClientOriginalExtension();
                        $this->arch2=$archivo2;
                        $this->archivo2->storeAS('imagen/tareas/', $this->arch2,'public_up');
                        $this->formato2=1;
                    }
                    elseif($this->archivo2->getClientOriginalExtension()=="mp4" or $this->archivo2->getClientOriginalExtension()=="mpeg"){
                        $archivo2 = "vid".time().".".$this->archivo2->getClientOriginalExtension();
                        $this->arch2=$archivo2;
                        $this->archivo2->storeAS('imagen/tareas/', $this->arch2,'public_up');
                        $this->formato2=2;
                    }
                    elseif($this->archivo2->getClientOriginalExtension()=="pdf"){
                        $archivo2 = "pdf".time().".".$this->archivo2->getClientOriginalExtension();
                        $this->arch2=$archivo2;
                        $this->archivo2->storeAS('imagen/tareas/', $this->arch2,'public_up');
                        $this->formato2=3;
                    }
                }
    
                $archivo3=$this->archivo3;
                if($this->archivo3!=null){
                    if($this->archivo3->getClientOriginalExtension()=="jpg" or $this->archivo3->getClientOriginalExtension()=="png" or $this->archivo3->getClientOriginalExtension()=="jpeg"){
                        $archivo3 = "img".time().".".$this->archivo3->getClientOriginalExtension();
                        $this->arch3=$archivo3;
                        $this->archivo3->storeAS('imagen/tareas/', $this->arch3,'public_up');
                        $this->formato3=1;
                    }
                    elseif($this->archivo3->getClientOriginalExtension()=="mp4" or $this->archivo3->getClientOriginalExtension()=="mpeg"){
                        $archivo3 = "vid".time().".".$this->archivo3->getClientOriginalExtension();
                        $this->arch3=$archivo3;
                        $this->archivo3->storeAS('imagen/tareas/', $this->arch3,'public_up');
                        $this->formato3=2;
                    }
                    elseif($this->archivo3->getClientOriginalExtension()=="pdf"){
                        $archivo3 = "pdf".time().".".$this->archivo3->getClientOriginalExtension();
                        $this->arch3=$archivo3;
                        $this->archivo3->storeAS('imagen/tareas/', $this->arch3,'public_up');
                        $this->formato3=3;                 
                    }
                }

                $archivo4=$this->archivo4;
                if($this->archivo4!=null){
                    if($this->archivo4->getClientOriginalExtension()=="jpg" or $this->archivo4->getClientOriginalExtension()=="png" or $this->archivo4->getClientOriginalExtension()=="jpeg"){
                        $archivo4 = "img".time().".".$this->archivo4->getClientOriginalExtension();
                        $this->arch4=$archivo4;
                        $this->archivo4->storeAS('imagen/tareas/', $this->arch3,'public_up');
                        $this->formato4=1;
                    }
                    elseif($this->archivo4->getClientOriginalExtension()=="mp4" or $this->archivo4->getClientOriginalExtension()=="mpeg"){
                        $archivo4 = "vid".time().".".$this->archivo4->getClientOriginalExtension();
                        $this->arch4=$archivo4;
                        $this->archivo4->storeAS('imagen/tareas/', $this->arch4,'public_up');
                        $this->formato4=2;
                    }
                    elseif($this->archivo4->getClientOriginalExtension()=="pdf"){
                        $archivo4 = "pdf".time().".".$this->archivo4->getClientOriginalExtension();
                        $this->arch4=$archivo4;
                        $this->archivo4->storeAS('imagen/tareas/', $this->arch4,'public_up');
                        $this->formato4=3;                 
                    }
                }
            
                DB::begintransaction();
            
            
                $tareas=DB::table('tb_tareas')->insert(
                    [
                        'DOCUMENTO1'=>$this->arch,
                        'DOCUMENTO2'=>$this->arch2,
                        'DOCUMENTO3'=>$this->arch3,
                        'DOCUMENTO4'=>$this->arch4,
                        'ID_ACTIVIDADES'=>$actib,
                        'ID_MATERIA'=>$unidad1,
                        'ID_GR'=>$grado,
                        'ID_SC'=>$idsecc,
                        'ID_UNIDADES_FIJAS'=>$unidadfija,
                        'ID_USER'=>$this->idusuario,
                        'ESTADO'=>$this->estado_tarea,
            
                    ]);
            
            
                    if($tareas ){
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


                public function Subir_T5(){

                    $actib=$this->actib;
                    $grado=$this->grado;
                    $idsecc=$this->idsecc;
                    $unidad1=$this->unidad1;
                    $unidadfija=$this->unidadfija;
                    $nombre_alum=$this->nombre_alum;
                    $this->estado_tarea=1;
                
                    $this->idusuario=auth()->user()->id;
                    
                
                
                    $archivo=$this->archivo;
                    if($this->archivo!=null){
                        if($this->archivo->getClientOriginalExtension()=="jpg" or $this->archivo->getClientOriginalExtension()=="png" or $this->archivo->getClientOriginalExtension()=="jpeg"){
                            $archivo = "img".time().".".$this->archivo->getClientOriginalExtension();
                            $this->arch=$archivo;
                            $this->archivo->storeAS('imagen/tareas/', $this->arch,'public_up');
                            $this->formato=1;
                        }
                        elseif($this->archivo->getClientOriginalExtension()=="mp4" or $this->archivo->getClientOriginalExtension()=="mpeg"){
                            $archivo = "vid".time().".".$this->archivo->getClientOriginalExtension();
                            $this->arch=$archivo;
                            $this->archivo->storeAS('imagen/tareas/', $this->arch,'public_up');
                            $this->formato=2;
                        }
                        elseif($this->archivo->getClientOriginalExtension()=="pdf"){
                            $archivo = "pdf".time().".".$this->archivo->getClientOriginalExtension();
                            $this->arch=$archivo;
                            $this->archivo->storeAS('imagen/tareas/', $this->arch,'public_up');
                            $this->formato=3;
                        }
                    }
            
                    
                    $archivo2=$this->archivo2;
                    if($this->archivo2!=null){
                        if($this->archivo2->getClientOriginalExtension()=="jpg" or $this->archivo2->getClientOriginalExtension()=="png" or $this->archivo2->getClientOriginalExtension()=="jpeg"){
                            $archivo2 = "img".time().".".$this->archivo2->getClientOriginalExtension();
                            $this->arch2=$archivo2;
                            $this->archivo2->storeAS('imagen/tareas/', $this->arch2,'public_up');
                            $this->formato2=1;
                        }
                        elseif($this->archivo2->getClientOriginalExtension()=="mp4" or $this->archivo2->getClientOriginalExtension()=="mpeg"){
                            $archivo2 = "vid".time().".".$this->archivo2->getClientOriginalExtension();
                            $this->arch2=$archivo2;
                            $this->archivo2->storeAS('imagen/tareas/', $this->arch2,'public_up');
                            $this->formato2=2;
                        }
                        elseif($this->archivo2->getClientOriginalExtension()=="pdf"){
                            $archivo2 = "pdf".time().".".$this->archivo2->getClientOriginalExtension();
                            $this->arch2=$archivo2;
                            $this->archivo2->storeAS('imagen/tareas/', $this->arch2,'public_up');
                            $this->formato2=3;
                        }
                    }
        
                    $archivo3=$this->archivo3;
                    if($this->archivo3!=null){
                        if($this->archivo3->getClientOriginalExtension()=="jpg" or $this->archivo3->getClientOriginalExtension()=="png" or $this->archivo3->getClientOriginalExtension()=="jpeg"){
                            $archivo3 = "img".time().".".$this->archivo3->getClientOriginalExtension();
                            $this->arch3=$archivo3;
                            $this->archivo3->storeAS('imagen/tareas/', $this->arch3,'public_up');
                            $this->formato3=1;
                        }
                        elseif($this->archivo3->getClientOriginalExtension()=="mp4" or $this->archivo3->getClientOriginalExtension()=="mpeg"){
                            $archivo3 = "vid".time().".".$this->archivo3->getClientOriginalExtension();
                            $this->arch3=$archivo3;
                            $this->archivo3->storeAS('imagen/tareas/', $this->arch3,'public_up');
                            $this->formato3=2;
                        }
                        elseif($this->archivo3->getClientOriginalExtension()=="pdf"){
                            $archivo3 = "pdf".time().".".$this->archivo3->getClientOriginalExtension();
                            $this->arch3=$archivo3;
                            $this->archivo3->storeAS('imagen/tareas/', $this->arch3,'public_up');
                            $this->formato3=3;                 
                        }
                    }
    
                    $archivo4=$this->archivo4;
                    if($this->archivo4!=null){
                        if($this->archivo4->getClientOriginalExtension()=="jpg" or $this->archivo4->getClientOriginalExtension()=="png" or $this->archivo4->getClientOriginalExtension()=="jpeg"){
                            $archivo4 = "img".time().".".$this->archivo4->getClientOriginalExtension();
                            $this->arch4=$archivo4;
                            $this->archivo4->storeAS('imagen/tareas/', $this->arch4,'public_up');
                            $this->formato4=1;
                        }
                        elseif($this->archivo4->getClientOriginalExtension()=="mp4" or $this->archivo4->getClientOriginalExtension()=="mpeg"){
                            $archivo4 = "vid".time().".".$this->archivo4->getClientOriginalExtension();
                            $this->arch4=$archivo4;
                            $this->archivo4->storeAS('imagen/tareas/', $this->arch4,'public_up');
                            $this->formato4=2;
                        }
                        elseif($this->archivo4->getClientOriginalExtension()=="pdf"){
                            $archivo4 = "pdf".time().".".$this->archivo4->getClientOriginalExtension();
                            $this->arch4=$archivo4;
                            $this->archivo4->storeAS('imagen/tareas/', $this->arch4,'public_up');
                            $this->formato4=3;                 
                        }
                    }

                    $archivo5=$this->archivo5;
                    if($this->archivo5!=null){
                        if($this->archivo5->getClientOriginalExtension()=="jpg" or $this->archivo5->getClientOriginalExtension()=="png" or $this->archivo5->getClientOriginalExtension()=="jpeg"){
                            $archivo5 = "img".time().".".$this->archivo5->getClientOriginalExtension();
                            $this->arch5=$archivo5;
                            $this->archivo5->storeAS('imagen/tareas/', $this->arch5,'public_up');
                            $this->formato5=1;
                        }
                        elseif($this->archivo5->getClientOriginalExtension()=="mp4" or $this->archivo5->getClientOriginalExtension()=="mpeg"){
                            $archivo5 = "vid".time().".".$this->archivo5->getClientOriginalExtension();
                            $this->arch5=$archivo5;
                            $this->archivo5->storeAS('imagen/tareas/', $this->arch5,'public_up');
                            $this->formato5=2;
                        }
                        elseif($this->archivo5->getClientOriginalExtension()=="pdf"){
                            $archivo5 = "pdf".time().".".$this->archivo5->getClientOriginalExtension();
                            $this->arch5=$archivo5;
                            $this->archivo5->storeAS('imagen/tareas/', $this->arch5,'public_up');
                            $this->formato5=3;                 
                        }
                    }
                
                    DB::begintransaction();
                
                
                    $tareas=DB::table('tb_tareas')->insert(
                        [
                            'DOCUMENTO1'=>$this->arch,
                            'DOCUMENTO2'=>$this->arch2,
                            'DOCUMENTO3'=>$this->arch3,
                            'DOCUMENTO4'=>$this->arch4,
                            'DOCUMENTO5'=>$this->arch5,
                            'ID_ACTIVIDADES'=>$actib,
                            'ID_MATERIA'=>$unidad1,
                            'ID_GR'=>$grado,
                            'ID_SC'=>$idsecc,
                            'ID_UNIDADES_FIJAS'=>$unidadfija,
                            'ID_USER'=>$this->idusuario,
                            'ESTADO'=>$this->estado_tarea,
                
                        ]);
                
                
                        if($tareas ){
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



    public function subir_mas_arch(){

        $this->mas_arch=1;
    }

    public function subir_mas_arch2(){

        $this->mas_arch=2;
    }

    public function subir_mas_arch3(){

        $this->mas_arch=3;
    }

    public function subir_mas_arch4(){

        $this->mas_arch=4;
    }




}
