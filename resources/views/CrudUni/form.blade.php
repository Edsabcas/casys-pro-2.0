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
        <label for="exampleInputEmail1" class="form-label"> Materia</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" wire:model='id_mat'>
          <option selected>Seleccione la materia</option>
          @isset($materias)
          @foreach ($materias as $materia)
              <option value="{{$materia->ID_MATERIA}}">{{$materia->NOMBRE_MATERIA}}</option>
          @endforeach
          @endisset
        </select>
        @error('id_mat') 
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <span>Pendiente de seleccionar una Materia</span>
          </div> 
        @enderror
      </div>
       <div class="mb-3">
        <label for="examplenombre" class="form-label"> Nombre Unidad</label>
        <input type="text" class="form-control" id="name" placeholder="UnidadX" wire:model='nombre_uni'>
        @error('nombre_uni') 
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <span>Pendiente de Ingresar una unidad</span>
          </div> 
        @enderror
       </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Estado</label>     
          <select class="form-select form-select-sm" aria-label=".form-select-sm example" wire:model='estado_uni'>
            <option selected>Open this select menu</option>
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>
          </select>
          @error('estado_uni') 
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <span>Pendiente de Ingresar una unidad</span>
            </div> 
          @enderror
      </div>
      @if($edit!=null)
      <button type='submit' class="btn btn-primary" wire:click="update_uni()">Actualizar</button>
      @else
      <button type='submit' class="btn btn-primary" wire:click="guardar_unidad()">Agregar</button>
      @endif
  </form>