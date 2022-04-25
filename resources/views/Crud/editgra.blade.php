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
<form action="/update_grad" method="POST" >
    @csrf 
    <input type="hidden" value='{{$id_gra}}' name='id_gra'>
    <div class="mb-3">
        <label for="examplenombre" class="form-label"> Nombre Grado</label>
        <input type="text" class="form-control" id="name" name='nombre_g'>
        @error('nombre_g') 
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <span>Pendiente el ingresao de un grado</span>
          </div> 
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Estado</label>     
          <select class="form-select form-select-sm" aria-label=".form-select-sm example" name='estado_grado'>
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
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>