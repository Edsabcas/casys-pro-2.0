@isset($mensaje3)
@if($mensaje3!=null)
<div class="alert alert-success" role="alert">
Agregado actualizados  
</div>
@endif
@endisset

@isset($mensaje4)
@if($mensaje4!=null)
<div cclass="alert alert-danger" role="alert">
    Datos no actualizados  
</div>
@endif
@endisset
<form action="/update_mat" method="POST" >
    @csrf 
    <input type="hidden" value='{{$id_materias}}' name='id_materias'>
    <div class="mb-3">
        <label for="examplenombre" class="form-label"> Nombre Materia</label>
        <input type="text" class="form-control" id="name" name='nombre_mat'>
        @error('nombre_mat') 
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <span>Pendiente el ingresar una Materia</span>
          </div> 
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Tipo de Materia</label>     
          <select class="form-select form-select-sm" aria-label=".form-select-sm example" name='tipo_materia'>
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
          <select class="form-select form-select-sm" aria-label=".form-select-sm example" name='estado_materia'>
            <option selected>Defina el estado de la materia</option>
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
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>