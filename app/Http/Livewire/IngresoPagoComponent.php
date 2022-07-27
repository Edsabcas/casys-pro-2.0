<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class IngresoPagoComponent extends Component
{
    public $search,$op2;

    public function render()
    {
/*         if($this->search44!=null && $this->search44!=""){
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO, FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=7 and (NO_GESTION like '%".$this->search44."%' or NOMBRE_ES like '%".$this->search44."%')";
            $estado_cuatro4=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=7 order by TB_PRE_INS.FECHA_CAMBIOS_REG  DESC";
            $estado_cuatro4=DB::select($sql);
        }
 */
        $sql="SELECT * FROM tb_alumnos";
        $alumnos=DB::select($sql);
        $sql="SELECT * FROM users";
        $usuario=DB::select($sql);
        $sql="SELECT * FROM tb_relacion_encargado";
        $relacion=DB::select($sql);
        $sql="SELECT * FROM TB_PRE_INS";
        $inscripcion=DB::select($sql);

        return view('livewire.ingreso-pago-component', compact('alumnos','relacion','usuario','inscripcion'/* ,'estado_cuatro4' */));
    }
    public function vista_pagos2($num)
    {
        $this->op2=$num;
    }
    public function vista_pagos3($num)
    {
        $this->op2=$num;
    }
    public function paginacion($num)
    {
        if($num==1){
            $this->op2=1;
        }
        elseif($num==2){
            $this->op2=2;
        }
        /* elseif($num==3){
            $this->op2=3;
        }
        elseif($num==4){
            $this->op2=4;
        }
        elseif($num==5){
            $this->op2=5;
        }
        elseif($num==6){
            $this->op2=6;
        } */
    }
} 
