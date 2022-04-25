 <!-- Modal -->
 <div wire:ignore.self class="modal fade"  id="exampleModal{{$anuncio->ID_ANUNCIOS}}" tabindex="-1" aria-labelledby="exampleModal{{$anuncio->ID_ANUNCIOS}}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content" style="weight:900px">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Comentarios</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @php
          $id_com=$anuncio->ID_ANUNCIOS;
          @endphp
            <div class="container-sm">
                <form wire:submit.prevent=''>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-white" style="font-size:25px">Inserte un comentario</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" wire:model="texto_comentario"></textarea>
  
                        {{$anuncio->ID_ANUNCIOS}}
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
                    <br>
                            <div class="card" style="width: 45rem">
                                <br>
                                <div class="alert alert-dark" role="alert">
                                    <p style="font-size:10px" class="d-grid gap-2 d-md-flex justify-content-md-end">Publicado el {{$comentario->FECHA_COMENTARIO}}</p>
                                    <h5 class="card-title">Nombre del editor</h5>
                                    <p class="card-text" style="font-size:12px">Rol del Autor</p>
                                    <p class="card-text">{{$comentario->TEXTO_COMENTARIO}}</p>
                                    
                                  </div>
                              
                              <br>
                              
                            </div>
                </div>
            </div>
            @endforeach
            @endif
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>

