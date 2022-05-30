<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;

class GradoComponents extends Component
{
    public $nombre_gr,$id_gr,$estado_gr,$op,$mensaje,$mensaje1,$edit,$mensaje3,$mensaje4,$mensaje5,$mensaje6,$mensajeeliminar,$mensajeeliminar1;
    public $seccion_gr,$precio_gr,$ministerial_gr,$resolucion_gr,$jornada_gr,$academico_gr;
    public $estado_sec,$nombre_sec,$nombre_jornada,$nombre_nvl,$estado_jornada,$estado_nvl;
    public $mensaje7,$mensaje8,$mensaje9,$mensaje10;
    public function render()
    {
        $grad= DB::table('tb_grados')

                ->join('tb_seccions', 'tb_grados.ID_SC', '=', 'tb_seccions.ID_SC')

                ->select('tb_grados.GRADO','tb_seccions.SECCION')

                ->get();
        $sql="SELECT * FROM tb_grados";
        $grados=DB::select($sql);
        $sql="SELECT * FROM tb_seccions";
        $secciones=DB::select($sql);
        $sql="SELECT * FROM tb_nvlacademico";
        $academico=DB::select($sql);
        $sql="SELECT * FROM tb_jornada";
        $jornada=DB::select($sql);
        return view('livewire.grado-components', compact('grados','secciones','grad','academico','jornada'));
    }

    public function guardar_gr(){

        if($this->validate([
            'nombre_gr' => 'required',
            'seccion_gr' => 'required',
            'ministerial_gr' => 'required',
            'resolucion_gr' => 'required',
            'academico_gr' => 'required',
            'jornada_gr' => 'required',
            'estado_gr' => 'required',

        ])==false)
        {
            $mensaje="no encontrado";
            session(['message' => 'no encontrado']);
            return back()->withErrors(['mensaje' =>'Validar el input vacio']);
        }
        else
        {
        $nombre_gr=$this->nombre_gr; 
        $seccion_gr=$this->seccion_gr;
        $precio_gr=$this->precio_gr; 
        $ministerial_gr=$this->ministerial_gr;
        $resolucion_gr=$this->resolucion_gr;
        $academico_gr=$this->academico_gr; 
        $jornada_gr=$this->jornada_gr;
        $estado_gr=$this->estado_gr;

        DB::beginTransaction();

        $grados=DB::table('tb_grados')->insert(
            [
                'GRADO'=> $nombre_gr,
                'ID_SC'=> $seccion_gr,
                'PRECIO_GRADO'=> $precio_gr=0,
                'MINISTERIAL'=> $ministerial_gr,
                'RESOLUCION'=> $resolucion_gr,
                'NIVEL_ACADEMICO'=> $academico_gr,
                'JORNADA'=> $jornada_gr,
                'ESTADO'=> $estado_gr,

            ]);
            if($grados){
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
    public function listar_gr(){ 
        $sql="SELECT * FROM tb_grados";
        $grados=DB::select($sql);
        $op=6;
        return view('home', compact('grados', 'op'));
    }
    public function edit($id){
        $id_gr=$id;
        $sql='SELECT * FROM tb_grados WHERE ID_GR=?';
        $grado=DB::select($sql,array($id_gr));

        if($grado!=null){
            foreach($grado as $gra)
            {
                $this->id_gr=$gra->ID_GR;
                $this->nombre_gr=$gra->GRADO;
                $this->seccion_gr=$gra->ID_SC;
                $this->ministerial_gr=$gra->MINISTERIAL;
                $this->resolucion_gr=$gra->RESOLUCION;
                $this->academico_gr=$gra->NIVEL_ACADEMICO;
                $this->jornada_gr=$gra->JORNADA;
                $this->estado_gr=$gra->ESTADO;
            }
        }
        $this->op=2;

        $this->edit=1;
    }
    public function update_gr_p(){
        $id_gr=$this->id_gr;
        $nombre_gr=$this->nombre_gr;
        $seccion_gr=$this->seccion_gr;
        $ministerial_gr=$this->ministerial_gr;
        $resolucion_gr=$this->resolucion_gr;
        $academico_gr=$this->academico_gr; 
        $jornada_gr=$this->jornada_gr;
        $estado_gr=$this->estado_gr;

        DB::beginTransaction();

        $grado=DB::table('tb_grados')
        ->where('ID_GR',$id_gr)
        ->update(
            [
                'GRADO'=>$nombre_gr,
                'ID_SC'=> $seccion_gr,
                'PRECIO_GRADO'=> $precio_gr=0,
                'MINISTERIAL'=> $ministerial_gr,
                'RESOLUCION'=> $resolucion_gr,
                'NIVEL_ACADEMICO'=> $academico_gr,
                'JORNADA'=> $jornada_gr,
                'ESTADO'=>$estado_gr,
            ]
            );

            if($grado){
                DB::commit();
                $this->reset();
                $this->mensaje3='Editado correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensaje3);                
                $this->mensaje4='No fue posible editar correctamente';
            }
    }
    public function delete($id){
        $id_gr=$id;

        DB::beginTransaction();

        $grado=DB::table('tb_grados')->where('ID_GR','=', $id_gr)->delete();

        if($grado){
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
    public function guardar_seccion(){

        if($this->validate([
            'nombre_sec' => 'required',
            'estado_sec' => 'required',

        ])==false)
        {
            $mensaje="no encontrado";
            session(['message' => 'no encontrado']);
            return back()->withErrors(['mensaje' =>'Validar el input vacio']);
        }
        else
        {
        $nombre_sec=$this->nombre_sec;
        $estado_sec=$this->estado_sec;

        DB::beginTransaction();

        $grados=DB::table('tb_seccions')->insert(
            [
                'SECCION'=> $nombre_sec,
                'ESTADO'=> $estado_sec,

            ]);
            if($grados){
                DB::commit();
                $this->reset();
                $this->mensaje5='Insertado correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensaje5);
                $this->mensaje6='No se logro insertar correctamente';
            }
        }
        }
        public function guardar_nvlacademico(){

            if($this->validate([
                'nombre_nvl' => 'required',
                'estado_nvl' => 'required',
        
            ])==false)
            {
                $mensaje="no encontrado";
                session(['message' => 'no encontrado']);
                return back()->withErrors(['mensaje' =>'Validar el input vacio']);
            }
            else
            {
            $nombre_nvl=$this->nombre_nvl;
            $estado_nvl=$this->estado_nvl;
    
            DB::beginTransaction();
    
            $nivelacademico=DB::table('tb_nvlacademico')->insert(
                [
                    'NIVEL_ACADEMICO'=> $nombre_nvl,
                    'ESTADO'=> $estado_nvl,
                ]);
                if($nivelacademico){
                    DB::commit();
                    $this->reset();
                    $this->mensaje7='Insertado correctamente';
                }
                else{
                    DB::rollback();
                    unset($this->mensaje7);
                    $this->mensaje8='No fue posible insertar correctamente';
                }
            }
        }
        public function guardar_jornada(){

            if($this->validate([
                'nombre_jornada' => 'required',
                'estado_jornada' => 'required',
        
            ])==false)
            {
                $mensaje="no encontrado";
                session(['message' => 'no encontrado']);
                return back()->withErrors(['mensaje' =>'Validar el input vacio']);
            }
            else
            {
            $nombre_jornada=$this->nombre_jornada;
            $estado_jornada=$this->estado_jornada;
    
            DB::beginTransaction();
    
            $tipojornada=DB::table('tb_jornada')->insert(
                [
                    'TIPO_JORNADA'=> $nombre_jornada,
                    'ESTADO'=> $estado_jornada,
                ]);
                if($tipojornada){
                    DB::commit();
                    $this->reset();
                    $this->mensaje9='Insertado correctamente';
                }
                else{
                    DB::rollback();
                    unset($this->mensaje9);
                    $this->mensaje10='No fue posible insertar correctamente';
                }
            }
        }
}

