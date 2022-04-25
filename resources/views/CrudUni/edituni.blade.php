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

<form action="/update_uni" method="POST" >
    @csrf 
    <input type="hidden" value='{{$id_uni}}' name='id_uni'>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Materia</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name='id_mat'>
          <option selected>Seleccione la materia</option>
          @isset($materias)
          @foreach ($materias as $materia)
              <option value="{{$materia->ID_MATERIA}}">{{$materia->NOMBRE_MATERIA}}</option>
          @endforeach
          @endisset
        </select>
      </div>
      <div class="mb-3">
        <label for="examplenombre" class="form-label"> Nombre Unidad</label>
        <input type="text" class="form-control" id="name" name='nombre_uni'>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Estado</label>     
          <select class="form-select form-select-sm" aria-label=".form-select-sm example" name='estado_uni'>
            <option selected>Open this select menu</option>
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>
          </select>
      </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>