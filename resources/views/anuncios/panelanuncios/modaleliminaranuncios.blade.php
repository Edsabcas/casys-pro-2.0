<div  wire:ignore.self class="modal fade" id="eliminaranuncio" role="dialog" tabindex="-1" aria-labelledby="eliminaranuncio" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header"  style="background:#a4cb39;color:rgba(255, 255, 255, 255.255)">
        
        </div>
        <div class="modal-body">
            <h5 class="modal-title text-center" id="staticBackdropLabel" style="color:#3a3e7b"><b>¿Está seguro de eliminar esta publicación?, esta acción será irreversible.</b></h5>    
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Texto de la publicación</th>
                    <th scope="col">Multimedia usada</th>
                    <th scope="col">Fecha y hora de la publicación</th>
                    <th scope="col">Calidad del anuncio</th>
                    <th scope="col">Publicador por...</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($anuncios2 as $anuncio)
                  <tr>
                    <th>{{$anuncio->TEXTO_PUBLICACION}}</th>
                    <td>{{$anuncio->MULTIMEDIA}}</td>
                    <td>{{$anuncio->FECHA_HORA}}</td>
                    <td>{{$anuncio->TEXTO_PUBLICACION}}</td>
                    @if($anuncio->CALIDAD_ANUNCIO==1)
                        <td>Informativo</td>
                        @elseif($anuncio->CALIDAD_ANUNCIO==2)
                        <td>Importante</td>
                        @else
                        <td>Urgente</td>
                        @endif
                  </tr>
                  @endforeach
                </tbody>
              </table>     
        </div>
        <div class="modal-footer">
            <a  type="button" data-bs-dismiss="modal" class="btn btn-editb">Si</a>
          <button type="button" class="btn btn-secondary"  style="border-radius: 12px;"  id="info"  data-bs-dismiss="modal">Cancelar</button>
          
        </div>
      </div>
    </div>
    </div>