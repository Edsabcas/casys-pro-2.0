<div wire:ignore.self class="modal fade" id="edittema" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="5" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
          <h3 class="modal-title text-center" style="color:#ffffff" ><strong>Ingrese los cambios requeridos</strong></h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button >
        </div>

        <div class="modal-body">
            @isset($mensaje)
            @if($mensaje!=null)
            
            <div class="alert alert-success" role="alert">
                Editado Correctamente!
              </div>
            @endif
            @endisset
            @isset($mensaje1)
              @if($mensaje1!=null)
              <div class="alert alert-success" role="alert">
                No fue Editado Correctamente!
              </div>
              @endif
            @endisset
            <div class="container-sm">
              <h3 class="form-label text" style="font-size:40px">Crear Tema</h3> 
    
              <form action="/update_temas" method="POST">
                @csrf
                <input type="hidden" value='{{$id_tem}}' name='id_tem'>
                <div class="row g-3">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1" class="form-label " style="font-size:20px">Titulo del Tema</label>
                    <input type="text" class="form-control" name='tema'  style="border:2px solid rgba(86, 95, 76, 0.466);" placeholder="Titulo de la actividad" aria-label="Titulo de la actividad">
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
                      <textarea type="text" class="form-control" name='descripciont'  style="border:2px solid rgba(128, 156, 96, 0.466);" id="exampleFormControlTextarea1" rows="3"></textarea>
                      @error('descripciont') 
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                      <span>Pendiente de dar una descripcion</span>
                      </div> 
                    @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-editb"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg></button>
          </form>
           
            
            </div>        
        </div>
        <div class="modal-footer">
          </div>
      </div>
    </div>
  </div>