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
          <div class="mb-3">
            <label for="floatingInput">Grado:</label>
            <input type="text" class="form-control" id="floatingInput"  wire:model="nombre_gr" required>
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

      <div class="col">  
        <label for="floatingInput">Sección:</label>
        <div class="input-group">
          <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button"><img src="https://img.icons8.com/material-two-tone/24/000000/add.png"/></button>
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

      <!-- Modal -->
      <div wire:ignore.self class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Creación de Sección</h5>
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
       No se logro insetar sección
    </div>
  @endif
@endisset
            <div class="modal-body">
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
                      <span>No ha ingresado ninguna sección</span>
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
                    <span>Pendiente la seleccion del estado</span>
                     </div> 
                     @enderror
             </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button wire:click='guardar_seccion()' class="btn btn-primary">Crear</button>
            </div>
          </div>
        </div>
      </div>
      
  <div class="container"> 
    <div class="row">
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
              <span>Pendiente de asignar el nombre Ministerial</span>
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
              <span>Pendiente el ingresar el numero de resolución</span>
          </div> 
        @enderror
        
  <div class="container"> 
    <div class="row">  
        <div class="col">
           <div class="mb-3">
            <label for="floatingInput">Nivel Académico:</label>
            <select class="form-select" aria-label="Default select example" wire:model="academico_gr">
              <option selected>Seleccionar:</option>
                <option value="1">Preprimaria</option>
                <option value="2">Primaria</option>
                <option value="3">Básicos</option>
                <option value="4">Diversificado</option>
            </select>
          </div>
        </div>
      
    

          @error('academico_gr') 
            <div class="alert alert-danger d-flex align-items-center" role="alert">
              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
                <span>Pendiente de asignar el nivel academico</span>
            </div> 
          @enderror

        <div class="col">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipo de Jornada:</label>
            <select class="form-select" aria-label="Default select example" wire:model="jornada_gr">
              <option selected>Seleccionar:</option>
              <option value="1">Matutina</option>
              <option value="2">Vespertina</option>
            </select>
          </div>
        </div>

        @error('jornada_gr') 
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
              <span>Pendiente la seleccion del tipo de jornada</span>
          </div> 
        @enderror

      <div class="col">    
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Estado:</label>
          <select class="form-select" aria-label="Default select example" wire:model="estado_gr">
            <option selected>Seleccionar:</option>
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>
          </select>
        </div>
      </div>  
    </div>
  </div>
    @error('estado_gr') 
      <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
          <span>Pendiente la seleccion del estado</span>
      </div> 
    @enderror

    @if ($edit!=null)
      <button class="btn btn-success" wire:click="update_gr_p()">Editar</button>
    @else
      <button class="btn btn-success" wire:click="guardar_gr()">Agregar</button>    
    @endif  

</form> 