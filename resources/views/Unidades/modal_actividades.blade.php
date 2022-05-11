
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
                    @error('titulo') 
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                      <span>Pendiente escribir un titulo</span>
                      </div> 
                    @enderror
                  </div>
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1" class="form-label " style="font-size:20px">Punteo de la actividad</label>
                    <input type="text" class="form-control" wire:model='punteo'  style="border:2px solid rgba(86, 95, 76, 0.466);" placeholder="Punteo de la actividad" aria-label="Punteo de la actividad">
                    @error('punteo') 
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                      <span>Pendiente de poner un punteo a la actividad</span>
                      </div> 
                    @enderror             
                  </div>
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1" class="form-label " style="font-size:20px">Fecha de entrega</label>
                    <input type="datetime-local" class="form-control" wire:model='fecha_e'  style="border:2px solid rgba(86, 95, 76, 0.466);" placeholder="Fecha de entrega" aria-label="Fecha de entrega">
                    @error('fecha_e') 
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                      <span>Pendiente de colocar una fecha de entrega</span>
                      </div> 
                    @enderror  
                  </div>
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1" class="form-label " style="font-size:20px">Fecha extraordinaria</label>
                    <input type="date" class="form-control" wire:model='fecha_ext'  style="border:2px solid rgba(86, 95, 76, 0.466);" placeholder="Fecha de extraordinaria" aria-label="Fecha extraordinaria">
                  </div>    
                </div>

                <div>
                  <label for="exampleInputEmail1" class="form-label" style="font-size:20px">seleccione un tema</label>
                  <select class="form-select form-select-sm" wire:model="temasb" aria-label=".form-select-sm example"  style="border:2px solid rgba(86, 95, 76, 0.466);">
                    <option selected>seleccione un tema</option>
                    @isset($temas)
                    @foreach ($temas as $tema)
                        <option value="{{$tema->ID_TEMA}}">{{$tema->NOMBRE_TEMA}}</option>
                    @endforeach
                    @endisset
                  </select>
                  @error('temasb') 
                  <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <span>Pendiente de seleccionar un tema</span>
                    </div> 
                  @enderror 
                </div>
                <br>

                <div >
                  <div class="form-check form-switch form-check-inline">
                    <input class="form-check-input" type="checkbox" id="solicitud" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Solicitar como tarea</label> 
                    </div>
      
                  <div class="form-check form-switch form-check-inline">
                    <input class="form-check-input" type="checkbox" id="notificacion">
                   <label class="form-check-label" for="flexSwitchCheckDefault">Enviar notificacion</label>  
                   </div>  
  
                   <div class="form-check form-switch form-check-inline">
                    <input class="form-check-input" type="checkbox" id="mejoramiento">
                   <label class="form-check-label" for="flexSwitchCheckDefault">Mejoramiento</label>  
                   </div>  
  
                   <div class="form-check form-switch form-check-inline">
                    <input class="form-check-input" type="checkbox" id="sancion">
                   <label class="form-check-label" for="flexSwitchCheckDefault">sancion automatica</label>  
                   </div>  
                </div>
                
                    <div class="col-sm-10">
                      <label for="exampleFormControlTextarea1" class="form-label" style="font-size:20px">Descripcion Actividad</label>
                      <textarea class="form-control" wire:model='descripcion'  style="border:2px solid rgba(128, 156, 96, 0.466);" id="exampleFormControlTextarea1" rows="3"></textarea>
                      @error('descripcion') 
                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <span>Pendiente de dar una descripcion</span>
                        </div> 
                      @enderror 
                    </div>
                    <div class="col-sm-10">
                      <label for="exampleInputPassword1" class="form-label " style="font-size:20px">Adjunte un archivo (opcional)</label>
                      <input type="file" class="form-control " wire:model='archivo'  style="border:2px solid rgba(86, 95, 76, 0.466);" id="exampleInputPassword1">
                       <div class="col-sm-10">
                        @if($formato==1)
                        <h3 class="form-label">Visualización de Imagen</h3>
                        <img src="{{$archivo->temporaryURL()}}" height="200" weight="200"  alt="...">
                        @endif
                        @if($formato==2)
                        <h3 class="form-label">Visualización de Video</h3>
                        <video height="500" weight="500" class="card-img-top" alt="..." controls>
                          <source src="{{$archivo->temporaryURL()}}"  type="video/mp4">
                        </video>
                        @endif
                        @if($formato==3)
                        <h3 class="form-label">Visualización de PDF</h3>
                          <iframe width="400" height="400" src="/imagen/temporalpdf/{{$arch}}" frameborder="0"></iframe>
                        @endif
                       </div>
                    </div>
                    <br>
                    @foreach($grados as $grado)
                    @foreach($secciones as $seccion)
                    @foreach($materias as $materia)
                    @foreach($unidad as $uni)
                    <button type="submit" class="btn btn-primary" wire:click='Subir_Act("{{$grado->ID_GR}}","{{$seccion->ID_SC}}")' >Publicar</button>
                    @endforeach
                    @endforeach
                    @endforeach
                    @endforeach
                  </form>
           
            
            </div>        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          
          @isset($mensaje)
          @if($mensaje!=null)
          <a href="/" class="btn btn-primary ">Ver actividad</a>
          @endif
          @endisset        </div>
      </div>
    </div>
  </div>