<form method="POST" action="/update_a_p">
    @csrf
    <input type="hidden" value="{{$id_a}}" name="id_a">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="Nombre Producto:" value='{{$grado_a}}' name="grado_a">
    </div>
      <br>
      <div class="form-floating">
        <input type="number" class="form-control" id="floatingInput" placeholder="Precio Producto:" value='{{$seccion_a}}' name="seccion_a">
      </div>
      <br>
      <div class="form-floating">
        <input type="number" class="form-control" id="floatingInput" placeholder="Precio Producto:" value='{{$maestro_a}}' name="maestro_a">
      </div>
      <br>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ESTADO</label>
        <select class="form-select" aria-label="Default select example" name="estado_a">
            @if ($estado_a==1)
            <option value="1">Activo</option>
            @else
            <option value="2">Inactivo</option>
            @endif
            <br>
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>  
          </select>
      </div>
      <br>
    <button type="submit" class="btn btn-pre2">Actualizar</button>
  </form>  