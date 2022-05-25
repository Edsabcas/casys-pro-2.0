<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RolesdeusuarioComponent extends Component
{
    public function render()
    {
        
        $sql= 'SELECT * FROM rol';
        $roles=DB::select($sql);
        

        
        return view('livewire.rolesdeusuario-component',compact('roles'));
    }
}
