<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AsignarPrecioComponent extends Component
{
    public $id_grado,$id_pro,$monto,$mensaje,$mensaje1,$id_pre_gra;
    public function render()
    {
        $sql= 'SELECT * FROM tb_grados where ESTADO=1';
        $tb_grados=DB::select($sql);
        $sql= 'SELECT * FROM TB_PROCESO_PAGO where ESTADO=1';
        $tb_procesos=DB::select($sql);
        $sql= 'SELECT GRA.GRADO, PRE.MONTO,PRE.ID_GRADO, PRE.ID_PRO_PAGO,PRE.ID_PRE_GRA_INS, PROC.DESCRIPCION FROM tb_grados GRA
        INNER JOIN TB_PRECIOS_GRADOS_INS PRE ON
        GRA.ID_GR=PRE.ID_GRADO INNER JOIN TB_PROCESO_PAGO  PROC ON
        PRE.ID_PRO_PAGO=PROC.ID_PROCESO_P WHERE PRE.ID_PRO_PAGO=1';
        $tb_precios_g=DB::select($sql);
        $sql= 'SELECT GRA.GRADO, PRE.MONTO,PRE.ID_GRADO, PRE.ID_PRE_GRA_INS, PRE.ID_PRO_PAGO, PROC.DESCRIPCION FROM tb_grados GRA
        INNER JOIN TB_PRECIOS_GRADOS_INS PRE ON
        GRA.ID_GR=PRE.ID_GRADO INNER JOIN TB_PROCESO_PAGO  PROC ON
        PRE.ID_PRO_PAGO=PROC.ID_PROCESO_P WHERE PRE.ID_PRO_PAGO=2';
        $tb_precios_ins=DB::select($sql);
        $sql= 'SELECT GRA.GRADO, PRE.MONTO, PRE.ID_GRADO, PRE.ID_PRE_GRA_INS, PRE.ID_PRO_PAGO, PROC.DESCRIPCION FROM tb_grados GRA
        INNER JOIN TB_PRECIOS_GRADOS_INS PRE ON
        GRA.ID_GR=PRE.ID_GRADO INNER JOIN TB_PROCESO_PAGO  PROC ON
        PRE.ID_PRO_PAGO=PROC.ID_PROCESO_P WHERE PRE.ID_PRO_PAGO=3';
        $tb_precios_rec=DB::select($sql);
        

        return view('livewire.asignar-precio-component', compact('tb_grados','tb_procesos','tb_precios_g','tb_precios_ins','tb_precios_rec'));

    }
    public function validar(){
        if($this->validate([
            'id_grado' => 'required',
            'id_pro' => 'required',
            'monto' => 'required',
        ])==false){
           // $advertencia="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['advertencia'=>'validar el input vacío']);

        }
        else{

            $sql= 'SELECT * FROM TB_PRECIOS_GRADOS_INS where ID_GRADO=? and ID_PRO_PAGO=?';
        $valprp=DB::select($sql,array($this->id_grado,$this->id_pro));

        if($valprp!=null){
            $this->mensaje=4;
        }
        else{
            DB::beginTransaction();
            if( DB::table('TB_PRECIOS_GRADOS_INS')->insert(
                ['ID_GRADO' => $this->id_grado,
                 'ID_PRO_PAGO' => $this->id_pro,
                 'MONTO'=> $this->monto,
                 'FECHA_REGISTRO'=> date('Y-m-d H:i:s'),
                 'FECHA_ACTULIZACION'=>date('Y-m-d H:i:s'),
                 
              ]))
              {
                DB::commit();
              
                $this->mensaje=1;
                $this->reset();
                unset($this->mensaje1);
              }
            else{
                DB::rollback();
                session(['error' => 'validar']);
                unset($this->mensaje);
                $this->mensaje1=1;
            }
        }

        }
    }
    public function edit($id,$id_gra,$tipo_pago,$monto)
    {

        $this->limpiar();
        $this->id_grado=$id_gra;
        $this->id_pro=$tipo_pago;
        $this->monto=$monto;
        $this->id_pre_gra=$id;


    }
    public function limpiar() {
        $this->reset();
    }
    public function actualizar() {
        if($this->validate([
            'id_grado' => 'required',
            'id_pro' => 'required',
            'monto' => 'required',
        ])==false){
           // $advertencia="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['advertencia'=>'validar el input vacío']);

        }
        else{
            $sql= 'SELECT * FROM TB_PRECIOS_GRADOS_INS where ID_GRADO=? and ID_PRO_PAGO=?';
            $valprp=DB::select($sql,array($this->id_grado,$this->id_pro));
    
            if($valprp!=null){
                $this->mensaje=4;
            }
            else{
                DB::beginTransaction();
                if(DB::table('TB_PRECIOS_GRADOS_INS')
                ->where('ID_PRO_PAGO', $this->id_pre_gra)
                ->update(
                    [
                        'ID_GRADO' => $this->id_grado,
                        'ID_PRO_PAGO' => $this->id_pro,
                        'MONTO'=> $this->monto,
                        'FECHA_ACTULIZACION'=>date('Y-m-d H:i:s'),
    
                    ]))
                    
                  {
                    DB::commit();
                    $this->reset();
                    $this->mensaje=2;
                    unset($this->mensaje1);
                  }
                else{
                    DB::rollback();
                    session(['error' => 'validar']);
                    unset($this->mensaje);
                    $this->mensaje1=3;
                }

            }
        }
    }
}
