
  <div wire:ignore.self class="modal fade" id="tema" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="5" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Ingrese los datos para crear un tema</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button >
        </div>

        <div class="modal-body">
            @isset($mensaje)
            @if($mensaje!=null)
            
            <div class="alert alert-success" role="alert">
                Agregado Correctamente!
              </div>
            @endif
            @endisset
            @isset($mensaje1)
              @if($mensaje1!=null)
              <div class="alert alert-success" role="alert">
                No fue agregado Correctamente!
              </div>
              @endif
            @endisset
            <div class="container-sm">
              <h3 class="form-label text" style="font-size:40px">Crear Tema</h3> 
    
              <form wire:submit.prevent=''>
                @csrf
    
                <div class="row g-3">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1" class="form-label " style="font-size:20px">Titulo del Tema</label>
                    <input type="text" class="form-control" wire:model='tema'  style="border:2px solid rgba(86, 95, 76, 0.466);" placeholder="Titulo de la actividad" aria-label="Titulo de la actividad">
                    @error('tema') 
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                      <span>Pendiente de nombrar una actividad</span>
                      </div> 
                    @enderror
                  </div>
                  
                  
    
                </div>
    
                    <div class="col-sm-10">
                      <label for="exampleFormControlTextarea1" class="form-label" style="font-size:20px">Descripcion Tema</label>
                      <textarea type="text" class="form-control" wire:model='descripciont'  style="border:2px solid rgba(128, 156, 96, 0.466);" id="exampleFormControlTextarea1" rows="3"></textarea>
                      @error('descripciont') 
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                      <span>Pendiente de dar una descripcion</span>
                      </div> 
                    @enderror
                    </div>
                    <br>
                    @if($editt!=null)
                    <button type='submit' class="btn btn-primary" wire:click="update_temas()">Actualizar</button>
                    @else
                    <button type="submit" class="btn btn-primary" wire:click="Subir_Tema()" >Publicar</button>
                    @endif
                    
          </form>
           
            
            </div>        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
      </div>
    </div>
  </div>