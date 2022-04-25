<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;

class CalendarizacionComponent extends Component
{
    public $unidad, $fecha_ini,$fecha_final,$id_cal;

    public $prueba, $op, $mensaje, $mensaje1, $edit, $mensaje3, $mensaje4, $mensaje_eliminar, $mensaje_eliminar2;

    public function render()
    {
        $sql= 'SELECT * FROM tb_unidades';
        $unidades=DB::select($sql);
        $sql= 'SELECT * FROM TB_CALENDARIZACION';
        $calendarizacion=DB::select($sql);
        return view('livewire.calendarizacion-component',compact('unidades','calendarizacion'));
    }

    public function guardar_calendarizacion(){
        if($this->validate([
            'unidad' => 'required',
            'fecha_ini' => 'required',
            'fecha_final' => 'required',

        ])==false){
            $error="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['error' => 'Validar el input vacio']);
        }

        else{
        $unidad=$this->unidad;
        $fecha_ini=$this->fecha_ini;
        $fecha_final=$this->fecha_final;

        $unidades=DB::table('TB_CALENDARIZACION')->insert(
            [
                'ID_UNIDADES'=>$unidad,
                'FECHA_INICIO'=>$fecha_ini,
                'FECHA_FINAL'=>$fecha_final,
            ]);
        if($unidades){
            unset($this->mensaje);
            unset($this->mensaje3);
            unset($this->mensaje_eliminar);
            $this->reset();
            $this->op=40;
            $this->mensaje='Insertado correctamente';
        }
        else {
            unset($this->mensaje1);
            unset($this->mensaje4);
            unset($this->mensaje_eliminar2);
            $this->op=40;
            $this->mensaje1='Datos no  insertados correctamente';
        }     
        }
         
        
 

    }

    public function list_calendarizacion(){
        $sql= 'SELECT * FROM tb_unidades';
        $unidades=DB::select($sql);
        $sql= 'SELECT * FROM TB_CALENDARIZACION';
        $calendarizacion=DB::select($sql);
        $op=42;
        return view('home', compact('unidades','op','calendarizacion'));
     }

     Public function edit($id){
        $id_cal=$id;
        $sql='SELECT * FROM TB_CALENDARIZACION WHERE ID_CALENDARIZACION=?';
        $calendarizacion=DB:: select($sql, array($id_cal));
        $sql= 'SELECT * FROM tb_unidades';
        $unidades=DB::select($sql);

        if($calendarizacion !=null){
            foreach($calendarizacion as $calen)
            {
                $this->id_cal=$calen->ID_CALENDARIZACION;
                $this->unidad=$calen->ID_UNIDADES;
                $this->fecha_ini=$calen->FECHA_INICIO;
                $this->fecha_final=$calen->FECHA_FINAL;

            }
        }

        $this->op=43;
       $this->edit=1;
    }
    
    public function update_calendarizacion(){
        if($this->validate([
            'unidad' => 'required',
            'fecha_ini' => 'required',
            'fecha_final' => 'required',

        ])==false){
            $error="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['error' => 'Validar el input vacio']);
        }

        else{
            $id_cal=$this->id_cal;
            $unidad=$this->unidad;
            $fecha_ini=$this->fecha_ini;
            $fecha_final=$this->fecha_final;
    
            $calen=DB::table('TB_CALENDARIZACION')
            ->where('ID_CALENDARIZACION', $id_cal)
            ->update( 
                [
                    'ID_UNIDADES'=>$unidad,
                    'FECHA_INICIO'=>$fecha_ini,
                    'FECHA_FINAL'=>$fecha_final,
                ]
                );
    
                if($calen){
                    unset($this->mensaje);
                    unset($this->mensaje3);
                    unset($this->mensaje_eliminar);
                    $this->reset();
                    $sql= 'SELECT * FROM tb_unidades';
                    $unidades=DB::select($sql);
                    $sql= 'SELECT * FROM TB_CALENDARIZACION';
                    $calendarizacion=DB::select($sql);
                    $this->op=40;
                    $this->mensaje3='Editado Correctamente';
                }
                else{
                    unset($this->mensaje1);
                    unset($this->mensaje4);
                    unset($this->mensaje_eliminar2);
                    $this->op=40;
                    $this->mensaje4='No fue posible editarlo Correctamente';
                }
        }
       
    }

    Public function delete($id){
        $id_cal=$id;
        $calen=DB::table('TB_CALENDARIZACION')->where('ID_CALENDARIZACION','=', $id_cal)->delete();

        if($calen){
            unset($this->mensaje);
            unset($this->mensaje3);
            unset($this->mensaje_eliminar);
            $sql= 'SELECT * FROM tb_unidades';
            $unidades=DB::select($sql);
            $sql= 'SELECT * FROM TB_CALENDARIZACION';
            $calendarizacion=DB::select($sql);
            $this->op=40;
            $this->mensaje_eliminar='Eliminado Correctamente';
        }
        else{
            unset($this->mensaje1);
            unset($this->mensaje4);
            unset($this->mensaje_eliminar2);
            $this->op=40;  
            $this->mensaje_eliminar2='No fue posible eliminarlo';
        }
    }
}
