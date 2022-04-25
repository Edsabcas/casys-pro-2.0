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
        <label for="exampleInputEmail1" class="form-label"> Unidad</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" wire:model='unidad'>
          <option selected>Seleccione la unidad</option>
          @isset($unidades)
          @foreach ($unidades as $unidad)
              <option value="{{$unidad->ID_UNIDADES}}">{{$unidad->NOMNBRE_UNIDAD}}</option>
          @endforeach
          @endisset
        </select>
        @error('unidad') 
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <span>Pendiente de seleccionar una Unidad</span>
          </div> 
        @enderror
      </div>
       <div class="mb-3">
        <label for="examplenombre" class="form-label"> Fecha de Inicio</label>
        <input type="date" class="form-control" id="name"  wire:model='fecha_ini'>
        @error('fecha_ini') 
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <span>Pendiente de Ingresar una fecha</span>
          </div> 
        @enderror
       </div>
       <div class="mb-3">
        <label for="examplenombre" class="form-label"> Fecha de Finalización</label>
        <input type="date" class="form-control" id="name"  wire:model='fecha_final'>
        @error('fecha_final') 
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <span>Pendiente de Ingresar una fecha</span>
          </div> 
        @enderror
       </div>
      
      @if($edit!=null)
      <button type='submit' class="btn btn-primary" wire:click="update_calendarizacion()">Actualizar</button>
      @else
      <button type='submit' class="btn btn-success" wire:click="guardar_calendarizacion()">Agregar</button>
      @endif
  </form>