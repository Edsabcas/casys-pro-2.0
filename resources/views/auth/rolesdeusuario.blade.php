<h1 class="text-3xl text-center font-bold">Roles disponibles </h1>
<br>

    <div class="table-responsive">
        <table class="table table-light table-bordered">
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>ROL</th>
                    <th>ESTADO</th>
                    <th>ADMINISTRACIÓN</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $rol)
                    <tr>
                        <td>{{$rol->ID_ROL}}</td>
                        <td>{{$rol->DESCRIPCION}}</td>
                        @if($rol->ESTADO==1)
                        <td>Activo</td>   
                        @else
                            <td>Inactivo</td>
                        @endif
                        <td>
                          <span>
                            <button type="button" wire:click='cargarmenu({{$rol->ID_ROL}})' class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                              Administar Menú
                            </button>
                          </span>  
                        </td>
                        <td>
                            <span>
                                <button class="btn btn-editb" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click='edit({{$rol->ID_ROL}})'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </button>        
                                <button type="button" class="btn btn-secondary" style="border-radius: 12px;" wire:click='delete({{$rol->ID_ROL}})'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                    </svg>
                                </button>
                            </span> 
                          </td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <button type="button" {{-- wire:click='guardar_rol()' --}} class="btn btn-pre2" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar
      </button>

      <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo rol</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @isset($mensaje)
                    @if ($mensaje!=null)
                        <div class="alert alert-success" role="alert">
                        Agregado Correctamente!
                        </div>
                    @endif
                @endisset
                @isset($mensaje1)
                    @if($mensaje1!=null)
                        <div class="alert alert-danger" role="alert">
                        No se logro insetar datos
                        </div>
                    @endif
                @endisset
                @isset($mensaje3)
                    @if ($mensaje3!=null)
                        <div class="alert alert-success" role="alert">
                        Editado Correctamente!
                        </div>
                    @endif
                @endisset
                @isset($mensaje4)
                    @if($mensaje4!=null)
                        <div class="alert alert-danger" role="alert">
                        No se logro editar los datos
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
                <form>
                    <div class="mb-3">
                        <label for="floatingInput">Ingresar Rol:</label>
                        <input type="text" class="form-control" id="floatingInput"  wire:model="rol" required>
                    </div>
                    @error('rol') 
                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="12" height="12" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                          <span>No ha ingresado ningun rol</span>
                         </div> 
                         @enderror
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Estado:</label>
                      <select class="form-select" aria-label="Default select example" wire:model="estado">
                        <option selected>Seleccionar:</option>
                          <option value="1">Activo</option>
                          <option value="2">Inactivo</option>
                      </select>
                    </div>
                    @error('estado') 
                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="12" height="12" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                        <span>Pendiente la seleccion del estado</span>
                         </div> 
                         @enderror
                 </form>
            </div>
            <div class="modal-footer">
                @if ($edit!=null)
                    <button class="btn btn-success" wire:click="update_rol_p()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                    </button>
                  @else
                    <button class="btn btn-pre2" wire:click="guardar_rol()">Guardar</button>
                    <button class="btn btn-pre2" data-bs-dismiss="modal">Salir</button>
                @endif  
              
            </div>
          </div>
        </div>
      </div>

      <div wire:ignore.self class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Administración del menú para roles</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p class="fs-6 fw-bold">Seleccionar las casillas para el menú:</p>
             
              <div class="container">
                <div class="row">

                  @if (Session::get('opciones')!=null)
                      @foreach(Session::get('opciones') as $opcion)
                      @if ($opcion->ESTADO==1)
                      <div class="col">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" role="switch" checked>
                          <label class="form-check-label" for="flexSwitchCheckDefault">{{$opcion->DESCRIPCION}}</label>
                        </div>
                      </div> 
                    @else
                      <div class="col">
                        <div class="form-check form-switch">
                          <input class="form-check-input" value="1" type="checkbox" role="switch">
                          <label class="form-check-label" for="flexSwitchCheckDefault">{{$opcion->DESCRIPCION}}</label>
                        </div>
                      </div> 
                    @endif
                      
                    @endforeach 
                  @endif
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" style="border-radius: 12px;" data-bs-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-pre2">Guardar</button>
            </div>
          </div>
        </div>
      </div>

    