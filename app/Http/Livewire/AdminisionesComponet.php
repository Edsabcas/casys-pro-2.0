<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\WithFileUploads;
use Barryvdh\DomPDF\Facade\Pdf;


class AdminisionesComponet extends Component
{
    use WithFileUploads;

    public $search0,$search1,$search11,$search2,$search22,$search3,$search33,$search4,$search44,$search5,$search55,$usuario,$usuario2,$pass2,$correoed2;
    public $gradoin,$nombre_es,$f_nacimiento_es,$genero,$cui_es,$codigo_pe_es,$nac_es,$lug_nac_es,$tel_es,$cel_es,$direccion_es,$religion_es;
    public $nombre_en,$fnacimiento_en,$dpi_en,$extentido_en,$es_civil_en,$direccion_en,$tel_casa_en,$cel_en,$correo_en,$religion_en,$mensaje_diaco;
    public $a,$mensaje,$gradose,$fingreso_gestion,$id_ges_cambio,$tipo_cambio1,$id_pre_corre,$DPI_encargado,$nacimiento_encargado,$id_relacion;
    public $id_pre,$metodo,$archivo_comprobante,$validacion_comp,$validacion_com,$observacion2,$img,$tipo,$mensaje24,$mensaje25,$fotos,$fpago,$no_gest_con,$solo_por,$idgrado;
    public $val,$val1,$gestion,$errorfecha,$upnocorre1,$upnocorre2,$nomb,$fvencimiento,$cseguridad,$ntarjeta,$notarjeta;
    public $estado_ges,$archivo_comprobante2,$fecha_ultimo_cambio,$mensajeins,$mensajeins1,$id_pre_boton,$estado_pre_boton,$matricula_bus_aj;
    public $mensaje1,$id2,$profesion_en,$id_desact,$nuevo_estadodesact,$no_gest_desact,$tipo_cambio8;
    public $observacion, $id_pre_ins_arch, $id_no_gest_arch, $archivo_cdiaco, $archivo, $formato,$id_gest,$nuevo_estado,$id_no_gest_ins;
    public $mensajeup,$mensajeup1,$correlativon,$pass,$correoed,$mensaje_diaco1;
    public $id_pre_info, $id_pre_i, $confi, $grados_selecionados, $año_ingreso, $grado_primer_ingreso, $nombre_padre, $nacimiento_padre, $nacionalidad_padre;
    public $lugar_nacimiento_padre, $estadocivilp, $DPI_padre, $celular_padre, $telefono_padre, $direccion_residencia, $correo_padre, $profesion_padre;
    public $lugar_profesion_padre, $cargo_profesion_padre, $religion_padre, $NIT_padre, $vive_con_elpadre, $nombre_madre, $fechana_madre, $nacionalidad_madre;
    public $lugar_nacimiento_madre, $estadocivilma, $DPI_madre, $telefono_madre, $celular_madre, $direccion_residenciamadre, $correo_madre, $profesion_madre;
    public $lugar_prof_madre, $cargo_madre, $religion_madre, $vive_madre, $NIT_madre, $tiene_alergia, $Especifique_alerg, $nombreaseguradora, $nombreencargado;
    public $poliza, $carne_seguro, $codigo_fam, $nombre_fam, $Especifique_medi, $Especifique_ali, $medicamento, $grados_mostrar,$estadocivil;
    public $alimento, $vacunas, $alumno_asegurado, $solo_alumno, $encargado_alumno, $bus_colegio, $bus_no_colegio, $nombre_aseguradora, $no_gest;
    public $tipo2,$correo_en2,$preciopre,$preciovir,$id_gr,$id_nvl;
    public $quien_encargado1, $nombre_encargado, $nacimientoencargado,$nacionalidadencargado,$lugarnacimientoencargado,$estadocivilencargado,$DPIencargado,$telefonoencargado,$celularencargado,$direccionresidenciaencargado,$correoencargado,$profesionencargado,$lugar_profesion_encargado ,$religion_encargado,$NIT_encargado;
    public $img2, $img3, $archivo_perfil, $archivo_perfil2, $vive_con_el_encargado, $Especifique_rel;
    public $can1,$can2,$tipo_ins, $datosusuario4,$tipo3,$tipo4, $cargoencargado;
    public $grados_selecionados3, $grados_selecionados4, $grados_selecionados5, $grados_selecionados6, $grados_selecionados7, $grados_selecionados8, $grados_selecionados9;

    public function render()
    {

        if($this->archivo_perfil!=null){
            if($this->archivo_perfil->getClientOriginalExtension()=="jpg" or $this->archivo_perfil->getClientOriginalExtension()=="png" or $this->archivo_perfil->getClientOriginalExtension()=="jpeg"){
                $this->tipo=4;
            }
        }
        if($this->archivo_perfil2!=null){
            if($this->archivo_perfil2->getClientOriginalExtension()=="jpg" or $this->archivo_perfil2->getClientOriginalExtension()=="png" or $this->archivo_perfil2->getClientOriginalExtension()=="jpeg"){
                $this->tipo=2;
            }
        }
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
            ->select('tb_pre_diaco.ID_CONTRATO_DIACO', 'TB_PRE_INS.ID_PRE', 'TB_PRE_INS.NO_GESTION','tb_pre_diaco.CONTRATO','TB_PRE_INS.ESTADO_PRE_INS')
            ->where('tb_pre_diaco.ID_PRE','=',$this->id_pre_ins_arch)
            ->get();

       /*      $data_ins="";
                $data_ins=DB::table('TB_PRE_INFO')
                ->join('TB_PRE_INS','TB_PRE_INFO.ID_PRE','=','TB_PRE_INS.ID_PRE')
                ->select('TB_PRE_INFO.ID_PRE_INFO', 'TB_PRE_INS.ID_PRE', 'TB_PRE_INS.NO_GESTION','TB_PRE_INS.ESTADO_PRE_INS')
                ->where('TB_PRE_INFO.ID_PRE','=',$this->id_pre_i)
                ->get(); */
          

        if($this->archivo_comprobante2!=null){
            if($this->archivo_comprobante2->getClientOriginalExtension()=="jpg" or $this->archivo_comprobante2->getClientOriginalExtension()=="png" or $this->archivo_comprobante2->getClientOriginalExtension()=="jpeg"){
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
            $this->can1=count($estado_cero);
        }

        if($this->search1!=null && $this->search1!=""){
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.NO_GESTION,TB_PRE_INS.COMPROBANTE_PAGO, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=1 and (NO_GESTION like '%".$this->search1."%' or NOMBRE_ES like '%".$this->search1."%')";
            $estado_uno=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.NO_GESTION,TB_PRE_INS.COMPROBANTE_PAGO, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=1 order by TB_PRE_INS.ESTADO_PRE_INS DESC";
            $estado_uno=DB::select($sql);
        }
        if($this->search11!=null && $this->search11!=""){
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.NO_GESTION,TB_PRE_INS.COMPROBANTE_PAGO, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=2 and (NO_GESTION like '%".$this->search11."%' or NOMBRE_ES like '%".$this->search11."%')";
            $estado_uno2=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.NO_GESTION,TB_PRE_INS.COMPROBANTE_PAGO,TB_PRE_INS.APELLIDOS_EST, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=2 order by TB_PRE_INS.ESTADO_PRE_INS DESC";
            $estado_uno2=DB::select($sql);
        }

        if($this->search2!=null && $this->search2!=""){
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=3 and (NO_GESTION like '%".$this->search2."%' or NOMBRE_ES like '%".$this->search2."%')";
            $estado_dos=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=3 order by TB_PRE_INS.FECHA_CAMBIOS_REG  DESC";
            $estado_dos=DB::select($sql);
        }

        if($this->search22!=null && $this->search22!=""){
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=4 and (NO_GESTION like '%".$this->search22."%' or NOMBRE_ES like '%".$this->search22."%')";
            $estado_dos2=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE  ESTADO_PRE_INS=4 order by TB_PRE_INS.FECHA_CAMBIOS_REG  DESC";
            $estado_dos2=DB::select($sql);
        }

        if($this->search3!=null && $this->search3!=""){
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=5  and (NO_GESTION like '%".$this->search3."%' or NOMBRE_ES like '%".$this->search3."%')";
            $estado_tres=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=5 order by TB_PRE_INS.FECHA_CAMBIOS_REG  DESC";
            $estado_tres=DB::select($sql);
        }

        if($this->search33!=null && $this->search33!=""){
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=6 and (NO_GESTION like '%".$this->search33."%' or NOMBRE_ES like '%".$this->search33."%')";
            $estado_tres3=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=6 order by TB_PRE_INS.FECHA_CAMBIOS_REG  DESC";
            $estado_tres3=DB::select($sql);
        }

        if($this->search44!=null && $this->search44!=""){
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO, FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=7 and (NO_GESTION like '%".$this->search44."%' or NOMBRE_ES like '%".$this->search44."%')";
            $estado_cuatro4=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=7 order by TB_PRE_INS.FECHA_CAMBIOS_REG  DESC";
            $estado_cuatro4=DB::select($sql);
        }

        if($this->search5!=null && $this->search5!=""){
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=8 and (NO_GESTION like '%".$this->search5."%' or NOMBRE_ES like '%".$this->search5."%')";
            $estado_cinco=DB::select($sql);
        }else{
            $sql="SELECT TB_PRE_INS.ID_PRE,TB_PRE_INS.NOMBRE_ES,TB_PRE_INS.ESTADO_PRE_INS,TB_PRE_INS.NO_GESTION, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE ESTADO_PRE_INS=8 order by TB_PRE_INS.FECHA_CAMBIOS_REG  DESC";
            $estado_cinco=DB::select($sql);
        }
        $sql="SELECT * FROM TB_FORMAS_DE_PAGO";
        $formasdepago=DB::select($sql);
        $sql="SELECT * FROM TB_TIPOS_DE_PAGO";
        $metododepago=DB::select($sql);
        $sql= 'SELECT * FROM tb_grados';
        $grados=DB::select($sql);
        $sql="SELECT * FROM tb_nvlacademico";
        $academico=DB::select($sql);
        $sql="SELECT * FROM CORRELATIVOS";
        $correlativos=DB::select($sql);

        return view('livewire.adminisiones-componet', compact('estado_cuatro4','estado_tres3','estado_dos2','estado_uno2','metododepago','formasdepago','academico','grados','estado_cero','estado_uno','estado_dos','estado_tres','estado_cinco','diaco','correlativos'));
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

        if($this->tipo_cambio1==1){
                $id_gr=$this->gradoin;
                $sql='SELECT * FROM tb_grados WHERE ID_GR=?';
                $grados=DB::select($sql,array($id_gr));
                
                foreach($grados as $gra){
                        $this->id_nvlacademico=$gra->NIVEL_ACADEMICO;
                        $this->preciopre=$gra->PRECIO_PRESENCIAL;
                        $this->preciovir=$gra->PRECIO_VIRTUAL;
                        };
                            $id_nvl=$this->id_nvlacademico;
                            $sql='SELECT * FROM tb_nvlacademico WHERE ID_NVL=?';
                            $academico=DB::select($sql,array($id_nvl));

                            foreach($academico as $acade){
                                $this->totalpre=$acade->TOTAL_PRESENCIAL;
                                $this->totalvir=$acade->TOTAL_VIRTUAL;
                                $this->cuotare=$acade->CUOTA_ANUAL_RE;
                                $this->cuotan=$acade->CUOTA_ANUAL_N;
                            }

                        $varpre=0;
                        $varmenvir=0;
                if($this->tipo2=='Presencial'){
                    $varpre=$this->totalpre;
                    $varmenvir=$this->preciopre;
            
                }elseif($this->tipo2=='Virtual'){
                    $varpre=$this->totalvir;
                    $varmenvir=$this->preciovir;
                }        
            
                $cuota_r=0;
                if($this->tipo_ins==1){
                    $cuota_r=$this->cuotare;
                }elseif($this->tipo_ins==2){
                    $cuota_r=$this->cuotan;
                }

            $cuentaestudiante=DB::table('cuentaestudiante')->insert(  
                [          
                    'ID_PRE'=> $this->id_ges_cambio,
                    'ID_GR'=> $this->gradoin,
                    'FECHA_PAGO'=>  date("Y-m-d H:i:s"),
                    'FECHA_ULIMOPAGO'=>  date("Y-m-d H:i:s"),
                    'ID_MES'=>1,
                    'MONTO_INSCRIPCION'=>$varpre,
                    'MONTO_MENSUAL'=>$varmenvir,
                    'MONTO_RECUPERACION'=>0,
                    'MONTO_DESCUENTO'=>0,
                    'ESTADO'=>1,   
                    'CUOTA_ANUAL'=>$cuota_r,                
                ]
            );
        }
        if($this->tipo_cambio1==3){

            $id_pre=$this->id_ges_cambio;
            $sql='SELECT * FROM cuentaestudiante WHERE ID_PRE=?';
            $cuentas=DB::select($sql,array($id_pre));

            $id_cuenta=0;
            $monto_ins=0;
            foreach($cuentas as $cuenta){
                $id_cuenta=$cuenta->ID_CUENTA;
                $monto_ins=$cuenta->MONTO_INSCRIPCION;

            }
            $mespagado=0;
            $estado_cance=0;
            if($this->fpago==1){
                $mespagado=2;
                $estado_cance=2;
            }
            if($this->fpago==2){
                $mespagado=1;
                $estado_cance=1;
            }
            if($this->fpago==3){
                $mespagado=2;
                $estado_cance=3;
            }
            if($this->fpago==4){
                $mespagado=1;
                $estado_cance=4;
            }

            $cambio_pre=DB::table('cuentaestudiante')
               ->where('ID_CUENTA',  $id_cuenta)
               ->update(
                   [
                    'ID_MES'=>$mespagado,
                    'ESTADO_CANCELADO' =>$estado_cance,
                    'FECHA_ULIMOPAGO'=>  date("Y-m-d H:i:s"),
                    'MONTO_CANCELADO'=>$monto_ins,
                   ]);

        }
            

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
            $this->tipo2=$pre->MODALIDAD_EST;
            $this->fingreso_gestion=$pre->FECHA_REGISTRO;
            $this->fecha_ultimo_cambio=$pre->FECHA_CAMBIOS_REG;
            $this->correo_en2=$pre->CORREO_EN_ES2;
            $this->profesion_en=$pre->PROFESION_EN_ES;
            $this->tipo_ins=$pre->TIPO_INS;

        }
        $sql='SELECT * FROM TB_FORM_PAGOS WHERE ID_PRE=?';
        $tarjeta=DB:: select($sql, array($id));
            foreach($tarjeta as $tar)
            {
                $this->ntarjeta=$tar->N_TARJETA;
                $this->notarjeta=$tar->NO_TARJETA;
                $this->fvencimiento=$tar->F_VENCIMIENTO; 
                $this->cseguridad=$tar->C_SEGURIDAD;
                $this->id_pre=$tar->ID_PRE;
            }

    }
    public function editar2($id)
    {
        unset($this->mensajeup);
        unset($this->mensajeup1);
       $sql="SELECT TB_PRE_INS.*, tb_grados.GRADO FROM TB_PRE_INS INNER JOIN tb_grados ON TB_PRE_INS.GRADO_ING_ES= tb_grados.ID_GR WHERE (ESTADO_PRE_INS=1 or  ESTADO_PRE_INS=2 or ESTADO_PRE_INS=3 or ESTADO_PRE_INS=4)  and ID_PRE=?";
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
            $this->archivo_comprobante=$pre->COMPROBANTE_PAGO;
            $this->extentido_en=$pre->EXTENDIDO_DPI_EN_ES;
            $this->observacion=$pre->OBSERVACION_COMP;
            $this->fpago=$pre->FORMA_PAGO;
            $this->metodo=$pre->TIPO_PAGO;
            $this->validacion_comp=$pre->VALIDACION_COMP;
            $this->observacion2=$pre->OBSERVACION_COMP2;
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
            $this->tipo2=$pre->MODALIDAD_EST;
            $this->fecha_ultimo_cambio=$pre->FECHA_CAMBIOS_REG;
            $this->correo_en2=$pre->CORREO_EN_ES2;
            $this->profesion_en=$pre->PROFESION_EN_ES;
            $this->tipo_ins=$pre->TIPO_INS;
        }
        $sql='SELECT * FROM TB_FORM_PAGOS WHERE ID_PRE=?';
        $tarjeta=DB:: select($sql, array($id));
            foreach($tarjeta as $tar)
            {
                $this->ntarjeta=$tar->N_TARJETA;
                $this->notarjeta=$tar->NO_TARJETA;
                $this->fvencimiento=$tar->F_VENCIMIENTO; 
                $this->cseguridad=$tar->C_SEGURIDAD;
                $this->id_pre=$tar->ID_PRE;
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
                    'MODALIDAD_EST'=>$this->tipo2,
                   'CORREO_EN_ES2'=> $this->correo_en2,
                   'PROFESION_EN_ES'=>$this->profesion_en,
                   'TIPO_INS'=>$this->tipo_ins,
                    //'FECHA_REGISTRO'=>$this->fingreso_gestion,
                    //''=>,
                    //'FORMA_PAGO'=>$metodo,
                   // 'FORMA_PAGO'=>$metodo,
                    //'COMPROBANTE_PAGO'=>$archivo_comprobante,
                    'FECHA_CAMBIOS_REG'=> date('y-m-d:h:m:s'),
                    /* 'ESTADO_PRE_INS'=>2, */
                   // 'OBSERVACION_COMP'=>$observacion,
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
    public function cambiofoto()
    {
        $archivo_comprobante="";
        if($this->archivo_comprobante2!=null){
            if($this->archivo_comprobante2->getClientOriginalExtension()=="jpg" or $this->archivo_comprobante2->getClientOriginalExtension()=="png" or $this->archivo_comprobante2->getClientOriginalExtension()=="jpeg"){
                $archivo_comprobante = "img".time().".".$this->archivo_comprobante2->getClientOriginalExtension();
                $this->img=$archivo_comprobante;
                $this->archivo_comprobante2->storeAS('imagen/comprobantes2022/', $this->img,'public_up');
                $this->tipo=1;
            }
           
            DB::beginTransaction();
                    $foto=DB::table('TB_PRE_INS')
                    ->where('ID_PRE',$this->id_ges_cambio)
                    ->update ([
                        
                        'COMPROBANTE_PAGO'=>$this->img,
                        'FECHA_CAMBIOS_REG'=> date('y-m-d:h:m:s'),
                     ]);

                     if($foto){
                        DB::commit();
                        $this->archivo_comprobante=$this->img;
                        $this->mensaje24="Comprobante de pago actualizado";
                    }
                    else{
                        DB::rollback();
                        $this->mensaje25="No se logró actualizar";
                    }
        }
    }
    public function actualizar_validacion_pago(){
        if($this->validate([

            /* DATOS DEL ESTUDIANTE */
            'gradoin' => 'required',
            'nombre_es' => 'required',
            'f_nacimiento_es' => 'required',
            'genero' => 'required',
            'cui_es' => 'required',
            'codigo_pe_es' => 'required',
            'nac_es' => 'required',
            'lug_nac_es' => 'required',
            'direccion_es' => 'required',
            'cel_es' => 'required',
            'religion_es' => 'required',

            /* DATOS ENCARGADO */

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

            /* INFORMACIÓN PAGO */

            'fpago' => 'required',
            'metodo' => 'required',
            'dpi_en' => 'required',
            'observacion' => 'required',

            ])==false){
            $mensaje="no encontrado";
           session(['message' => 'no encontrado']);
            return  back()->withErrors(['mensaje'=>'Validar el input vacio']);
        }else{
            DB::beginTransaction();
    
            $validacion_pagos=DB::table('TB_PRE_INS')
            ->where('ID_PRE',$this->id_ges_cambio)
            ->update(
                [

                    /* DATOS DEL ESTUDIANTE */

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

                    /* DATOS ENCARGADO */

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
                    'PROFESION_EN_ES'=>$this->profesion_en,

                    'FECHA_REGISTRO'=>$this->fingreso_gestion,
                    'GRADO_ING_ES'=>$this->gradoin,
                    'NO_GESTION'=>$this->gestion,
                    'MODALIDAD_EST'=>$this->tipo2,
                    'CORREO_EN_ES2'=> $this->correo_en2,
                    'TIPO_INS'=>$this->tipo_ins,
                    /* INFORMACIÓN PAGO */

                    'TIPO_PAGO'=>$this->fpago,
                    'FORMA_PAGO'=>$this->metodo,
                    'COMPROBANTE_PAGO'=>$this->archivo_comprobante,
                    'FECHA_CAMBIOS_REG'=> date('y-m-d:h:m:s'),
                    'OBSERVACION_COMP'=>$this->observacion,
                ]
                );
            if($validacion_pagos){
    
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

    Public function editardi($id,$no_gest){
        $this->editar2($id);
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
                $grados_selecionados1=explode(";", $this->grados_selecionados);
                $grados_selecionados2= count($grados_selecionados1);
                
                if($grados_selecionados2==1){
                    $this->grados_selecionados3=$grados_selecionados1[0];
                    
                    
                }
                if($grados_selecionados2==2){
                    $this->grados_selecionados3=$grados_selecionados1[0];
                    $this->grados_selecionados4=$grados_selecionados1[1];
                    
                    
                }
                if($grados_selecionados2==3){
                    $this->grados_selecionados3=$grados_selecionados1[0];
                    $this->grados_selecionados4=$grados_selecionados1[1];
                    $this->grados_selecionados5=$grados_selecionados1[2];
                    
                    
                }
                if($grados_selecionados2==4){
                    $this->grados_selecionados3=$grados_selecionados1[0];
                    $this->grados_selecionados4=$grados_selecionados1[1];
                    $this->grados_selecionados5=$grados_selecionados1[2];
                    $this->grados_selecionados6=$grados_selecionados1[3];
                    
                    
                }
                if($grados_selecionados2==5){
                    $this->grados_selecionados3=$grados_selecionados1[0];
                    $this->grados_selecionados4=$grados_selecionados1[1];
                    $this->grados_selecionados5=$grados_selecionados1[2];
                    $this->grados_selecionados6=$grados_selecionados1[3];
                    $this->grados_selecionados7=$grados_selecionados1[4];
                    
                    
                }
                if($grados_selecionados2==6){
                    $this->grados_selecionados3=$grados_selecionados1[0];
                    $this->grados_selecionados4=$grados_selecionados1[1];
                    $this->grados_selecionados5=$grados_selecionados1[2];
                    $this->grados_selecionados6=$grados_selecionados1[3];
                    $this->grados_selecionados7=$grados_selecionados1[4];
                    $this->grados_selecionados8=$grados_selecionados1[5];
                    
                }
                
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
    $this->Especifique_ali=$estac->ESPECIFICACION_ALERG_AL;
    $this->alimento=$estac->ALERG_ALIMENTO;
    $this->vacunas=$estac->VACUNAS;
    $this->solo_alumno=$estac->SALIDA_SOLO;
    $this->encargado_alumno=$estac->SALIDA_CON_ENCARGADO;
    $this->bus_colegio=$estac->SALIDA_BUS_COLEGIO;
    $this->bus_no_colegio=$estac->SALIDA_BUS_AJENO;
    $this->Especifique_medi=$estac->ESPECIFICAR_ALERG_ME;
    $this->nombre_aseguradora=$estac->ASEGURADORA;
    $this->nombre_encargado=$estac->NOMBRE_ENCARGADO;
    $this->matricula_bus_aj=$estac->Matricula_bus_aj;
    $this->quien_encargado1=$estac->ENCARGADO;
    $this->nombreencargado=$estac->NOMB_ENCARGADO;        
    $this->nacimientoencargado=$estac->FECHA_N_ENCARGADO;
    $this->nacionalidadencargado=$estac->NACIONALIDAD_ENCARGADO;
    $this->lugarnacimientoencargado=$estac->LUGAR_NACIMIENTO_ENCARGADO;
    $this->estadocivilencargado=$estac->ESTADO_CIVIL_E;
    $this->DPIencargado=$estac->DPI_ENCARGADO;
    $this->telefonoencargado=$estac->TELEFONO_ENCARGADO;
    $this->celularencargado=$estac->CELULAR_ENCARGADO;
    $this->direccionresidenciaencargado=$estac->DIRECCION_RESIDENCIA_ENCARGADO;
    $this->correoencargado=$estac->CORREO_ENCARGADO;
    $this->profesionencargado=$estac->PROFECION_ENCARGADO;
    $this->cargoencargado=$estac->CARGO_ENCARGADO;
    $this->lugar_profesion_encargado=$estac->LUGAR_TRABAJO_E ;
    $this->religion_encargado=$estac->RELIGION_ENCARGADO;
    $this->NIT_encargado=$estac->NIT_ENCARGADO;
    $this->Especifique_rel=$estac->REL_ENCARGADO;
    $this->vive_con_el_encargado=$estac->VIVE_CON_EL_ENCARGADO;
    $this->solo_por=$estac->RETIRO_SOLO;
    $this->n_encargado=$estac->RETIRO_N_EN;
    $this->dpi_encar=$estac->RETIRO_DPI_EN;
    $this->bus_por=$estac->RETIRO_BUS_COL;
    $this->nombre_conductor=$estac->N_CONDUCTOR_AJ;
    $this->dpi_conductor=$estac->DPI_CONDUCTOR_AJ;
    $this->n_conductor=$estac->NUM_CONDUCTOR_AJ;
            }
            
        }
    }

    public $n_encargado, $dpi_encar, $bus_por, $nombre_conductor, $dpi_conductor, $n_conductor;

    public function medicamento($medicamento){
        $this->medicamento=$medicamento;
    }
    public function confirmar_hermano($conf){
        $this->confi=$conf;


    }
    public function insertar_grados_hermanos($grado, $gradomostrar){
        if($this->idgrado!=null && $this->idgrado!=""){
            $sql= 'SELECT * FROM tb_grados where ID_GR=?';
            $grados2=DB::select($sql,array($this->idgrado));
            $a="";
            foreach($grados2 as $grados){
                $a=$grados->GRADO;
            }
            $this->grados_selecionados=$this->grados_selecionados.";".$this->idgrado;
            $this->grados_mostrar=$this->grados_mostrar.";".$a;
            $this->idgrado="";
        }
        
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
    public function quien_encargado($quien_encargado1){
        $this->quien_encargado1=$quien_encargado1;
    }
    public function vive_con_el_encargado($vive_encargado2){
        $this->vive_con_el_encargado=$vive_encargado2;
    }
    public function estado_civil_encargado($estadocivilencargado2){
        $this->estadocivilencargado=$estadocivilencargado2;
    }
    public function solo_por($solo_por){
        $this->solo_por=$solo_por;
    }
    public function bus_por($bus_por){
        $this->bus_por=$bus_por;
    }

    public function update_datos_ins(){
        $this->actualizar_validacion_pago();
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
$matricula_bus_aj=$this->matricula_bus_aj; 
$quien_encargado1=$this->quien_encargado1;
    $nombre_encargado=$this->nombre_encargado;        
    $nacimientoencargado=$this->nacimientoencargado;
    $nacionalidadencargado=$this->nacionalidadencargado;
    $lugarnacimientoencargado=$this->lugarnacimientoencargado;
    $estadocivilencargado=$this->estadocivilencargado;
    $DPIencargado=$this->DPIencargado;
    $telefonoencargado=$this->telefonoencargado;
    $celularencargado=$this->celularencargado;
    $direccionresidenciaencargado=$this->direccionresidenciaencargado;
    $correoencargado=$this->correoencargado;
    $profesionencargado=$this->profesionencargado;
    $lugar_profesion_encargado=$this->lugar_profesion_encargado ;
    $religion_encargado=$this->religion_encargado;
    $NIT_encargado=$this->NIT_encargado;
    $vive_con_el_encargado=$this->vive_con_el_encargado;
    $Especifique_rel=$this->Especifique_rel;
    $cargoencargado=$this->cargoencargado;


    
    DB::beginTransaction();

    $inscripcion_datos=DB::table('TB_PRE_INFO')
            ->where('ID_PRE',$this->id_pre_i)
            ->update(
        [
            'HERMANOS_COLE'=>$this->confi,
            'GRADO_HERMANOS_COLE'=>$this->grados_selecionados,
            'AÑO_1R_INGRESO'=>$año_ingreso,
            'GRADO_1R_INGRESO'=>$grado_primer_ingreso,
            'NOMB_PADRE'=>$nombre_padre,
            'FECHA_N_PADRE'=>$nacimiento_padre,
            'NACIONALIDAD_PADRE'=>$nacionalidad_padre,
            'LUGAR_NACIMIENTO_PADRE'=>$lugar_nacimiento_padre,
            'ESTADO_CIVIL_P'=> $this->estadocivilp,
            'VIVE_CON_LA_MADRE'=> $this->vive_madre,
            'DPI_PADRE'=>$DPI_padre,
            'TELEFONO_PADRE'=>$telefono_padre,
            'CELULAR_PADRE'=>$celular_padre,
            'DIRECCION_RESIDENCIA_P'=>$direccion_residencia,
            'CORREO_PADRE'=>$correo_padre,
            'PROFECION_PADRE'=>$profesion_padre,
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
            'PROFECION_MADRE'=>$profesion_madre,
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
            'NOMBRE_ENCARGADO'=>$this->nombre_encargado,
            'SALIDA_BUS_COLEGIO'=>$this->bus_colegio,
            'SALIDA_BUS_AJENO'=>$this->bus_no_colegio,
            'CODIGO_FAMILIA'=>$this->codigo_fam,
            'NOMBRE_FAMILIA'=>$this->nombre_fam,
            'Matricula_bus_aj'=>$matricula_bus_aj,
            'ENCARGADO'=> $this->quien_encargado1,
            'NOMB_ENCARGADO'=>$this->nombreencargado,
            'FECHA_N_ENCARGADO'=>$this->nacimientoencargado,
            'NACIONALIDAD_ENCARGADO'=>$this->nacionalidadencargado,
            'LUGAR_NACIMIENTO_ENCARGADO'=>$this->lugarnacimientoencargado,
            'ESTADO_CIVIL_E'=>$this->estadocivilencargado,
            'DPI_ENCARGADO'=>$this->DPIencargado,
            'TELEFONO_ENCARGADO'=>$this->telefonoencargado,
            'CELULAR_ENCARGADO'=>$this->celularencargado,
            'DIRECCION_RESIDENCIA_ENCARGADO'=>$this->direccionresidenciaencargado,
            'CORREO_ENCARGADO'=>$this->correoencargado,
            'PROFECION_ENCARGADO'=>$this->profesionencargado,
            'CARGO_ENCARGADO'=>$this->cargoencargado,
            'LUGAR_TRABAJO_E'=>$this->lugar_profesion_encargado,
            'RELIGION_ENCARGADO'=>$this->religion_encargado,
            'NIT_ENCARGADO'=>$this->NIT_encargado,
            'VIVE_CON_EL_ENCARGADO'=>$this->vive_con_el_encargado,
            'RETIRO_SOLO'=>$this->solo_por,
            'RETIRO_N_EN'=>$this->n_encargado,
            'RETIRO_DPI_EN'=>$this->dpi_encar,
            'RETIRO_BUS_COL'=>$this->bus_por,
            'N_CONDUCTOR_AJ'=>$this->nombre_conductor,
            'DPI_CONDUCTOR_AJ'=>$this->dpi_conductor,
            'NUM_CONDUCTOR_AJ'=>$this->n_conductor,
            'REL_ENCARGADO'=>$this->Especifique_rel,        
            ]
        );
        if($inscripcion_datos){
            DB::commit();
            $this->mensajeins=1;
        }
        else{
            DB::rollback();
            $this->mensajeins1=1;
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

        $sql='SELECT * FROM TB_PRE_INS WHERE ID_PRE=?';
        $botones5=DB:: select($sql, array($id_pre));
        if($botones5 !=null){
            foreach($botones5 as $boton)
            {
                $this->id_pre_boton=$boton->ID_PRE;
                $this->estado_pre_boton=$boton->ESTADO_PRE_INS;
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
                 $this->mensaje='Editado correctamente';
                 }
                 else {
                 DB::rollback();
                 unset($this->mensaje);;
                 unset($this->mensaje1);
                 $this->op='addcontenidos';
                 $this->mensaje1='No se logro editar correctamente';
                 }        
         }

         public function cambio_estado($id){
            $this->nuevo_estado=$id;  
         }

         public function cambio_estadocon($id){
            $this->no_gest_con=$id;  
            $id_pre_ins_arch=$this->id_pre_ins_arch;
            $nuevo_estado=$this->nuevo_estado;
            $elevar=DB::table('TB_PRE_INS')
                ->where('NO_GESTION', $this->no_gest_con)
                ->update(
                    [
 
                     'ESTADO_PRE_INS' =>$nuevo_estado,
 
                    ]);
                    if($elevar){
                        $this->mensaje_diaco='Editado correctamente';
                        if(false !== strpos($this->correo_en, "@") && false !== strpos($this->correo_en, ".")){
                            $subject = "Notificación Pre-Ins.Castaño (No responder)";
                            $for = $this->correo_en;
                            $arreglo= array($this->id_no_gest_ins);
                            Mail::send('admisiones.correo.vista1',compact('arreglo'), function($msj) use($subject,$for){
                            $msj->from("ingresos@colegioelcastano.edu.gt","ColegioElCastaño");
                            $msj->subject($subject);
                            $msj->to($for);        
                        });
                        }
                        if(false !== strpos($this->correo_padre, "@") && false !== strpos($this->correo_padre, ".")){
                        $subject = "Notificación Pre-Ins.Castaño (No responder)";
                        $for2 = $this->correo_padre;
                        $arreglo= array($this->id_no_gest_ins);
                        Mail::send('admisiones.correo.vista1',compact('arreglo'), function($msj) use($subject,$for2){
                            $msj->from("ingresos@colegioelcastano.edu.gt","ColegioElCastaño");
                            $msj->subject($subject);
                            $msj->to($for2);        
                        });
                        }
                        if(false !== strpos($this->correo_madre, "@") && false !== strpos($this->correo_madre, ".")){
                        $subject = "Notificación Pre-Ins.Castaño (No responder)";
                        $for3 = $this->correo_madre;
                        $arreglo= array($this->id_no_gest_ins);
                        Mail::send('admisiones.correo.vista1',compact('arreglo'), function($msj) use($subject,$for3){
                            $msj->from("ingresos@colegioelcastano.edu.gt","ColegioElCastaño");
                            $msj->subject($subject);
                            $msj->to($for3);        
                        });
                        }
                        unset($this->mensaje);
                        $this->mensaje="Se actualizo el estado y se envio correo correctamente";
                    }
                    else{
                        $this->mensaje_diaco1='No se logro editar correctamente';
                    }
         }

         public function cambio_estadoins($no_gest){
            $this->id_no_gest_ins=$no_gest;
            $id_ges_cambio=$this->id_ges_cambio;
            $nuevo_estado=$this->nuevo_estado;
            $elevar=DB::table('TB_PRE_INS')
                ->where('NO_GESTION', $this->id_no_gest_ins)
                ->update(
                    [
 
                     'ESTADO_PRE_INS' => $nuevo_estado,
 
                    ]);
                    if($elevar){
                        $this->mensaje_diaco='Editado correctamente';
                        DB::commit();
                        if(false !== strpos($this->correo_en, "@") && false !== strpos($this->correo_en, ".")){
                        $subject = "Notificación Pre-Ins.Castaño (No responder)";
                        $for = $this->correo_en;
                        $arreglo= array($this->id_no_gest_ins);
                        Mail::send('admisiones.correo.vista1',compact('arreglo'), function($msj) use($subject,$for){
                        $msj->from("ingresos@colegioelcastano.edu.gt","ColegioElCastaño");
                        $msj->subject($subject);
                        $msj->to($for);        
                    });
                    }
                    if(false !== strpos($this->correo_padre, "@") && false !== strpos($this->correo_padre, ".")){
                    $subject = "Notificación Pre-Ins.Castaño (No responder)";
                    $for2 = $this->correo_padre;
                    $arreglo= array($this->id_no_gest_ins);
                    Mail::send('admisiones.correo.vista1',compact('arreglo'), function($msj) use($subject,$for2){
                        $msj->from("ingresos@colegioelcastano.edu.gt","ColegioElCastaño");
                        $msj->subject($subject);
                        $msj->to($for2);        
                    });
                    }
                    if(false !== strpos($this->correo_madre, "@") && false !== strpos($this->correo_madre, ".")){
                    $subject = "Notificación Pre-Ins.Castaño (No responder)";
                    $for3 = $this->correo_madre;
                    $arreglo= array($this->id_no_gest_ins);
                    Mail::send('admisiones.correo.vista1',compact('arreglo'), function($msj) use($subject,$for3){
                        $msj->from("ingresos@colegioelcastano.edu.gt","ColegioElCastaño");
                        $msj->subject($subject);
                        $msj->to($for3);        
                    });
                    }
                    unset($this->mensaje);
                    $this->mensaje="Se actualizo el estado y se envio correo correctamente";
                    }
                    else{
                        $this->mensaje_diaco1='No se logro editar correctamente';
                        unset($this->mensaje1);
                        $this->mensaje1="No fue posible enviar correo y actualizar";
                    }
         }


         public function editarusuarios($id,$no_gest){
            $this->editar2($id);
            $id=$id;
            $this->no_gest=$no_gest;
            $sql='SELECT * FROM TB_PRE_INS WHERE ID_PRE=?';
            $encar=DB:: select($sql, array($id));
            foreach($encar as $enca)
            {
                $this->nombre_es=$enca->NOMBRE_ES;
                $this->f_nacimiento_es=$enca->FEC_NAC;
                $this->cui_es=$enca->CUI_ES;
                $this->codigo_pe_es=$enca->CODIGO_PER;
                $this->gradoin=$enca->GRADO_ING_ES;
                $this->fecha_ultimo_cambio=$enca->FECHA_CAMBIOS_REG;
            }

            $sql='SELECT * FROM TB_PRE_INFO WHERE ID_PRE=?';
            $encarg=DB:: select($sql, array($id));
            foreach($encarg as $encac)
            {
                $this->nombre_padre=$encac->NOMB_PADRE;
                $this->nacimiento_padre=$encac->FECHA_N_PADRE;
                $this->DPI_padre=$encac->DPI_PADRE;

                $this->codigo_fam=$encac->CODIGO_FAMILIA;
                $this->nombre_madre=$encac->NOMB_MADRE;
                $this->fechana_madre=$encac->FECHA_N_MADRE;
                $this->DPI_madre=$encac->DPI_MADRE;       

                $this->quien_encargado1=$encac->ENCARGADO;
                $this->nombre_encargado=$encac->NOMB_ENCARGADO;    
                $this->nacimientoencargado=$encac->FECHA_N_ENCARGADO;
                $this->DPIencargado=$encac->DPI_ENCARGADO;
            }
            $sql='SELECT * FROM TB_PRE_INS WHERE ID_PRE=?';
            $cambiodeestado=DB:: select($sql, array($id));
            if($cambiodeestado !=null){
            foreach($cambiodeestado as $cambioes)
            {
                $this->id_pre_boton=$cambioes->ID_PRE;
                $this->estado_pre_boton=$cambioes->ESTADO_PRE_INS;
            }
        }
         }
         public function usuario_aluenca($id,$est){
            $this->no_gest_con=$id;
            $this->nuevo_estado=$est;
            $elevar=DB::table('TB_PRE_INS')
                ->where('NO_GESTION', $this->no_gest_con)
                ->update(
                    [
 
                     'ESTADO_PRE_INS' =>$this->nuevo_estado,
 
                    ]);

            $sql='SELECT * FROM users WHERE usuario=?';
            $maes=DB::select($sql,array($this->usuario));
    
            if($maes !=null){
    
                $inicial=substr($this->nombre_es,0,1);
                $iniciales=explode(" ", $this->nombre_es);
                $inicial2=substr($iniciales[1],0,1);
                $apellido=$iniciales[2];
                $apellido2=substr($iniciales[3],0,1);
                
    
                $this->usuario=$this->usuario.$inicial2;
    
                $this->correoed=$inicial.$inicial2.$apellido.$apellido2.$inicial2.'@colegioelcastano.edu.gt';
                $this->usuario = strtolower($this->usuario);
                $this->correoed = strtolower($this->correoed);
            }

            $sql='SELECT * FROM users WHERE usuario=?';
            $hola=DB::select($sql,array($this->usuario2));
    
            if($hola !=null){
    
                $inicial=substr($this->nombre_encargado,0,1);
                $iniciales=explode(" ", $this->nombre_encargado);
                $inicial2=substr ($iniciales[1],0,1);
                $apellido=$iniciales[2];
                $apellido2=substr ($iniciales[3],0,1);
                
    
                $this->usuario2=$this->usuario2.$inicial2;
    
                $this->correoed2=$inicial.$inicial2.$apellido.$apellido2.$inicial2.'@colegioelcastano.edu.gt';
                $this->usuario2 = strtolower($this->usuario2);
                $this->correoed2 = strtolower($this->correoed2);
            }

            $nombre_es=$this->nombre_es;
            $f_nacimiento_es=$this->f_nacimiento_es;
            $cui_es=$this->cui_es;
            $codigo_pe_es=$this->codigo_pe_es;
            $gradoin=$this->gradoin;
            $fecha_ultimo_cambio=$this->fecha_ultimo_cambio;

            $codigo_fam=$this->codigo_fam;
            $nombre_encargado=$this->nombre_encargado;
            $nacimientoencargado=$this->nacimientoencargado;
            $DPIencargado=$this->DPIencargado;
            $id_relacion=$this->id_relacion;

            $usuario=$this->usuario;
            $correoed=$this->correoed;
            $pass=bcrypt($this->pass);
            $img2=$this->archivo_perfil;

            $usuario2=$this->usuario2;
            $correoed2=$this->correoed2;
            $pass2=bcrypt($this->pass2);
            $id_pre=$this->id_pre;
            $img3=$this->archivo_perfil2;

            $id_estudiante=0;
            
            $sql='SELECT MAX(id+1) AS id FROM users;';
            $valor=DB::select($sql);
    
            foreach($valor as $val){
    
                $id_estudiante=$val->id;
            }  

            $usua=DB::table('users')->insert(
                [
                    'id'=>$id_estudiante,
                    'name'=>$usuario,
                    'email'=>$correoed,  
                    'usuario'=>$usuario,
                    'password'=>$pass,
                    'img_users'=>$img2,
                ]);

                $id_rol=4;

                $rolusuario=DB::table('rol_usuario')->insert(
                    [
                        'ID_ROL'=>$id_rol,
                        'ID_USUARIO'=>$id_estudiante,  
                    ]);

                    $datos=DB::table('tb_alumnos')->insert(
                        [
                            'NOMBRE'=>$nombre_es,
                            'FECHA_NACIMIENTO'=>$f_nacimiento_es,
                            'CUI'=>$cui_es,
                            'CODIGO_PERSONAL'=>$codigo_pe_es,
                            'GRADO_INGRESO'=>$gradoin,
                            'FECHA_REGISTRO'=>$fecha_ultimo_cambio,
                            'ID_PRE'=>$id_pre,
                            'ID_USER'=>$id_estudiante,
                        ]);

                        $sql='SELECT * FROM tb_encargados WHERE DPI=?';
                        $validacion=DB::select($sql,array($this->DPIencargado));
                
                        $id_userencargado=0;
            
                        if($validacion !=null){
            
                            foreach($validacion as $val){
            
                            $id_userencargado=$val->ID_USER;
            
                            }
                            $relacion_tabla=DB::table('tb_relacion_encargado')->insert(
                                [
                                    'ID_RELACION'=>$id_relacion,
                                    'ID_USERALUMNO'=>$id_estudiante,
                                    'ID_USERENCARGADO'=>$id_userencargado,
                                    'ESTADO'=>1,
                                ]);

                        }else{
            
                            $id_encargado=0;
                            $sql='SELECT MAX(id+1) AS id FROM users;';
                            $valore=DB::select($sql);
                    
                            foreach($valore as $vale){
                    
                                $id_encargado=$vale->id;
                            }  
            
                                $encar=DB::table('users')->insert(
                                    [
                                        'id'=>$id_encargado,
                                        'name'=>$usuario2,
                                        'email'=>$correoed2,  
                                        'usuario'=>$usuario2,
                                        'password'=>$pass2, 
                                        'img_users'=>$img3,
                                    ]);
            
                                $id_rol=5;
                    
                                $rolusuario=DB::table('rol_usuario')->insert(
                                    [
                                        'ID_ROL'=>$id_rol,
                                        'ID_USUARIO'=>$id_encargado,  
                                    ]);
                                    
                                    $datos2=DB::table('tb_encargados')->insert(
                                        [
                                            'NOMBRE'=>$nombre_encargado,
                                            'FECHA_NACIMIENTO'=>$nacimientoencargado,
                                            'DPI'=>$DPIencargado,
                                            'GRADO_INGRESO'=>$gradoin,
                                            'FECHA_REGISTRO'=>$fecha_ultimo_cambio,
                                            'ID_PRE'=>$id_pre,
                                            'ID_USER'=>$id_encargado,
                                            'CODIGO_FAM'=>$codigo_fam,
                                        ]
                                        );
                                        $relacion_tabla=DB::table('tb_relacion_encargado')->insert(
                                            [
                                                'ID_RELACION'=>$id_relacion,
                                                'ID_USERALUMNO'=>$id_estudiante,
                                                'ID_USERENCARGADO'=>$id_encargado,
                                                'ESTADO'=>1,
                                            ]);
                                            if($relacion_tabla && $datos2 && $encar){
                                                DB::commit();
                                                $this->reset();
                                                $this->mensaje1='Insertado correctamente';
                                            }
                                            else{
                                                DB::rollback();
                                                unset($this->mensaje1);
                                                $this->mensaje2='No fue posible insertar correctamente';
                                            }
                        }
                        $archivo_perfil="";
                if($this->archivo_perfil!=null){
                    if($this->archivo_perfil->getClientOriginalExtension()=="jpg" or $this->archivo_perfil->getClientOriginalExtension()=="png" or $this->archivo_perfil->getClientOriginalExtension()=="jpeg"){
                        $archivo_perfil = "img".time().".".$this->archivo_perfil->getClientOriginalExtension();
                        $this->img2=$archivo_perfil;
                        /* $ruta="C:/xampp/htdocs/repo_clon_casys/casys-pro-2.0/public/imagen/perfil/";
                        copy($this->archivo_perfil->getRealPath(), $ruta.$archivo_perfil); */
                        $this->archivo_perfil->storeAS('imagen/perfil/', $this->img2,'public_up');
                        $this->tipo4=1;
    
                        DB::beginTransaction();
                        $estudiantefoto=DB::table('users')
                        ->where('id',$id)
                        ->update ([ 
                            
                            'img_users'=>$this->img2
                         ]);

                    }
                
                }
            
            $archivo_perfil2="";
                if($this->archivo_perfil2!=null){
                    if($this->archivo_perfil2->getClientOriginalExtension()=="jpg" or $this->archivo_perfil2->getClientOriginalExtension()=="png" or $this->archivo_perfil2->getClientOriginalExtension()=="jpeg"){
                        $archivo_perfil2 = "img".time().".".$this->archivo_perfil2->getClientOriginalExtension();
                        $this->img3=$archivo_perfil2;
                        /* $ruta2="C:/xampp/htdocs/repo_clon_casys/casys-pro-2.0/public/imagen/perfil/";
                        copy($this->archivo_perfil2->getRealPath(), $ruta2.$archivo_perfil2); */
                        $this->archivo_perfil2->storeAS('imagen/perfil/', $this->img3,'public_up'); 
                        $this->tipo3=1;
    
                        DB::beginTransaction();
                        $encargadofoto=DB::table('users')
                        ->where('id',$id)
                        ->update ([ 
                            
                            'img_users'=>$this->img3
                         ]);
                
                }

                        if($usua && $rolusuario && $datos && $encargadofoto && $estudiantefoto){
                            DB::commit();
                            $this->reset();
                            $this->mensaje1='Insertado correctamente';
                        }
                        else{
                            DB::rollback();
                            unset($this->mensaje1);
                            $this->mensaje2='No fue posible insertar correctamente';
                        }
         }
        }

        public function generar_use(){

        
            $this->nomb=$this->nombre_es;
    
            $primerNombre = explode(" ",$this->nomb);
            $iniciales=explode(" ", $this->nombre_es);
            $this->usuario = substr($primerNombre[0],0,10) . '.' . $primerNombre[2];
            $this->usuario = strtolower($this->usuario);
    
            $inicial=substr($this->nombre_es,0,1);
            $iniciales=explode(" ", $this->nombre_es);
            $inicial2=substr($iniciales[1],0,1);
            $apellido=$iniciales[2];
            $apellido2=substr($iniciales[3],0,1);
            
            $this->correoed=$inicial.$inicial2.$apellido.$apellido2.'@colegioelcastano.edu.gt';
            $this->correoed=strtolower($this->correoed);

            $this->pass='Cole2023';



            $this->nomb=$this->nombre_encargado;
    
            $primerNombre = explode(" ",$this->nomb);
            $iniciales=explode(" ", $this->nombre_encargado);
            $this->usuario2 = substr($primerNombre[0],0,10) . '.' . $primerNombre[2];
            $this->usuario2 = strtolower($this->usuario2);
    
            $inicial=substr($this->nombre_encargado,0,1);
            $iniciales=explode(" ", $this->nombre_encargado);
            $inicial2=substr($iniciales[1],0,1);
            $apellido=$iniciales[2];
            $apellido2=substr($iniciales[3],0,1);
            
            $this->correoed2=$inicial.$inicial2.$apellido.$apellido2.'@colegioelcastano.edu.gt';
            $this->correoed2=strtolower($this->correoed2);

            $this->pass2='Cole2023';
            
        }
        public function cambiofotolist($id){

            
            }




         public function cambio_estadocorre($no_gest){
            if($this->validate([
                'correlativon' => 'required',
                ])==false){
                $mensaje="no encontrado";
               session(['message' => 'no encontrado']);
                return  back()->withErrors(['mensaje'=>'Validar el input vacio']);
            }else{
            $correlativon=$this->correlativon;
            $this->id_no_gest_ins=$no_gest;
            $id_ges_cambio=$this->id_ges_cambio;
            $nuevo_estado=$this->nuevo_estado;
            $elevar=DB::table('TB_PRE_INS')
                ->where('NO_GESTION', $this->id_no_gest_ins)
                ->update(
                    [
 
                     'ESTADO_PRE_INS' => $nuevo_estado,
 
                    ]);

                    
                    $sql='SELECT * FROM CORRELATIVOS WHERE ID_CORRELATIVO=?';
                    $estractnocorre=DB:: select($sql, array($correlativon));
                    if($estractnocorre !=null){
                        foreach($estractnocorre as $estac)
                        {
                            $this->upnocorre1=$estac->NO_CORRELATIVO_P1;
                            $this->upnocorre2=$estac->NO_CORRELATIVO_P2;
                        }
                    }
                $upnocorre1=$this->upnocorre1;
                $upnocorre2=$this->upnocorre2;   
                $corren=DB::table('TB_PRE_INS')
                ->where('NO_GESTION', $this->id_no_gest_ins)
                ->update(
                    [
                     'NO_CORRELATIVO_P1' => $upnocorre1,
                     'NO_CORRELATIVO_P2' => $upnocorre2,
 
                    ]);
                    if($elevar && $corren){
                        $this->mensaje_diaco='Editado correctamente';
                        DB::commit();
                        if(false !== strpos($this->correo_en, "@") && false !== strpos($this->correo_en, ".")){
                        $subject = "Notificación Pre-Ins.Castaño (No responder)";
                        $for = $this->correo_en;
                        $arreglo= array($this->id_no_gest_ins);
                        Mail::send('admisiones.correo.vista1',compact('arreglo'), function($msj) use($subject,$for){
                        $msj->from("ingresos@colegioelcastano.edu.gt","ColegioElCastaño");
                        $msj->subject($subject);
                        $msj->to($for);        
                    });
                    }
                    if(false !== strpos($this->correo_padre, "@") && false !== strpos($this->correo_padre, ".")){
                    $subject = "Notificación Pre-Ins.Castaño (No responder)";
                    $for2 = $this->correo_padre;
                    $arreglo= array($this->id_no_gest_ins);
                    Mail::send('admisiones.correo.vista1',compact('arreglo'), function($msj) use($subject,$for2){
                        $msj->from("ingresos@colegioelcastano.edu.gt","ColegioElCastaño");
                        $msj->subject($subject);
                        $msj->to($for2);        
                    });
                    }
                    if(false !== strpos($this->correo_madre, "@") && false !== strpos($this->correo_madre, ".")){
                    $subject = "Notificación Pre-Ins.Castaño (No responder)";
                    $for3 = $this->correo_madre;
                    $arreglo= array($this->id_no_gest_ins);
                    Mail::send('admisiones.correo.vista1',compact('arreglo'), function($msj) use($subject,$for3){
                        $msj->from("ingresos@colegioelcastano.edu.gt","ColegioElCastaño");
                        $msj->subject($subject);
                        $msj->to($for3);        
                    });
                    }
                    unset($this->mensaje);
                    $this->mensaje="Se actualizo el estado y se envio correo correctamente";

                    $sql='SELECT * FROM TB_PRE_INS WHERE NO_GESTION=?';
                    $estractidcorre=DB:: select($sql, array($this->id_no_gest_ins));
                    if($estractidcorre !=null){
                        foreach($estractidcorre as $estac)
                        {
                            $this->id_pre_corre=$estac->ID_PRE;
                        }
                    }
                    $Estadocorrelativos=0;
                    $id_pre_corre=$this->id_pre_corre;
                    $correactu=DB::table('CORRELATIVOS')
                    ->where('ID_CORRELATIVO', $this->correlativon)
                    ->update(
                    [
                     'ESTADO' => $Estadocorrelativos,
                     'ID_PRE' => $id_pre_corre,
                    ]);
                    }
                    else{
                        $this->mensaje_diaco1='No se logro editar correctamente';
                        unset($this->mensaje1);
                        $this->mensaje1="No fue posible enviar correo y actualizar";
                    }
         }
}

public function Desactivacion($id,$estado,$gest){
    $this->id_desact=$id;
    $this->nuevo_estadodesact=$estado;
    $this->no_gest_desact=$gest;

 }

 public function conf_desact($id){
    $this->no_gest_con=$id;  
    $id_desact=$this->id_desact;
    $nuevo_estadodesact=$this->nuevo_estadodesact;
    $no_gest_desact=$this->no_gest_desact;

    $elevar=DB::table('TB_PRE_INS')
        ->where('NO_GESTION', $this->no_gest_desact)
        ->update(
            [

             'ESTADO_PRE_INS' =>$nuevo_estadodesact,

            ]);
            if($elevar){
                $this->mensaje_diaco='Editado correctamente';
                if(false !== strpos($this->correo_en, "@") && false !== strpos($this->correo_en, ".")){
                    $subject = "Notificación Pre-Ins.Castaño (No responder)";
                    $for = $this->correo_en;
                    $arreglo= array($this->id_no_gest_ins);
                    Mail::send('admisiones.correo.vista1',compact('arreglo'), function($msj) use($subject,$for){
                    $msj->from("ingresos@colegioelcastano.edu.gt","ColegioElCastaño");
                    $msj->subject($subject);
                    $msj->to($for);        
                });
                }
                if(false !== strpos($this->correo_padre, "@") && false !== strpos($this->correo_padre, ".")){
                $subject = "Notificación Pre-Ins.Castaño (No responder)";
                $for2 = $this->correo_padre;
                $arreglo= array($this->id_no_gest_ins);
                Mail::send('admisiones.correo.vista1',compact('arreglo'), function($msj) use($subject,$for2){
                    $msj->from("ingresos@colegioelcastano.edu.gt","ColegioElCastaño");
                    $msj->subject($subject);
                    $msj->to($for2);        
                });
                }
                if(false !== strpos($this->correo_madre, "@") && false !== strpos($this->correo_madre, ".")){
                $subject = "Notificación Pre-Ins.Castaño (No responder)";
                $for3 = $this->correo_madre;
                $arreglo= array($this->id_no_gest_ins);
                Mail::send('admisiones.correo.vista1',compact('arreglo'), function($msj) use($subject,$for3){
                    $msj->from("ingresos@colegioelcastano.edu.gt","ColegioElCastaño");
                    $msj->subject($subject);
                    $msj->to($for3);        
                });
                }
                unset($this->mensaje);
                $this->mensaje="Se actualizo el estado y se envio correo correctamente";
                $Estadocorrelativos=1;
                $correactu=DB::table('CORRELATIVOS')
                ->where('ID_PRE', $this->id_desact)
                ->update(
                [
                 'ESTADO' => $Estadocorrelativos,
                ]);
            }
            else{
                $this->mensaje_diaco1='No se logro editar correctamente';
            }
 }

 public function usuario_pdf($id_usuario){
    session(['id_usuariopdf' => $id_usuario]);

    $sql='SELECT * FROM  TB_PRE_INS WHERE ID_PRE=?';
        $usuario_gestion=DB::select($sql, array($id_usuario));

        if($usuario_gestion!=null){
            foreach($usuario_gestion as $usua){
                $this->datosusuario4= $usua->NO_GESTION;
            }
        }
 }


 public function correo_datos($id) {
    $gest_correo=$id;
    $sql='SELECT * FROM TB_PRE_INS WHERE NO_GESTION=?';
        $extractcorreo=DB:: select($sql, array($gest_correo));
        if($extractcorreo !=null){
            foreach($extractcorreo as $estac)
            {
                $this->id_pre_ins_arch=$estac->ID_PRE;
                $this->id_no_gest_arch=$estac->NO_GESTION;
            }
        }
        $id_pre_ins_arch=$this->id_pre_ins_arch;
        $sql='SELECT * FROM TB_PRE_INFO WHERE ID_PRE=?';
        $extractinfocorreo=DB:: select($sql, array($id_pre_ins_arch));
        if($extractinfocorreo !=null){
            foreach($extractinfocorreo as $estaci)
            {
                $this->correo_padre=$estaci->CORREO_PADRE;
                $this->correo_madre=$estaci->CORREO_MADRE;
                $this->correoencargado=$estaci->CORREO_ENCARGADO;
            }
        }   
        $correo_padre=$this->correo_padre;
        $correo_madre=$this->correo_madre;
        $correoencargado=$this->correoencargado;
    
    if(false !== strpos($this->correo_padre, "@") && false !== strpos($this->correo_padre, ".")){
    $subject = "Notificación Pre-Ins.Castaño (No responder)";
    $for2 = $this->correo_padre;
    $arreglo= array($this->id_no_gest_arch);
    Mail::send('admisiones.correo.vistacredenciales',compact('arreglo'), function($msj) use($subject,$for2){
        $id_usuario = session('id_usuariopdf');
        $sql='SELECT * FROM  tb_encargados WHERE ID_PRE=?';
        $relacion=DB::select($sql, array($id_usuario));  
        $sql='SELECT * FROM  tb_alumnos WHERE ID_PRE=?';
        $relacion2=DB::select($sql, array($id_usuario));
        $año_en_curso=date('Y-m-d');
        $fecha_separada=explode("-", $año_en_curso);
        $fecha_titulo=$fecha_separada[0]+1;
        if($relacion!=null){     
            foreach($relacion as $usu){
                $datos_encargado = $usu->ID_USER;
            }
            $ideusu=$datos_encargado;
            $sql='SELECT * FROM  users WHERE id=?';
            $usuarioencarado=DB::select($sql, array($ideusu));
            foreach($usuarioencarado as $usu1){
                $datousuario1 = $usu1->name;
                $datousuario2 = $usu1->email;

            }
            
        }

        if($relacion2!=null){     
            foreach($relacion2 as $usualmuno){
                $datos_alumno = $usualmuno->ID_USER;
            }
            $ideusu2=$datos_alumno;
            $sql='SELECT * FROM  users WHERE id=?';
            $usuarioalumno=DB::select($sql, array($ideusu2));
            foreach($usuarioalumno as $usu2){
                $datousuario3 = $usu2->name;
                $datousuario4 = $usu2->email;

            }
            
        }

        


        $datos_usuario=array($fecha_titulo, $datousuario1, $datousuario2, $datousuario3, $datousuario4);
        session(['datos_usuarios' => $datos_usuario]);
        $pdfcredenciales = PDF::loadView('admisiones.PDFusuarios', compact('datos_usuario'));
        $msj->from("ingresos@colegioelcastano.edu.gt","ColegioElCastaño");
        $msj->subject($subject);
        $msj->attachData($pdfcredenciales->output(), "Credenciales2023.pdf");
        $msj->to($for2);        
    });
    }

    if(false !== strpos($this->correoencargado, "@") && false !== strpos($this->correoencargado, ".")){
        $subject = "Notificación Pre-Ins.Castaño (No responder)";
        $for = $this->correoencargado;
        $arreglo= array($this->id_no_gest_arch);
        Mail::send('admisiones.correo.vistacredenciales',compact('arreglo'), function($msj) use($subject,$for){
            $id_usuario = session('id_usuariopdf');
        $sql='SELECT * FROM  tb_encargados WHERE ID_PRE=?';
        $relacion=DB::select($sql, array($id_usuario));  
        $sql='SELECT * FROM  tb_alumnos WHERE ID_PRE=?';
        $relacion2=DB::select($sql, array($id_usuario));
        $año_en_curso=date('Y-m-d');
        $fecha_separada=explode("-", $año_en_curso);
        $fecha_titulo=$fecha_separada[0]+1;
        if($relacion!=null){     
            foreach($relacion as $usu){
                $datos_encargado = $usu->ID_USER;
            }
            $ideusu=$datos_encargado;
            $sql='SELECT * FROM  users WHERE id=?';
            $usuarioencarado=DB::select($sql, array($ideusu));
            foreach($usuarioencarado as $usu1){
                $datousuario1 = $usu1->name;
                $datousuario2 = $usu1->email;

            }
            
        }

        if($relacion2!=null){     
            foreach($relacion2 as $usualmuno){
                $datos_alumno = $usualmuno->ID_USER;
            }
            $ideusu2=$datos_alumno;
            $sql='SELECT * FROM  users WHERE id=?';
            $usuarioalumno=DB::select($sql, array($ideusu2));
            foreach($usuarioalumno as $usu2){
                $datousuario3 = $usu2->name;
                $datousuario4 = $usu2->email;

            }
            
        }

        


        $datos_usuario=array($fecha_titulo, $datousuario1, $datousuario2, $datousuario3, $datousuario4);
        session(['datos_usuarios' => $datos_usuario]);
        $pdfcredenciales = PDF::loadView('admisiones.PDFusuarios', compact('datos_usuario'));
            $msj->from("ingresos@colegioelcastano.edu.gt","ColegioElCastaño");
            $msj->subject($subject);
            $msj->attachData($pdfcredenciales->output(), "Credenciales2023.pdf");
            $msj->to($for);        
        });
        }

        if(false !== strpos($this->correo_madre, "@") && false !== strpos($this->correo_madre, ".")){
            $subject = "Notificación Pre-Ins.Castaño (No responder)";
            $for3 = $this->correo_madre;
            $arreglo= array($this->id_no_gest_arch);
            Mail::send('admisiones.correo.vistacredenciales',compact('arreglo'), function($msj) use($subject,$for3){
                $id_usuario = session('id_usuariopdf');
        $sql='SELECT * FROM  tb_encargados WHERE ID_PRE=?';
        $relacion=DB::select($sql, array($id_usuario));  
        $sql='SELECT * FROM  tb_alumnos WHERE ID_PRE=?';
        $relacion2=DB::select($sql, array($id_usuario));
        $año_en_curso=date('Y-m-d');
        $fecha_separada=explode("-", $año_en_curso);
        $fecha_titulo=$fecha_separada[0]+1;
        if($relacion!=null){     
            foreach($relacion as $usu){
                $datos_encargado = $usu->ID_USER;
            }
            $ideusu=$datos_encargado;
            $sql='SELECT * FROM  users WHERE id=?';
            $usuarioencarado=DB::select($sql, array($ideusu));
            foreach($usuarioencarado as $usu1){
                $datousuario1 = $usu1->name;
                $datousuario2 = $usu1->email;

            }
            
        }

        if($relacion2!=null){     
            foreach($relacion2 as $usualmuno){
                $datos_alumno = $usualmuno->ID_USER;
            }
            $ideusu2=$datos_alumno;
            $sql='SELECT * FROM  users WHERE id=?';
            $usuarioalumno=DB::select($sql, array($ideusu2));
            foreach($usuarioalumno as $usu2){
                $datousuario3 = $usu2->name;
                $datousuario4 = $usu2->email;

            }
            
        }

        


        $datos_usuario=array($fecha_titulo, $datousuario1, $datousuario2, $datousuario3, $datousuario4);
        session(['datos_usuarios' => $datos_usuario]);
        $pdfcredenciales = PDF::loadView('admisiones.PDFusuarios', compact('datos_usuario'));
                $msj->from("ingresos@colegioelcastano.edu.gt","ColegioElCastaño");
                $msj->subject($subject);
                $msj->attachData($pdfcredenciales->output(), "Credenciales2023.pdf");
                $msj->to($for3);        
            });
            }
    
 }
        public function validacion($val){

        $this->validacion_com=$val;
    }
}