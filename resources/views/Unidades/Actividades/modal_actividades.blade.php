
<div wire:ignore.self class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="5" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
        <h2 class="modal-title text-center" style="color:rgb(255, 255, 255)"><strong>Ingrese los datos de la actividad</strong></h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button >
      </div>
          <div class="container-sm">
           <h3 class="form-label text" style="font-size:40px">Crear Actividad</h3> 
           @foreach(Session::get('advertencias_activas') as $advertenciasa)
           @if($dia_exacto>=$advertenciasa->FECHA_INICIO && $dia_exacto<=$advertenciasa->FECHA_FIND)
           @if($advertenciasa->PRIORIDAD == 1)
           <div class="alert alert-success d-flex align-items-center rounded-pill" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
            <div>
              Informativo : {{$advertenciasa->DESCRIPCION}}
            </div>
          </div>
           @elseif($advertenciasa->PRIORIDAD == 2)
           <div class="alert alert-warning d-flex align-items-center rounded-pill" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
              Importante : {{$advertenciasa->DESCRIPCION}}
            </div>
          </div>
           @elseif($advertenciasa->PRIORIDAD == 3)
           <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            <div>
              Urgente : {{$advertenciasa->DESCRIPCION}}
            </div>
          </div>
           @endif
           @endif
           @endforeach
           
            <form wire:submit.prevent=''>
              <input type="hidden" value='{{$edita}}' name='edita'>
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
           @if($option5==5)

          @else

                <div class="col-sm-3">
                  <label for="exampleInputEmail1" class="form-label " style="font-size:20px">Punteo de la actividad</label>
                  <input type="text" class="form-control" wire:model='punteo'  style="border:2px solid rgba(86, 95, 76, 0.466);" placeholder="Punteo de la actividad" aria-label="Punteo de la actividad">             
                </div>
          @endif
          
          @if($option4==4)
            <div class="col-sm-3">
              <label for="exampleInputEmail1" class="form-label " style="font-size:20px">Sancion Automatica</label>
              <input type="text" class="form-control" wire:model='sancion'  style="border:2px solid rgba(86, 95, 76, 0.466);" placeholder="Sancio automatica por entrega tardia" aria-label="Sancio automatica por entrega tardia">             
            </div>
          @else
            
          @endif
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
            @if($option3==3)
             <div class="col-sm-3">
              <label for="exampleInputEmail1" class="form-label " style="font-size:20px">Fecha extraordinaria</label>
              <input type="datetime-local" class="form-control" wire:model='fecha_ext'  style="border:2px solid rgba(86, 95, 76, 0.466);" placeholder="Fecha de extraordinaria" aria-label="Fecha extraordinaria">
            </div>                    
             @else
                 

             @endif
                 

          <div class="col-sm-3">
            <label for="inputState" class="form-label" style="font-size:20px">Seleccione un tema</label>
            <div class="input-group">
              @include('Unidades.Temas.modaltemas')
              <button class="btn btn-outline-primary" id="val"  data-bs-dismiss="modal" type="button"><img src="https://img.icons8.com/material-two-tone/24/000000/add.png"/></button>
              <select id="inputZip" class="form-select " wire:model="temasb"  aria-label=".form-select-sm example"  style="border:2px solid rgba(86, 95, 76, 0.466);">
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
            </select>
          </div>
                
              </div>


              <br>

              <div class="form-check form-switch form-check-inline">
                <input class="form-check-input" type="checkbox" id="solicitud" wire:click="validaciones('1')" >
                <label class="form-check-label" for="flexSwitchCheckChecked">Solicitar como tarea</label> 
                </div>
  
              <div class="form-check form-switch form-check-inline">
                <input class="form-check-input" type="checkbox" id="notificacion" wire:click="validaciones('2')">
               <label class="form-check-label" for="flexSwitchCheckDefault">Enviar notificacion</label>  
               </div>  

               <div class="form-check form-switch form-check-inline">
                <input class="form-check-input" type="checkbox" id="mejoramiento" wire:click="validaciones('3')" >
               <label class="form-check-label" for="flexSwitchCheckDefault"> mejoramiento</label>  
               </div>  

               <div class="form-check form-switch form-check-inline">
                <input class="form-check-input" type="checkbox" id="sancion" wire:click="validaciones('4')">
               <label class="form-check-label" for="flexSwitchCheckDefault">sancion automatica</label>  
               </div> 

               <div class="form-check form-switch form-check-inline">
                <input class="form-check-input" type="checkbox" id="sancion" wire:click="validaciones('5')">
               <label class="form-check-label" for="flexSwitchCheckDefault">subir actividad sin punteo</label>  
               </div> 

              
                  <div class="col-sm-12">
                    <label for="exampleFormControlTextarea1" class="form-label" style="font-size:20px">Descripcion Actividad</label>
                    <textarea class="form-control" wire:model='descripcion'  style="border:2px solid rgba(128, 156, 96, 0.466);" id="exampleFormControlTextarea1" rows="3"></textarea>
                    @error('descripcion') 
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                      <span>Pendiente de dar una descripcion</span>
                      </div> 
                    @enderror 
                  </div>

                  <div class="col-sm-12">
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
                  <div wire:loading wire:target="archivo" class="alert alert-warning" role="alert">
                    <strong class="font-bold">¡Documento cargando!</strong>
                      <span class="block sm:inlone">Espere un momento hasta que el documento se haya procesado completamente.</span>
                    <div class="spinner-border text-warning" role="status">
                    </div>
                  </div>
                  <br>
                  <button type="submit" class="btn btn-primary" wire:click='Subir_Act()' >Publicar</button>
                </form>
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
      @isset($mensaje3)
      @if($mensaje3!=null)
      <div class="alert alert-success" role="alert">
      Datos actualizados  
      </div>
      @endif
      @endisset
      
      @isset($mensaje4)
      @if($mensaje4!=null)
      <div cclass="alert alert-danger" role="alert">
          Datos no actualizados  
      </div>
      @endif
      @endisset
         
          
          </div>        
      </div>
      <div class="modal-footer">        
        @if($mensaje!=null)
        <a href="/" class="btn btn-pre2 ">Ver actividad</a>
        @endif
      </div>
    </div>
  </div>
</div>