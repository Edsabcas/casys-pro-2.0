<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\WithFileUploads;


class AdminisionesComponet extends Component
{
    use WithFileUploads;

    public $search0,$search1,$search2,$search3,$search4,$search5;
    public $gradoin,$nombre_es,$f_nacimiento_es,$genero,$cui_es,$codigo_pe_es,$nac_es,$lug_nac_es,$tel_es,$cel_es,$direccion_es,$religion_es;
    public $nombre_en,$fnacimiento_en,$dpi_en,$extentido_en,$es_civil_en,$direccion_en,$tel_casa_en,$cel_en,$correo_en,$religion_en;
    public $a,$mensaje,$gradose,$fingreso_gestion,$id_ges_cambio,$tipo_cambio1;
    public $id_pre,$metodo,$archivo_comprobante,$img,$tipo,$mensaje24,$mensaje25,$fotos;
    public $val,$val1,$gestion,$errorfecha;
    public $estado_ges;
    public $mensaje1,$id2;
    public $observacion;
    public $mensajeup,$mensajeup1;
    public function render()
    {
        if($this->archivo_comprobante!=null){
            if($this->archivo_comprobante->getClientOriginalExtension()=="jpg" or $this->archivo_comprobante->getClientOriginalExtension()=="png" or $this->archivo_comprobante->getClientOriginalExtension()=="jpeg"){
                $this->tipo=1;
            }
        }
        if($this->mensaje!=null && $this->mensaje!=""){

        }

        if($this->search0!=null && $this->search0!=""){
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=0 and (NO_GESTION like '%".$this->search0."%' or NOMBRE_ES like '%".$this->search0."%') ";
            $estado_cero=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=0 order by TB_PRE_INS.FECHA_REGISTRO";
            $estado_cero=DB::select($sql);
        }

        if($this->search1!=null && $this->search1!=""){
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.NO_GESTION,TB_PRE_INS.COMPROBANTE_PAGO, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE (ESTADO_PRE_INS=1 or ESTADO_PRE_INS=2) and (NO_GESTION like '%".$this->search1."%' or NOMBRE_ES like '%".$this->search1."%')";
            $estado_uno=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.NO_GESTION,TB_PRE_INS.COMPROBANTE_PAGO, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE (ESTADO_PRE_INS=1 or ESTADO_PRE_INS=2) order by TB_PRE_INS.ESTADO_PRE_INS DESC";
            $estado_uno=DB::select($sql);
        }

        if($this->search2!=null && $this->search2!=""){
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE (ESTADO_PRE_INS=3 or ESTADO_PRE_INS=4) and (NO_GESTION like '%".$this->search2."%' or NOMBRE_ES like '%".$this->search2."%')";
            $estado_dos=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE (ESTADO_PRE_INS=3 or ESTADO_PRE_INS=4) order by TB_PRE_INS.FECHA_CAMBIOS_REG  DESC";
            $estado_dos=DB::select($sql);
        }

        if($this->search3!=null && $this->search3!=""){
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE (ESTADO_PRE_INS=5 or ESTADO_PRE_INS=6) and (NO_GESTION like '%".$this->search3."%' or NOMBRE_ES like '%".$this->search3."%')";
            $estado_tres=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE (ESTADO_PRE_INS=5 or ESTADO_PRE_INS=6) order by TB_PRE_INS.FECHA_CAMBIOS_REG  DESC";
            $estado_tres=DB::select($sql);
        }


        if($this->search4!=null && $this->search4!=""){
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=7 and (NO_GESTION like '%".$this->search4."%' or NOMBRE_ES like '%".$this->search4."%')";
            $estado_cuatro=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=7 order by TB_PRE_INS.FECHA_CAMBIOS_REG  DESC";
            $estado_cuatro=DB::select($sql);
        }

        if($this->search5!=null && $this->search5!=""){
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=8 and (NO_GESTION like '%".$this->search5."%' or NOMBRE_ES like '%".$this->search5."%')";
            $estado_cinco=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=8 order by TB_PRE_INS.FECHA_CAMBIOS_REG  DESC";
            $estado_cinco=DB::select($sql);
        }

        $sql= 'SELECT * FROM tb_grados';
        $grados=DB::select($sql);

        return view('livewire.adminisiones-componet', compact('grados','estado_cero','estado_uno','estado_dos','estado_tres','estado_cuatro','estado_cinco'));
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
            $subject = "Notificación Pre-Ins.Castaño (No responder)";
            $for = $this->correo_en;
            $arreglo= array($this->gestion);
            Mail::send('admisiones.correo.vista1',compact('arreglo'), function($msj) use($subject,$for){
                $msj->from("ingresos@colegioelcastano.edu.gt","ColegioElCastaño");
                $msj->subject($subject);
                $msj->to($for);
              //  $msj->attach('images/a.jpg');
               
            });

            unset($this->mensaje);
            $this->mensaje="Se actualizo el estado y se envio correo correctamente";

        }
        else{
            DB::rollback();
            unset($this->mensaje1);
            $this->mensaje1="No fue posible enviar correo y actualizar";
        }

    }
    public function editar1($id)
    {
        $this->reset();
        unset($this->mensajeup);
        unset($this->mensajeup1);
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
        $this->reset();
        unset($this->mensajeup);
        unset($this->mensajeup1);
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
            $this->observacion=$pre->OBSERVACION_COMP;
            $this->metodo=$pre->FORMA_PAGO;
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
            $this->estado_ges=$pre->ESTADO_PRE_INS;

        }


    }

    public function actualizar_info(){
        if($this->validate([
            'gradoin' => 'required',
            'nombre_es' => 'required',
            'f_nacimiento_es' => 'required',
            'genero' => 'required',
            'cui_es' => 'required',
            'codigo_pe_es' => 'required',
            'nac_es' => 'required',
            'lug_nac_es' => 'required',
            'cel_es' => 'required',
            'direccion_es' => 'required',
            'religion_es' => 'required',
            'nombre_en' => 'required',
            'fnacimiento_en' => 'required',
            'dpi_en' => 'required',
            'extentido_en' => 'required',
            'es_civil_en' => 'required',
            'direccion_en' => 'required',
            'tel_casa_en' => 'required',
            'cel_en' => 'required',
            'correo_en' => 'required',
            'religion_en' => 'required',
            ])==false){
            $mensaje="no encontrado";
           session(['message' => 'no encontrado']);
            return  back()->withErrors(['mensaje'=>'Validar el input vacio']);
        }else{
            DB::beginTransaction();
    
            $comprobantes=DB::table('TB_PRE_INS')
            ->where('ID_PRE',$this->id_ges_cambio)
            ->update(
                [
                    'NOMBRE_ES'=>$this->nombre_es,
                    'FEC_NAC'=>$this->f_nacimiento_es,
                    'GENERO'=>$this->genero,
                    'CUI_ES'=>$this->cui_es,
                    'CODIGO_PER'=> $this->codigo_pe_es,
                    'NACIONALIDAD_ES'=>$this->nac_es,
                    'LUGAR_NAC_ES'=>$this->lug_nac_es,
                    'CELULAR_ES'=>$this->cel_es,
                    'DIRECCION_RES_ES'=>$this->direccion_es,
                    'RELIGION_ES'=>$this->religion_es,
                    'NOMBRE_ENCARGADO_ES'=>$this->nombre_en,
                    'FEC_NAC_EN_ES'=>$this->fnacimiento_en,
                    'DPI_EN_ES'=>$this->dpi_en,
                    'EXTENDIDO_DPI_EN_ES'=> $this->extentido_en,
                    'ESTADO_CIVIL_EN_ES'=>$this->es_civil_en,
                    'DIRECCION_EN_ES'=>$this->direccion_en,
                    'TEL_EN_ES'=>$this->tel_casa_en,
                    'CEL_EN_ES'=>$this->cel_en,
                    'CORREO_EN_ES'=>$this->correo_en,
                    'RELIGION_EN_ES'=>$this->religion_en,
                    'FECHA_REGISTRO'=>$this->fingreso_gestion,
                    'GRADO_ING_ES'=>$this->gradoin,
                    'NO_GESTION'=>$this->gestion,
                    //'FECHA_REGISTRO'=>$this->fingreso_gestion,
                    //''=>,
                    //'FORMA_PAGO'=>$metodo,
                    'FORMA_PAGO'=>$metodo,
                    'COMPROBANTE_PAGO'=>$archivo_comprobante,
                    'FECHA_CAMBIOS_REG'=> date('y-m-d:h:m:s'),
                    /* 'ESTADO_PRE_INS'=>2, */
                    'OBSERVACION_COMP'=>$observacion,
                ]
                );
            if($comprobantes){
    
                DB::commit();
               // $this->reset();
                unset($this->mensajeup);
                $this->mensajeup='Actualizado correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensajeup1);
                $this->mensajeup1='No fue posible actualizar correctamente';
            }
    
        }
      
    }

    public function id_eliminar($id,$gestion){
        $this->reset();
        $this->id_ges_cambio=$id;
        $this->gestion=$gestion;
    }
    public function eliminar_gestion(){

    
        DB::beginTransaction();
    
        $comprobantes=DB::table('TB_PRE_INS')
        ->where('ID_PRE', $this->id_ges_cambio)
        ->update(
            [
                'FECHA_CAMBIOS_REG'=> date('y-m-d:h:m:s'),
                'ESTADO_PRE_INS'=>100,
                'ESTADO'=>1,
                'OBSERVACION_COMP'=>$this->observacion." | Eliminado"
            ]
            );
        if($comprobantes){

            DB::commit();
            $this->reset();
            unset($this->mensaje);
            $this->mensaje='Eliminado correctamente';
        }
        else{
            DB::rollback();
            unset($this->mensaje1);
            $this->mensaje1='No fue posible Eliminado';
        }
    }
    public function cambiofoto($id)
    {
        $archivo_comprobante="";
        if($this->archivo_comprobante!=null){
            if($this->archivo_comprobante->getClientOriginalExtension()=="jpg" or $this->archivo_comprobante->getClientOriginalExtension()=="png" or $this->archivo_comprobante->getClientOriginalExtension()=="jpeg"){
                $archivo_comprobante = "img".time().".".$this->archivo_comprobante->getClientOriginalExtension();
                $this->img=$archivo_comprobante;
                $this->archivo_comprobante->storeAS('comprobantes/imagenes/', $this->img,'public_up');
                $this->tipo=1;
            }
           
            DB::beginTransaction();
                    $foto=DB::table('TB_PRE_INS')
                    ->where('ID_PRE',$id)
                    ->update ([
                        
                        'COMPROBANTE_PAGO'=>$this->archivo_comprobante
                     ]);

                     if($foto){
                        DB::commit();
                        $this->mensaje24="Comprobante de pago actualizado";
                    }
                    else{
                        DB::rollback();
                        $this->mensaje25="No se logró actualizar";
                    }
        }
    }
}
