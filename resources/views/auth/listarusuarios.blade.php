<div class="input-group justify-content-center">
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" placeholder="Buscar:" />
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
          <th>FOTO DE PERFIL</th>
          <th>CONTRASEÑA</th>
      </tr>
  </thead>
  <tbody>
    @foreach ($listadousers as $listadouser)
      <tr>
          <td>{{$listadouser->name}}</td>
          <td>{{$listadouser->email}}</td>
          <td>{{$listadouser->usuario}}</td>
          <td>
            <img class="rounded-circle" src="img/undraw_profile_1.svg" width="60" height="60" 
                                  alt="...">
          </td>
          <td> 
            <button type="button" wire:click="cargar_datos('{{$listadouser->id}}', '{{$listadouser->name}}', '{{$listadouser->email}}', '{{$listadouser->usuario}}')" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Editar
            </button>                        
          </td>
      </tr>  
  </div>
@endforeach
</table>


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

