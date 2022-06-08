<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class RolesdeusuarioComponent extends Component

{
    public $rol,$id_rol,$estado,$mensaje,$mensaje1,$mensaje3,$mensaje4,$mensajeeliminar,$mensajeeliminar2,$edit,$op;


    public function render()
    {
        
        $sql= 'SELECT * FROM rol';
        $roles=DB::select($sql);
        
        
        return view('livewire.rolesdeusuario-component',compact('roles'));
    }
    public function guardar_rol(){

        if($this->validate([
            'rol' => 'required',
            'estado' => 'required',

        ])==false)
        {
            $mensaje="no encontrado";
            session(['message' => 'no encontrado']);
            return back()->withErrors(['mensaje' =>'Validar el input vacio']);
        }
        else
        {
        $rol=$this->rol; 
        $estado=$this->estado;

        DB::beginTransaction();

        $roles=DB::table('rol')->insert(
            [
                'DESCRIPCION'=> $rol,
                'ESTADO'=> $estado,

            ]);
            if($roles){
                DB::commit();
                $this->reset();
                $this->mensaje='Insertado correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensaje);
                $this->mensaje1='No fue posible insertar correctamente';
            }
        }
    }
    public function listar_rol(){ 
        $sql="SELECT * FROM rol";
        $roles=DB::select($sql);
        $op=6;
        return view('home', compact('roles', 'op'));
    }
    public function edit($id){
        $id_rol=$id;
        $sql='SELECT * FROM rol WHERE ID_ROL=?';
        $roles=DB::select($sql,array($id_rol));

        if($roles!=null){
            foreach($roles as $rol)
            {
                $this->id_rol=$rol->ID_ROL;
                $this->rol=$rol->DESCRIPCION;
                $this->estado=$rol->ESTADO;
            }
        }
        $this->op=2;

        $this->edit=1;
    }
    public function update_rol_p(){
        $id_rol=$this->id_rol;
        $rol=$this->rol;
        $estado=$this->estado;

        DB::beginTransaction();

        $roles=DB::table('rol')
        ->where('ID_ROL',$id_rol)
        ->update(
            [
                'DESCRIPCION'=>$rol,
                'ESTADO'=>$estado,
            ]
            );

            if($roles){
                DB::commit();
                $this->reset();
                $this->mensaje3='Editado correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensaje3);                
                $this->mensaje4='No fue posible editar correctamente';
            }
    }
    public function delete($id){
        $id_rol=$id;

        DB::beginTransaction();

        $roles=DB::table('rol')->where('ID_ROL','=', $id_rol)->delete();

        if($roles){
            DB::commit();
            $this->reset();
            $this->mensajeeliminar='Eliminado correctamente';
        }
        else{
            DB::rollback();
            unset($this->mensajeeliminar);
            $this->mensajeeliminar1='No fue posible eliminar correctamente';
        }
    }

    public function cargarmenu($ID_ROL)
    {

    $sql='SELECT menu_rol.ID_MENU_ROL, rol.ID_ROL, rol.DESCRIPCION as ROLES, menu.DESCRIPCION, menu_rol.ESTADO
	FROM menu_rol inner join rol on rol.ID_ROL = menu_rol.ID_ROL inner join menu on menu.ID_MENU = menu_rol.ID_MENU WHERE rol.ID_ROL = '.$ID_ROL;
    $opciones=DB::select($sql);

    session(['opciones' => $opciones]);

    }
}
