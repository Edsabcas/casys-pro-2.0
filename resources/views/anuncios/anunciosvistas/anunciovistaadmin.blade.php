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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
            
  $(document).on('click', '#Crear', function() {

$('#exampleModal').modal('show');

});



$(document).on('click', '#val', function() {

$('#exampleModal1').modal('show');

});

</script>

<br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="/CREAR_PUBLICACION" class="btn btn-pre2 ">Crear Publicación</a>
</div>

@foreach ($anuncios as $anuncio)

<br>
<div class="offset-2 col-8">
  <div  class="row">
    <br>
      <div class="shadow-lg card" style="background-color: #f4f4f4; width: 50rem">
        <br>
        <p style="font-size:15px" class="d-grid gap-2 d-md-flex justify-content-md-end">Publicado el {{$anuncio->FECHA_HORA}}</p>
        <div class="input-group mb-3">
          @foreach($usuario_publicacion2 as $usu_publicacion2)
          @php
          $foo1=0;
          if (strpos($usu_publicacion2->img_users, '.jpg' ) !== false || strpos($usu_publicacion2->img_users, '.png' ) !== false || strpos($usu_publicacion2->img_users, '.jpeg' ) !== false) 
                 { $foo1=1; }
          @endphp
          @if($foo1==1 && $usu_publicacion2->id == $anuncio->ID_USUARIO)
          <img class="rounded-circle"  src="imagen/perfil/{{$usu_publicacion2->img_users}}" width="60" height="60" alt="...">
          @endif
          
          @endforeach
          
         <div class="col"> 
          @foreach($usuario_publicacion as $usu_publicacion)
          @if($anuncio->ID_USUARIO == $usu_publicacion->id)
          <h2 class="card-title"><strong>{{$usu_publicacion->usuario}}</strong></h2>
          @endif
          @endforeach
          @foreach($rol_publicado as $rol_publi)
          @if($anuncio->ID_USUARIO == $rol_publi->ID_USUARIO)
          @if($rol_publi->ID_ROL==1)
          <p class="card-text" style="font-size:15px">Superusuario</p>
          @elseif($rol_publi->ID_ROL==2)
          <p class="card-text" style="font-size:15px">Administrador</p>
          @elseif($rol_publi->ID_ROL==3)
          <p class="card-text" style="font-size:15px">Maestro(a)</p>
          @elseif($rol_publi->ID_ROL==4)
          <p class="card-text" style="font-size:15px">Alumno(a)</p>
          @elseif($rol_publi->ID_ROL==5)
          <p class="card-text" style="font-size:15px">Padre de Familia</p>
          @elseif($rol_publi->ID_ROL==6)
          <p class="card-text" style="font-size:15px">Secretaria</p>
          @elseif($rol_publi->ID_ROL==7)
          <p class="card-text" style="font-size:15px">Coordinador</p>
          @elseif($rol_publi->ID_ROL==8)
          <p class="card-text" style="font-size:15px">Contabilidad</p>
          @endif
          @endif
          @endforeach
        </div>
        </div>
          
          @php
                $foo = 0;
                $vid = 0;
                $pdf = 0;
                 if (strpos($anuncio->MULTIMEDIA, '.jpg' ) !== false || strpos($anuncio->MULTIMEDIA, '.png' ) !== false || strpos($anuncio->MULTIMEDIA, '.jpeg' ) !== false) 
                 { $foo=1; }
                 elseif(strpos($anuncio->MULTIMEDIA, '.mp4' ) !== false || strpos($anuncio->MULTIMEDIA, '.mpeg' ) !== false)
                 {$vid=1;}
                 elseif(strpos($anuncio->MULTIMEDIA, '.pdf' ) !== false)
                 {$pdf=1;}
          @endphp
          @if($foo==1)
          <img src="imagen/anuncios/{{$anuncio->MULTIMEDIA}}" height="500" weight="500" class="card-img-top" alt="...">
          @endif
          @if($vid==1)
          <video height="500" weight="500" class="card-img-top" alt="..." controls>
            <source src="imagen/videos/{{$anuncio->MULTIMEDIA}}"  type="video/mp4">
              <source src="imagen/videos/{{$anuncio->MULTIMEDIA}}"  type="video/ogg">
          </video>
          @endif
          @if($pdf==1)
          <iframe style="width: 49rem; text-align:center" width="400" height="400" src="/imagen/pdfs/{{$anuncio->MULTIMEDIA}}" frameborder="0"></iframe>
            @endif
          <div class="card-body">
            
            <p class="card-text">{{$anuncio->TEXTO_PUBLICACION}}</p>
            @if($anuncio->CALIDAD_ANUNCIO==1)
            <div class="alert alert-success d-flex align-items-center rounded-pill" role="alert">
              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
              <div>
                Informativo
              </div>
            </div>
              @elseif($anuncio->CALIDAD_ANUNCIO==2)
              <div class="alert alert-warning d-flex align-items-center rounded-pill" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                  Importante
                </div>
              </div>
              @else
              <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                <div>
                  Urgente
                </div>
              </div>
              @endif

              @php
              $contador_vistas=0;
              @endphp

              @foreach($vistoss as $visto)
              @if($anuncio->ID_ANUNCIOS == $visto->ID_ANUNCIO && $visto->ID_USUARIO != $vistas_totales_id)
              @php
              //$vistas_totales_id representa al usuario logeado en ese momento
              $contador_vistas+=1;
              @endphp
              @endif
              @endforeach

              <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
              </svg>{{$contador_vistas}}</p>

              <hr>

              <div class="container">
                <div class="row">
                  <div class="input-group mb-3">
                    @php
                $can=0;
                
                @endphp

                @foreach($me_gusta as $gustaa)
                @if($anuncio->ID_ANUNCIOS == $gustaa->ID_PUBLICACION && $gustaa->ID_USUARIO == auth()->user()->id)
                @php
                $can = 1;
                @endphp
                
                @endif
                @endforeach
                
                @if($can == 1)
                <button style="border:0px" type="button" class="btn btn-primary" wire:click="eliminarmegusta({{$anuncio->ID_ANUNCIOS}})" style="margin: 10px"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                  <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                </svg></button>
                @else
                <button style="border:0px" type="button" class="btn btn-outline-primary" wire:click="insertar_like({{$anuncio->ID_ANUNCIOS}})" style="margin: 10px"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                  <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                </svg></button>
                @endif
                
                
                
               
                
                <button style="border:0px" type="button" class="btn btn-outline-pre2" wire:click='comentario({{$anuncio->ID_ANUNCIOS}})' style="margin: 10px" id="Crear"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                    </svg></button>
                @include('anuncios.comentariosvista.com')
                @php
                $con=0;
                @endphp
                @foreach($guardar as $guarda)
                @if($anuncio->ID_ANUNCIOS == $guarda->ID_ANUNCIO && $guarda->ID_USUARIO == $usuario_id)
                @php
                $con=1;
                @endphp
                @endif
                @endforeach

                @if($con==0)
                <button style="border:0px" type="button" class="btn btn-outline-pre2" wire:click="guardar({{$anuncio->ID_ANUNCIOS}})" style="margin: 10px"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                 <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
                </svg></button>
                @endif
               </div>

                </div>
                
              
              </div>
             
            
          </div>
          
          
        </div>
    </div>
</div>
@endforeach

