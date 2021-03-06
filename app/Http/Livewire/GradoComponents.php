<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;

class GradoComponents extends Component
{
    public $nombre_gr,$id_gr,$estado_gr,$op,$mensaje,$mensaje1,$edit,$mensaje3,$mensaje4,$mensaje5,$mensaje6,$mensajeeliminar,$mensajeeliminar1,$mensajeeliminar2,$mensajeeliminar3,$mensajeeliminar4,$mensajeeliminar5,$mensajeeliminar6,$mensajeeliminar7;
    public $seccion_gr,$precio_gr,$ministerial_gr,$resolucion_gr,$jornada_gr,$academico_gr,$preciopre,$preciovir,$totalpre,$totalvir,$adelantopre,$adelantovir;
    public $estado_sec,$nombre_sec,$nombre_jornada,$nombre_nvl,$estado_jornada,$estado_nvl,$edit1,$id_jornada,$edit3;
    public $mensaje7,$mensaje8,$mensaje9,$mensaje10,$mensaje11,$mensaje12,$mensaje13,$mensaje14,$mensaje15,$mensaje16,$id_sc,$edit2,$id_nvl;
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
            'preciopre' => 'required',
            'preciovir' => 'required',
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
        $preciopre=$this->preciopre;
        $preciovir=$this->preciovir;
        $academico_gr=$this->academico_gr; 
        $jornada_gr=$this->jornada_gr;
        $estado_gr=$this->estado_gr;

        DB::beginTransaction();

        $grados=DB::table('tb_grados')->insert(
            [
                'GRADO'=> $nombre_gr,
                'ID_SC'=> $seccion_gr,
                'MINISTERIAL'=> $ministerial_gr,
                'RESOLUCION'=> $resolucion_gr,
                'PRECIO_PRESENCIAL'=> $preciopre,
                'PRECIO_VIRTUAL'=> $preciovir,
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
                $this->preciopre=$gra->PRECIO_PRESENCIAL;
                $this->preciovir=$gra->PRECIO_VIRTUAL;
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
        $preciopre=$this->preciopre;
        $preciovir=$this->preciovir;
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
                'MINISTERIAL'=> $ministerial_gr,
                'RESOLUCION'=> $resolucion_gr,
                'PRECIO_PRESENCIAL'=> $preciopre,
                'PRECIO_VIRTUAL'=> $preciovir,
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

    /* 

    PARTE SECCI??N

    */

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
        public function edit1($id){
            $id_sc=$id;
            $sql='SELECT * FROM tb_seccions WHERE ID_SC=?';
            $secciones=DB::select($sql,array($id_sc));
    
            if($secciones!=null){
                foreach($secciones as $seccion)
                {
                    $this->id_sc=$seccion->ID_SC;               
                    $this->nombre_sec=$seccion->SECCION;   
                    $this->estado_sec=$seccion->ESTADO;         
                }
            }
            $this->op=2;
    
            $this->edit1=1;
        }
        public function update_sc_p(){
            $id_sc=$this->id_sc;
            $nombre_sec=$this->nombre_sec;
            $estado_sec=$this->estado_sec;
    
            DB::beginTransaction();
    
            $secciones=DB::table('tb_seccions')
            ->where('ID_SC',$id_sc)
            ->update(
                [
                    'SECCION'=>$nombre_sec,
                    'ESTADO'=>$estado_sec,
                ]
                );
    
                if($secciones){
                    DB::commit();
                    $this->reset();
                    unset($this->mensaje11);
                    $this->mensaje11='Editado correctamente';
                }
                else{
                    DB::rollback();
                    unset($this->mensaje12);
                    $this->mensaje12='No fue posible editar correctamente';
                }
        }
        public function delete1($id){
            $id_sc=$id;
    
            DB::beginTransaction();
    
            $seccion=DB::table('tb_seccions')->where('ID_SC','=', $id_sc)->delete();
    
            if($seccion){
                DB::commit();
                $this->reset();
                unset($this->mensajeeliminar2);
                $this->mensajeeliminar2='Eliminado correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensajeeliminar3);            
                $this->mensajeeliminar3='No fue posible eliminar correctamente';
            }
        }

        /* 
        
        PARTE NIVEL ACADEMICO

        */

        public function guardar_nvlacademico(){

            if($this->validate([
                'nombre_nvl' => 'required',
                'adelantovir' => 'required',
                'totalvir' => 'required',
                'adelantopre' => 'required',
                'totalpre' => 'required',
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
            $adelantovir=$this->adelantovir;
            $totalvir=$this->totalvir;
            $adelantopre=$this->adelantopre;
            $totalpre=$this->totalpre;
            $estado_nvl=$this->estado_nvl;
    
            DB::beginTransaction();
    
            $academico=DB::table('tb_nvlacademico')->insert(
                [
                    'NIVEL_ACADEMICO'=> $nombre_nvl,
                    'ADELANTO_VIRTUAL'=> $adelantovir,
                    'TOTAL_VIRTUAL'=> $totalvir,
                    'ADELANTO_PRESENCIAL'=> $adelantopre,
                    'TOTAL_PRESENCIAL'=> $totalpre,
                    'ESTADO'=> $estado_nvl,
                ]);
                if($academico){
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

        public function edit2($id){
            $id_nvl=$id;
            $sql='SELECT * FROM tb_nvlacademico WHERE ID_NVL=?';
            $academico=DB::select($sql,array($id_nvl));
    
            if($academico!=null){
                foreach($academico as $nivel)
                {
                    $this->id_nvl=$nivel->ID_NVL;               
                    $this->nombre_nvl=$nivel->NIVEL_ACADEMICO;
                    $this->adelantovir=$nivel->ADELANTO_VIRTUAL;   
                    $this->totalvir=$nivel->TOTAL_VIRTUAL;  
                    $this->adelantopre=$nivel->ADELANTO_PRESENCIAL;   
                    $this->totalpre=$nivel->TOTAL_PRESENCIAL;  
                    $this->estado_nvl=$nivel->ESTADO;         
                }
            }
            $this->op=2;
            $this->edit2=1;
        }
        public function update_nvl_p(){
            $id_nvl=$this->id_nvl;
            $nombre_nvl=$this->nombre_nvl;
            $adelantovir=$this->adelantovir;
            $totalvir=$this->totalvir;
            $adelantopre=$this->adelantopre;
            $totalpre=$this->totalpre;
            $estado_nvl=$this->estado_nvl;
    
            DB::beginTransaction();
    
            $academico=DB::table('tb_nvlacademico')
            ->where('ID_NVL',$id_nvl)
            ->update(
                [
                    'NIVEL_ACADEMICO'=>$nombre_nvl,
                    'ADELANTO_VIRTUAL'=> $adelantovir,
                    'TOTAL_VIRTUAL'=> $totalvir,
                    'ADELANTO_PRESENCIAL'=> $adelantopre,
                    'TOTAL_PRESENCIAL'=> $totalpre,
                    'ESTADO'=>$estado_nvl,
                ]
                );
    
                if($academico){
                    DB::commit();
                    $this->reset();
                    unset($this->mensaje13);
                    $this->mensaje13='Editado correctamente';
                }
                else{
                    DB::rollback();
                    unset($this->mensaje14);
                    $this->mensaje14='No fue posible editar correctamente';
                }
        }
        public function delete2($id){
            $id_nvl=$id;
    
            DB::beginTransaction();
    
            $academico=DB::table('tb_nvlacademico')->where('ID_NVL','=', $id_nvl)->delete();
    
            if($academico){
                DB::commit();
                $this->reset();
                unset($this->mensajeeliminar4);
                $this->mensajeeliminar4='Eliminado correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensajeeliminar5);            
                $this->mensajeeliminar5='No fue posible eliminar correctamente';
            }
        }
        /* 
        
        PARTE TIPO DE JORNADA
        
        */

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
    
            $jornada=DB::table('tb_jornada')->insert(
                [
                    'TIPO_JORNADA'=> $nombre_jornada,
                    'ESTADO'=> $estado_jornada,
                ]);
                if($jornada){
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
        public function edit3($id){
            $id_jornada=$id;
            $sql='SELECT * FROM tb_jornada WHERE ID_JORNADA=?';
            $jornada=DB::select($sql,array($id_jornada));
    
            if($jornada!=null){
                foreach($jornada as $jor)
                {
                    $this->id_jornada=$jor->ID_JORNADA;               
                    $this->nombre_jornada=$jor->TIPO_JORNADA;   
                    $this->estado_jornada=$jor->ESTADO;         
                }
            }
            $this->op=2;
    
            $this->edit3=1;
        }
        public function update_jornada_p(){
            $id_jornada=$this->id_jornada;
            $nombre_jornada=$this->nombre_jornada;
            $estado_jornada=$this->estado_jornada;
    
            DB::beginTransaction();
    
            $jornada=DB::table('tb_jornada')
            ->where('ID_JORNADA',$id_jornada)
            ->update(
                [
                    'TIPO_JORNADA'=>$nombre_jornada,
                    'ESTADO'=>$estado_jornada,
                ]
                );
    
                if($jornada){
                    DB::commit();
                    $this->reset();
                    unset($this->mensaje15);
                    $this->mensaje11='Editado correctamente';
                }
                else{
                    DB::rollback();
                    unset($this->mensaje16);
                    $this->mensaje12='No fue posible editar correctamente';
                }
        }
        public function delete3($id){
            $id_jornada=$id;
    
            DB::beginTransaction();
    
            $jornada=DB::table('tb_jornada')->where('ID_JORNADA','=', $id_jornada)->delete();
    
            if($jornada){
                DB::commit();
                $this->reset();
                unset($this->mensajeeliminar6);
                $this->mensajeeliminar6='Eliminado correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensajeeliminar7);            
                $this->mensajeeliminar7='No fue posible eliminar correctamente';
            }
        }
}

