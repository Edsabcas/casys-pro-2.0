<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AdminisionesComponet extends Component
{
    public $search0,$search1,$search2,$search3,$search4,$search5;
    public function render()
    {

        if($this->search0!=null && $this->search0!=""){
            $sql="SELECT TB_PRE_INS.*, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=0 and (NO_GESTION like '%".$this->search0."%' or NOMBRE_ES like '%".$this->search0."%')";
            $estado_cero=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.*, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=0";
            $estado_cero=DB::select($sql);
        }

        if($this->search1!=null && $this->search1!=""){
            $sql="SELECT TB_PRE_INS.*, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=1 and (NO_GESTION like '%".$this->search1."%' or NOMBRE_ES like '%".$this->search1."%')";
            $estado_uno=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.*, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=1";
            $estado_uno=DB::select($sql);
        }

        if($this->search2!=null && $this->search2!=""){
            $sql="SELECT TB_PRE_INS.*, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=2 and (NO_GESTION like '%".$this->search2."%' or NOMBRE_ES like '%".$this->search2."%')";
            $estado_dos=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.*, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=2";
            $estado_dos=DB::select($sql);
        }

        if($this->search3!=null && $this->search3!=""){
            $sql="SELECT TB_PRE_INS.*, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=3 and (NO_GESTION like '%".$this->search3."%' or NOMBRE_ES like '%".$this->search3."%')";
            $estado_tres=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.*, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=3";
            $estado_tres=DB::select($sql);
        }


        if($this->search4!=null && $this->search4!=""){
            $sql="SELECT TB_PRE_INS.*, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=4 and (NO_GESTION like '%".$this->search4."%' or NOMBRE_ES like '%".$this->search4."%')";
            $estado_cuatro=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.*, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=4";
            $estado_cuatro=DB::select($sql);
        }

        if($this->search5!=null && $this->search5!=""){
            $sql="SELECT TB_PRE_INS.*, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=5 and (NO_GESTION like '%".$this->search5."%' or NOMBRE_ES like '%".$this->search5."%')";
            $estado_cinco=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.*, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=5";
            $estado_cinco=DB::select($sql);
        }

        return view('livewire.adminisiones-componet', compact('estado_cero','estado_uno','estado_dos','estado_tres','estado_cuatro','estado_cinco'));
    }

    public function tab1(){

    }
}
