<div  wire:ignore.self class="modal fade" id="editaranuncio" data-bs-toggle="modal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" tabindex="-1" aria-labelledby="asignarseccion" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header"  style="background:#a4cb39;color:rgba(255, 255, 255, 255.255)">
        
        </div>
        <div class="modal-body">
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </symbol>
                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </symbol>
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </symbol>
              </svg>
              <br>
              <div class="card shadow rounded" style="background-color: #ffffff;">
                <div class="card-header text-center" style="background-color: #ffffff">
                  <br>
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#a4cb39" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                    <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                  </svg>
                  <br>
                  <br>
                  <h1 class="text-center" style="color: #3a3e7b"><strong>EDITAR ANUNCIO</strong></h1>
                  @if($anuncio_dato1==null)
                  <h5 style="color: #3a3e7b">Cargando... {{$probando}}</h5>
                  @endif
                  <p style="color:black"><strong>Llene los siguientes campos para editar un anuncio.</strong></p>
                  <br>
                </div>
                <div class="container-sm">
                  <br>
                  <form wire:submit.prevent='' enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" wire:model="anuncio_dato1">
                    <label for="" class="form-label" style="font-size:20px; color: #3a3e7b"><strong>• Personzalización de un anuncio</strong></label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" wire:click="tipo_anuncio()" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Personalizar
                      </label>
                    </div>
                    <div><br></div>
                    @if($anuncio_dato5==1)
                    @php
                    $tanuncio=1;
                    @endphp
                    @endif
                    @if($tanuncio == 1)
                    <div class="mb-3">
                      <label for="" class="form-label" style="font-size:20px; color: #3a3e7b"><strong>• Público que visualizará el anuncio</strong></label>
                      <select class="form-select rounded-pill shadow-sm rounded" style="border-radius: 70px 70px 70px 70px; border-color: #a4cb39" aria-label="Default select example" wire:model="anuncio_dato6">
                        @isset($rol)
                        @foreach($rol as $role)
                        
                        @if($role->ID_ROL==3)
                        <option value="{{$role->ID_ROL}}">{{$role->DESCRIPCION}}</option>
                        @elseif($role->ID_ROL==4)
                        <option value="{{$role->ID_ROL}}">{{$role->DESCRIPCION}}</option>
                        @elseif($role->ID_ROL==5)
                        <option value="{{$role->ID_ROL}}">{{$role->DESCRIPCION}}</option>
                        @endif
                        @endforeach
                        @endisset
                      </select>
                    </div>
                    @if($anuncio_dato6==4 or $anuncio_dato6==5)
                    <div class="mb-3">
                      <label for="" class="form-label" style="font-size:20px; color: #3a3e7b"><strong>• Grado que visualizará el anuncio</strong></label>
                      <select class="form-select rounded-pill shadow-sm rounded"  style="border-radius: 70px 70px 70px 70px; border-color: #a4cb39" aria-label="Default select example" wire:model="anuncio_dato7">
                        <option value="0">Todos</option>
                        @isset($grado_objetivo)
                        @foreach($grado_objetivo as $g_objetivo)
                        <option value="{{$g_objetivo->ID_GR}}">{{$g_objetivo->GRADO}}</option>
                        @endforeach
                        @endisset
                      </select>
                    </div>
                    @endif
                     @if($anuncio_dato6==3) 

                    <label for="" class="form-label" style="font-size:20px; color: #3a3e7b"><strong>• Grado que visualizará el anuncio</strong></label>
                      <select class="form-select rounded-pill shadow-sm rounded"  style="border-radius: 70px 70px 70px 70px; border-color: #a4cb39" aria-label="Default select example" wire:model="anuncio_dato7">
                        <option value="0">Todos</option>
                        @isset($grado_objetivo)
                        @foreach($grado_objetivo as $g_objetivo)
                        <option value="{{$g_objetivo->ID_GR}}">{{$g_objetivo->GRADO}}</option>
                        @endforeach
                        @endisset
                      </select>
                      
                      @endif
                      
                      @if($op_grado==1)
                      @endif
                      @endif
                      
                      <br>
                      <div class="mb-3">
                        <label for="" class="form-label" style="font-size:20px; color: #3a3e7b"><strong>• Redacte una descripción para el anuncio</strong></label>
                        <textarea class="form-control shadow-sm rounded" style="border-color: #a4cb39" rows="4" wire:model="anuncio_dato2"></textarea>
                      </div>
                        
                      <br>
                      <h4 style="font-size:20px; color: #3a3e7b"><strong>• Archivo/Imagen de la publicación a editar</strong></h4>
                      @php
                      //colocar la imagen anterior y que vuelva a cargar una
                            $foo = 0;
                            $vid = 0;
                            $pdf = 0;
                             if (strpos($anuncio_dato3, '.jpg' ) !== false || strpos($anuncio_dato3, '.png' ) !== false || strpos($anuncio_dato3, '.jpeg' ) !== false) 
                             { $foo=1; }
                             elseif(strpos($anuncio_dato3, '.mp4' ) !== false || strpos($anuncio_dato3, '.mpeg' ) !== false)
                             {$vid=1;}
                             elseif(strpos($anuncio_dato3, '.pdf' ) !== false)
                             {$pdf=1;}
                      @endphp
                      @if($foo==1)
                      <img src="imagen/anuncios/{{$anuncio_dato3}}" height="500" weight="500" class="card-img-top" alt="...">
                      @endif
                      @if($vid==1)
                      <video height="500" weight="500" class="card-img-top" alt="..." controls>
                        <source src="imagen/videos/{{$anuncio_dato3}}"  type="video/mp4">
                          <source src="imagen/videos/{{$anuncio_dato3}}"  type="video/ogg">
                      </video>
                      @endif
                      @if($pdf==1)
                      <iframe style="width: 49rem; text-align:center" width="400" height="400" src="/imagen/pdfs/{{$anuncio_dato3}}" frameborder="0"></iframe>
                        @endif
                      <br>
                      <label for="" class="form-label" style="font-size:20px; color: #3a3e7b"><strong>• Adjunte el archivo/imagen a compartir en el anuncio</strong></label>
                        <div class="mb-3">
                          <input type="file" id="archivo"  wire:model="archivo_anuncio">
                        </div>
                        @error('file') <span class="error form-label text-white">{{ $message }}</span> @enderror
                        <br>
                        <div wire:loading wire:target="archivo_anuncio" class="alert alert-warning" role="alert">
                            <strong class="font-bold">¡Imagen cargando!</strong>
                              <span class="block sm:inlone">Espere un momento hasta que la imagen se haya procesado completamente.</span>
                            <div class="spinner-border text-warning" role="status">
                            </div>
                          </div>
                          <br>
              
                        <div class="mb-3">
                          @if($tipo==1)
                          <label for="" class="form-label" style="font-size:20px; color: #3a3e7b"><strong>• Vista previa de la imagen</strong></label>
                          <div class="offset-4 col-10">
                            <img src="{{$archivo_anuncio->temporaryURL()}}" height="350" weight="350" alt="...">
                          </div>
                          @endif
                          @if($tipo==2)
                          <h3 class="form-label">Vista previa del vídeo</h3>
                          <video height="500" weight="500" class="card-img-top" alt="..." controls>
                            <source src="{{$archivo_anuncio->temporaryURL()}}"  type="video/mp4">
                          </video>
                          @endif
                          @if($tipo==3)
                          <h3 class="form-label">Vista previa del PDF</h3>
                            <iframe width="1250" height="600" src="/imagen/temporalpdf/{{$img}}" frameborder="0"></iframe>
                          @endif
                        </div>
                        
                        
                        <div class="mb-3">
                          <label for="" class="form-label" style="font-size:30p; color: #3a3e7b"><strong>• Tipo de anuncio</strong></label>
                          <select class="form-select rounded-pill shadow-sm rounded"  style="border-radius: 70px 70px 70px 70px; border-color: #a4cb39" aria-label="Default select example" wire:model="anuncio_dato9" required>
                            <option value="1">Informativo</option>
                            <option value="2">Importante</option>
                            <option value="3">Urgente</option>
                          </select>
                        </div>
                        @error('calidad_anuncio')
                        <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                          <div>
                            Es necesario que llenes por lo menos un campo para poder publicar un anuncio.
                          </div>
                        </div>
                        @enderror
                        <br>
                        <div class="card-footer text-center" style="background-color: #ffffff">
                          <br>
                          <button type="submit" data-bs-dismiss="modal" class="btn btn-pre2 text-center btn-lg" wire:click="update_anuncio()"><strong>Editar</strong></button>
                        </div>
                        @isset($mensaje)
                        @if($mensaje!=null)
                        
                        @endif
                        @endisset
                        <br>
                  </form>
              
              </div>
              </div>
            
           
        </div>
        <div class="modal-footer">
            
          
          <button type="button" class="btn btn-secondary"  style="border-radius: 12px;"  data-bs-dismiss="modal">Cancelar</button>
          
        </div>
      </div>
    </div>
    </div>