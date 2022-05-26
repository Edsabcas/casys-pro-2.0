<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;

class TipoDeJornadaComponent extends Component
{
    public $nombre_jornada,$estado_jornada,$op,$mensaje2,$mensaje3,$mensaje4,$mensaje5,$edit,$mensajeeliminar,$mensajeeliminar1;
    public function render()
    {
        $sql="SELECT * FROM tb_jornada";
        $tipojornada=DB::select($sql);
        return view('livewire.tipo-de-jornada-component',compact("tipojornada"));
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
                'TIPO_JORNADA '=> $nombre_jornada,
                'ESTADO'=> $estado_jornada,
            ]);
            if($tipojornada){
                DB::commit();
                $this->reset();
                unset($this->mensaje2);
                $this->op=2;
                $this->mensaje2='Insertado correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensaje3);
                $this->op=2;
                $this->mensaje3='No fue posible insertar correctamente';
            }
        }
    }
    public function listar_jornada(){ 
        $sql="SELECT * FROM tb_jornada";
        $tipojornada=DB::select($sql);
        $op=5;
        return view('home', compact('tipojornada', 'op'));
    }
    public function edit($id){
        $id_jornada=$id;
        $sql='SELECT * FROM tb_jornada WHERE ID_JORNADA =?';
        $tipojornada=DB::select($sql,array($id_jornada));

        if($tipojornada!=null){
            foreach($tipojornada as $tipo)
            {
                $this->id_jornada=$tipo->ID_JORNADA ;
                $this->nombre_jornada=$tipo->TIPO_JORNADA ;
                $this->estado_jornada=$tipo->ESTADO;
            }
        }
        $this->op=3;

        $this->edit=1;
    }
    public function update_jornada_p(){
        $id_jornada=$this->id_jornada;
        $nombre_jornada=$this->nombre_jornada;
        $estado_jornada=$this->estado_jornada;

        DB::beginTransaction();

        $tipo=DB::table('tb_jornada')
        ->where('ID_JORNADA ',$id_jornada)
        ->update(
            [
                'TIPO_JORNADA '=>$nombre_jornada,
                'ESTADO'=>$estado_jornada,
            ]
            );

            if($tipo){
                DB::commit();
                $this->op=3;
                $this->mensaje4='Editado correctamente';
            }
            else{
                DB::rollback();
                $this->op=3;
                $this->mensaje5='No fue posible editar correctamente';
            }
    }
    public function delete($id){
        $id_tipo=$id;

        DB::beginTransaction();

        $tipo=DB::table('tb_jornada')->where('ID_JORNADA ','=', $id_tipo)->delete();

        if($tipo){
            DB::commit();
            $this->op=4;
            $this->mensajeeliminar='Eliminado correctamente';
        }
        else{
            DB::rollback();
            $this->op=4;
            $this->mensajeeliminar1='No fue posible eliminar correctamente';
        }
    }

}

