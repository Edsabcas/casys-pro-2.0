
  <div wire:ignore.self class="modal fade" id="plan2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="5" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Ingrese los datos para crear su planeación anual</h2>
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
            <div class="container-xl">
              <h3 class="form-label text" style="font-size:40px">Crear Tema</h3> 
    
              <form action="/update_plan" method="POST">
                @csrf
                <input type="hidden" value='{{$id_plan}}' name='id_plan'>
    
                
                    <div class="col-sm-10">
                      <label for="exampleFormControlTextarea1" class="form-label" style="font-size:20px">Descripcion Anual</label>
                      <textarea type="text" class="form-control" name='descripciona'  style="border:2px solid rgba(128, 156, 96, 0.466);" id="exampleFormControlTextarea1" rows="3"></textarea>
                      @error('descripciona') 
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                      <span>Pendiente de dar una descripcion</span>
                      </div> 
                    @enderror
                    </div>
                    <br>
                    
                    <button type="submit" class="btn btn-pre2" wire:click="update_plan()">actualizar</button>
                    
          </form>
           
            
            </div>        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" Style="border-radius: 12px;" data-bs-dismiss="modal">Cerrar</button>
          </div>
      </div>
    </div>
  </div>