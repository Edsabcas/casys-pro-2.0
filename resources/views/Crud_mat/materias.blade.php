@isset($mensaje)
@if($mensaje!=null)
<div class="alert alert-success" role="alert">
Agregado correctamente  
</div>
@endif
@endisset

@isset($mensaje1)
@if($mensaje1!=null)
<div cclass="alert alert-danger" role="alert">
    Datos no agregados  
</div>
@endif
@endisset

@isset($mensaje3)
@if($mensaje3!=null)
<div class="alert alert-success" role="alert">
  Editado Correctamente
</div>
@endif
@endisset

@isset($mensaje4)
@if($mensaje4!=null)
<div cclass="alert alert-danger" role="alert">
  No fue posible editarlo Correctamente 
</div>
@endif
@endisset

@isset($mensaje_eliminar)
@if ($mensaje_eliminar!=null)
<div class="alert alert-success" role="alert">
     Eliminado correctamente
  </div>
@endif
@endisset

@isset($mensaje_eliminar2)
@if ($mensaje_eliminar2!=null)
<div class="alert alert-danger" role="alert">
    Datos no Eliminados
  </div>
@endif
@endisset


<form wire:submit.prevent=''>
    @csrf 
  
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Nombre Materia</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="MateriaEjemplo" wire:model='nombre_mat'>
        @error('nombre_mat') 
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <span>Pendiente el ingresar una Materia</span>
            </div> 
          @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Tipo de Materia</label>     
          <select class="form-select form-select-sm" aria-label=".form-select-sm example" wire:model='tipo_materia'>
            <option selected>Open this select menu</option>
            <option value="1">Practica</option>
            <option value="2">Teorica</option>
          </select>
          @error('tipo_materia') 
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <span>No a seleccionado a ningun tipo para la materia</span>
            </div> 
          @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Estado</label>     
          <select class="form-select form-select-sm" aria-label=".form-select-sm example" wire:model='estado_materia'>
            <option selected>Open this select menu</option>
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>
          </select>
          @error('estado_materia') 
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <span>No a seleccionado a ningun estado para la materia</span>
            </div> 
          @enderror
      </div>
      @if($edit!=null)
    <button type='submit' class="btn btn-primary" wire:click="update_mat()">Actualizar</button>
    @else
    <button  class="btn btn-success" wire:click="guardar_mat()">Agregar</button>
    <br>
    @endif
  </form>