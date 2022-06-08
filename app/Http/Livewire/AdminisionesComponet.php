<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AdminisionesComponet extends Component
{
    public $search0,$search1,$search2,$search3,$search4,$search5;
    public $gradoin,$nombre_es,$f_nacimiento_es,$genero,$cui_es,$codigo_pe_es,$nac_es,$lug_nac_es,$tel_es,$cel_es,$direccion_es,$religion_es;
    public $nombre_en,$fnacimiento_en,$dpi_en,$extentido_en,$es_civil_en,$direccion_en,$tel_casa_en,$cel_en,$correo_en,$religion_en;
    public $a,$mensaje,$gradose,$fingreso_gestion,$id_ges_cambio,$tipo_cambio1;
    public $val,$val1,$gestion,$errorfecha;
    public $mensaje1,$id2;
    public function render()
    {
        if($this->mensaje!=null && $this->mensaje!=""){
            
        }

        if($this->search0!=null && $this->search0!=""){
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=0 and (NO_GESTION like '%".$this->search0."%' or NOMBRE_ES like '%".$this->search0."%')";
            $estado_cero=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=0";
            $estado_cero=DB::select($sql);
        }

        if($this->search1!=null && $this->search1!=""){
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE (ESTADO_PRE_INS=1 or ESTADO_PRE_INS=2) and (NO_GESTION like '%".$this->search1."%' or NOMBRE_ES like '%".$this->search1."%')";
            $estado_uno=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE (ESTADO_PRE_INS=1 or ESTADO_PRE_INS=2)";
            $estado_uno=DB::select($sql);
        }

        if($this->search2!=null && $this->search2!=""){
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE (ESTADO_PRE_INS=3 or ESTADO_PRE_INS=4) and (NO_GESTION like '%".$this->search2."%' or NOMBRE_ES like '%".$this->search2."%')";
            $estado_dos=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE (ESTADO_PRE_INS=3 or ESTADO_PRE_INS=4)";
            $estado_dos=DB::select($sql);
        }

        if($this->search3!=null && $this->search3!=""){
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE (ESTADO_PRE_INS=5 or ESTADO_PRE_INS=6) and (NO_GESTION like '%".$this->search3."%' or NOMBRE_ES like '%".$this->search3."%')";
            $estado_tres=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE (ESTADO_PRE_INS=5 or ESTADO_PRE_INS=6)";
            $estado_tres=DB::select($sql);
        }


        if($this->search4!=null && $this->search4!=""){
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=7 and (NO_GESTION like '%".$this->search4."%' or NOMBRE_ES like '%".$this->search4."%')";
            $estado_cuatro=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=7";
            $estado_cuatro=DB::select($sql);
        }

        if($this->search5!=null && $this->search5!=""){
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=8 and (NO_GESTION like '%".$this->search5."%' or NOMBRE_ES like '%".$this->search5."%')";
            $estado_cinco=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=8";
            $estado_cinco=DB::select($sql);
        }

        return view('livewire.adminisiones-componet', compact('estado_cero','estado_uno','estado_dos','estado_tres','estado_cuatro','estado_cinco'));
    }

    public function tipo_cambio($tipo){
      //  $this->id_ges_cambio=$id;
        $this->tipo_cambio1=$tipo;
      //  $this->gestion=$gestion;
        
    }
    public function cambioestado(){
        DB::beginTransaction();

        $cambio_pre=DB::table('TB_PRE_INS')
               ->where('ID_PRE',  $this->id_ges_cambio)
               ->update(
                   [
                    'ESTADO_PRE_INS' => $this->tipo_cambio1,
                    'FECHA_CAMBIOS_REG'=>  date("Y-m-d H:i:s"),
                   ]);

        if($cambio_pre){
            DB::commit();
            unset($this->mensaje);
            $this->mensaje="Insertado correctamente";

        }
        else{
            DB::rollback();
            unset($this->mensaje1);
            $this->mensaje1="Insertado correctamente";
        }

    }
    public function editar1($id)
    {
        //$this->id2=$id;
       $sql="SELECT TB_PRE_INS.*, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=0 and ID_PRE=?";
        $preinsp=DB::select($sql,array($id));

        foreach($preinsp as $pre){
            $this->id_ges_cambio=$pre->ID_PRE;
            $this->nombre_es=$pre->NOMBRE_ES;
            $this->f_nacimiento_es=$pre->FEC_NAC;
            $this->genero=$pre->GENERO;
            $this->cui_es=$pre->CUI_ES;
            $this->codigo_pe_es=$pre->CODIGO_PER;
            $this->nac_es=$pre->NACIONALIDAD_ES;
            $this->lug_nac_es=$pre->LUGAR_NAC_ES;
            $this->cel_es=$pre->CELULAR_ES;
            $this->direccion_es=$pre->DIRECCION_RES_ES;
            $this->religion_es=$pre->RELIGION_ES;
            $this->nombre_en=$pre->NOMBRE_ENCARGADO_ES;
            $this->fnacimiento_en=$pre->FEC_NAC_EN_ES;
            $this->dpi_en=$pre->DPI_EN_ES;
            $this->extentido_en=$pre->EXTENDIDO_DPI_EN_ES;
            $this->es_civil_en=$pre->ESTADO_CIVIL_EN_ES;
            $this->direccion_en=$pre->DIRECCION_EN_ES;
            $this->tel_casa_en=$pre->TEL_EN_ES;
            $this->cel_en=$pre->CEL_EN_ES;
            $this->correo_en=$pre->CORREO_EN_ES;
            $this->religion_en=$pre->RELIGION_EN_ES;
            $this->fingreso_gestion=$pre->FECHA_REGISTRO;
            $this->gradoin=$pre->GRADO_ING_ES;
            $this->gestion=$pre->NO_GESTION;
            $this->fingreso_gestion=$pre->FECHA_REGISTRO;

        }


    }
    public function editar2($id)
    {
       $sql="SELECT TB_PRE_INS.*, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE (ESTADO_PRE_INS=1 or  ESTADO_PRE_INS=2)  and ID_PRE=?";
        $preinsp=DB::select($sql,array($id));

        foreach($preinsp as $pre){
            $this->id_ges_cambio=$pre->ID_PRE;
            $this->nombre_es=$pre->NOMBRE_ES;
            $this->f_nacimiento_es=$pre->FEC_NAC;
            $this->genero=$pre->GENERO;
            $this->cui_es=$pre->CUI_ES;
            $this->codigo_pe_es=$pre->CODIGO_PER;
            $this->nac_es=$pre->NACIONALIDAD_ES;
            $this->lug_nac_es=$pre->LUGAR_NAC_ES;
            $this->cel_es=$pre->CELULAR_ES;
            $this->direccion_es=$pre->DIRECCION_RES_ES;
            $this->religion_es=$pre->RELIGION_ES;
            $this->nombre_en=$pre->NOMBRE_ENCARGADO_ES;
            $this->fnacimiento_en=$pre->FEC_NAC_EN_ES;
            $this->dpi_en=$pre->DPI_EN_ES;
            $this->extentido_en=$pre->EXTENDIDO_DPI_EN_ES;
            $this->es_civil_en=$pre->ESTADO_CIVIL_EN_ES;
            $this->direccion_en=$pre->DIRECCION_EN_ES;
            $this->tel_casa_en=$pre->TEL_EN_ES;
            $this->cel_en=$pre->CEL_EN_ES;
            $this->correo_en=$pre->CORREO_EN_ES;
            $this->religion_en=$pre->RELIGION_EN_ES;
            $this->fingreso_gestion=$pre->FECHA_REGISTRO;
            $this->gradoin=$pre->GRADO_ING_ES;
            $this->gestion=$pre->NO_GESTION;
            $this->fingreso_gestion=$pre->FECHA_REGISTRO;

        }


    }
}
