<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ListaDeEstudiantesComponent extends Component
{
    public $password, $id_p, $name, $email, $usuario, $mensaje5, $mensaje6, $mensaje7, $mensaje10, $mensaje11, $n_name, $n_email, $n_user, $n_password;

    public function render()
    {

        return view('livewire.lista-de-estudiantes-component');
    }


}
