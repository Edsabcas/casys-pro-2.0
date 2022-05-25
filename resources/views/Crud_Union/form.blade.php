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
        <label for="exampleInputEmail1" class="form-label"> Grado</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" wire:model='id_grados'>
          <option selected>Seleccione el grado</option>
          @isset($grados)
          @foreach ($grados as $grado)
              <option value="{{$grado->ID_GRADOS}}">{{$grado->NOMBRE_GRADO}}</option>
          @endforeach
          @endisset
        </select>
        @error('id_grados') 
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <span>Pendiente de seleccionar un grado </span>
          </div> 
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Materia</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" wire:model='id_materias'>
          <option selected>Seleccione la materia</option>
          @isset($materias)
          @foreach ($materias as $materia)
              <option value="{{$materia->ID_MATERIA}}">{{$materia->NOMBRE_MATERIA}}</option>
          @endforeach
          @endisset
        </select>
        @error('id_materias') 
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <span>Pendiente de seleccionar una Materia</span>
          </div> 
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Estado</label>     
          <select class="form-select form-select-sm" aria-label=".form-select-sm example" wire:model='estado_union'>
            <option selected>Open this select menu</option>
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>
          </select>
          @error('estado_union') 
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <span>Pendiente seleccionar un estado para la seccion </span>
            </div> 
          @enderror
      </div>
      @if($edit!=null)
      <button type='submit' class="btn btn-pre2" wire:click="update_union()">Actualizar</button>
      @else
      <button type='submit' class="btn btn-pre2" wire:click="guardar_union()">Agregar</button>
      @endif
  </form>