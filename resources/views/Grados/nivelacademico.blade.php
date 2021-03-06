@isset($mensaje2)
  @if($mensaje2!=null)
    <div class="alert alert-success" role="alert">
        ¡Se ha agregado correctamente!
    </div>
  @endif
@endisset

@isset($mensaje3)
  @if($mensaje3!=null)
    <div class="alert alert-success" role="alert">
      ¡No se logro agregar!
    </div>
  @endif
@endisset
<p>
  <h4 class="text-center">Crear Nivel Académico</h4>
</p>
<form wire:submit.prevent="">
    @csrf
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="mb-3">
              <label for="floatingInput">Ingresar Nivel Académico:</label>
              <input type="text" class="form-control" id="floatingInput"  wire:model="nombre_nvl" required>
          </div>
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
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Estado:</label>
              <select class="form-select" aria-label="Default select example" wire:model="estado_nvl">
                <option selected>Seleccionar:</option>
                  <option value="1">Activo</option>
                  <option value="2">Inactivo</option>
              </select>
            </div>
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
    @if ($edit!=null)
    <button class="btn btn-success" wire:click="update_nvl_p()">Editar</button>
    @else
    <button class="btn btn-primary" wire:click="guardar_nvl()">Agregar</button>  
    @endif
</form>