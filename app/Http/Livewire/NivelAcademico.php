<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;
use App\Models\tb_nvlacademico;

class NivelAcademico extends Component
{
    public $nombre_nvl,$estado_nvl,$op,$mensaje2,$mensaje3,$mensaje4,$mensaje5,$edit,$mensajeeliminar,$mensajeeliminar1;

    public function render()
    {
        $sql="SELECT * FROM tb_nvlacademico";
        $nivelacademico=DB::select($sql);
        return view('livewire.nivel-academico',compact('nivelacademico'));
    }
    public function guardar_nvl(){

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

        $nivelacademico=DB::table('tb_nvlacademicos')->insert(
            [
                'NIVEL_ACADEMICO'=> $nombre_nvl,
                'ESTADO'=> $estado_nvl,
            ]);
            if($nivelacademico){
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
    public function listar_nvl(){ 
        $sql="SELECT * FROM tb_nvlacademico";
        $nivelacademico=DB::select($sql);
        $op=5;
        return view('home', compact('nivelacademico', 'op'));
    }
    public function edit($id){
        $id_nvl=$id;
        $sql='SELECT * FROM tb_nvlacademico WHERE ID_NVL=?';
        $nivelacademico=DB::select($sql,array($id_nvl));

        if($nivelacademico!=null){
            foreach($nivelacademico as $nivel)
            {
                $this->id_nvl=$nivel->ID_NVL;
                $this->nombre_nvl=$nivel->NIVEL_ACADEMICO;
                $this->estado_nvl=$nivel->ESTADO;
            }
        }
        $this->op=3;

        $this->edit=1;
    }
    public function update_nvl_p(){
        $id_nvl=$this->id_nvl;
        $nombre_nvl=$this->nombre_nvl;
        $estado_nvl=$this->estado_nvl;

        DB::beginTransaction();

        $nivel=DB::table('tb_nvlacademico')
        ->where('ID_NVL',$id_nvl)
        ->update(
            [
                'NIVEL_ACADEMICO'=>$nombre_nvl,
                'ESTADO'=>$estado_nvl,
            ]
            );

            if($nivel){
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
        $id_nvla=$id;

        DB::beginTransaction();

        $nivel=DB::table('tb_nvlacademico')->where('ID_NVL','=', $id_nvla)->delete();

        if($nivel){
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
