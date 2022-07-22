<div  wire:ignore.self class="modal fade" id="eliminaranuncio" data-bs-toggle="modal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" tabindex="-1" aria-labelledby="eliminaranuncio" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header"  style="background:#a4cb39;color:rgba(255, 255, 255, 255.255)">
        
        </div>
        <div class="modal-body">
            <h5 class="modal-title text-center" id="staticBackdropLabel" style="color:#3a3e7b"><b>¿Está seguro de eliminar esta publicación?, esta acción será irreversible.</b></h5>    
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width:50px" scope="col">Texto de la publicación</th>
                    <th scope="col">Multimedia usada</th>
                    <th scope="col">Fecha y hora de la publicación</th>
                    <th scope="col">Publicador por...</th>
                    <th scope="col">Calidad del anuncio</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach($anuncios2 as $anuncio)
                  <tr>
                    <th style="width:50px">{{$anuncio->TEXTO_PUBLICACION}}</th>
                    <td>{{$anuncio->MULTIMEDIA}}</td>
                    <td>{{$anuncio->FECHA_HORA}}</td>
                    @foreach($usuario_publicacion as $usu_publicacion)
                      @if($anuncio->ID_USUARIO == $usu_publicacion->id)
                       <td>{{$usu_publicacion->name}}</td>
                     @endif
                   @endforeach
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
          <button type="button" class="btn btn-editb"  style="border-radius: 12px;" wire:click='eliminar_anuncio({{$id_eliminar}})'  data-bs-dismiss="modal">Si {{$id_eliminar}}</button>
          <button type="button" class="btn btn-secondary"  style="border-radius: 12px;"  id="info"  data-bs-dismiss="modal">No</button>
          
        </div>
      </div>
    </div>
    </div>