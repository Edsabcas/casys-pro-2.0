<script>
            
    $(document).on('click', '#Crear', function() {
  
  $('#eliminaranuncio').modal('show');
  
  });
  
  
  
  $(document).on('click', '#val', function() {
  
  $('#exampleModal1').modal('show');
  
  });
  
  
  
  </script>

@isset($mensaje_eliminacion)
@if($mensaje_eliminacion==1)

<div class="alert alert-success alert-dismissible fade show" role="alert">
    Publicación eliminada correctamente!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @elseif($mensaje_eliminacion==0)
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    La publicación no fue eliminada correctamente!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
@endisset

<center><h2><strong><i>Panel de Anuncios</i></strong></h2></center>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Texto de la publicación</th>
        <th scope="col">Multimedia usada</th>
        <th scope="col">Fecha y hora de la publicación</th>
        <th scope="col">Publicador por...</th>
        <th scope="col">Calidad del anuncio</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach($anuncios as $anuncio)
      <tr>
        <th>{{$anuncio->TEXTO_PUBLICACION}}</th>
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
            <span>
              <td>
                @include('anuncios.panelanuncios.editarmodal')
                  
                <button type="button" class="btn btn-editb"  style="border-radius: 12px;" wire:click='editar_anuncio({{$anuncio->ID_ANUNCIOS}})' data-bs-toggle="modal" data-bs-target="#editaranuncio"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg></button> 

                <!-- Button trigger modal -->
                
                @include('anuncios.panelanuncios.modaleliminaranuncios')
                <button type="button" class="btn btn-secondary"  style="border-radius: 12px;" wire:click='id_a_eliminar({{$anuncio->ID_ANUNCIOS}})' data-bs-toggle="modal" data-bs-target="#eliminaranuncio"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                </svg></button>
                
              </td>
            </span>
      </tr>
      @endforeach
    </tbody>
  </table>