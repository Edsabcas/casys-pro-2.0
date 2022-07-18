<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    //
    public function pdf_nuevo(){
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
        $pdf = PDF::loadView('admisiones.PDFusuarios', compact('datos_usuario'));
        return $pdf->stream();
        return view('admisiones.PDFusuarios');
    }
}
