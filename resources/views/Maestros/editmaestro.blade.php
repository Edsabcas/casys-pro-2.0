<form method="POST" action="/update_docentes">
    @csrf
    <input type="hidden" value="{{$id_docente}}" name="id_docente">
  <!-- NOMBRE DEL MAESTRO -->
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nombre del Maestro:</label>
      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$nombre_docente}}" name="nombre_docente">
    </div>

  <!-- APELLIDO DEL MAESTRO -->
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellido del Maestro:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$apellido_docente}}" name="apellido_docente">
  </div>

  <!-- DPI DEL MAESTRO -->
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">DPI:</label>
    <input type="number" class="form-control" id="exampleInputEmail1" value="{{$dpi}}" name="dpi">
  </div>

  <!-- TELÉFONO DEL MAESTRO -->
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Teléfono del Maestro:</label>
    <input type="tel" class="form-control" id="exampleInputEmail1" value="{{$telefono}}" name="telefono">
  </div>

  <!-- CORREO DEL MAESTRO -->
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo Electrónico del Maestro:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" value="{{$correo}}" name="correo">
  </div>

  <!-- ESTADO CIVIL DEL MAESTRO -->
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Estado Civil del Maestro:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$estado_civil}}" name="estado_civil">
  </div>

  <!-- ESTADO CIVIL DEL MAESTRO -->
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Dirección:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$direccion}}" name="direccion">
  </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Estado</label>
      <select class="form-select" aria-label="Default select example" value="" name='estado'>
        @if ($estado==1)
          <option value="1">Activo</option>
        @else
          <option value="2">Inactivo</option>
        @endif
        <option value="1">Activo</option>
        <option value="2">Inactivo</option>
      </select>
    </div>
  
    <button type="submit" class="btn btn-dark">AGREGAR</button>
  </form>