<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class CuentasEstudiantesComponent extends Component
{
    public function render()
    {
        $sql= 'SELECT * FROM cuentaestudiante';
        $cuentas=DB::select($sql);
        
        return view('livewire.cuentas-estudiantes-component',compact('cuentas'));
    }
}
