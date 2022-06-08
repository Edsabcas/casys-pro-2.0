<h1 class="text-3xl text-center font-bold">Lista de Usuarios</h1>
<div class="container">
  <div class="row">
    <div class="col">
      <div>
        <div class="input-group justify-content-center">
          <div class="form-outline">
            <input type="search" wire:model="search" id="search" class="form-control" placeholder="Buscar:" />
          </div>
          <button type="button" class="btn btn-pre2">
            <i class="fas fa-search"></i>
          </button>
        </div>
        <br>
      </div>
    </div>

    <div class="col">
      <button type="button"  class="btn btn-pre2" data-bs-toggle="modal" data-bs-target="#usuarionuevo">
          Agregar Usuario
      </button>
    </div>
  </div>
</div>

<!-- Modal -->
  
<div wire:ignore.self class="modal fade" id="usuarionuevo" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Creación de Usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="container">
                <div class="row">
                  <div class="col"> 
                    <div class="mb-3">
                      <label for="recipient-name" class="col-form-label">Nombre:</label>
                      <input type="text" class="form-control" wire:model='nombre' id="recipient-name">
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="recipient-name" class="col-form-label">Apellido:</label>
                      <input type="text" class="form-control" wire:model='apelli' id="recipient-name">
                    </div>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col"> 
                    <div class="mb-3">
                      <label for="recipient-name" class="col-form-label">Rol:</label>
                      <select class="form-select" aria-label="Default select example" wire:model="rol" required>
                        <option selected>Seleccionar:</option>
                        @isset($rols)
                          @foreach ($rols as $rol)
                            <option value="{{$rol->ID_ROL}}">{{$rol->DESCRIPCION}}</option>
                          @endforeach              
                        @endisset
                      </select>
                    </div>
                  </div>
                </div>
              </div>

            </form>
           </div>
           <div class="modal-footer">
            <button class="btn btn-pre2" data-bs-target="#creacion" data-bs-dismiss="modal" wire:click="generar_use()" data-bs-toggle="modal">Siguiente</button>
          </div>
        </div>
      </div>
    </div>

    <div wire:ignore.self class="modal fade" id="creacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
      </head>
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Datos del usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="container">
                <div class="row">
                  <div class="col"> 
                    <div class="mb-3">
                      <label for="recipient-name" class="col-form-label">Usuario:</label>
                      <input type="text" class="form-control" wire:model='usuario1' id="recipient-name">
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="recipient-name" class="col-form-label">Correo:</label>
                      <input type="text" class="form-control" wire:model='correoed' id="recipient-name">
                    </div>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label for="recipient-name" class="col-form-label">Contraseña:</label>
                      <input type="password" class="form-control" wire:model='pass' id="password">
                      <input style="margin-left:20px;" type="checkbox" id="mostrar_contrasena" title="clic para mostrar contraseña"/>
                                    &nbsp;&nbsp;Mostrar Contraseña
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group row">
                      <label for="exampleInputPassword1" class="form-label" style="font-size:20px">Elegir foto de perfil:</label>
                      <p class="fs-8 danger">(Opcional)</p>
                      <div class="mb-3">
                        <input type="file" id="archivo"  wire:model="archivo_perfil">
                      </div> 
                    </div>
                 </div>
                </div>
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
            <button class="btn btn-pre2" data-bs-dismiss="modal" wire:click="guardar_trigliceridos()">Guardar</button>
          </div>
        </div>
      </div>
    </div>

<div class="table-responsive">
  <table class="table table-light table-bordered">
      <thead>
        <tr>
            <th>NOMBRE</th>
            <th>ROL</th>
            <th>EMAIL</th>
            <th>USUARIO</th>
            
            <th>FOTO</th>
            <th>EDITAR</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($listadousers as $listadouser)
        <tr>
            <td>{{$listadouser->name}}</td>
            <td>{{$listadouser->DESCRIPCION}}</td>
            <td>{{$listadouser->email}}</td>
            <td>{{$listadouser->usuario}}</td>
           

            <td>
              @if ($listadouser->img_users=="" or $listadouser->img_users==null )
              <img class="rounded-circle" src="img/undraw_profile_1.svg" width="40" height="40" alt="...">        
              <button type="button" class="btn btn-editb" style="float: right;" data-bs-toggle="modal" data-bs-target="#perfilmodal2{{$listadouser->ID_USUARIO}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>  
              </button>  
                
              @else
              <img class="img-profile rounded-circle" style="float: center;" width="35" height="40" src="imagen/perfil/{{$listadouser->img_users}}" />
              <button type="button" class="btn btn-editb" style="float: right;" data-bs-toggle="modal" data-bs-target="#perfilmodal2{{$listadouser->ID_USUARIO}}">
                <svg xmlns="http://www.w3.org/2000/svg" style="float: center;" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>  
              </button> 
            @endif 
            <div wire:ignore.self class="modal fade" id="perfilmodal2{{$listadouser->ID_USUARIO}}" tabindex="-1" aria-labelledby="perfilmodal2Label" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
                      <h3 class="modal-title text-center" id="perfilmodal2Label" style="color:rgb(255, 255, 255)" ><strong><b>Cambio foto de perfil</b></strong></h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form wire:submit.prevent='' class="form-horizontal">
                      <div class="form-group row">
                        <label for="exampleInputPassword1" class="form-label" style="font-size:20px">Elegir foto de perfil:</label>
                        <div class="mb-3">
                          <input type="file" id="archivo"  wire:model="archivo_perfil">
                        </div> 
                    </div>
                    <div class="mb-3">
                      <div wire:loading wire:target="archivo_perfil" class="alert alert-warning" role="alert">
                        <strong class="font-bold">¡Imagen cargando!</strong>
                          <span class="block sm:inlone">Espere un momento hasta que la imagen se haya procesado.</span>
                        <div class="spinner-border text-warning" role="status">
                        </div>
                      </div>
                      @if($tipo==1)
                      <h3 class="form-label">Visualización de Imagen</h3>
                      <img src="{{$archivo_perfil->temporaryURL()}}" height="200" weight="200"  alt="...">
                      @endif
                      @if($mensaje24 != null)
                                    <div class="alert alert-success d-flex align-items-center" role="alert">
                                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                          <div>{{$mensaje24}}
                                          </div>
                                        </div>
                                      @endif
                                    @if($mensaje25 != null)
                                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                          <div>{{$mensaje25}}
                                          </div>
                                        </div>
                                      @endif
                    </div>  
                    <button class="btn btn-pre2" data-bs-dismiss="modal" wire:click="cambiofotolist({{$listadouser->ID_USUARIO}})">Publicar</button>
                  </form>
                  </div>
                </div>
              </div>
            </div> 
            </td>
            <td> 
              <button type="button"  class="btn btn-pre2" wire:click="cargar_datos('{{$listadouser->ID_USUARIO}}', '{{$listadouser->name}}', '{{$listadouser->email}}', '{{$listadouser->usuario}}','{{$listadouser->DESCRIPCION}}')" class="btn btn-pre2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>
              </button>    
              @include('auth.eliminarmodal')
              <button type="button" class="btn btn-secondary" style="border-radius: 12px;" data-bs-toggle="modal" data-bs-target="#eliminar{{$listadouser->ID_USUARIO}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
              </svg></button>
            </td>
        </tr>  
      @endforeach
    </tbody>
    </table>

</div>






<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
  </head>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
        <h3 class="modal-title text-center" id="exampleModalLabel" style="color:rgb(255, 255, 255)" ><strong>Cambios en el usuario</strong></h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form wire:submit.prevent='' class="form-horizontal">
          @csrf
          <label for="name" class="col-sm-3 col-form-label">Nombre:</label>
          <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full 
          text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre" id="name" value='{{$name}}' wire:model="name">
          @error('name')
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                  <div>
                    Pendiente de ingreso
                  </div>
                </div>
          @enderror
          <br>
           
          <label for="usuario" class="col-sm-3 col-form-label">Usuario:</label>
          <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="usuario"
          id="usuario" value='{{$usuario}}' wire:model="usuario" >
          @error('usuario')
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
              Pendiente de ingreso
            </div>
          </div>
          @enderror
          <br>
          
          <label for="email" class="col-sm-3 col-form-label">Email:</label>
          <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="email" 
          id="email" value='{{$email}}' wire:model="email">
          @error('email')
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
              Pendiente de ingreso
            </div>
          </div>
          @enderror
          <br>
          
          <label for="n_password" class="col-sm-3 col-form-label">Contraseña:</label>
          <input type="password" wire:model="n_password" id="passwoord" name="passwoord" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"  placeholder="Contraseña">  

          <div style="margin-top:15px;">
            <input style="margin-left:20px;" type="checkbox" id="mosttrar_contrasena" title="clic para mostrar contraseña"/>
            &nbsp;&nbsp;Mostrar Contraseña</div>

          @error('n_password')
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
              Pendiente de ingreso
            </div>
          </div>
          @enderror

          <hr>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button wire:click='e_perfiles' class="btn btn-pre2"> 
            Guardar
          </button>
          </div>
          @if($mensaje10 != null)
          <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>{{$mensaje10}}
            </div>
            </div>
          @endif
          @if($mensaje11 != null)
          <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>{{$mensaje11}}
            </div>
            </div>
          @endif
          </form>
          <script>
            $(document).ready(function () {
              $('#mosttrar_contrasena').click(function () {
                if ($('#mosttrar_contrasena').is(':checked')) {
                  $('#passwoord').attr('type', 'text');
                } else {
                  $('#passwoord').attr('type', 'password');
                }
              });
            });
            </script> 
            
      </div>
    </div>
  </div>
</div>

