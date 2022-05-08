<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;

class UnidadesComponent extends Component
{
    public $nombre_uni, $id_mat,$id_uni,$estado_uni;

    public $prueba, $op, $mensaje, $mensaje1, $edit, $mensaje3, $mensaje4, $mensaje_eliminar, $mensaje_eliminar2;

    public function render()
    {
        $sql= 'SELECT * FROM tb_unidades';
        $unidades=DB::select($sql);
        $sql= 'SELECT * FROM tb_materias';
        $materias=DB::select($sql);
        return view('livewire.unidades-component',compact('unidades','materias'));
    }

    public function guardar_unidad(){
        if($this->validate([
            'id_mat' => 'required',
            'nombre_uni' => 'required',
            'estado_uni' => 'required',
        ])==false){
            $error="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['error' => 'Validar el input vacio']);
        }

        else{
            $id_mat=$this->id_mat;
            $nombre_uni=$this->nombre_uni;
            $estado_uni=$this->estado_uni;

            DB::begintransaction();
    
            $unidades=DB::table('tb_unidades')->insert(
                [
                    'ID_MATERIA'=>$id_mat,
                    'NOMNBRE_UNIDAD'=>$nombre_uni,
                    'ESTADO'=>$estado_uni,
                ]);
            if($unidades){
                DB::commit();
                unset($this->mensaje);
                unset($this->mensaje3);
                unset($this->mensaje_eliminar);
                $this->reset();
                $this->op=16;
                $this->mensaje='Insertado correctamente';
            }
            else {
                DB::rollback();
                unset($this->mensaje1);
                unset($this->mensaje4);
                unset($this->mensaje_eliminar2);
                $this->op=16;
                $this->mensaje1='Datos no  insertados correctamente';
            }
        }
        

    }

    public function list_u(){
        $sql= 'SELECT * FROM tb_unidades';
        $unidades=DB::select($sql);
        $sql= 'SELECT * FROM tb_materias';
        $materias=DB::select($sql);
        $op=18;
        return view('home', compact('unidades','op','materias'));
     }

     Public function edit($id){
        $id_uni=$id;
        $sql='SELECT * FROM tb_unidades WHERE ID_UNIDADES=?';
        $unidades=DB:: select($sql, array($id_uni));
        $sql= 'SELECT * FROM tb_materias';
        $materias=DB::select($sql);

        if($unidades !=null){
            foreach($unidades as $uni)
            {
                $this->id_uni=$uni->ID_UNIDADES;
                $this->id_mat=$uni->ID_MATERIA;
                $this->nombre_uni=$uni->NOMNBRE_UNIDAD;
                $this->estado_uni=$uni->ESTADO;

            }
        }

        $this->op=19;
       $this->edit=1;
    }
    
    public function update_uni(){
        $id_uni=$this->id_uni;
        $id_mat=$this->id_mat;
        $nombre_uni=$this->nombre_uni;
        $estado_uni=$this->estado_uni;

        DB::begintransaction();

        $uni=DB::table('tb_unidades')
        ->where('ID_UNIDADES', $id_uni)
        ->update( 
            [
                'ID_MATERIA'=>$id_mat,
                'NOMNBRE_UNIDAD'=>$nombre_uni,
                'ESTADO'=>$estado_uni,
            ]
            );

            if($uni){
                DB::commit();
                unset($this->mensaje);
                unset($this->mensaje3);
                unset($this->mensaje_eliminar);
                $this->reset();
                $sql='SELECT*FROM tb_unidades';
                $unidades=DB::select($sql);
                $sql= 'SELECT * FROM tb_materias';
                $materias=DB::select($sql);
                $this->op=16;
                $this->mensaje3='Editado Correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensaje1);
                unset($this->mensaje4);
                unset($this->mensaje_eliminar2);
                $this->op=16;
                $this->mensaje4='No fue posible editarlo Correctamente';
            }
    }

    Public function delete($id){
        $id_uni=$id;
        DB::begintransaction();

        $uni=DB::table('tb_unidades')->where('ID_UNIDADES','=', $id_uni)->delete();

        if($uni){
            DB::commit();
            unset($this->mensaje);
            unset($this->mensaje3);
            unset($this->mensaje_eliminar);
            $sql="SELECT * FROM tb_unidades";
            $unidades=DB::select($sql);
            $sql= 'SELECT * FROM tb_materias';
            $materias=DB::select($sql);
            $this->op=16;
            $this->mensaje_eliminar='Eliminado Correctamente';
        }
        else{
            DB::rollback();
            unset($this->mensaje1);
            unset($this->mensaje4);
            unset($this->mensaje_eliminar2);
            $this->op=16;  
            $this->mensaje_eliminar2='No fue posible eliminarlo';
        }
    }
}
