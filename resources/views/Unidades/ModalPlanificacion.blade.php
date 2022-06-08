
  <div wire:ignore.self class="modal fade" id="plan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="5" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
          <h2 class="modal-title" style="color:rgb(255, 255, 255)"><strong>Planificación Anual</strong></h2>
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
              <h5 class="form-label text" style="font-size:40px"><strong>Creación de un tema</strong></h5>
              <h6 class="form-label text" style="font-size:15px"><strong>Ingrese los datos de su planificación anual.</strong></h6> 
              <form wire:submit.prevent=''>
                @csrf
                    <div class="col-sm-10">
                      <textarea type="text" class="form-control" wire:model='descripciona'  style="border:2px solid rgba(128, 156, 96, 0.466);" id="exampleFormControlTextarea1" rows="3"></textarea>
                      @error('descripciona') 
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                      <span>Pendiente de dar una descripcion</span>
                      </div> 
                    @enderror
                    </div>
                    <br>
                    @if($editp!=null)
                    <button type='submit' class="btn btn-pre2" wire:click="update_plan()">Actualizar</button>
                    @else
                    <button type="submit" class="btn btn-pre2" wire:click="Subir_Plan()" >Publicar</button>
                    @endif
                    
                    
          </form>
           
            
            </div>        
        </div>
        <div class="modal-footer">
       </div>
      </div>
    </div>
  </div>