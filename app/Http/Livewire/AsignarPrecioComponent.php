<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AsignarPrecioComponent extends Component
{
    public $id_grado,$id_pro,$monto;
    public function render()
    {
        $sql= 'SELECT * FROM tb_grados where ESTADO=1';
        $tb_grados=DB::select($sql);
        $sql= 'SELECT * FROM TB_PROCESO_PAGO where ESTADO=1';
        $tb_procesos=DB::select($sql);
        $sql= 'SELECT * FROM TB_PRECIOS_GRADOS_INS where ID_PRO_PAGO=1';
        $tb_precios_g=DB::select($sql);
        $sql= 'SELECT * FROM TB_PRECIOS_GRADOS_INS where ID_PRO_PAGO=2';
        $tb_precios_ins=DB::select($sql);
        $sql= 'SELECT * FROM TB_PRECIOS_GRADOS_INS where ID_PRO_PAGO=3';
        $tb_precios_rec=DB::select($sql);
        

        return view('livewire.asignar-precio-component', compact('tb_grados','tb_procesos','tb_precios_g','tb_precios_ins','tb_precios_rec'));

    }
    public function validar(){
        if($this->validate([
            'id_grado' => 'required',
            'id_nivel' => 'required',
            'id_pro' => 'required',
            'monto' => 'required',
        ])==false){
           // $advertencia="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['advertencia'=>'validar el input vacío']);

        }
        else{

            

        }
    }
}
