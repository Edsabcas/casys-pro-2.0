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
    <input type="hidden" value='{{$id_rel}}' name='id_rel'>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Materia</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" wire:model='id_materias'>
          <option selected>Seleccione la materia</option>
          @isset($materias)
          @foreach ($materias as $materia)
              <option value="{{$materia->id_materia}}">{{$materia->nombre_materia}}</option>
          @endforeach
          @endisset
        </select>
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Maestros</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" wire:model='id_docente'>
          <option selected>Seleccione al maestro</option>
          @isset($maestros)
          @foreach ($maestros as $maestro)
              <option value="{{$maestro->id_docente}}">{{$maestro->nombre_docente}}</option>
          @endforeach
          @endisset
        </select>
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> grados</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" wire:model='id_gr'>
          <option selected>Seleccione al grado</option>
          @isset($grados)
          @foreach ($grados as $grado)
              <option value="{{$grado->id_gr}}">{{$grado->grado}}</option>
          @endforeach
          @endisset
        </select>
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> secciones</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" wire:model='id_sc'>
          <option selected>Seleccione al grado</option>
          @isset($secciones)
          @foreach ($secciones as $seccion)
              <option value="{{$seccion->id_sc}}">{{$seccion->seccion}}</option>
          @endforeach
          @endisset
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Actualizar</button>

  </form>