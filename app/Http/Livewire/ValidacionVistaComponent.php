<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ValidacionVistaComponent extends Component
{
    public $rol_activo;
    public function render()
    {
        $usuario_activo = auth()->user()->id;
        $sql="SELECT ID_ROL FROM rol_usuario WHERE ID_USUARIO=$usuario_activo";
        $this->rol_activo=DB::select($sql);
        return view('livewire.validacion-vista-component');
    }
}
