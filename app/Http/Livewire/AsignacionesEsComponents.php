<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AsignacionesEsComponents extends Component
{
    public $nombres_e,$apellidos_e,$grado_e,$seccion_e,$estado_e,$op,$mensaje,$mensaje1,$id_e,$mensaje2,$mensaje3,$mensajeeliminar,$mensajeeliminar1,$edit;
    public $mensajeeditado;
    //Grados presencial
    public $estudiantesprekinder, $estudianteskinder, $estudiantesprepa, $estudiantesprimero;
    public $estudiantessegundo, $estudiantestercero, $estudiantescuarto, $estudiantesquinto;
    public $estudiantessexto, $estudiantesseptimo, $estudiantesoctavo, $estudiantesnoveno;
    public $estudiantesdecimo, $estudiantesonceavo;
    //Grados presencial
    public $estudiantesprekinder2, $estudianteskinder2, $estudiantesprepa2, $estudiantesprimero2;
    public $estudiantessegundo2, $estudiantestercero2, $estudiantescuarto2, $estudiantesquinto2;
    public $estudiantessexto2, $estudiantesseptimo2, $estudiantesoctavo2, $estudiantesnoveno2;
    public $estudiantesdecimo2, $estudiantesonceavo2;
    //editar seccion 
    public $estudianteeditar, $id_alumno, $seccion_asig, $id_alumno2, $seccionasignada, $estudianteeditar2;
    public $estudianteeditar3;
    //listar grados
    public $gradospresencial, $gradosvirtual;
    //listar alumnos y secciones
    public $alumnos_seccionA, $alumnos_seccionB, $alumnos_seccionC, $alumnos_seccionD;
    public $alumnos_seccionE;
    //grados para listar
    public $grados_listar;
    public function render()
    {
        $estudiante= DB::table('tb_asignaciones_e')

                ->join('tb_estudiantes', 'tb_asignaciones_e.id', '=', 'tb_estudiantes.id')

                ->join('tb_grados', 'tb_asignaciones_e.ID_GR', '=', 'tb_grados.ID_GR')

                ->join('tb_seccions', 'tb_asignaciones_e.ID_SC', '=', 'tb_seccions.ID_SC')

                ->select('tb_asignaciones_e.ID_E','tb_asignaciones_e.ID_SC','tb_asignaciones_e.ID_GR','tb_asignaciones_e.id',
                'tb_estudiantes.TB_INFO_NOMBRE','tb_estudiantes.TB_INFO_APELLIDO','tb_grados.GRADO','tb_seccions.SECCION','tb_asignaciones_e.ESTADO','tb_asignaciones_e.FECHA_ASIGNACION')

                ->get();

        $sql="SELECT * FROM tb_grados";
        $grados=DB::select($sql);
        $sql="SELECT * FROM tb_seccions";
        $secciones=DB::select($sql);
        $sql="SELECT * FROM tb_estudiantes";
        $estudiantes=DB::select($sql);
        //prekinder
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=1 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantesprekinder=DB::select($sql);
        //kinder
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=3 AND SECCION_ASIGNADA IS NULL";
        $this->estudianteskinder=DB::select($sql);
        //preparatoria
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=5 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantesprepa=DB::select($sql);
        //primero
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=7 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantesprimero=DB::select($sql);
        //segundo
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=8 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantessegundo=DB::select($sql);
        //tercero
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=9 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantestercero=DB::select($sql);
        //cuarto
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=10 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantescuarto=DB::select($sql);
        //quinto
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=11 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantesquinto=DB::select($sql);
        //sexto
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=12 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantessexto=DB::select($sql);
        //septimo
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=13 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantesseptimo=DB::select($sql);
        //octavo
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=14 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantesoctavo=DB::select($sql);
        //noveno
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=15 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantesnoveno=DB::select($sql);
        //decimo
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=23 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantesdecimo=DB::select($sql);
        //onceavo
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=25 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantesonceavo=DB::select($sql);
        //tomar datos
        $sql="SELECT * FROM tb_alumnos WHERE ID_USER=?";
        $this->estudianteeditar=DB::select($sql, array($this->id_alumno));
        //tomar datos en asignar seccion otra vez
        $sql="SELECT * FROM tb_alumnos WHERE ID_USER=?";
        $this->estudianteeditar3=DB::select($sql, array($this->id_alumno2));
        //VIRTUAL
        //VIRTUAL
        //prekinder
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=26 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantesprekinder2=DB::select($sql);
        //kinder
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=27 AND SECCION_ASIGNADA IS NULL";
        $this->estudianteskinder2=DB::select($sql);
        //preparatoria
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=28 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantesprepa2=DB::select($sql);
        //primero
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=29 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantesprimero2=DB::select($sql);
        //segundo
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=30 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantessegundo2=DB::select($sql);
        //tercero
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=31 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantestercero2=DB::select($sql);
        //cuarto
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=32 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantescuarto2=DB::select($sql);
        //quinto
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=33 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantesquinto2=DB::select($sql);
        //sexto
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=34 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantessexto2=DB::select($sql);
        //septimo
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=35 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantesseptimo2=DB::select($sql);
        //octavo
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=36 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantesoctavo2=DB::select($sql);
        //noveno
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=37 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantesnoveno2=DB::select($sql);
        //decimo
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=38 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantesdecimo2=DB::select($sql);
        //onceavo
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=39 AND SECCION_ASIGNADA IS NULL";
        $this->estudiantesonceavo2=DB::select($sql);
        //GRADOS DE PRESENCIAL
        $sql="SELECT * FROM tb_grados WHERE JORNADA=1";
        $this->gradospresencial=DB::select($sql);
        //GRADOS DE  VIRTUAL
        $sql="SELECT * FROM tb_grados WHERE JORNADA=4";
        $this->gradosvirtual=DB::select($sql);
        //Conseguir alumnos en seccion A
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=? AND SECCION_ASIGNADA=1";
        $this->alumnos_seccionA=DB::select($sql, array(session('id_grado')));
        //Conseguir alumnos en seccion B
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=? AND SECCION_ASIGNADA=2";
        $this->alumnos_seccionB=DB::select($sql, array(session('id_grado')));
        //Conseguir alumnos en seccion C
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=? AND SECCION_ASIGNADA=3";
        $this->alumnos_seccionC=DB::select($sql, array(session('id_grado')));
        //Conseguir alumnos en seccion D
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=? AND SECCION_ASIGNADA=4";
        $this->alumnos_seccionD=DB::select($sql, array(session('id_grado')));
        //Conseguir alumnos en seccion E
        $sql="SELECT * FROM tb_alumnos WHERE GRADO_INGRESO=? AND SECCION_ASIGNADA=5";
        $this->alumnos_seccionE=DB::select($sql, array(session('id_grado')));
        //obtener grado en listar
        $sql="SELECT * FROM tb_grados WHERE ID_GR=?";
        $this->grados_listar=DB::select($sql, array(session('id_grado')));
        return view('livewire.asignaciones-es-components', compact('estudiante','grados','secciones','estudiantes'));
    }
    public function guardar_e(){

        if($this->validate([
            'nombres_e' => 'required',
            'grado_e' => 'required',
            'seccion_e' => 'required',
            'estado_e' => 'required',
    
        ])==false)
        {
            $mensaje="no encontrado";
            session(['message' => 'no encontrado']);
            return back()->withErrors(['mensaje' =>'Validar el input vacio']);
        }
        else
        {
        $nombres_e=$this->nombres_e;
        $apellidos_e=$this->apellidos_e;
        $grado_e=$this->grado_e;
        $seccion_e=$this->seccion_e;
        $estado_e=$this->estado_e;

        DB::beginTransaction();

        $estudiante=DB::table('tb_asignaciones_e')->insert(
            [
                'id'=> $nombres_e,
                'ID_GR'=> $grado_e,
                'ID_SC'=> $seccion_e,
                'FECHA_ASIGNACION'=> date('y-m-d:h:m:s'),
                'ESTADO'=> $estado_e,
            ]);
            if($estudiante){
                DB::commit();
                $this->reset();
                $this->mensaje='Insertado correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensaje);
                $this->mensaje1='No fue posible insertar correctamente';
            }
        }
    }
    public function listar_e(){ 
        $sql="SELECT * FROM tb_asignaciones_e";
        $estudiantes=DB::select($sql);
        $op=6;
        return view('home', compact('estudiantes', 'op'));
    }  
    public function edit($id){
        $id_e=$id;
        $sql='SELECT * FROM tb_asignaciones_e WHERE ID_E=?';
        $estudiante=DB::select($sql,array($id_e));

        if($estudiante!=null){
            foreach($estudiante as $est)
            {
                $this->id_e=$est->ID_E;
                $this->nombres_e=$est->id;
                $this->grado_e=$est->ID_GR;
                $this->seccion_e=$est->ID_SC;
                $this->estado_e=$est->ESTADO;
            }
        }
        $this->op=6;

        $this->edit=1;
    }
    public function update_e_p(){
        $id_e=$this->id_e;
        $nombres_e=$this->nombres_e;
        $grado_e=$this->grado_e;
        $seccion_e=$this->seccion_e;
        $estado_e=$this->estado_e;

        DB::beginTransaction();

        $est=DB::table('tb_asignaciones_e')
        ->where('ID_E',$id_e)
        ->update(
            [
                'id'=> $nombres_e,
                'ID_GR'=> $grado_e,
                'ID_SC'=> $seccion_e,
                'ESTADO'=> $estado_e,
            ]
            );

            if($est){
                DB::commit();
                $this->reset();
                $this->mensaje2='Editado correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensaje2);
                $this->mensaje3='No fue posible editar correctamente';
            }
    }
    public function delete($id){
        $id_e=$id;

        DB::beginTransaction();

        $est=DB::table('tb_asignaciones_e')->where('ID_E','=', $id_e)->delete();

        if ($est){
            DB::commit();
            $this->reset();
            $this->mensajeeliminar='Eliminado correctamente';
        }
        else{
            DB::rollback();
            unset($this->mensajeeliminar);
            $this->mensajeeliminar1='No fue posible eliminar correctamente';
        }
    }  

    public function editar_seccion($id){
        $this->id_alumno = $id;   
    }

    public function editar_seccion2($id_alum){
        $this->id_alumno2 = $id_alum;  
        //toma de seccion
        $sql="SELECT * FROM tb_alumnos WHERE ID_USER=?";
        $this->estudianteeditar2=DB::select($sql, array($this->id_alumno2)); 
        foreach($this->estudianteeditar2 as $editar_estu){
            $this->seccionasignada=$editar_estu->SECCION_ASIGNADA;
        }
    }

    public function asignar_seccion(){

        if($this->validate([
            'seccion_asig' => 'required',
    
        ])==false)
        {
            $mensaje="no encontrado";
            session(['message' => 'no encontrado']);
            return back()->withErrors(['mensaje' =>'Validar el input vacio']);
        }
        else
        {
        $asignado=$this->seccion_asig;
        $fecha_asignacion=date("Y-m-d H:i:s");

        DB::beginTransaction();

        $estudianteasignado=DB::table('tb_alumnos')->where('ID_USER', $this->id_alumno)
        ->update(
            [
                'SECCION_ASIGNADA'=> $asignado,
                'FECHA_ASIGNACION'=> $fecha_asignacion,
            ]);
            if($estudianteasignado){
                DB::commit();
                unset($this->mensaje);
                $this->mensaje=1;
            }
            else{
                DB::rollback();
                unset($this->mensaje);
                $this->mensaje=0;
            }
        }
    }

    public function editar_la_seccion(){

        if($this->validate([
            'seccionasignada' => 'required',
    
        ])==false)
        {
            $mensaje="no encontrado";
            session(['message' => 'no encontrado']);
            return back()->withErrors(['mensaje' =>'Validar el input vacio']);
        }
        else
        {
        $asignado2=$this->seccionasignada;
        $fecha_asignacion=date("Y-m-d H:i:s");

        DB::beginTransaction();

        $estudianteasignado=DB::table('tb_alumnos')->where('ID_USER', $this->id_alumno2)
        ->update(
            [
                'SECCION_ASIGNADA'=> $asignado2,
                'FECHA_ASIGNACION'=> $fecha_asignacion,
            ]);
            if($estudianteasignado){
                DB::commit();
                unset($this->mensajeeditado);
                $this->mensajeeditado=1;
            }
            else{
                DB::rollback();
                unset($this->mensajeeditado);
                $this->mensajeeditado=0;
            }
        }
    }


    public function tomargrado($id_grado){
        session(['id_grado' => $id_grado]);
    }
}

