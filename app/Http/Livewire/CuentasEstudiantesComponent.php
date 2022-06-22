<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;

class CuentasEstudiantesComponent extends Component
{
    public $op,$id_cuenta, $mensaje3,$montocan,$estadocan,$preinscripcion,$mensaje4, $nvlacademico,$grado,$mes,$fpago,$pagor,$montoins,$montomen,$montorecu,$montodes,$mensaje,$mensaje1,$edit,$mensajeeliminar1,$mensajeeliminar;

    public function render()
    {


        $sql= '	SELECT cuentaestudiante.ID_CUENTA, cuentaestudiante.FECHA_PAGO, tb_grados.GRADO, cuentaestudiante.FECHA_ULIMOPAGO, mes.DESCRIPCION, 
        cuentaestudiante.MONTO_INSCRIPCION, cuentaestudiante.MONTO_MENSUAL, cuentaestudiante.MONTO_DESCUENTO, 
        cuentaestudiante.MONTO_RECUPERACION, cuentaestudiante.ESTADO, TB_PRE_INS.NOMBRE_ES, TB_PRE_INS.MODALIDAD_EST, 
        cuentaestudiante.MONTO_CANCELADO, cuentaestudiante.ESTADO_CANCELADO, cuentaestudiante.CUOTA_ANUAL  FROM cuentaestudiante 
        inner join tb_grados on cuentaestudiante.ID_GR=tb_grados.ID_GR 
        inner join mes on cuentaestudiante.ID_MES=mes.ID_MES
        inner join TB_PRE_INS on TB_PRE_INS.ID_PRE=cuentaestudiante.ID_PRE';
        $cuentas=DB::select($sql);
        $sql='SELECT * FROM TB_PRE_INS';
        $inscripciones=DB::select($sql);
        $sql='SELECT * FROM tb_grados';
        $grados=DB::select($sql);
        $sql='SELECT * FROM mes';
        $meses=DB::select($sql);
        $sql='SELECT * FROM tb_nvlacademico';
        $academicos=DB::select($sql);
        $sql='SELECT * FROM cuentaestudiante';
        $cuenta=DB::select($sql);
        
        
        return view('livewire.cuentas-estudiantes-component',compact('cuentas','inscripciones','grados','meses','academicos'));
    }
    public function edit($id){
        $id_cuenta=$id;
        $sql='SELECT * FROM cuentaestudiante WHERE ID_CUENTA=?';
        $cuenta=DB::select($sql,array($id_cuenta));

        if($cuenta!=null){
            foreach($cuenta as $cue)
            {
                $this->id_cuenta=$cue->ID_CUENTA;
                $this->preinscripcion=$cue->ID_PRE;
                $this->grado=$cue->ID_GR;
                $this->mes=$cue->ID_MES;
                $this->montoins=$cue->MONTO_INSCRIPCION;
                $this->montomen=$cue->MONTO_MENSUAL;
                $this->montorecu=$cue->MONTO_RECUPERACION;
                $this->montodes=$cue->MONTO_DESCUENTO;
                
            }
        }
        $this->op=2;

        $this->edit=1;
    }
    public function update_montos_p(){
        $id_cuenta=$this->id_cuenta;
        $preinscripcion=$this->preinscripcion;
        $grado=$this->grado;
        $mes=$this->mes;
        $montoins=$this->montoins;
        $montomen=$this->montomen;
        $montorecu=$this->montorecu;
        $montodes=$this->montodes;

        DB::beginTransaction();

        $cuenta=DB::table('cuentaestudiante')
        ->where('ID_CUENTA',$id_cuenta)
        ->update(
            [
                'ID_PRE'=>$this->preinscripcion,
                'ID_GR'=>$this->grado,
                'ID_MES'=>$this->mes,
                'MONTO_INSCRIPCION'=>$this->montoins,
                'MONTO_MENSUAL'=>$this->montomen,
                'MONTO_RECUPERACION'=>$this->montorecu,
                'MONTO_DESCUENTO'=>$this->montodes,
            ]
            );

            if($cuenta){
                DB::commit();
                $this->reset();
                unset($this->mensaje4);
                $this->mensaje3='Editado correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensaje3);                
                $this->mensaje4='No fue posible editar correctamente';
            }
    }
    public function delete($id){
        $id_cuenta=$id;

        DB::beginTransaction();

        $cuenta=DB::table('cuentaestudiante')->where('ID_CUENTA','=', $id_cuenta)->delete();

        if($cuenta){
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
}