<div class="card shadow rounded">
  <div class="text-center">
    <br>
    <h1 style="color: #3a3e7b"><strong>Creación maestro</strong></h1>
    <br>
  </div>
</div>
      <br><br>

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

<form wire:submit.prevent="">
 @csrf

 {{-- FORMULARIO DATOS PERSONALES  --}}

  <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
      <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  id="flush-headingOne">
          <button class="accordion-button collapsed"  style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne0" aria-expanded="false" aria-controls="flush-collapseOne">
              DATOS | PERSONALES
          </button>
      </h2>            
      <div wire:ignore.self id="flush-collapseOne0" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div wire:ignore.self class="accordion-body">

             {{-- NOMBRE MAESTRO--}} 

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
                          <span>¡Pendiente!</span>
                      </div> 
                    @enderror

                  {{-- APELLIDO MAESTRO --}}

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
                          <span>¡Pendiente el ingreso de los apellidos del maestro!</span>
                      </div> 
                    @enderror

                  {{-- APELLIDO DE CASADA MAESTRO --}}

                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Apellido de casada:</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" wire:model="ape_casada">
                    </div>
                  </div>
                </div>
              </div>
                    @error('ape_casada') 
                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                          <span>¡Pendiente el ingreso del apellido de casado!</span>
                      </div> 
                    @enderror

                  {{-- DPI MAESTRO --}}

              <div class="container">
                <div class="row"> 
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">DPI:</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" wire:model="dpi">
                    </div>
                  </div>
                
                    @error('dpi') 
                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                          <span>¡Pendiente de ingresar el DPI!</span>
                      </div> 
                    @enderror

                  {{-- EXTENDIDA EN --}}

                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Extendida en:</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" wire:model="extendido">
                    </div>
                  </div>

                  @error('extendido') 
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                        <span>¡Pendiente de ingresar!</span>
                    </div> 
                  @enderror

                  {{-- NO. DE IGSS --}}

                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">No. de IGSS:</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" wire:model="iggs">
                    </div>
                  </div>

                  @error('iggs') 
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                        <span>¡Pendiente de ingresar!</span>
                    </div> 
                  @enderror

                  {{-- FECHA DE NACIMIENTO --}}

                  <div class="col">  
                    <div class="mb-3">
                      <label for="exampleInputEmail45" class="form-label">Fecha de nacimiento:</label>
                      <input type="date" class="form-control" id="exampleInputEmail45" wire:model="fecha_nacimiento">
                    </div>
                  </div>
                </div>
              </div>

                  @error('fecha_nacimiento') 
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                        <span>¡Pendiente de ingresar!</span>
                    </div> 
                  @enderror

                  {{-- EDAD --}}

              <div class="container">
                <div class="row">    
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Edad:</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" wire:model="edad">
                    </div>
                  </div>

                  @error('edad') 
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                        <span>¡Pendiente de ingresar!</span>
                    </div> 
                  @enderror

                  {{-- ESTADO CIVIL --}}

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

                    @error('estado_civil') 
                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                          <span>¡Pendiente de seleccionar el estado civil!</span>
                      </div> 
                    @enderror

                    {{-- NIT --}}

                    <div class="col">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NIT:</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" wire:model="nit">
                      </div>
                    </div>
                  </div>
                </div>

                  @error('nit') 
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                        <span>¡Pendiente de ingresar!</span>
                    </div> 
                  @enderror
                  
                  {{-- DIRECCIÓN --}}

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
                          <span>¡Pendiente de ingresar!</span>
                      </div> 
                    @enderror

                  {{-- TELÉFONO MOVIL --}}

              <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Teléfono Móvil:</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" wire:model="telefono">
                    </div>
                  </div>

                  @error('telefono') 
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                        <span>¡Pendiente de ingresar!</span>
                    </div> 
                  @enderror


                  {{-- TELÉFONO CASA --}}

                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Teléfono Casa:</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" wire:model="telcasa">
                    </div>
                  </div>
                </div>
              </div>

                    @error('telcasa') 
                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                          <span>¡Pendiente de ingresar!</span>
                      </div> 
                    @enderror

                    {{-- EN CASO DE EMERGENCIA LLAMAR A --}}

              <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">En caso de emergencia llamar a:</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" wire:model="emergencia">
                    </div>
                  </div>

                    @error('emergencia') 
                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                          <span>¡Pendiente de ingresar!</span>
                      </div> 
                    @enderror

                    {{-- TELÉFONO EMERGENCIA 1 --}}

                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Teléfono:</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" wire:model="tel1">
                    </div>
                  </div>

                    @error('tel1') 
                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                          <span>¡Pendiente de ingresar!</span>
                      </div> 
                    @enderror

                    {{-- TELÉFONO EMERGENCIA 2 --}}

                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Teléfono:</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" wire:model="tel2">
                    </div>
                  </div>
                </div>
              </div>

                    @error('tel2') 
                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                          <span>¡Pendiente de ingresar!</span>
                      </div> 
                    @enderror

                  {{-- CORREO ELECTRÓNICO --}}

              <div class="container">
                <div class="row">
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
                          <span>¡Pendiente de ingresar!</span>
                      </div> 
                    @enderror

                  {{-- ESTADO --}}

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
                        <span>¡Pendiente de seleccionar el estado!</span>
                    </div> 
                  @enderror                
          </div>
      </div>
  </div>
<br>
    
    {{-- SEGUNDO FORMULARIO  --}}

      <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
          <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  id="flush-headingOne">
              <button class="accordion-button collapsed"  style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1" aria-expanded="false" aria-controls="flush-collapseOne">
                  DATOS | ADICIONALES
              </button>
          </h2>   
          <div wire:ignore.self id="flush-collapseOne1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div wire:ignore.self class="accordion-body">

                 {{-- TITULO DE NIVEL MEDIO --}}

                  <div class="container">
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Título Nivel Medio:</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" wire:model="titulonvl">
                        </div>
                      </div>
                    </div>
                  </div>
                        @error('titulonvl') 
                          <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                              <span>¡Pendiente de ingresar!</span>
                          </div> 
                        @enderror 

                  {{-- NO. DE CEDULA DOCENTE --}}

                  <div class="container">
                    <div class="row"> 
                      <div class="col">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">No. de Cédula Docente:</label>
                          <input type="number" class="form-control" id="exampleInputEmail1" wire:model="cedula">
                        </div>
                      </div>
                    
                        @error('cedula') 
                          <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                              <span>¡Pendiente de ingresar!</span>
                          </div> 
                        @enderror

                      {{-- CLASE ESCALONARÍA --}}

                      <div class="col">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Clase Escalonaría:</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" wire:model="claseescalonaria">
                        </div>
                      </div>

                      @error('claseescalonaria') 
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                          </svg>
                            <span>¡Pendiente de ingresar!</span>
                        </div> 
                      @enderror

                      {{-- FECHA DE ASCENSO --}}

                      <div class="col">   
                        <div class="mb-3">
                          <label for="exampleInputEmail45" class="form-label">Fecha de ascenso:</label>
                          <input type="date" class="form-control" id="exampleInputEmail45" wire:model="fecha_ascenso">
                        </div>
                      </div>

                      @error('fecha_ascenso') 
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                          </svg>
                            <span>¡Pendiente de ingresar!</span>
                        </div> 
                      @enderror 

                      {{-- NO. DE REGISTRO DE ESCALAFÓN --}}

                      <div class="col">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">No. De registro de escalafón:</label>
                          <input type="number" class="form-control" id="exampleInputEmail1" wire:model="no_registro">
                        </div>
                      </div>
                    </div>
                  </div>

                      @error('no_registro') 
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                          </svg>
                            <span>¡Pendiente de ingresar!</span>
                        </div> 
                      @enderror

                      
              </div>
          </div>
      </div>
  <br>

  {{-- TERCER FORMULARIO  --}}

  
    <div class="accordion-item" style="border-radius: 60px 60px 60px 60px; " >     
        <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  id="flush-headingOne">
            <button class="accordion-button collapsed"  style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne2" aria-expanded="false" aria-controls="flush-collapseOne">
                DATOS | ADICIONALES 2
            </button>
        </h2>                
        <div wire:ignore.self id="flush-collapseOne2" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div wire:ignore.self class="accordion-body">

               {{-- TITULO DE UNIVERSITARIO --}}

                <div class="container">
                  <div class="row">
                    <div class="col">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Título Universitario:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" wire:model="universidad">
                      </div>
                    </div>
                  </div>
                </div>
                      @error('universidad') 
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                          </svg>
                            <span>¡Pendiente de ingresar!</span>
                        </div> 
                      @enderror

                {{-- NO. DE CEDULA DOCENTE --}}

                <div class="container">
                  <div class="row"> 
                    <div class="col">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No. de Cédula Docente:</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" wire:model="ceduladocente">
                      </div>
                    </div>
                  
                      @error('ceduladocente') 
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                          </svg>
                            <span>¡Pendiente de ingresar!</span>
                        </div> 
                      @enderror

                    {{-- CLASE ESCALONARÍA --}}

                    <div class="col">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Clase Escalonaría:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" wire:model="claseescalonaria2">
                      </div>
                    </div>

                    @error('claseescalonaria2') 
                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                          <span>¡Pendiente de ingresar!</span>
                      </div> 
                    @enderror

                    {{-- FECHA DE ASCENSO --}}

                    <div class="col">   
                      <div class="mb-3">
                        <label for="exampleInputEmail45" class="form-label">Fecha de ascenso:</label>
                        <input type="date" class="form-control" id="exampleInputEmail45" wire:model="fecha_ascenso2">
                      </div>
                    </div>

                    @error('fecha_ascenso2') 
                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                          <span>¡Pendiente de ingresar!</span>
                      </div> 
                    @enderror 

                    {{-- NO. DE REGISTRO DE ESCALAFÓN --}}

                    <div class="col">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No. De registro de escalafón:</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" wire:model="regisescalafon">
                      </div>
                    </div>
                  </div>
                </div>

                    @error('regisescalafon') 
                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                          <span>¡Pendiente de ingresar!</span>
                      </div> 
                    @enderror

                    
            </div>
        </div>
    </div>
<br>

    {{-- CUARTO FORMULARIO  --}}

      <div class="accordion-item" style="border-radius: 70px 70px 70px 70px;">
          <h2 class="accordion-header" style="border-radius: 70px 70px 70px 70px; border-color:#3a3e7b"  id="flush-headingOne">
              <button class="accordion-button collapsed rounded-pill"  style="border-color:#3a3e7b; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne3" aria-expanded="false" aria-controls="flush-collapseOne">
                  DATOS | ADICIONALES 3
              </button>
          </h2>              
          <div wire:ignore.self id="flush-collapseOne3" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div wire:ignore.self class="accordion-body">
  
                 {{-- OTROS ESTUDIOS --}}
  
                  <div class="container">
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Otros estudios:</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" wire:model="otros_estudios">
                        </div>
                      </div>
                    </div>
                  </div>
                        @error('otros_estudios') 
                          <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                              <span>¡Pendiente!</span>
                          </div> 
                        @enderror
  
                  {{-- ESTUDIANTE --}}
  
                  <div class="container">
                    <div class="row"> 
                      <p>
                        Nivel de Formación:
                      </p>
                      <div class="col">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Estudiante:</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" wire:model="estudiante">
                        </div>
                      </div>
                    
                        @error('estudiante') 
                          <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                              <span>¡Pendiente!</span>
                          </div> 
                        @enderror
  
                      {{-- CURSOS APROBADOS --}}
  
                      <div class="col">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Cursos aprobados:</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" wire:model="cursos_aprovados">
                        </div>
                      </div>
  
                      @error('cursos_aprovados') 
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                          </svg>
                            <span>¡Pendiente!</span>
                        </div> 
                      @enderror
  
                      {{-- GRADUADO --}}
  
                      <div class="col">   
                        <div class="mb-3">
                          <label for="exampleInputEmail45" class="form-label">Graduado:</label>
                          <input type="text" class="form-control" id="exampleInputEmail45" wire:model="graduado">
                        </div>
                      </div>
  
                      @error('graduado') 
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                          </svg>
                            <span>¡Pendiente de ingresar!</span>
                        </div> 
                      @enderror 
              
                  </div>
                </div>
              </div>
            </div>
      </div>
    
  <br>      

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