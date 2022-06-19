<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;

class CuentasEstudiantesComponent extends Component
{
    public $preinscripcion,$nvlacademico,$grado,$mes,$fpago,$pagor,$montoins,$montomen,$montorecu,$montodes,$mensaje,$mensaje1,$edit;

    public function render()
    {


        $sql= '	SELECT cuentaestudiante.FECHA_PAGO, tb_grados.GRADO, cuentaestudiante.FECHA_ULIMOPAGO, mes.DESCRIPCION, 
        cuentaestudiante.MONTO_INSCRIPCION, cuentaestudiante.MONTO_MENSUAL, cuentaestudiante.MONTO_DESCUENTO,
        cuentaestudiante.MONTO_RECUPERACION, cuentaestudiante.ESTADO, TB_PRE_INS.NOMBRE_ES, TB_PRE_INS.MODALIDAD_EST, 
        cuentaestudiante.MONTO_CANCELADO, cuentaestudiante.ESTADO_CANCELADO  FROM cuentaestudiante 
        inner join tb_grados on cuentaestudiante.ID_GR=tb_grados.ID_GR 
        inner join mes on cuentaestudiante.ID_MES=mes.ID_MES
        inner join TB_PRE_INS on TB_PRE_INS.ID_PRE=cuentaestudiante.ID_PRE';
        $cuentas=DB::select($sql);

        $sql='SELECT * FROM cuentaestudiante';
        $cuen=DB::select($sql);
        
        return view('livewire.cuentas-estudiantes-component',compact('cuentas','cuen'));
    }
    public function guardar_cuenta(){

        if($this->validate([
            'preinscripcion' => 'required',
            'nvlacademico' => 'required',
            'grado' => 'required',
            'mes' => 'required',
            'fpago' => 'required',
            'pagor' => 'required',
            'montoins' => 'required',
            'montomen' => 'required',
            'montorecu' => 'required',
            'montodes' => 'required',

        ])==false)
        {
            $mensaje="no encontrado";
            session(['message' => 'no encontrado']);
            return back()->withErrors(['mensaje' =>'Validar el input vacio']);
        }
        else
        {
        $preinscripcion=$this->preinscripcion; 
        $nvlacademico=$this->nvlacademico;
        $grado=$this->grado; 
        $mes=$this->mes;
        $fpago=$this->fpago;
        $pagor=$this->pagor; 
        $montoins=$this->montoins;
        $montomen=$this->montomen;
        $montorecu=$this->montorecu;
        $montodes=$this->montodes;

        DB::beginTransaction();

        $cuentas=DB::table('cuentaestudiante')->insert(
            [
                'ID_PRE'=> $preinscripcion,
                'ID_NVL'=> $nvlacademico,
                'ID_CUENTA'=> $grado,
                'ID_MES'=> $mes,
                'FECHA_PAGO'=> $fpago,
                'FECHA_ULIMOPAGO'=> $pagor,
                'MONTO_INSCRIPCION'=> $montoins,
                'MONTO_RECUPERACION'=> $montomen,
                'MONTO_MENSUAL'=> $montorecu,
                'MONTO_DESCUENTO'=> $montodes,
                'ESTADO'=> $estado=1,

            ]);
            if($cuentas){
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
    /* public function edit($id){
        $id_cuenta=$id;
        $sql='SELECT * FROM cuentaestudiante WHERE ID_CUENTA=?';
        $cuen=DB::select($sql,array($id_cuenta));

        if($cuen!=null){
            foreach($cuen as $cue)
            {
                $this->id_cuenta=$cue->ID_CUENTA;
                $this->montoins=$cue->MONTO_INSCRIPCION;
                $this->montomen=$cue->MONTO_RECUPERACION;
                $this->montodes=$cue->MONTO_DESCUENTO;
                $this->montorecu=$cue->MONTO_MENSUAL;
            }
        }
        $this->op=2;

        $this->edit=1;
    }
    public function update_c_p(){
        $id_cuenta=$this->id_cuenta;
        $montoins=$this->montoins;
        $montomen=$this->montomen;
        $montodes=$this->montodes;
        $montorecu=$this->montorecu;
    
        DB::beginTransaction();

        $cuen=DB::table('cuentaestudiante')
        ->where('ID_CUENTA',$id_cuenta)
        ->update(
            [
                'MONTO_INSCRIPCION'=> $montoins,
                'MONTO_RECUPERACION'=> $montomen,
                'MONTO_MENSUAL'=> $montorecu,
                'MONTO_DESCUENTO'=> $montodes,
            ]
            );

            if($cuen){
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
        $id_cuenta=$id;

        DB::beginTransaction();

        $cuen=DB::table('cuentaestudiante')->where('ID_CUENTA','=', $id_cuenta)->delete();

        if($cuen){
            DB::commit();
            $this->reset();
            $this->mensajeeliminar='Eliminado correctamente';
        }
        else{
            DB::rollback();
            unset($this->mensajeeliminar);
            $this->mensajeeliminar1='No fue posible eliminar correctamente';
        }
    } */
}
