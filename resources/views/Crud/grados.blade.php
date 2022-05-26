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
        <label for="exampleFormControlInput1" class="form-label"> Nombre Grado</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="GradoEjemplo" wire:model='nombre_g'>
        @error('nombre_g') 
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <span>Pendiente el ingresao de un grado</span>
          </div> 
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Secciones</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" wire:model='id_secciones'>
          <option selected>Seleccione una seccion</option>
          @isset($secciones)
          @foreach ($secciones as $seccion)
              <option value="{{$seccion->ID_SECCIONES}}">{{$seccion->SECCION}}</option>
          @endforeach
          @endisset
        </select>
        @error('id_secciones') 
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <span>Pendiente el ingresar una Materia</span>
          </div> 
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Estado</label>     
          <select class="form-select form-select-sm" aria-label=".form-select-sm example" wire:model='estado_grado'>
            <option selected>Open this select menu</option>
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>
          </select>
          @error('estado_grado') 
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <span>Pendiente en escoger un estado para la materia</span>
            </div> 
          @enderror
      </div>
      @if($edit!=null)
    <button type='submit' class="btn btn-pre2" wire:click="update_grad()">Actualizar</button>
    @else
    <button type='submit' class="btn btn-pre2" wire:click="guardar_grado()">Agregar</button>
    @endif
  </form>