<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AdmisionesdosComponent extends Component
{
    //variables diversas
    public $eliminar_no_gestion, $gestion_a_eliminar, $mensaje_eliminacion, $noid_gestion;
    //buscadores
    public $searchexamenadmisiones1, $searchexamenadmisiones2, $searchexamenadmisiones3;
    //listar resultados
    public $estudiantesaspirantes1, $estudiantesaspirantes2, $estudiantesaspirantes3;
    //datos a cargar para edición
    public $nombres, $apellidos, $cui, $grado, $fecha_nacimiento, $nombre_encargado;
    public $dpi, $email, $telefono, $fecha_nacimiento_en, $ciclo_escolar, $dia_evaluacion;
    public $horario_evaluacion, $mensaje, $nombres_en, $editar_gestion, $estado, $id_gestion;
    public $no_gestion_enviar;
    //cargar comentario
    public $mensajeadministracion, $mensajeadmin, $mensaje_admin;
    //botones
    public $botonsiguiente;
    //elevar estado
    public $mensajeelevar, $estadovalor, $mensajeelevar1;
    public function render()
    {
        //Estado 1
        if($this->searchexamenadmisiones1!=null && $this->searchexamenadmisiones1!=""){
            $sql="SELECT * FROM TB_GESTIONES_COLE WHERE ESTADO=1 AND TIPO_GESTION=5 AND NO_GESTION like '%".$this->searchexamenadmisiones1."%'";
            $this->estudiantesaspirantes1=DB::select($sql);
        }
        else{
            $sql="SELECT * FROM TB_GESTIONES_COLE WHERE ESTADO=1 AND TIPO_GESTION=5";
            $this->estudiantesaspirantes1=DB::select($sql);
        }
        //Estado 2
        if($this->searchexamenadmisiones2!=null && $this->searchexamenadmisiones2!=""){
            $sql="SELECT * FROM TB_GESTIONES_COLE WHERE ESTADO=2 AND TIPO_GESTION=5 AND NO_GESTION like '%".$this->searchexamenadmisiones2."%'";
            $this->estudiantesaspirantes2=DB::select($sql);
        }
        else{
            $sql="SELECT * FROM TB_GESTIONES_COLE WHERE ESTADO=2 AND TIPO_GESTION=5";
            $this->estudiantesaspirantes2=DB::select($sql);
        }
        //Estado 3
        if($this->searchexamenadmisiones3!=null && $this->searchexamenadmisiones3!=""){
            $sql="SELECT * FROM TB_GESTIONES_COLE WHERE ESTADO=3 AND TIPO_GESTION=5 AND NO_GESTION like '%".$this->searchexamenadmisiones3."%'";
            $this->estudiantesaspirantes3=DB::select($sql);
        }
        else{
            $sql="SELECT * FROM TB_GESTIONES_COLE WHERE ESTADO=3 AND TIPO_GESTION=5";
            $this->estudiantesaspirantes3=DB::select($sql);
        }
        //listar gestion a eliminar
        $sql="SELECT * FROM TB_GESTIONES_COLE WHERE ID_GESTION=?";
            $this->gestion_a_eliminar=DB::select($sql, array($this->eliminar_no_gestion));
        return view('livewire.admisionesdos-component');
    }

    public function editar_admision($id_gestion){
        $this->noid_gestion=$id_gestion;
        unset($this->mensaje_eliminacion);
                unset($this->mensaje);
        $sql="SELECT * FROM TB_GESTIONES_COLE WHERE ID_GESTION=?";
        $admisiones=DB::select($sql, array($this->noid_gestion));
        unset($this->mensaje_eliminacion);
        unset($this->mensaje);
        unset($this->mensaje1);

        if($admisiones!=null){
        foreach($admisiones as $admi){
            $this->id_gestion=$admi->ID_GESTION;
            $this->no_gestion_enviar=$admi->NO_GESTION;
            $this->nombres = $admi->NOMBRES;
            $this->nombres_en = $admi->NOMBRE_ENCARGADO;
            $this->apellidos = $admi->APELLIDOS;
            $this->cui = $admi->CUI;
            $this->grado = $admi->GRADO;
            $this->fecha_nacimiento = $admi->FECHA_NACIEMINTO;
            $this->nombre_encargado = $admi->NOMBRE_ENCARGADO;
            $this->dpi = $admi->DPI;
            $this->email = $admi->EMAIL;
            $this->telefono = $admi->TELEFONO;
            $this->fecha_nacimiento_en = $admi->FECHA_NAC_ENCARGADO;
            $this->ciclo_escolar= $admi->CICLO_ESCOLAR;
            $this->dia_evaluacion = $admi->DIA_EVALUACION;
            $this->horario_evaluacion = $admi->HORARIO_EVALUACION;
            $this->mensaje = $admi->MENSAJE;
            $this->estado = $admi->ESTADO;
            $this->mensaje_admin= $admi->OBSERVACION_ADMINISTRACION;
        }
    }
    }

    public function update_admision($editar_g){
        unset($this->mensaje_eliminacion);
        $this->editar_gestion=$editar_g;
        if($this->validate([
            'nombres' => 'required',
            'nombres_en' => 'required',
            'ciclo_escolar' => 'required',
            'grado' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'dia_evaluacion' => 'required',
            'horario_evaluacion' => 'required',
        ])==false){
            $advertencia="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['advertencia'=>'validar el input vacío']);

        }
        else{
            $nombres=$this->nombres;
            $nombres_encargado=$this->nombres_en;
            $grado=$this->grado;
            $email=$this->email;
            $telefono=$this->telefono;
            $ciclo_escolar=$this->ciclo_escolar;
            $diaevaluacion=$this->dia_evaluacion;
            $horarioevaluacion=$this->horario_evaluacion;
            $mensaje=$this->mensaje;

            DB::beginTransaction();
            $admision=DB::table('TB_GESTIONES_COLE')->where('ID_GESTION', $this->editar_gestion)
        ->update(
            [
                'NOMBRES'=>$nombres,
                'NOMBRE_ENCARGADO'=>$nombres_encargado,
                'GRADO'=>$grado,
                'EMAIL'=>$email,
                'TELEFONO'=>$telefono,
                'CICLO_ESCOLAR'=>$ciclo_escolar,
                'DIA_EVALUACION'=>$diaevaluacion,
                'HORARIO_EVALUACION'=>$horarioevaluacion,
                'MENSAJE'=>$mensaje,

            ]
            );
            if($admision){
                
                DB::commit();
                $this->op=2;
                unset($this->mensaje_eliminacion);
                unset($this->mensaje);
                $this->mensaje=1;
               

            }
            else{
                DB::rollback();
                $this->op=2;
                unset($this->mensaje_eliminacion);
                unset($this->mensaje);
                $this->mensaje1=1;
            }
        }
    }

    public function eliminar($no_gestion2){
        $this->eliminar_no_gestion = $no_gestion2;
    }

    public function eliminar_la_gestion($eliminar_g){
        $eliminando_gestion=$eliminar_g;
        unset($this->mensaje_eliminacion);
        unset($this->mensajeelevar);
        unset($this->mensajeelevar1);
        $eliminacion=DB::table('TB_GESTIONES_COLE')->where('ID_GESTION','=', $eliminando_gestion)->delete();
        if($eliminacion){
            unset($this->mensaje_eliminacion);
            unset($this->mensaje);
                $this->mensaje_eliminacion = 1;
        }
        else{
            unset($this->mensaje_eliminacion);
            unset($this->mensaje);
            $this->mensaje_eliminacion = 0;
        }
    }

    public function siguienteestado($boton){
        $this->botonsiguiente=$boton;
    }

    public function update_estado(){
        unset($this->mensaje_eliminacion);
        unset($this->mensajeelevar);
        unset($this->mensajeelevar1);
            unset($this->mensaje);

            $this->estadovalor=$this->estado+1;
    
            DB::beginTransaction();
    
            $elevarnivel=DB::table('TB_GESTIONES_COLE')->where('ID_GESTION', $this->noid_gestion)
            ->update(
                [
                    'ESTADO'=> $this->estadovalor,
                ]);
                if($elevarnivel){
                    DB::commit();
                    if(false !== strpos($this->email, "@") && false !== strpos($this->email, ".")){
                        $subject = "Notificación Admisiones Castaño (No responder)";
                        $for2 = $this->email;
                        $arreglo= array($this->no_gestion_enviar, $this->mensaje_admin);
                        Mail::send('admisiones.correo.vista1',compact('arreglo'), function($msj) use($subject,$for2){
                            $msj->from("ingresos@colegioelcastano.edu.gt","ColegioElCastaño");
                            $msj->subject($subject);
                            $msj->to($for2);        
                        });
                        }
                    unset($this->mensajeelevar);
                    $this->mensajeelevar=1;
                }
                else{
                    DB::rollback();
                    unset($this->mensajeelevar);
                    $this->mensajeelevar=0;
                }
            }

    public function lower_estado(){
                unset($this->mensaje_eliminacion);
                unset($this->mensajeelevar);
                    unset($this->mensaje);
                    unset($this->mensajeelevar1);
        
                    $this->estadovalor=$this->estado-1;
            
                    DB::beginTransaction();
            
                    $elevarnivel2=DB::table('TB_GESTIONES_COLE')->where('ID_GESTION', $this->noid_gestion)
                    ->update(
                        [
                            'ESTADO'=> $this->estadovalor,
                        ]);
                        if($elevarnivel2){
                            DB::commit();
                            if(false !== strpos($this->email, "@") && false !== strpos($this->email, ".")){
                                $subject = "Notificación Admisiones Castaño (No responder)";
                                $for2 = $this->email;
                                $arreglo= array($this->no_gestion_enviar, $this->mensaje_admin);
                                Mail::send('admisiones.correo.vista1',compact('arreglo'), function($msj) use($subject,$for2){
                                    $msj->from("ingresos@colegioelcastano.edu.gt","ColegioElCastaño");
                                    $msj->subject($subject);
                                    $msj->to($for2);        
                                });
                                }
                            unset($this->mensajeelevar1);
                            $this->mensajeelevar1=1;
                        }
                        else{
                            DB::rollback();
                            unset($this->mensajeelevar1);
                            $this->mensajeelevar1=0;
                        }
                    }

    public function comentario_administracion(){
        $comadmin=$this->mensajeadministracion;

        DB::beginTransaction();

        $comentarioadmin=DB::table('TB_GESTIONES_COLE')->where('ID_GESTION', $this->noid_gestion)
        ->update(
            [
                'OBSERVACION_ADMINISTRACION'=> $comadmin,
            ]);
            if($comentarioadmin){
                DB::commit();
                unset($this->mensajeeditado);
                unset($this->mensaje_eliminacion);
                unset($this->mensajeelevar);
                    unset($this->mensaje);
                    unset($this->mensajeelevar1);
                $this->mensajeadmin=1;
            }
            else{
                DB::rollback();
                unset($this->mensajeeditado);
                unset($this->mensaje_eliminacion);
                unset($this->mensajeelevar);
                    unset($this->mensaje);
                    unset($this->mensajeelevar1);
                $this->mensajeadmin=0;
            }
    }
    
}
