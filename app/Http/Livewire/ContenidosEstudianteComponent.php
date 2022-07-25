<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\ContenidosEstudianteComponent;


class ContenidosEstudianteComponent extends Component
{
    public $grado,$mat, $nombre_g, $nombre_s, $unidad1, $NOMBRE_MATERIA, $ID_DOCENTE,$op2,$asig, $usuario,$idsecc,$unidadfija,$unidadn,$idusuario;
    public $vista,$vista2;
    public $prueba, $op, $mensaje, $mensaje1, $file, $date, $dia2, $message, $file2, $arch, $vid, $pdf, $formato, $tipo, $id_act,$editt,$editp;
    public $titulo, $punteo, $fecha_e, $fecha_ext, $descripcion, $act,$tema_a,$descripciont,$tema,$unidad, $temasb, $archivo, $nota, $descripciona;
    public $restriccion, $fecha_date, $sancion; 
    public $titulo2, $punteo2, $fecha_e2, $descripcion2, $fecha_ext2, $temasb2, $grado2, $idsecc2, $arch2,$tema2, $unidad2, $descripciont2, $nombreu,$id_tem, $edita,$id_plan,$edita2;
    public $prueba2, $idas, $nombress,$opf;
    public $option1, $option2, $option3, $option4, $option5, $option6,$materia_revi;
    public $validation1, $validation2, $validation3, $validation4, $validation5,$validation6,$nombre_act, $descripact;
    public $vistar,$vistar2;
    public $texto_advertencia, $prioridad_advertencia, $fecha_inicio, $fecha_fin, $invalido, $advertencia_adver, $advertenciass, $advertenciasss;
    public $blockadvertencia, $dia_exacto, $mensaje_eliminar, $mensaje_eliminar2,$editrevisar,$comentario_r,$comentario_d_r,$id_estado_act, $editaadv;
    public function render()
    {
        $usuario_activo = auth()->user()->id;
        
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
            ->select('tb_actividades.ID_ACTIVIDADES', 'tb_materias.NOMBRE_MATERIA', 'tb_grados.ID_GR', 'tb_seccions.ID_SC', 'tb_materias.ID_MATERIA', 'users.name', 'tb_actividades.NOMBRE_ACTIVIDAD', 'tb_unidades_fijas.ID_UNIDADES_FIJAS','tb_actividades.fecha_cr','tb_actividades.fecha_entr','tb_actividades.descripcion','tb_actividades.archivos','tb_actividades.fecha_cr')
            ->where('tb_actividades.ID_UNIDADES_FIJAS','=',$this->unidadfija)
            ->where('tb_actividades.ID_GR','=',$this->grado)
            ->where('tb_actividades.ID_SC','=',$this->idsecc)
            ->where('tb_actividades.ID_MATERIA','=',$this->unidad1)
            ->get();
        }



        $sql="SELECT SECCION_ASIGNADA, GRADO_INGRESO FROM tb_alumnos WHERE ID_USER=$usuario_activo";
        $uniones=DB::select($sql);
        $sql= 'SELECT * FROM tb_rel';
        $relaciones=DB::select($sql);
        $sql= 'SELECT * FROM tb_materias';
        $materias=DB::select($sql);
        $sql= 'SELECT * FROM tb_unidades_fijas';
        $unidadesf=DB::select($sql);
        $sql= 'SELECT * FROM tb_docentes';
        $maestros=DB::select($sql);
        return view('livewire.contenidos-estudiante-component', compact('maestros','uniones','materias','relaciones','unidadesf','unidades', 'actividades'));
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

    public function modalsubact($nomb, $descp){
        $this->nombre_act=$nomb;
        $this->descripact=$descp;

    }

}
