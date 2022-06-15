<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;

class CuentasEstudiantesComponent extends Component
{
    public $preinscripcion,$nvlacademico,$grado,$mes,$fpago,$pagor,$montoins,$montomen,$montorecu,$montodes,$mensaje,$mensaje1;

    public function render()
    {
        $sql= 'SELECT * FROM cuentaestudiante';
        $cuentas=DB::select($sql);
        $sql="SELECT * FROM TB_PRE_INS";
        $inscripciones=DB::select($sql);
        $sql="SELECT * FROM tb_grados";
        $grados=DB::select($sql);
        $sql="SELECT * FROM mes";
        $meses=DB::select($sql);
        $sql="SELECT * FROM tb_nvlacademico";
        $academicos=DB::select($sql);
        
        return view('livewire.cuentas-estudiantes-component',compact('cuentas','academicos','inscripciones','grados','meses'));
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
                'ID_GR'=> $grado,
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
}
