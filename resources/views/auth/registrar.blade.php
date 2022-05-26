<form wire:submit.prevent='' class="form-horizontal">
    @csrf
    <label for="name" class="col-sm-3 col-form-label">Nombre:</label>
    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full 
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre" id="name" wire:model="name">
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
    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Usuario"
    id="usuario" wire:model="usuario" >
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
    <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" 
    id="email" wire:model="email">
    @error('email')
    <div class="alert alert-danger d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
      <div>
        Pendiente de ingreso
      </div>
    </div>
    @enderror
    <br>
    
    <label for="password" class="col-sm-3 col-form-label">Contraseña:</label>
    <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña"
    id="password" wire:model="password">
    @error('password')
    <div class="alert alert-danger d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
      <div>
        Pendiente de ingreso
      </div>
    </div>
    @enderror

    <hr>
    <button wire:click='guardar' class="btn btn-primary"> 
      Crear
    </button>

    @if($mensaje29 != null)
    <div class="alert alert-success d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
      <div>{{$mensaje29}}
      </div>
      </div>
    @endif
    @if($mensaje30 != null)
    <div class="alert alert-danger d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
      <div>{{$mensaje30}}
      </div>
      </div>
    @endif
    </form>