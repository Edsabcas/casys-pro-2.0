 <!-- Modal -->
 <div wire:ignore.self class="modal fade"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="weight:900px">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Comentarios</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click='cancel()'></button>
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
                      <button type="button" class="btn btn-outline-secondary" wire:click='guardarcomentario()' style="margin: 10px">Comentar</button> 

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
                        <h5 class="card-title">Nombre del editor</h5>
                        <p class="card-text" style="font-size:12px">Rol del Autor</p>
                        <p class="card-text">{{$comentario->TEXTO_COMENTARIO}}</p>
                        
                      </div>
                    </div>
                    @else
                    @if($comentario->ESTADO == 0)
                    <div class="card" style="width: 45rem">
                      <br>
                      <div class="alert alert-dark" role="alert">
                          <p style="font-size:10px" class="d-grid gap-2 d-md-flex justify-content-md-end">Publicado el {{$comentario->FECHA_COMENTARIO}}</p>
                          <h5 class="card-title">Nombre del editor</h5>
                          <p class="card-text" style="font-size:12px">Rol del Autor</p>
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

