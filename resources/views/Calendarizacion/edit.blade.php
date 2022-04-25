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

<form action="/update_calendarizacion" method="POST" >
    @csrf 
    <input type="hidden" value='{{$id_cal}}' name='id_cal'>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Unidad</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name='unidad'>
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
        <input type="date" class="form-control" id="name"  name='fecha_ini'>
        @error('fecha_ini') 
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <span>Pendiente de Ingresar una fecha</span>
          </div> 
        @enderror
       </div>
       <div class="mb-3">
        <label for="examplenombre" class="form-label"> Fecha de Finalización</label>
        <input type="date" class="form-control" id="name"  name='fecha_final'>
        @error('fecha_final') 
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <span>Pendiente de Ingresar una fecha</span>
          </div> 
        @enderror
       </div>
       <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>