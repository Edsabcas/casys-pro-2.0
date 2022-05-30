@isset($mensaje1)
@if ($mensaje1!==null)
    <div class="alert alert-success" role="alert">
    AGREGADO CORRECTAMENTE!
    </div>
    @endif
    @endisset

    @isset($mensaje2)
    @if($mensaje2!==null)
    <div class="alert alert-danger" role="alert">
    NO SE LOGRÓ INSERTAR DATOS :(
    </div>
@endif
@endisset

@isset($mensaje3)
@if ($mensaje3!==null)
    <div class="alert alert-success" role="alert">
    EDITADO CORRECTAMENTE!
    </div>
    @endif
    @endisset

    @isset($mensaje4)
    @if($mensaje4!==null)
    <div class="alert alert-danger" role="alert">
    NO SE LOGRÓ EDITAR DATOS :(
    </div>
@endif
@endisset

@isset($mensajeeliminar)
@if ($mensajeeliminar!==null)
    <div class="alert alert-success" role="alert">
    ELIMINADO CORRECTAMENTE!
    </div>
    @endif
    @endisset

    @isset($mensajeeliminar1)
    @if($mensajeeliminar1!==null)
    <div class="alert alert-danger" role="alert">
    NO SE LOGRÓ ELIMINAR LOS DATOS :(
    </div>
@endif
@endisset

<p>
  <h4 class="text-center">Creación del maestro</h4>
</p>
<form wire:submit.prevent="">
  @csrf
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" wire:model="nombre_docente">
        </div>
      </div>
        @error('nombre_docente') 
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
              <span>Pendiente el ingreso de los nombres del maestro!</span>
          </div> 
        @enderror

      <div class="col">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Apellido:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" wire:model="apellido_docente">
        </div>
      </div>
    
        @error('apellido_docente') 
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
              <span>Pendiente el ingreso de los apellidos del maestro!</span>
          </div> 
        @enderror

      <div class="col">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">DPI:</label>
          <input type="number" class="form-control" id="exampleInputEmail1" wire:model="dpi">
        </div>
      </div>
    </div>
  </div>
        @error('dpi') 
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
              <span>Pendiente de ingresar el DPI del maestro!</span>
          </div> 
        @enderror

  <div class="container">
    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Teléfono:</label>
          <input type="tel" class="form-control" id="exampleInputEmail1" wire:model="telefono">
        </div>
      </div>

        @error('telefono') 
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
              <span>Pendiente de ingresar el número de telefono!</span>
          </div> 
        @enderror

      <div class="col"> 
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Correo electrónico:</label>
          <input type="email" class="form-control" id="exampleInputEmail1" wire:model="correo">
        </div>
      </div>
    

        @error('correo') 
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
              <span>Pendiente de ingresar el correo del maestro!</span>
          </div> 
        @enderror

      <div class="col"> 
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Estado Civil:</label>
          <select class="form-select" aria-label="Default select example" wire:model="estado_civil">
            <option selected>Seleccionar</option>
            <option value="1">Casado</option>
            <option value="2">Soltero</option>
            <option value="3">Viudo(a)</option>
        </select>
        </div>
      </div>
    </div>
  </div>

        @error('estado_civil') 
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
              <span>Pendiente de seleccionar el estado civil del maestro!</span>
          </div> 
        @enderror
        
  <div class="container">
    <div class="row">
      <div class="col">  
        <div class="mb-3">
          <label for="exampleInputEmail45" class="form-label">Dirección:</label>
          <input type="text" class="form-control" id="exampleInputEmail45" wire:model="direccion">
        </div>
      </div>

        @error('direccion') 
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
              <span>Pendiente de ingresar la dirección del maestro!</span>
          </div> 
        @enderror

      <div class="col">   
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Estado:</label>
            <select class="form-select" aria-label="Default select example" wire:model="estado">
                <option selected>Seleccionar</option>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
            </select>
        </div>
      </div>
    </div>
  </div>
        
      @error('estado') 
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
            <span>Pendiente de seleccionar el estado</span>
        </div> 
      @enderror

      

      @if ($edit !=null)
        <button class="btn btn-editb" wire:click="update_docentes()">Editar</button>
      
      @else
        <button type="button" wire:click='generar_use()' class="btn btn-pre2" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Siguiente
        </button>
      @endif
    <!-- Modal -->

    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
      </head>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Datos del usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Usuario:</label>
                <input type="text" class="form-control" wire:model='usuario' id="recipient-name">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Correo:</label>
                <input type="text" class="form-control" wire:model='correoed' id="recipient-name">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Contraseña:</label>
                <input type="password" class="form-control" wire:model='pass' id="password">
                <input style="margin-left:20px;" type="checkbox" id="mostrar_contrasena" title="clic para mostrar contraseña"/>
                &nbsp;&nbsp;Mostrar Contraseña
              </div>
            </form>
            <script>
              $(document).ready(function () {
                $('#mostrar_contrasena').click(function () {
                  if ($('#mostrar_contrasena').is(':checked')) {
                    $('#password').attr('type', 'text');
                  } else {
                    $('#password').attr('type', 'password');
                  }
                });
              });
              </script>
          </div>
          <div class="modal-footer">
            <button class="btn btn-pre2" data-bs-dismiss="modal" wire:click="guardar_docentes()">Guardar y salir</button>
          </div>
        </div>
      </div>
    </div>
</form>