<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ListaDeEstudiantesComponent extends Component
{

    public function render()
    {
        $sql='SELECT * FROM users WHERE id=?';
        $listadousers=DB::select($sql);
        
        $password = $this->password;

        $this->op=1;
        $this->edit1=1;
        return view('livewire.lista-de-estudiantes-component', compact('listadousers'));
    }


}
