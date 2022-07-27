<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AdmisionesdosComponent extends Component
{
    //variables diversas
    public $eliminar_no_gestion, $gestion_a_eliminar, $mensaje_eliminacion, $no_gestion;
    //buscadores
    public $searchexamenadmisiones1, $searchexamenadmisiones2, $searchexamenadmisiones3;
    //listar resultados
    public $estudiantesaspirantes1, $estudiantesaspirantes2, $estudiantesaspirantes3;
    //datos a cargar para edición
    public $nombres, $apellidos, $cui, $grado, $fecha_nacimiento, $nombre_encargado;
    public $dpi, $email, $telefono, $fecha_nacimiento_en, $ciclo_escolar, $dia_evaluacion;
    public $horario_evaluacion, $mensaje, $nombres_en;
    public function render()
    {
        //Estado 1
        if($this->searchexamenadmisiones1!=null && $this->searchexamenadmisiones1!=""){
            $sql="SELECT * FROM TB_GESTIONES_COLE WHERE ESTADO=1 AND NO_GESTION like '%".$this->searchexamenadmisiones1."%'";
            $this->estudiantesaspirantes1=DB::select($sql);
        }
        else{
            $sql="SELECT * FROM TB_GESTIONES_COLE WHERE ESTADO=1";
            $this->estudiantesaspirantes1=DB::select($sql);
        }
        //Estado 2
        if($this->searchexamenadmisiones2!=null && $this->searchexamenadmisiones2!=""){
            $sql="SELECT * FROM TB_GESTIONES_COLE WHERE ESTADO=2 AND NO_GESTION like '%".$this->searchexamenadmisiones2."%'";
            $this->estudiantesaspirantes2=DB::select($sql);
        }
        else{
            $sql="SELECT * FROM TB_GESTIONES_COLE WHERE ESTADO=2";
            $this->estudiantesaspirantes2=DB::select($sql);
        }
        //Estado 3
        if($this->searchexamenadmisiones3!=null && $this->searchexamenadmisiones3!=""){
            $sql="SELECT * FROM TB_GESTIONES_COLE WHERE ESTADO=3 AND NO_GESTION like '%".$this->searchexamenadmisiones3."%'";
            $this->estudiantesaspirantes3=DB::select($sql);
        }
        else{
            $sql="SELECT * FROM TB_GESTIONES_COLE WHERE ESTADO=3";
            $this->estudiantesaspirantes3=DB::select($sql);
        }
        //listar gestion a eliminar
        $sql="SELECT * FROM TB_GESTIONES_COLE WHERE NO_GESTION=?";
            $this->gestion_a_eliminar=DB::select($sql, array($this->eliminar_no_gestion));
        return view('livewire.admisionesdos-component');
    }

    public function editar_admision($no_gestion){
        $this->no_gestion=$no_gestion;
        $sql="SELECT * FROM TB_GESTIONES_COLE WHERE NO_GESTION=?";
        $admisiones=DB::select($sql, array($this->no_gestion));
        unset($this->mensaje_eliminacion);
        unset($this->mensaje);
        unset($this->mensaje1);

        if($admisiones!=null){
        foreach($admisiones as $admi){
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
        }
    }
    }

    public function eliminar($no_gestion2){
        $this->eliminar_no_gestion = $no_gestion2;
    }

    public function eliminar_la_gestion($eliminar_g){
        $eliminando_gestion=$eliminar_g;
        unset($this->mensaje_eliminacion);
        $eliminacion=DB::table('TB_GESTIONES_COLE')->where('NO_GESTION','=', $eliminando_gestion)->delete();
        if($eliminacion){
            unset($this->mensaje_eliminacion);
                $this->mensaje_eliminacion = 1;
        }
        else{
            unset($this->mensaje_eliminacion);
            $this->mensaje_eliminacion = 0;
        }
    }
}
