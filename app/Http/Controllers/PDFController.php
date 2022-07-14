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

        $datos_usuario=array($fecha_titulo, $datousuario1, $datousuario2, $datousuario3);

        $pdf = PDF::loadView('admisiones.PDFusuarios', compact('datos_usuario'));
        return $pdf->stream();
        return view('admisiones.PDFusuarios');
    }
}
