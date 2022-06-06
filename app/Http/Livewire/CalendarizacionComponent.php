<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;

class CalendarizacionComponent extends Component
{
    public $unidad, $fecha_ini,$fecha_final,$id_cal,$op3,$unidadextra;

    public $prueba, $op, $mensaje, $mensaje1, $edit, $mensaje3, $mensaje4, $mensaje_eliminar, $mensaje_eliminar2;

    public function render()
    {
        $sql= 'SELECT * FROM tb_unidades_fijas';
        $unidades=DB::select($sql);
        $sql= 'SELECT * FROM TB_CALENDARIZACION';
        $calendarizacion=DB::select($sql);
        $sql= 'SELECT * FROM tb_unidades';
        $unidadesex=DB::select($sql);
        return view('livewire.calendarizacion-component',compact('unidades','calendarizacion','unidadesex'));
    }

    public function validarext($num){
         $this->op3=$num;
    }

    public function guardar_calendarizacion(){
        if($this->validate([
            'fecha_ini' => 'required',
            'fecha_final' => 'required',

        ])==false){
            $error="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['error' => 'Validar el input vacio']);
        }

        else{
        $id_usuariolog = auth()->user()->id;    
        $unidad=$this->unidad;
        $fecha_ini=$this->fecha_ini;
        $fecha_final=$this->fecha_final;
        $unidadextra=$this->unidadextra;


        DB::begintransaction();

        $unidades=DB::table('TB_CALENDARIZACION')->insert(
            [
                'id'=>$id_usuariolog,
                'ID_UNIDADES_FIJAS'=>$unidad,
                'ID_UNIDADES'=>$unidadextra,
                'FECHA_INICIO'=>$fecha_ini,
                'FECHA_FINAL'=>$fecha_final,
            ]);
        if($unidades){
            DB::commit();
            unset($this->mensaje);
            unset($this->mensaje3);
            unset($this->mensaje_eliminar);
            $this->reset();
            $this->op=40;
            $this->mensaje='Insertado correctamente';
        }
        else {
            DB::rollback();
            unset($this->mensaje1);
            unset($this->mensaje4);
            unset($this->mensaje_eliminar2);
            $this->op=40;
            $this->mensaje1='Datos no  insertados correctamente';
        }     
        }
         
        
 

    }

    public function list_calendarizacion(){
        $sql= 'SELECT * FROM tb_unidades_fijas';
        $unidades=DB::select($sql);
        $sql= 'SELECT * FROM TB_CALENDARIZACION';
        $calendarizacion=DB::select($sql);
        $sql= 'SELECT * FROM tb_unidades';
        $unidadesex=DB::select($sql);
        $op=42;
        return view('home', compact('unidades','op','calendarizacion','unidadesex'));
     }

     Public function edit($id){
        $id_cal=$id;
        $sql='SELECT * FROM TB_CALENDARIZACION WHERE ID_CALENDARIZACION=?';
        $calendarizacion=DB:: select($sql, array($id_cal));
        $sql= 'SELECT * FROM tb_unidades_fijas';
        $unidades=DB::select($sql);
        $sql= 'SELECT * FROM tb_unidades';
        $unidadesex=DB::select($sql);

        if($calendarizacion !=null){
            foreach($calendarizacion as $calen)
            {
                $this->id_cal=$calen->ID_CALENDARIZACION;
                $this->unidad=$calen->ID_UNIDADES_FIJAS;
                $this->fecha_ini=$calen->FECHA_INICIO;
                $this->fecha_final=$calen->FECHA_FINAL;
                $this->unidadextra=$calen->ID_UNIDADES;

            }
        }

        $this->op=43;
       $this->edit=1;
    }
    
    public function update_calendarizacion(){
        if($this->validate([
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
            $unidadextra=$this->unidadextra;

            DB::begintransaction();
    
            $calen=DB::table('TB_CALENDARIZACION')
            ->where('ID_CALENDARIZACION', $id_cal)
            ->update( 
                [
                    'ID_UNIDADES_FIJAS'=>$unidad,
                    'ID_UNIDADES'=>$unidadextra,
                    'FECHA_INICIO'=>$fecha_ini,
                    'FECHA_FINAL'=>$fecha_final,
                ]
                );
    
                if($calen){
                    DB::commit();
                    unset($this->mensaje);
                    unset($this->mensaje3);
                    unset($this->mensaje_eliminar);
                    $this->reset();
                    $sql= 'SELECT * FROM tb_unidades_fijas';
                    $unidades=DB::select($sql);
                    $sql= 'SELECT * FROM TB_CALENDARIZACION';
                    $calendarizacion=DB::select($sql);
                    $this->op=40;
                    $this->mensaje3='Editado Correctamente';
                }
                else{
                    DB::rollback();
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
        DB::begintransaction();

        $calen=DB::table('TB_CALENDARIZACION')->where('ID_CALENDARIZACION','=', $id_cal)->delete();

        if($calen){
            DB::commit();
            unset($this->mensaje);
            unset($this->mensaje3);
            unset($this->mensaje_eliminar);
            $sql= 'SELECT * FROM tb_unidades_fijas';
            $unidades=DB::select($sql);
            $sql= 'SELECT * FROM TB_CALENDARIZACION';
            $calendarizacion=DB::select($sql);
            $this->op=40;
            $this->mensaje_eliminar='Eliminado Correctamente';
        }
        else{
            DB::rollback();
            unset($this->mensaje1);
            unset($this->mensaje4);
            unset($this->mensaje_eliminar2);
            $this->op=40;  
            $this->mensaje_eliminar2='No fue posible eliminarlo';
        }
    }
}
