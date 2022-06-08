 <!-- Modal -->
 <div wire:ignore.self class="modal fade"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="weight:900px">
      <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
        <h5 class="modal-title text-center" style="color:rgb(255, 255, 255)" id="staticBackdropLabel">
          <b><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
            <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
          </svg>  Comentarios</b></h5>
        <button type="button" class="btn btn-warning btn-close" style="color:rgb(255, 255, 255)" data-bs-dismiss="modal" aria-label="Close" wire:click='cancel()'></button>
      </div>
      <div class="modal-body">
          <div class="container-sm">

            <div>
              @if ($mensaje1!=null)
              <div class="alert alert-danger" role="alert">
               No se logro insertar
              </div>
              @elseif($mensaje!=null)
              <div class="alert alert-success" role="alert">
                Insertado correctamente
              </div>
              @endif

            </div>
              <form wire:submit.prevent=''>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label text-white" style="font-size:25px">Inserte un comentario</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" wire:model="texto_comentario"></textarea>
                      @error('texto_comentario')
                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                       <div>
                          Es necesario que llenes el campo para publicar el comentario
                       </div>
                     </div>
                      @enderror
                      <button type="button" class="btn btn-pre2" wire:click='guardarcomentario()' style="margin: 10px">Comentar</button> 

                  </div>
                  
              </form>
          </div>
      </div>
      @if(Session::get('comentarios')!=null)
          @foreach(Session::get('comentarios') as $comentario)
          <br>
          <div class="offset-1 col-12">
              <div class="row">
                  
                  @if($comentario->ESTADO == 1 && $admin_rol == 1)
                  
                  <div class="card" style="width: 45rem">
                    <br>
                    <div class="alert alert-dark" role="alert">
                        <p style="font-size:10px" class="d-grid gap-2 d-md-flex justify-content-md-end">Publicado el {{$comentario->FECHA_COMENTARIO}}</p>
                        @foreach($usuario_publicacion as $usu_publicacion)
                        @if($comentario->ID_USUARIO == $usu_publicacion->id)
                        <h5 class="card-title">{{$usu_publicacion->usuario}}</h5>
                        @endif
                        @endforeach
                        
                        @foreach($rol_publicado as $rol_publi)
                        @if($comentario->ID_USUARIO == $rol_publi->ID_USUARIO)
                        @if($rol_publi->ID_ROL==1)
                        <p class="card-text" style="font-size:12px">Superusuario</p>
                        @elseif($rol_publi->ID_ROL==2)
                        <p class="card-text" style="font-size:12px">Administrador</p>
                        @elseif($rol_publi->ID_ROL==3)
                        <p class="card-text" style="font-size:12px">Maestro(a)</p>
                        @elseif($rol_publi->ID_ROL==4)
                        <p class="card-text" style="font-size:12px">Alumno(a)</p>
                        @elseif($rol_publi->ID_ROL==5)
                        <p class="card-text" style="font-size:12px">Padre de Familia</p>
                        @elseif($rol_publi->ID_ROL==6)
                        <p class="card-text" style="font-size:12px">Secretaria</p>
                        @elseif($rol_publi->ID_ROL==7)
                        <p class="card-text" style="font-size:12px">Coordinador</p>
                        @elseif($rol_publi->ID_ROL==8)
                        <p class="card-text" style="font-size:12px">Contabilidad</p>
                        @endif
                        @endif
                        @endforeach
                        <p class="card-text">{{$comentario->TEXTO_COMENTARIO}}</p>
                        
                      </div>
                    </div>
                    @else
                    @if($comentario->ESTADO == 0)
                    <div class="card" style="width: 45rem">
                      <br>
                      <div class="alert alert-dark" role="alert">
                          <p style="font-size:10px" class="d-grid gap-2 d-md-flex justify-content-md-end">Publicado el {{$comentario->FECHA_COMENTARIO}}</p>
                          @foreach($usuario_publicacion as $usu_publicacion)
                          @if($comentario->ID_USUARIO == $usu_publicacion->id)
                          <h5 class="card-title">{{$usu_publicacion->usuario}}</h5>
                          @endif
                          @endforeach
                          
                          @foreach($rol_publicado as $rol_publi)
                          @if($comentario->ID_USUARIO == $rol_publi->ID_USUARIO)
                          @if($rol_publi->ID_ROL==1)
                          <p class="card-text" style="font-size:12px">Superusuario</p>
                          @elseif($rol_publi->ID_ROL==2)
                          <p class="card-text" style="font-size:12px">Administrador</p>
                          @elseif($rol_publi->ID_ROL==3)
                          <p class="card-text" style="font-size:12px">Maestro(a)</p>
                          @elseif($rol_publi->ID_ROL==4)
                          <p class="card-text" style="font-size:12px">Alumno(a)</p>
                          @elseif($rol_publi->ID_ROL==5)
                          <p class="card-text" style="font-size:12px">Padre de Familia</p>
                          @elseif($rol_publi->ID_ROL==6)
                          <p class="card-text" style="font-size:12px">Secretaria</p>
                          @elseif($rol_publi->ID_ROL==7)
                          <p class="card-text" style="font-size:12px">Coordinador</p>
                          @elseif($rol_publi->ID_ROL==8)
                          <p class="card-text" style="font-size:12px">Contabilidad</p>
                          @endif
                          @endif
                          @endforeach
                          <p class="card-text">{{$comentario->TEXTO_COMENTARIO}}</p>
                          
                        </div>
                        @if($ocultarc == 1)
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                         
                          <a href="/chat" class="btn btn-primary ">Hablar en privado</a>
                          
                          
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-warning"  id="val">
                               Ocultar
                          </button>
                          @include('anuncios.comentariosvista.ocultarmodal')
                        </div>
                        @else
                        
                        @endif
                        
                    
                    <br>
                    
                  </div>
                    @endif
                  @endif
                    
                          
              </div>
          </div>
          @endforeach
          @endif
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

