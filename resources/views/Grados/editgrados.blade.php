
<form method="POST" action="/update_gr_p">
    @csrf
    <input type="hidden" value="{{$id_gr}}" name="id_gr">
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" value='{{$nombre_gr}}'  name="nombre_gr">
      <label for="floatingInput">Nombre Categoria:</label>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Estado:</label>
        <select class="form-select" aria-label="Default select example"   name="estado_gr">
            @if ($estado_gr==1)
            <option value="1">Activo</option>
            @else
            <option value="2">Inactivo</option>
            @endif
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>  
          </select>
      </div>
    <button type="submit" class="btn btn-info">Actualizar</button>
  </form>  