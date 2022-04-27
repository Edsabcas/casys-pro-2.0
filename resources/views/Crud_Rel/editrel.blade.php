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
    <input type="hidden" value='{{$ID_REL}}' name='ID_REL'>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Materia</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name='ID_MATERIA'>
          <option selected>Seleccione la materia</option>
          @isset($materias)
          @foreach ($materias as $materia)
              <option value="{{$materia->ID_MATERIA}}">{{$materia->NOMBRE_MATERIA}}</option>
          @endforeach
          @endisset
        </select>
        @error('ID_MATERIA') 
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <span>Pendiente el seleccionar una Materia</span>
          </div> 
        @enderror
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Maestros</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name='ID_DOCENTE'>
          <option selected>Seleccione al maestro</option>
          @isset($maestros)
          @foreach ($maestros as $maestro)
              <option value="{{$maestro->ID_DOCENTE}}">{{$maestro->NOMBRE_DOCENTE}}</option>
          @endforeach
          @endisset
        </select>
        @error('ID_DOCENTE') 
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <span>Pendiente el seleccionar un Maestro</span>
          </div> 
        @enderror
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> grados</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" wire:model='ID_GR'>
          <option selected>Seleccione al grado</option>
          @isset($grados)
          @foreach ($grados as $grado)
              <option value="{{$grado->ID_GR}}">{{$grado->GRADO}}</option>
          @endforeach
          @endisset
        </select>
        @error('ID_GR') 
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <span>Pendiente el seleccionar un Grado</span>
          </div> 
        @enderror
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> secciones</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" wire:model='ID_SC'>
          <option selected>Seleccione al grado</option>
          @isset($secciones)
          @foreach ($secciones as $seccion)
              <option value="{{$seccion->ID_SC}}">{{$seccion->SECCION}}</option>
          @endforeach
          @endisset
        </select>
        @error('ID_SC') 
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <span>Pendiente el ingresar una Materia</span>
          </div> 
        @enderror
      </div>

      <button type="submit" class="btn btn-primary">Actualizar</button>

  </form>