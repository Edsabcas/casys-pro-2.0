<form method="POST" action="/update_e_p">
    @csrf
    <input type="hidden" value="{{$id_e}}" name="id_e">
    <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="Nombre y apellidos:" value='{{$nombres_e}}  {{$apellidos_e}}' name="nombres_e">
      </div>
      <br>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="Nombre Producto:" value='{{$grado_e}}' name="grado_e">
    </div>
      <br>
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="Precio Producto:" value='{{$seccion_e}}' name="seccion_e">
      </div>
      <br>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ESTADO</label>
        <select class="form-select" aria-label="Default select example" name="estado_e">
            @if ($estado_e==1)
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
    <button type="submit" class="btn btn-info">Actualizar</button>
  </form>   