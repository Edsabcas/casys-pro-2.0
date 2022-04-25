<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;

class Materiacomponent extends Component
{
    public $nombre_mat, $id_materias,$id_maestros,$estado_materia,$botones,$valor,$valor1,$error,$tipo_materia;

    public $prueba, $op, $mensaje, $mensaje1, $edit, $mensaje3, $mensaje4, $mensaje_eliminar, $mensaje_eliminar2;

    public function render()
    {
        $sql= 'SELECT * FROM TB_MATERIAS';
        $materias=DB::select($sql);
        return view('livewire.materiacomponent',compact('materias'));
    }

    public function guardar_mat(){
        if($this->validate([
            'nombre_mat' => 'required',
            'tipo_materia' => 'required',
            'estado_materia' => 'required',
        ])==false){
            $error="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['error' => 'Validar el input vacio']);
        }

        else{
            $nombre_mat=$this->nombre_mat;
            $tipo_materia=$this->tipo_materia;
            $estado_materia=$this->estado_materia;
     
            $materias=DB::table('TB_MATERIAS')->insert([
                'NOMBRE_MATERIA'=>$nombre_mat,
                'TIPO_DE_MATERIA'=>$tipo_materia,
                'ESTADO'=>$estado_materia,
            ]);
            if($materias){
                unset($this->mensaje);
                unset($this->mensaje3);
                unset($this->mensaje_eliminar);
                unset($this->mensaje1);
                unset($this->mensaje4);
                unset($this->mensaje_eliminar2);
                $this->reset();
                $this->op=7;
                $this->mensaje='Insertado correctamente';
                }
                else {
                unset($this->mensaje);
                unset($this->mensaje3);
                unset($this->mensaje_eliminar);
                unset($this->mensaje1);
                unset($this->mensaje4);
                unset($this->mensaje_eliminar2);
                $this->op=7;
                $this->mensaje1='Datos no  insertados correctamente';
                }
        }        
    }

    public function list_mat(){
        $sql= 'SELECT * FROM TB_MATERIAS';
        $materias=DB::select($sql);
        $op=8;
        return view('home', compact('materias','op'));
     }

     Public function edit($id){
        $id_materias=$id;
        $sql='SELECT * FROM TB_MATERIAS WHERE ID_MATERIA=?';
        $materias=DB:: select($sql, array($id_materias));

        if($materias !=null){
            foreach($materias as $mate)
            {
                $this->id_materias=$mate->ID_MATERIA;
                $this->nombre_mat=$mate->NOMBRE_MATERIA;
                $this->tipo_materia=$mate->TIPO_DE_MATERIA;
                $this->estado_materia=$mate->ESTADO;
            }
        }

        $this->op=9;
       $this->edit=1;
    }
    public function update_mat(){
        if($this->validate([
            'nombre_mat' => 'required',
            'tipo_materia' => 'required',
            'estado_materia' => 'required',
        ])==false){
            $error="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['error' => 'Validar el input vacio']);
        }

        else{
            $id_materias=$this->id_materias;
            $nombre_mat=$this->nombre_mat;
            $tipo_materia=$this->tipo_materia;
            $estado_materia=$this->estado_materia;

            $mate=DB::table('TB_MATERIAS')
            ->where('ID_MATERIA', $id_materias)
            ->update( 
                [
                    'NOMBRE_MATERIA'=>$nombre_mat,
                    'TIPO_DE_MATERIA'=>$tipo_materia,
                    'ESTADO'=>$estado_materia,
                ]
                );

                if($mate){
                    unset($this->mensaje);
                    unset($this->mensaje3);
                    unset($this->mensaje_eliminar);
                    unset($this->mensaje1);
                    unset($this->mensaje4);
                    unset($this->mensaje_eliminar2);
                    $this->reset();
                    $sql= 'SELECT * FROM TB_MATERIAS';
                    $materias=DB::select($sql);
                    $this->op=7;
                    $this->mensaje3='Editado Correctamente';
                }
                else{
                    unset($this->mensaje1);
                    unset($this->mensaje4);
                    unset($this->mensaje_eliminar2);
                    unset($this->mensaje);
                    unset($this->mensaje3);
                    unset($this->mensaje_eliminar);
                    $this->op=7;
                    $this->mensaje4='No fue posible editarlo Correctamente';
                }
        } 
       
    }

    Public function delete($id){
        $id_materias=$id;
        $mate=DB::table('TB_MATERIAS')->where('ID_MATERIA','=', $id_materias)->delete();

        if($mate){
            unset($this->mensaje);
            unset($this->mensaje3);
            unset($this->mensaje_eliminar);
            unset($this->mensaje1);
            unset($this->mensaje4);
            unset($this->mensaje_eliminar2);
            $sql='SELECT * FROM TB_MATERIAS WHERE ID_MATERIA=?';
            $materias=DB:: select($sql, array($id_materias));
            $this->op=7;
            $this->mensaje_eliminar='Eliminado Correctamente';
        }
        else{
            unset($this->mensaje);
            unset($this->mensaje3);
            unset($this->mensaje_eliminar);
            unset($this->mensaje1);
            unset($this->mensaje4);
            unset($this->mensaje_eliminar2);
            $this->op=7;  
            $this->mensaje_eliminar2='No fue posible eliminarlo';
        }
    }


}

