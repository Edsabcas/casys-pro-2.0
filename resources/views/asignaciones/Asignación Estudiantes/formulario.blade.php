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

<p>
  <h4 class="text-center">Asignación estudiante</h4>
</p>

<form wire:submit.prevent="">
    @csrf
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nombres:</label>
              <select class="form-select" aria-label="Default select example" wire:model="nombres_e">
                <option selected>Seleccionar:</option>
                @isset($estudiantes)
                  @foreach ($estudiantes as $estudiante)
                    <option value="{{$estudiante->id}}">{{$estudiante->TB_INFO_NOMBRE}}  {{$estudiante->TB_INFO_APELLIDO}} </option>
                  @endforeach              
                @endisset
              </select>
          </div>
        </div>
            @error('nombres_e') 
            <div class="alert alert-danger d-flex align-items-center" role="alert">
              <svg class="bi flex-shrink-0 me-2" width="12" height="12" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
                <span>No ha ingresado ningún nombre</span>
              </div> 
              @enderror
        <div class="col">      
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Grado:</label>
              <select class="form-select" aria-label="Default select example" wire:model="grado_e">
                <option selected>Seleccionar:</option>
                @isset($grados)
                  @foreach ($grados as $grado)
                    <option value="{{$grado->ID_GR}}">{{$grado->GRADO}}</option>
                  @endforeach              
                @endisset
              </select>
            </div>
        </div>
      </div>
    </div>
      @error('grado_e') 
      <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="12" height="12" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
          <span>No ha ingresado ningún nombre</span>
         </div> 
         @enderror
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Sección:</label>
              <select class="form-select" aria-label="Default select example" wire:model="seccion_e">
                <option selected>Seleccionar:</option>
                @isset($secciones)
                  @foreach ($secciones as $seccion)
                    <option value="{{$seccion->ID_SC}}">{{$seccion->SECCION}}</option>
                  @endforeach              
                @endisset
              </select>
            </div>
          </div>
            @error('seccion_e') 
            <div class="alert alert-danger d-flex align-items-center" role="alert">
              <svg class="bi flex-shrink-0 me-2" width="12" height="12" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
                <span>No ha ingresado ningún nombre</span>
              </div> 
              @enderror
          <div class="col">    
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Estado:</label>
              <select class="form-select" aria-label="Default select example" wire:model="estado_e">
                  <option selected>Seleccionar</option>
                  <option value="1">Activo</option>
                  <option value="2">Inactivo</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    @error('estado_e') 
    <div class="alert alert-danger d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="12" height="12" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </svg>
        <span>No ha ingresado ningún nombre</span>
       </div> 
       @enderror
    @if ($edit!=null)
    <button class="btn btn-success" wire:click="update_e_p()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
    </svg></button>
    @else
    <button class="btn btn-primary" wire:click="guardar_e()">Agregar</button>
    @endif  
</form> 