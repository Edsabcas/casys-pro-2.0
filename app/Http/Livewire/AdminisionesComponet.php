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
    public $observacion, $id_pre_ins_arch, $id_no_gest_arch, $archivo_cdiaco, $archivo, $formato,$id_gest;
    public $mensajeup,$mensajeup1;
    public $id_pre_info, $id_pre_i, $confi, $grados_selecionados, $año_ingreso, $grado_primer_ingreso, $nombre_padre, $nacimiento_padre, $nacionalidad_padre;
    public $lugar_nacimiento_padre, $estadocivilp, $DPI_padre, $celular_padre, $telefono_padre, $direccion_residencia, $correo_padre, $profesion_padre;
    public $lugar_profesion_padre, $cargo_profesion_padre, $religion_padre, $NIT_padre, $vive_con_elpadre, $nombre_madre, $fechana_madre, $nacionalidad_madre;
    public $lugar_nacimiento_madre, $estadocivilma, $DPI_madre, $telefono_madre, $celular_madre, $direccion_residenciamadre, $correo_madre, $profesion_madre;
    public $lugar_prof_madre, $cargo_madre, $religion_madre, $vive_madre, $NIT_madre, $tiene_alergia, $Especifique_alerg, $nombreaseguradora, $nombreencargado;
    public $poliza, $carne_seguro, $codigo_fam, $nombre_fam, $Especifique_medi, $Especifique_ali, $medicamento, $grados_mostrar,$estadocivil;
    public $alimento, $vacunas, $alumno_asegurado, $solo_alumno, $encargado_alumno, $bus_colegio, $bus_no_colegio, $nombre_aseguradora, $no_gest;

    public function render()
    {
        if($this->archivo!=null){
            if($this->archivo->getClientOriginalExtension()=="pdf"){
                $archivo = "pdf".time().".".$this->archivo->getClientOriginalExtension();
                $this->arch=$archivo;
                $this->archivo->storeAS('imagen/temporalpdf/', $this->arch,'public_up');
            }
            if($this->archivo->getClientOriginalExtension()=="jpg" or $this->archivo->getClientOriginalExtension()=="png" or $this->archivo->getClientOriginalExtension()=="jpeg"){
                $this->formato=1;
            }
            elseif($this->archivo->getClientOriginalExtension()=="mp4" or $this->archivo->getClientOriginalExtension()=="mpeg"){
                $this->formato=2;
            }
            elseif($this->archivo->getClientOriginalExtension()=="pdf"){
                $this->formato=3;
            }

        }

        $diaco="";
            $diaco=DB::table('tb_pre_diaco')
            ->join('TB_PRE_INS','tb_pre_diaco.ID_PRE','=','TB_PRE_INS.ID_PRE')
            ->select('tb_pre_diaco.ID_CONTRATO_DIACO', 'TB_PRE_INS.ID_PRE', 'TB_PRE_INS.NO_GESTION','tb_pre_diaco.CONTRATO')
            ->where('tb_pre_diaco.ID_PRE','=',$this->id_pre_ins_arch)
            ->get();

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

        return view('livewire.adminisiones-componet', compact('grados','estado_cero','estado_uno','estado_dos','estado_tres','estado_cuatro','estado_cinco','diaco'));
    }

    public function tipo_cambio($tipo,$id){

      //  $this->id_ges_cambio=$id;
        $this->tipo_cambio1=$tipo;
      //  $this->gestion=$gestion;
        
    }
    
    public function cambioestado($id){
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
                $this->archivo_comprobante->storeAS('public/comprobantes/imagenes/', $this->img,'public_up');
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

    Public function editardi($id,$no_gest){
        $id_pre_info=$id;
        $this->no_gest=$no_gest;
        $sql='SELECT * FROM TB_PRE_INFO WHERE ID_PRE=?';
        $estactr=DB:: select($sql, array($id_pre_info));
        if($estactr !=null){
            foreach($estactr as $estac)
            {
                $this->id_pre_info=$estac->ID_PRE_INFO;
                $this->id_pre_i=$estac->ID_PRE;
                $this->confi=$estac->HERMANOS_COLE;
                $this->grados_selecionados=$estac->GRADO_HERMANOS_COLE;
    $this->año_ingreso=$estac->AÑO_1R_INGRESO;
    $this->grado_primer_ingreso=$estac->GRADO_1R_INGRESO;
    $this->nombre_padre=$estac->NOMB_PADRE;
    $this->nacimiento_padre=$estac->FECHA_N_PADRE;
    $this->nacionalidad_padre=$estac->NACIONALIDAD_PADRE;
    $this->lugar_nacimiento_padre=$estac->LUGAR_NACIMIENTO_PADRE;
    $this->estadocivilp=$estac->ESTADO_CIVIL_P;
    $this->DPI_padre=$estac->DPI_PADRE;
    $this->celular_padre=$estac->CELULAR_PADRE;
    $this->telefono_padre=$estac->TELEFONO_PADRE;
    $this->direccion_residencia=$estac->DIRECCION_RESIDENCIA_P;
    $this->correo_padre=$estac->CORREO_PADRE;
    $this->profesion_padre=$estac->PROFECION_PADRE;
    $this->lugar_profesion_padre=$estac->LUGAR_TRABAJO_P;
    $this->cargo_profesion_padre=$estac->CARGO_PADRE;
    $this->religion_padre=$estac->RELIGION_PADRE;
    $this->NIT_padre=$estac->NIT_PADRE;
    $this->vive_con_elpadre=$estac->VIVE_CON_EL_PADRE;
    $this->nombre_madre=$estac->NOMB_MADRE;
    $this->fechana_madre=$estac->FECHA_N_MADRE;
    $this->nacionalidad_madre=$estac->NACIONALIDAD_MADRE;
    $this->lugar_nacimiento_madre=$estac->LUGAR_NACIMIENTO_MADRE;
    $this->estadocivilma=$estac->ESTADO_CIVIL_M;
    $this->DPI_madre=$estac->DPI_MADRE;
    $this->telefono_madre=$estac->TELEFONO_MADRE;
    $this->celular_madre=$estac->CELULAR_MADRE;
    $this->direccion_residenciamadre=$estac->DIRECCION_RESIDENCIA_M; 
    $this->correo_madre=$estac->CORREO_MADRE;
    $this->profesion_madre=$estac->PROFECION_MADRE;
    $this->lugar_prof_madre=$estac->LUGAR_TRABAJO_M;
    $this->cargo_madre=$estac->CARGO_MADRE; 
    $this->religion_madre=$estac->RELIGION_MADRE;
    $this->vive_madre=$estac->VIVE_CON_LA_MADRE;
    $this->NIT_madre=$estac->NIT_MADRE;
    $this->tiene_alergia=$estac->ENFERMEDADES_ALERGIAS;
    $this->Especifique_alerg=$estac->ESPECIFICACION_ENF_O_ALERG; 
    $this->nombreaseguradora=$estac->ASEGURADORA;
    $this->alumno_asegurado=$estac->ALUMNO_ASEGURADO;
    $this->poliza=$estac->POLIZA_SEGURO;
    $this->carne_seguro=$estac->NO_CARNET_SEGURO;
    $this->codigo_fam=$estac->CODIGO_FAMILIA;
    $this->nombre_fam=$estac->NOMBRE_FAMILIA;
    $this->medicamento=$estac->ALERG_MEDICAMENTO;
    $this->Especifique_ali=$estac->ESPECIFICAR_ALERG_ME;
    $this->alimento=$estac->ALERG_ALIMENTO;
    $this->vacunas=$estac->VACUNAS;
    $this->solo_alumno=$estac->SALIDA_SOLO;
    $this->encargado_alumno=$estac->SALIDA_CON_ENCARGADO;
    $this->bus_colegio=$estac->SALIDA_BUS_COLEGIO;
    $this->bus_no_colegio=$estac->SALIDA_BUS_AJENO;
    $this->Especifique_medi=$estac->ESPECIFICAR_ALERG_ME;
    $this->nombre_aseguradora=$estac->ASEGURADORA;
    $this->nombreencargado=$estac->NOMBRE_ENCARGADO;
            }
        }
    }

    

    public function medicamento($medicamento){
        $this->medicamento=$medicamento;
    }
    public function confirmar_hermano($conf){
        $this->confi=$conf;


    }
    public function insertar_grados_hermanos($grado, $gradomostrar){
        $this->grados_selecionados=$this->grados_selecionados.";".$grado;
        $this->grados_mostrar=$this->grados_selecionados.";".$grados_selecionados;
        
    }
    public function estado_civil_padre($estado_civil){
        $this->estadocivilp=$estado_civil;
    }
    public function confirmar_vive_padre($vive_con_padre){
        $this->vive_con_elpadre=$vive_con_padre;
    }
    public function estado_civil_madre($est){
        $this->estadocivilma=$est;
    }
    public function vive_con_la_madre($vive_con_madre){
        $this->vive_madre=$vive_con_madre;
    }
    public function tiene_alergia($tiene_alergias){
        $this->tiene_alergia=$tiene_alergias;
    }
    public function alimento($alimento){
        $this->alimento=$alimento;
    }
    public function vacunas($vacunas){
        $this->vacunas=$vacunas;
    }
    public function alumno_asegurado($alumno_asegurado){
        $this->alumno_asegurado=$alumno_asegurado;
    }
    public function solo_alumno($solo_alumno){
        $this->solo_alumno=$solo_alumno;
    }
    public function encargado_alumno($encargado_alumno){
        $this->encargado_alumno=$encargado_alumno;
    }
    public function bus_colegio($bus_colegio){
        $this->bus_colegio=$bus_colegio;
    }
    public function bus_no_colegio($bus_no_colegio){
        $this->bus_no_colegio=$bus_no_colegio;
    }

    public function update_datos_ins(){
        
        $id_pre_info=$this->id_pre_info;
        $id_pre_i=$this->id_pre_i;
        $confi=$this->confi;
        $grados_selecionados=$this->grados_selecionados;
$año_ingreso=$this->año_ingreso;
$grado_primer_ingreso=$this->grado_primer_ingreso;
$nombre_padre=$this->nombre_padre;
$nacimiento_padre=$this->nacimiento_padre;
$nacionalidad_padre=$this->nacionalidad_padre;
$lugar_nacimiento_padre=$this->lugar_nacimiento_padre;
$estadocivilp=$this->estadocivilp;
$DPI_padre=$this->DPI_padre;
$celular_padre=$this->celular_padre;
$telefono_padre=$this->telefono_padre;
$direccion_residencia=$this->direccion_residencia;
$correo_padre=$this->correo_padre;
$profesion_padre=$this->profesion_padre;
$lugar_profesion_padre=$this->lugar_profesion_padre;
$cargo_profesion_padre=$this->cargo_profesion_padre;
$religion_padre=$this->religion_padre;
$NIT_padre=$this->NIT_padre;
$vive_con_elpadre=$this->vive_con_elpadre;
$nombre_madre=$this->nombre_madre;
$fechana_madre=$this->fechana_madre;
$nacionalidad_madre=$this->nacionalidad_madre;
$lugar_nacimiento_madre=$this->lugar_nacimiento_madre;
$estadocivilma=$this->estadocivilma;
$DPI_madre=$this->DPI_madre;
$telefono_madre=$this->telefono_madre;
$celular_madre=$this->celular_madre;
$direccion_residenciamadre=$this->direccion_residenciamadre; 
$correo_madre=$this->correo_madre;
$profesion_madre=$this->profesion_madre;
$lugar_prof_madre=$this->lugar_prof_madre;
$cargo_madre=$this->cargo_madre; 
$religion_madre=$this->religion_madre;
$vive_madre=$this->vive_madre;
$NIT_madre=$this->NIT_madre;
$tiene_alergia=$this->tiene_alergia;
$Especifique_alerg=$this->Especifique_alerg; 
$nombreaseguradora=$this->nombreaseguradora;
$nombreencargado=$this->nombreencargado;
$poliza=$this->poliza;
$carne_seguro=$this->carne_seguro;
$codigo_fam=$this->codigo_fam;
$nombre_fam=$this->nombre_fam;
$Especifique_medi=$this->Especifique_medi;
$Especifique_ali=$this->Especifique_ali; 

    
    DB::beginTransaction();

    $comprobantes=DB::table('TB_PRE_INS')
            ->where('ID_PRE_INFO',$this->id_ges_cambio)
            ->update(
        [
            'HERMANOS_COLE'=>$this->confi,
            'GRADO_HERMANOS_COLE'=>$this->grados_selecionados,
            'AÑO_1R_INGRESO'=>$añoingreso,
            'GRADO_1R_INGRESO'=>$gradoprimeringreso,
            'NOMB_PADRE'=>$nombrepadre,
            'FECHA_N_PADRE'=>$nacimientopadre,
            'NACIONALIDAD_PADRE'=>$nacionalidadpadre,
            'LUGAR_NACIMIENTO_PADRE'=>$lugarnacimientopadre,
            'ESTADO_CIVIL_P'=> $this->estadocivilp,
            'VIVE_CON_LA_MADRE'=> $this->vive_madre,
            'DPI_PADRE'=>$DPIpadre,
            'TELEFONO_PADRE'=>$telefonopadre,
            'CELULAR_PADRE'=>$celularpadre,
            'DIRECCION_RESIDENCIA_P'=>$direccionresidencia,
            'CORREO_PADRE'=>$correopadre,
            'PROFECION_PADRE'=>$profesionpadre,
            'LUGAR_TRABAJO_P'=>$lugar_profesion_padre,
            'CARGO_PADRE'=>$cargo_profesion_padre,
            'RELIGION_PADRE'=>$religion_padre,
            'NIT_PADRE'=>$NIT_padre,
            'VIVE_CON_EL_PADRE'=>$this->vive_con_elpadre,
            'NOMB_MADRE'=>$nombre_madre,
            'FECHA_N_MADRE'=>$fechana_madre,
            'NACIONALIDAD_MADRE'=>$nacionalidad_madre,
            'LUGAR_NACIMIENTO_MADRE'=>$lugar_nacimiento_madre,
            'ESTADO_CIVIL_M'=>$this->estadocivilma,
            'DPI_MADRE'=>$DPI_madre,
            'TELEFONO_MADRE'=>$telefono_madre,
            'CELULAR_MADRE'=>$celular_madre,
            'DIRECCION_RESIDENCIA_M'=>$direccion_residenciamadre, 
            'CORREO_MADRE'=>$correo_madre,
            'PROFECION_MADRE'=>$rofesion_madre,
            'LUGAR_TRABAJO_M'=>$lugar_prof_madre,
            'CARGO_MADRE'=>$cargo_madre,
            'ALERG_MEDICAMENTO'=>$this->medicamento,
            'ALERG_ALIMENTO'=>$this->alimento,
            'RELIGION_MADRE'=>$religion_madre,
            'NIT_MADRE'=>$NIT_madre,
            'ESPECIFICAR_ALERG_ME'=>$this->Especifique_medi,
            'ESPECIFICACION_ALERG_AL'=>$this->Especifique_ali,
            'ENFERMEDADES_ALERGIAS'=>$this->tiene_alergia,
            'ESPECIFICACION_ENF_O_ALERG'=>$this->Especifique_alerg,
            'VACUNAS'=>$this->vacunas,
            'ALUMNO_ASEGURADO'=>$this->alumno_asegurado,
            'ASEGURADORA'=>$this->nombre_aseguradora,
            'POLIZA_SEGURO'=>$poliza,
            'NO_CARNET_SEGURO'=>$this->carne_seguro,
            'SALIDA_SOLO'=>$this->solo_alumno,
            'SALIDA_CON_ENCARGADO'=>$this->encargado_alumno,
            'NOMBRE_ENCARGADO'=>$this->nombreencargado,
            'SALIDA_BUS_COLEGIO'=>$this->bus_colegio,
            'SALIDA_BUS_AJENO'=>$this->bus_no_colegio,
            'CODIGO_FAMILIA'=>$this->codigo_fam,
            'NOMBRE_FAMILIA'=>$this->nombre_fam,
        
            ]
        );
        if($inscripcion_datos){
            DB::commit();
            $this->validar_info = 1;
        }
        else{
            DB::rollback();
            $this->validar_info = 0;
        }
    }

    Public function editardiaco($id,$no){
        $id_pre=$id;
        $this->id_gest=$no;
        $sql='SELECT * FROM tb_pre_diaco WHERE ID_PRE=?';
        $estactr=DB:: select($sql, array($id_pre));
        if($estactr !=null){
            foreach($estactr as $estac)
            {
                $this->id_pre_ins_arch=$estac->ID_PRE;
                $this->id_no_gest_arch=$estac->NO_GESTION;
                $this->archivo_cdiaco=$estac->CONTRATO;
            }
        }  
    }

    public function update_diaco($estadoact){
        $id_pre_ins_arch=$this->id_pre_ins_arch;
        $id_no_gest_arch=$this->id_no_gest_arch;
        $archivo_cdiaco=$this->archivo_cdiaco;
        
     
     
        DB::begintransaction();
     
     
        $revisiones=DB::table('tb_pre_diaco')
        ->where('ID_PRE', $id_pre_ins_arch)
        ->update(
             [
                 'CONTRATO'=>$archivo_cdiaco,
             ]);
     
             if($revisiones){
                 DB::commit();
                 unset($this->mensaje);;
                 unset($this->mensaje1);
                 $this->op='addcontenidos';
                 $this->mensaje='Insertado correctamente';
                 }
                 else {
                 DB::rollback();
                 unset($this->mensaje);;
                 unset($this->mensaje1);
                 $this->op='addcontenidos';
                 $this->mensaje1='Datos no  insertados correctamente';
                 }        
         }
}
