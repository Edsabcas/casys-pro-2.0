<div wire:ignore.self class="modal fade" id="staticBackdrop1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdrop1Label">Modal 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="POST" action="/update_usuarios">
          @csrf
          <input type="hidden" value="{{$id_usucorreo}}" name="id_usucorreo">
        <!-- NOMBRE DEL MAESTRO -->
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Usuario:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="{{$usuario}}" name="usuario">
          </div>
      
        <!-- APELLIDO DEL MAESTRO -->
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Correo:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" value="{{$correoed}}" name="correoed">
        </div>
      
        <!-- DPI DEL MAESTRO -->
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Contraseña:</label>
          <input type="password" class="form-control" id="exampleInputEmail1" value="{{$pass}}" name="pass">
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Cambiar Contraseña</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div wire:ignore.self class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Cambio de Contraseña</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Escribir nueva contraseña:</label>
            <input type="tel" class="form-control" id="exampleInputEmail1" wire:model="pass">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" wire:click="guardar_docentes()">Guardar</button>
        <button class="btn btn-danger" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>