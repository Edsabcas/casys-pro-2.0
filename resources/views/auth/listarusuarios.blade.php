<div>
  <div class="input-group justify-content-center">
    <div class="form-outline">
      <input type="search" wire:model="search" id="form1" class="form-control" placeholder="Buscar:" />
    </div>
    <button type="button" class="btn btn-primary">
      <i class="fas fa-search"></i>
    </button>
  </div>

  <br>

  <table class="table table-bordered">
    <div class="form-group row position-absolute top-0 start-50 translate-middle">
      <thead>
        <tr>
            <th>NOMBRE</th>
            <th>EMAIL</th>
            <th>USUARIO</th>
            <th>ROL</th>
            <th>FOTO DE PERFIL</th>
            <th> EDITAR </th>
        </tr>
    </thead>
    <tbody>
      @foreach ($listadousers as $listadouser)
        <tr>
            <td>{{$listadouser->name}}</td>
            <td>{{$listadouser->email}}</td>
            <td>{{$listadouser->usuario}}</td>
            <td>{{$listadouser->DESCRIPCION}}</td>

            <td>
              @if ($listadouser->img_users=="" or $listadouser->img_users==null )
              <img class="rounded-circle" src="img/undraw_profile_1.svg" width="40" height="40" alt="..."> 
              <button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#perfilmodal2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>  
              </button>      
              @else
              <img class="img-profile rounded-circle" style="float: center;" width="35" height="40" src="imagen/perfil/{{$listadouser->img_users}}" />
              <button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#perfilmodal2">
                <svg xmlns="http://www.w3.org/2000/svg" style="float: center;" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>  
              </button> 
            @endif           
            </td>
            <td> 
              <button type="button"  class="btn btn-primary btn-block" wire:click="cargar_datos('{{$listadouser->ID_USUARIO}}', '{{$listadouser->name}}', '{{$listadouser->email}}', '{{$listadouser->usuario}}','{{$listadouser->DESCRIPCION}}')" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>
              </button>                        
            </td>
        </tr>  
    </div>
  @endforeach
  </table>


</div>
<div wire:ignore.self class="modal fade" id="perfilmodal2" tabindex="-1" aria-labelledby="perfilmodal2Label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="perfilmodal2Label">Cambio de foto de perfil</h5>
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
            <button class="btn btn-primary" wire:click="cambiofoto()">Publicar</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
          </form>
          </div>
        </div>
      </div>
    </div>

<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Realizar cambios en el usuario</h5>
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
          <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña"
          id="n_password" wire:model="n_password">
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
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button wire:click='e_perfiles' class="btn btn-primary"> 
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
      </div>
    </div>
  </div>
</div>

