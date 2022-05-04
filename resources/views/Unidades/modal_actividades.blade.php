
  <div wire:ignore.self class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="5" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Ingrese los datos para crear la actividad</h2>
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
              <h3 class="form-label text" style="font-size:40px">Crear Actividad</h3> 
    
              <form wire:submit.prevent=''>
                @csrf
    
                <div class="row g-3">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1" class="form-label " style="font-size:20px">Titulo de la actividad</label>
                    <input type="text" class="form-control" wire:model='titulo'  style="border:2px solid rgba(86, 95, 76, 0.466);" placeholder="Titulo de la actividad" aria-label="Titulo de la actividad">
                  </div>
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1" class="form-label " style="font-size:20px">Punteo de la actividad</label>
                    <input type="text" class="form-control" wire:model='punteo'  style="border:2px solid rgba(86, 95, 76, 0.466);" placeholder="Punteo de la actividad" aria-label="Punteo de la actividad">
                  </div>
                  <div class="col-sm-4">
                    <label for="exampleInputEmail1" class="form-label " style="font-size:20px">Fecha de entrega</label>
                    <input type="date" class="form-control" wire:model='fecha_e'  style="border:2px solid rgba(86, 95, 76, 0.466);" placeholder="Punteo de la actividad" aria-label="Fecha de entrega">
                  </div>
    
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                  <label class="form-check-label" for="flexSwitchCheckChecked">Solicitar como tarea</label> 
                  </div>
    
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                 <label class="form-check-label" for="flexSwitchCheckDefault">Enviar notificacion</label>  
                 </div>  
    
                    <div class="col-sm-10">
                      <label for="exampleFormControlTextarea1" class="form-label" style="font-size:20px">Descripcion Actividad</label>
                      <textarea class="form-control" wire:model='descripcion'  style="border:2px solid rgba(128, 156, 96, 0.466);" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="col-sm-10">
                      <label for="exampleInputPassword1" class="form-label " style="font-size:20px">Adjunte un archivo</label>
                      <input type="file" class="form-control " wire:model='archivo'  style="border:2px solid rgba(86, 95, 76, 0.466);" id="exampleInputPassword1">
            
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" wire:click="Subir_Act()" data-bs-dismiss="modal">Publicar</button>
          </form>
           
            
            </div>        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          
          @isset($mensaje)
          @if($mensaje!=null)
          <a href="/" class="btn btn-primary ">Ver Publicación</a>
          @endif
          @endisset        </div>
      </div>
    </div>
  </div>