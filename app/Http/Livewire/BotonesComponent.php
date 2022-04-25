<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Request;


class BotonesComponent extends Component
{
    public $valor,$valor1,$materia,$edit;


    public function render()
    {
        $sql= 'SELECT * FROM TB_GRADOS';
        $grados=DB::select($sql);
        $sql='SELECT*FROM TB_MATERIAS';
        $materias=DB::select($sql);
        $sql='SELECT*FROM TB_MAESTROS';
        $maestros=DB::select($sql);
        return view('livewire.botones-component',compact('grados','materias','maestros'));
    }

    public function list_botones(){
        $sql= 'SELECT * FROM TB_GRADOS';
        $grados=DB::select($sql);
        $sql='SELECT*FROM TB_MATERIAS';
        $materias=DB::select($sql);
        $sql='SELECT*FROM TB_MAESTROS';
        $maestros=DB::select($sql);
        $op=10;
        return view('home', compact('grados','materias','maestros','op'));
     }

  

}
