<div class="card shadow rounded">
  <div class="text-center">
    <br>
    <h1 style="color: #3a3e7b"><strong>CREACIÓN DE GRADOS</strong></h1>
    <br>
  </div>
</div>
<br><br>

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


<form row g-3 wire:submit.prevent="">
  @csrf
  <div class="container">
    <div class="row">
      <div class="col">
        <label for="exampleInputEmail1" class="form-label">Tipo de Jornada:</label>
        <div class="input-group">
          <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#tipojornada" type="button"><img src="https://img.icons8.com/material-two-tone/24/000000/add.png"/></button>              
          <select class="form-select" aria-label="Default select example" wire:model="jornada_gr">
            <option selected>Seleccionar:</option>
          @isset($jornada)
          @foreach ($jornada as $jor)
            <option value="{{$jor->ID_JORNADA}}">{{$jor->TIPO_JORNADA}}</option>
          @endforeach              
        @endisset
          </select>
        </div>
      </div>

      @error('jornada_gr') 
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
            <span>¡Pendiente!</span>
        </div> 
      @enderror
      <div class="col">          
        <label for="floatingInput">Nivel Académico:</label>
          <div class="input-group">
            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#nivelacademico" type="button"><img src="https://img.icons8.com/material-two-tone/24/000000/add.png"/></button>    
              <select class="form-select" aria-label="Default select example" wire:model="academico_gr">
                  <option selected>Seleccionar:</option>
                @isset($academico)
                  @foreach ($academico as $aca)
                    <option value="{{$aca->ID_NVL}}">{{$aca->NIVEL_ACADEMICO}}</option>
                  @endforeach              
                @endisset
              </select>
          </div>
      </div>
        @error('academico_gr') 
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
              <span>¡Pendiente!</span>
          </div> 
        @enderror
      <div class="col">
          <div class="mb-3">
            <label for="floatingInput">Grado:</label>
            <input type="text" class="form-control" id="floatingInput"  wire:model="nombre_gr" required>
          </div>
      </div>
    </div>  
  </div>
    
        @error('nombre_gr') 
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
              <span>Pendiente el ingreso del grado</span>
            </div> 
        @enderror
  <div class="container">
    <div class="row">
      <div class="col">  
        <label for="floatingInput">Sección:</label>
        <div class="input-group">
          <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#seccion" type="button"><img src="https://img.icons8.com/material-two-tone/24/000000/add.png"/></button>
          <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon" wire:model="seccion_gr">
            <option selected>Seleccionar:</option>
            @isset($secciones)
            @foreach ($secciones as $seccion)
              <option value="{{$seccion->ID_SC}}">{{$seccion->SECCION}}</option>
            @endforeach              
          @endisset
          </select>
        </div>
      </div>
 
      @error('seccion_gr') 
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
            <span>Pendiente de asignar la sección</span>
        </div> 
      @enderror

      <!-- Modal para crear sección -->
      <div wire:ignore.self class="modal fade" id="seccion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
              <h3 class="modal-title text-center" style="color:rgb(255, 255, 255)"><strong>Creación de secciones</strong></h3>
              <button type="button" class="btn btn-close" style="color:rgb(255, 255, 255)"  data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              @isset($mensaje5)
                  @if ($mensaje5!=null)
                    <div class="alert alert-success" role="alert">
                      Agregado Correctamente!
                    </div>
                  @endif
              @endisset
              @isset($mensaje6)
                @if($mensaje6!=null)
                  <div class="alert alert-danger" role="alert">
                    ¡No se logro insetar sección!
                  </div>
                @endif
              @endisset
              @isset($mensaje11)
                @if ($mensaje11!=null)
                    <div class="alert alert-success" role="alert">
                      ¡Editado Correctamente!
                    </div>
                @endif
              @endisset
              @isset($mensaje12)
                @if($mensaje12!=null)
                    <div class="alert alert-danger" role="alert">
                      ¡No se logró editar los datos!
                    </div>
                @endif
              @endisset
              @isset($mensajeeliminar2)
                @if ($mensajeeliminar2!==null)
                    <div class="alert alert-success" role="alert">
                    ¡Eliminado correctamente!
                    </div>
                @endif
              @endisset
              @isset($mensajeeliminar3)
                @if($mensajeeliminar3!==null)
                    <div class="alert alert-danger" role="alert">
                    ¡No se logró eliminar correctamente!
                    </div>
                @endif
              @endisset
            <div class="modal-body">
              <form>
                <div class="mb-3">
                    <label for="floatingInput">Ingresar Sección:</label>
                    <input type="text" class="form-control" id="floatingInput"  wire:model="nombre_sec" required>
                </div>
                @error('nombre_sec') 
                  <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="12" height="12" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                      <span>¡Pendiente!</span>
                     </div> 
                     @enderror
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Estado:</label>
                  <select class="form-select" aria-label="Default select example" wire:model="estado_sec">
                    <option selected>Seleccionar:</option>
                      <option value="1">Activo</option>
                      <option value="2">Inactivo</option>
                  </select>
                </div>
                @error('estado_sec') 
                  <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="12" height="12" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                    <span>¡Pendiente!</span>
                     </div> 
                     @enderror
             </form>
             @isset($secciones)
                  <div class="card shadow rounded">
                    <div class="accordion accordion-flush rounded" id="accordionFlushExample">
                      <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
                          <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  id="flush-headingOne">
                              <button class="accordion-button collapsed"  style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                  SECCIONES | Visualizar tabla
                              </button>
                          </h2>           
                          <div wire:ignore.self id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                              <div wire:ignore.self class="accordion-body">
                                  <div class="table-responsive">
                                      <table class="table table-light table-bordered">
                                        <thead>
                                          <tr>
                                          <th>ID</th>
                                          <th>SECCIÓN</th>
                                          <th>ESTADO</th>
                                          <th>ACCIONES</th>
                                        </tr>
                                      </thead>
                                      <tbody>

                                        @foreach ($secciones as $seccion)
                                        <tr>
                                            <td>{{$seccion->ID_SC}}</td>
                                            <td>{{$seccion->SECCION}}</td> 
                                            @if ($seccion->ESTADO==1)
                                            <td>Activo</td>
                                            @else
                                            <td>Inactivo</td>               
                                            @endif       
                                            <td>
                                                <span>
                                                <button class="btn btn-editb" wire:click='edit1({{$seccion->ID_SC}})'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg></button>        
                                                <button type="button" class="btn btn-secondary" style="border-radius: 12px;" wire:click='delete1({{$seccion->ID_SC}})'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                                  </svg>
                                                </button>
                                              </td>
                                        </span> 
                                        </tr>
                                        @endforeach
                                      </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            @endisset

            </div>
            <div class="modal-footer">
              @if ($edit1!=null)
                <button class="btn btn-success" wire:click="update_sc_p()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                  </svg>
                </button>
              @else
                  <button wire:click='guardar_seccion()' class="btn btn-pre2">Crear</button>    
              @endif               
            </div>
          </div>
        </div>
      </div>
      
      <div class="col">
         <div class="mb-3">
          <label for="floatingInput">Nombre Ministerial:</label>
          <input type="text" class="form-control" id="floatingInput"  wire:model="ministerial_gr" required>
        </div> 
      </div>

        @error('ministerial_gr') 
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
              <span>¡Pendiente!</span>
          </div> 
        @enderror

        <div class="col">
          <div class="mb-3">
            <label for="floatingInput">No. Resolución:</label>
            <input type="number" class="form-control" id="floatingInput"  wire:model="resolucion_gr" required>
          </div>
        </div>
      </div>
    </div>

        @error('resolucion_gr') 
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
              <span>¡Pendiente!</span>
          </div> 
        @enderror

        

 
         @error('preciopre') 
           <div class="alert alert-danger d-flex align-items-center" role="alert">
             <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
               <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
             </svg>
               <span>¡Pendiente!</span>
           </div> 
         @enderror      

<!-- Modal Nivel Academico -->
<div wire:ignore.self class="modal fade" id="nivelacademico" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
        <h3 class="modal-title text-center" style="color:rgb(255, 255, 255)"><strong>Agregar nivel académico</strong></h3>
        <button type="button" class="btn btn-close" style="color:rgb(255, 255, 255)"  data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <br>
      @isset($mensaje7)
        @if ($mensaje7!=null)
        <div class="alert alert-success" role="alert">
        Agregado Correctamente!
        </div>
        @endif
      @endisset
      @isset($mensaje8)
        @if($mensaje8!=null)
        <div class="alert alert-danger" role="alert">
        No se logro insetar sección
        </div>
        @endif
      @endisset
      @isset($mensaje13)
        @if ($mensaje13!=null)
          <div class="alert alert-success" role="alert">
            Editado Correctamente
          </div>
        @endif
      @endisset
      @isset($mensaje14)
        @if($mensaje14!=null)
          <div class="alert alert-danger" role="alert">
            No se logro editar los datos
          </div>
        @endif
      @endisset
      @isset($mensajeeliminar4)
        @if($mensajeeliminar4!==null)
          <div class="alert alert-success" role="alert">
            ELIMINADO CORRECTAMENTE!
          </div>
        @endif
      @endisset
      @isset($mensajeeliminar5)
        @if($mensajeeliminar5!==null)
          <div class="alert alert-danger" role="alert">
            NO SE LOGRÓ ELIMINAR LOS DATOS :(
          </div>
        @endif
      @endisset
      <div class="modal-body">
        <div class="container"> 
          <div class="row">  
            <div class="col">  
              <label for="floatingInput">Nivel Académico:</label>
              <input type="text" class="form-control" id="floatingInput"  wire:model="nombre_nvl" required>
            </div>
            @error('nombre_nvl') 
              <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="12" height="12" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                  <span>¡Pendiente!</span>
              </div> 
            @enderror
            <div class="col">  
              <label for="floatingInput">Pre-inscripción (virtual):</label>
              <input type="text" class="form-control" id="floatingInput"  wire:model="adelantovir" required>
            </div>
            @error('adelantovir') 
              <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="12" height="12" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                  <span>¡Pendiente!</span>
              </div> 
            @enderror
            <div class="col">  
              <label for="floatingInput">Inscripción (virtual):</label>
              <input type="text" class="form-control" id="floatingInput"  wire:model="totalvir" required>
            </div>
          </div>
        </div>
          @error('totalvir') 
            <div class="alert alert-danger d-flex align-items-center" role="alert">
              <svg class="bi flex-shrink-0 me-2" width="12" height="12" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
                <span>¡Pendiente!</span>
            </div> 
          @enderror
          <br>
      <div class="container"> 
        <div class="row">  
          <div class="col">  
            <label for="floatingInput">Pre-inscripción (presencial):</label>
            <input type="text" class="form-control" id="floatingInput"  wire:model="adelantopre" required>
          </div>
          @error('adelantopre') 
            <div class="alert alert-danger d-flex align-items-center" role="alert">
              <svg class="bi flex-shrink-0 me-2" width="12" height="12" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
              <span>¡Pendiente!</span>
            </div> 
          @enderror
          <div class="col">  
            <label for="floatingInput">Inscripción (presencial):</label>
            <input type="text" class="form-control" id="floatingInput"  wire:model="totalpre" required>
          </div>
          @error('totalpre') 
            <div class="alert alert-danger d-flex align-items-center" role="alert">
              <svg class="bi flex-shrink-0 me-2" width="12" height="12" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
              <span>¡Pendiente!</span>
            </div> 
          @enderror
          <div class="col">
            <label for="exampleInputEmail1" class="form-label">Estado:</label>
            <select class="form-select" aria-label="Default select example" wire:model="estado_nvl">
              <option selected>Seleccionar:</option>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
            </select>
          </div>
        </div>
      </div>
          @error('estado_nvl') 
            <div class="alert alert-danger d-flex align-items-center" role="alert">
              <svg class="bi flex-shrink-0 me-2" width="12" height="12" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
              <span>¡Pendiente!</span>
            </div> 
          @enderror
          <br>
          @if ($edit2!=null)
        <button class="btn btn-success" wire:click="update_nvl_p()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>
        </button>
      @else
          <button wire:click='guardar_nvlacademico()' class="btn btn-pre2">Crear</button>    
      @endif
      <br>  
       </form>
       <br>
       @isset($academico)
       <div class="card shadow rounded"> 
        <div class="accordion accordion-flush rounded" id="accordionFlushExample">
          <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
              <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  id="flush-headingOne">
                  <button class="accordion-button collapsed"  style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      NIVEL ACADÉMICO | visualizar tabla
                  </button>
              </h2>           
              <div wire:ignore.self id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div wire:ignore.self class="accordion-body">
                      <div class="table-responsive">
                          <table class="table table-light table-bordered">
                            <thead>
                              <tr>
                              <th>NIVEL ACADÉMICO</th>
                              <th>PRE-INSCRIPCIÓN V.</th>
                              <th>INSCRIPCIÓN V.</th>
                              <th>PRE-INSCRIPCIÓN P.</th>
                              <th>INSCRIPCIÓN P.</th>
                              <th>ACCIONES</th>
                            </tr>
                          </thead>
                          <tbody>

                            @foreach ($academico as $nivel)
                            <tr>
                                <td>{{$nivel->NIVEL_ACADEMICO}}</td> 
                                <td>Q. {{$nivel->ADELANTO_VIRTUAL}}</td>
                                <td>Q. {{$nivel->TOTAL_VIRTUAL}}</td> 
                                <td>Q. {{$nivel->ADELANTO_PRESENCIAL}}</td>
                                <td>Q. {{$nivel->TOTAL_PRESENCIAL}}</td>       
                                <td>
                                    <span>
                                    <button class="btn btn-editb" wire:click='edit2({{$nivel->ID_NVL}})'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg></button>        
                                    <button type="button" class="btn btn-secondary" style="border-radius: 12px;" wire:click='delete2({{$nivel->ID_NVL}})'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                      <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                      </svg>
                                    </button>
                                  </td>
                            </span> 
                            </tr>
                            @endforeach
                          </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  
  @endisset

      </div>
      <div class="modal-footer">
               
      </div>
    </div>
  </div>
</div>

<!-- Modal Tipo de Jornada -->
<div wire:ignore.self class="modal fade" id="tipojornada" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
        <h3 class="modal-title text-center" style="color:rgb(255, 255, 255)"><strong>Agregar tipo de jornada</strong></h3>
        <button type="button" class="btn btn-close" style="color:rgb(255, 255, 255)"  data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      @isset($mensaje9)
        @if ($mensaje9!=null)
          <div class="alert alert-success" role="alert">
            Agregado Correctamente!
          </div>
        @endif
      @endisset
      @isset($mensaje10)
        @if($mensaje10!=null)
          <div class="alert alert-danger" role="alert">
            No se logró insetar sección
          </div>
        @endif
      @endisset
      @isset($mensaje15)
        @if ($mensaje15!=null)
          <div class="alert alert-success" role="alert">
            Editado Correctamente
          </div>
        @endif
      @endisset
      @isset($mensaje16)
        @if($mensaje16!=null)
          <div class="alert alert-danger" role="alert">
            No se logró editar los datos
          </div>
        @endif
      @endisset
      @isset($mensajeeliminar6)
        @if($mensajeeliminar6!==null)
          <div class="alert alert-success" role="alert">
            ¡Eliminado correctamente!
          </div>
        @endif
      @endisset
      @isset($mensajeeliminar7)
        @if($mensajeeliminar7!==null)
          <div class="alert alert-danger" role="alert">
            ¡No se logro eliminar correctamente!
          </div>
        @endif
      @endisset
      <div class="modal-body">
          <div class="mb-3">
              <label for="floatingInput">Ingresar Tipo de Jornada:</label>
              <input type="text" class="form-control" id="floatingInput"  wire:model="nombre_jornada" required>
          </div>
          @error('nombre_jornada') 
            <div class="alert alert-danger d-flex align-items-center" role="alert">
              <svg class="bi flex-shrink-0 me-2" width="12" height="12" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
                <span>¡Pendiente!</span>
               </div> 
               @enderror
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Estado:</label>
            <select class="form-select" aria-label="Default select example" wire:model="estado_jornada">
              <option selected>Seleccionar:</option>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
            </select>
          </div>
          @error('estado_jornada') 
            <div class="alert alert-danger d-flex align-items-center" role="alert">
              <svg class="bi flex-shrink-0 me-2" width="12" height="12" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
              <span>¡Pendiente!</span>
               </div> 
               @enderror
       </form>
       @isset($jornada)
    <div class="card shadow rounded">
       <div class="accordion accordion-flush rounded" id="accordionFlushExample">
         <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
             <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  id="flush-headingOne">
                 <button class="accordion-button collapsed"  style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    TIPO DE JORNADA | Visualizar tabla
                 </button>
             </h2>           
             <div wire:ignore.self id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                 <div wire:ignore.self class="accordion-body">
                     <div class="table-responsive">
                         <table class="table table-light table-bordered">
                           <thead>
                             <tr>
                             <th>ID</th>
                             <th>TIPO DE JORNADA</th>
                             <th>ESTADO</th>
                             <th>ACCIONES</th>
                           </tr>
                         </thead>
                         <tbody>

                           @foreach ($jornada as $jor)
                           <tr>
                               <td>{{$jor->ID_JORNADA}}</td>
                               <td>{{$jor->TIPO_JORNADA}}</td> 
                               @if ($jor->ESTADO==1)
                               <td>Activo</td>
                               @else
                               <td>Inactivo</td>               
                               @endif       
                               <td>
                                   <span>
                                   <button class="btn btn-editb" wire:click='edit3({{$jor->ID_JORNADA}})'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                     <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                     <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                   </svg></button>        
                                   <button type="button" class="btn btn-secondary" style="border-radius: 12px;" wire:click='delete3({{$jor->ID_JORNADA}})'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                     <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                     </svg>
                                   </button>
                                 </td>
                           </span> 
                           </tr>
                           @endforeach
                         </tbody>
                         </table>
                   </div>
               </div>
           </div>
       </div>
   </div>
    </div>
  @endisset
      </div>
      <div class="modal-footer">
        @if ($edit3!=null)
        <button class="btn btn-success" wire:click="update_jornada_p()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>
        </button>
      @else
          <button wire:click='guardar_jornada()' class="btn btn-pre2">Crear</button>    
      @endif     
      </div>
    </div>
  </div>
</div>

<div class="container"> 
  <div class="row">  
    <div class="col">
      <div class="mb-3">
        <label for="floatingInput">Precio presencial:</label>
        <input type="number" class="form-control" id="floatingInput"  wire:model="preciopre" required>
      </div> 
   </div>


      <div class="col">
       <label for="floatingInput">Precio virtual:</label>
       <input type="number" class="form-control" id="floatingInput"  wire:model="preciovir" required>
      </div> 
  

     @error('preciovir') 
       <div class="alert alert-danger d-flex align-items-center" role="alert">
         <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
           <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
         </svg>
           <span>¡Pendiente!</span>
       </div> 
     @enderror

      <div class="col">    
          <label for="exampleInputEmail1" class="form-label">Estado:</label>
          <select class="form-select" aria-label="Default select example" wire:model="estado_gr">
            <option selected>Seleccionar:</option>
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>
          </select>
      </div>  
    </div>
    <br>
    @if ($edit!=null)
    <button class="btn btn-success" wire:click="update_gr_p()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
    </svg></button>
  @else
    <button class="btn btn-pre2" wire:click="guardar_gr()">Agregar</button>    
  @endif  

  </div>

    @error('estado_gr') 
      <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
          <span>¡Pendiente!</span>
      </div> 
    @enderror


   
</form> 