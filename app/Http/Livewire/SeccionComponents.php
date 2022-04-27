<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;

class SeccionComponents extends Component
{
    public $nombre_sec,$estado_sec,$op,$mensaje2,$mensaje3,$mensaje4,$mensaje5,$edit,$mensajeeliminar,$mensajeeliminar1;
    public function render()
    {
        $sql="SELECT * FROM tb_seccions";
        $secciones=DB::select($sql);
        return view('livewire.seccion-components', compact('secciones'));
    }

    public function guardar_sec(){

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
        $secciones=DB::table('tb_seccions')->insert(
            [
                'SECCION'=> $nombre_sec,
                'ESTADO'=> $estado_sec,
            ]);
            if($secciones){
                $this->reset();
                unset($this->mensaje2);
                $this->op=2;
                $this->mensaje2='Insertado correctamente';
            }
            else{
                unset($this->mensaje3);
                $this->op=2;
                $this->mensaje3='No fue posible insertar correctamente';
            }
        }
    }
    public function listar_sec(){ 
        $sql="SELECT * FROM tb_seccions";
        $secciones=DB::select($sql);
        $op=5;
        return view('home', compact('secciones', 'op'));
    }
    public function edit($id){
        $id_sec=$id;
        $sql='SELECT * FROM tb_seccions WHERE ID_SC=?';
        $secciones=DB::select($sql,array($id_sec));

        if($secciones!=null){
            foreach($secciones as $seccion)
            {
                $this->id_sec=$seccion->ID_SC;
                $this->nombre_sec=$seccion->SECCION;
                $this->estado_sec=$seccion->ESTADO;
            }
        }
        $this->op=3;

        $this->edit=1;
    }
    public function update_sec_p(){
        $id_sec=$this->id_sec;
        $nombre_sec=$this->nombre_sec;
        $estado_sec=$this->estado_sec;

        $seccion=DB::table('tb_seccions')
        ->where('ID_SC',$id_sec)
        ->update(
            [
                'SECCION'=>$nombre_sec,
                'ESTADO'=>$estado_sec,
            ]
            );

            if($seccion){
               
                $this->op=3;
                $this->mensaje4='Editado correctamente';
            }
            else{
                $this->op=3;
                $this->mensaje5='No fue posible editar correctamente';
            }
    }
    public function delete($id){
        $id_sc=$id;
        $seccion=DB::table('tb_seccions')->where('ID_SC','=', $id_sc)->delete();

        if($seccion){
            $this->op=4;
            $this->mensajeeliminar='Eliminado correctamente';
        }
        else{
            $this->op=4;
            $this->mensajeeliminar1='No fue posible eliminar correctamente';
        }
    }
}
