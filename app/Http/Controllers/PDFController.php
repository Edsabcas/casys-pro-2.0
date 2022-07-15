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
        $sql='SELECT * FROM  users WHERE id=?';
        $usuario=DB::select($sql, array($id_usuario));
        $sql='SELECT * FROM  TB_PRE_INS WHERE ID_PRE=?';
        $usuario_gestion=DB::select($sql, array($id_usuario));
        $año_en_curso=date('Y-m-d');
        $fecha_separada=explode("-", $año_en_curso);
        $fecha_titulo=$fecha_separada[0]+1;
        if($usuario!=null){
            foreach($usuario as $usu){
                $datousuario1 = $usu->usuario;
                $datousuario2 = $usu->email;
                $datousuario3 = $usu->password;
            }
        }

        if($usuario_gestion!=null){
            foreach($usuario_gestion as $usua){
                $datosusuario4= $usua->NO_GESTION;
            }
        }

        /*if($usuario == null){
            $sql='SELECT * FROM  users WHERE id=?';
            $usuario2=DB::select($sql, array($id_usuario));
            if($usuario2!=null){
                foreach($usuario2 as $usu2){
                    $datousuario1 = $usu2->usuario;
                    $datousuario2 = $usu2->email;
                    $datousuario3 = $usu2->password;
                }
            }
            $datos_usuario=array($fecha_titulo, $datousuario1, $datousuario2, $datousuario3, $datosusuario4);
        }
        else{
            $datos_usuario=array($fecha_titulo, $datousuario1, $datousuario2, $datousuario3, $datosusuario4);
        }*/
        $datos_usuario=array($fecha_titulo, $datousuario1, $datousuario2, $datousuario3, $datosusuario4);
        session(['datos_usuarios' => $datos_usuario]);
        $pdf = PDF::loadView('admisiones.PDFusuarios', compact('datos_usuario'));
        return $pdf->stream();
        return view('admisiones.PDFusuarios');
    }
}
