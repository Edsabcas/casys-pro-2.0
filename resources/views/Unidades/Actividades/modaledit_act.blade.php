
<div wire:ignore.self class="modal fade" id="Editaract" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="5" aria-labelledby="Editaract" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
        <h2 class="modal-title text-center" style="color:rgb(255, 255, 255)"><strong>Edición de actividades</strong></h2>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button >
      </div>
          <div class="container-sm">
            <h3 class="form-label text" style="font-size:40px">Edicion Actividad</h3> 
            @if($editrevisar==null)
            @foreach(Session::get('advertencias_activas') as $advertenciasa)
           @if($dia_exacto>=$advertenciasa->FECHA_INICIO && $dia_exacto<=$advertenciasa->FECHA_INICIO)
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
            @endif
            <form  action="/update_act" method="POST" wire:submit.prevent=''>
              @csrf
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
                @if($validation5==5)

                @else
      
                      <div class="col-sm-3">
                        <label for="exampleInputEmail1" class="form-label " style="font-size:20px">Punteo de la actividad</label>
                        <input type="text" class="form-control" wire:model='punteo'  style="border:2px solid rgba(86, 95, 76, 0.466);" placeholder="Punteo de la actividad" aria-label="Punteo de la actividad">             
                      </div>
                @endif
                <div class="col-sm-3">
                  <label for="exampleInputEmail1" class="form-label " style="font-size:20px">Fecha de entrega Anterior</label>
                  <input type="text" class="form-control" wire:model='fecha_e'  style="border:2px solid rgba(86, 95, 76, 0.466);" placeholder="Fecha de entrega" aria-label="Fecha anterior">
                  <label for="exampleInputEmail1" class="form-label " style="font-size:20px">Fecha de entrega</label>
                  <input type="datetime-local" class="form-control" wire:model='fecha_e'  style="border:2px solid rgba(86, 95, 76, 0.466);" placeholder="Fecha de entrega" aria-label="Fecha de entrega">
                  @error('fecha_e') 
                  <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <span>Pendiente de colocar una fecha de entrega</span>
                    </div> 
                  @enderror  
                </div>
              @if($validation3==3)
                <div class="col-sm-3">
                  <label for="exampleInputEmail1" class="form-label " style="font-size:20px">Fecha extraordinaria Anterior</label>
                  <input type="text" class="form-control" wire:model='fecha_ext'  style="border:2px solid rgba(86, 95, 76, 0.466);" placeholder="Fecha de entrega" aria-label="Fecha anterior">

                  <label for="exampleInputEmail1" class="form-label " style="font-size:20px">Fecha extraordinaria</label>
                  <input type="datetime-local" class="form-control" wire:model='fecha_ext'  style="border:2px solid rgba(86, 95, 76, 0.466);" placeholder="Fecha de extraordinaria" aria-label="Fecha extraordinaria">
                </div> 
              @else

              @endif

              @if($validation4==4)
              <div class="col-sm-3">
                <label for="exampleInputEmail1" class="form-label " style="font-size:20px">Sancion Automatica</label>
                <input type="text" class="form-control" wire:model='sancion'  style="border:2px solid rgba(86, 95, 76, 0.466);" placeholder="Sancio automatica por entrega tardia" aria-label="Sancion automatica por entrega tardia">             
              </div>
            @else
              
            @endif

               
                <div class="col-sm-3">
                  <label for="inputState" class="form-label" style="font-size:20px">Seleccione un tema</label>
                  <div class="input-group">
                    @include('Unidades.Temas.Tcr_edit')
                    <button class="btn btn-outline-primary" id="val1"  data-bs-dismiss="modal" type="button"><img src="https://img.icons8.com/material-two-tone/24/000000/add.png"/></button>                   
                     <select id="inputZip" class="form-select " wire:model="temasb" aria-label=".form-select-sm example"  style="border:2px solid rgba(86, 95, 76, 0.466);">
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
                <input class="form-check-input" type="checkbox" id="solicitud" wire:click="validaciones_edit('1')" >
                <label class="form-check-label" for="flexSwitchCheckChecked">Solicitar como tarea</label> 
                </div>
  
              <div class="form-check form-switch form-check-inline">
                <input class="form-check-input" type="checkbox" id="notificacion" wire:click="validaciones_edit('2')">
               <label class="form-check-label" for="flexSwitchCheckDefault">Enviar notificacion</label>  
               </div>  

               <div class="form-check form-switch form-check-inline">
                <input class="form-check-input" type="checkbox" id="mejoramiento" wire:click="validaciones_edit('3')" >
               <label class="form-check-label" for="flexSwitchCheckDefault">Editar el mejoramiento</label>  
               </div>  

               <div class="form-check form-switch form-check-inline">
                <input class="form-check-input" type="checkbox" id="sancion" wire:click="validaciones_edit('4')">
               <label class="form-check-label" for="flexSwitchCheckDefault">Editar la sancion automatica</label>  
               </div> 

               <div class="form-check form-switch form-check-inline">
                <input class="form-check-input" type="checkbox" id="sancion" wire:click="validaciones_edit('5')">
               <label class="form-check-label" for="flexSwitchCheckDefault">subir actividad sin punteo</label>  
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
  @if($formato==1 or $formato==2 or $formato==3)
                  <div>
                    <label for="exampleInputPassword1" class="form-label " style="font-size:20px">Archivo anterior</label>
                  </div>
                  <div>
        @foreach ($actividades as $actividad)
                    @php

                    $foo = 0;
                    $vid = 0;
                    $pdf = 0;
                     if (strpos($actividad->archivos, '.jpg' ) !== false || strpos($actividad->archivos, '.png' ) !== false || strpos($actividad->archivos, '.jpeg' ) !== false) 
                     { $foo=1; }
                     elseif(strpos($actividad->archivos, '.mp4' ) !== false || strpos($actividad->archivos, '.mpeg' ) !== false)
                     {$vid=1;}
                     elseif(strpos($actividad->archivos, '.pdf' ) !== false)
                     {$pdf=1;}
              @endphp
               @if($foo==1 && $edita==$actividad->ID_ACTIVIDADES)
               <div class="offset-4 col-10">
               <img src="imagen/actividades/{{$actividad->archivos}}" height="300" weight="300" c alt="...">
               </div>
               @endif
               @if($vid==1 && $edita==$actividad->ID_ACTIVIDADES)
               <video height="500" weight="500" class="card-img-top" alt="..." controls>
                 <source src="imagen/videos/{{$actividad->archivos}}"  type="video/mp4">
                   <source src="imagen/videos/{{$actividad->archivos}}"  type="video/ogg">
               </video>
               @endif
               @if($pdf==1 && $edita==$actividad->ID_ACTIVIDADES)
               <iframe style="width: 49rem; text-align:center" width="400" height="400" src="/imagen/pdf_act/{{$actividad->archivos}}" frameborder="0"></iframe>
                 @endif
         @endforeach
                <button type='submit' class="btn btn-danger" wire:click="elminararch" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16" >
                  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                </svg></button>
                  </div>
      @else
      <div>
        <div class="form-check form-switch ">
        <input class="form-check-input" type="checkbox" id="sancion" wire:click="validaciones_edit('6')">
       <label class="form-check-label" for="flexSwitchCheckDefault">¿Desea Agregar un archivo?</label>  
       </div>
      </div>
     
      
      @endif


                @if($validation6==6)
                  <div class="col-sm-10">
                    <label for="exampleInputPassword1" class="form-label " style="font-size:20px">Edicion de arhivo </label>
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
                @else 
                
                @endif
                  <br>
                  @if($editrevisar==null  or $editrevisar=="")
                  <button type='submit' class="btn btn-primary" name='editnormal' wire:click="update_act()">Actualizar</button>
                  @endif
                  @if($editrevisar==1)
                  <button type='submit' class="btn btn-primary" name='editrevisar' wire:click="update_act()">Actualizar</button>
                  <button type='submit' class="btn btn-editb" wire:click='revisiones(2)'>Validar</button>

                  @include('Revisar.modal_coment')
                  <button type='submit' data-bs-toggle="modal" data-bs-target="#comentario_revision" class="btn btn-editb">Mandar a revision</button>
                  @endif

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
      </div>
    </div>
  </div>
</div>
