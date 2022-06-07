
<div class="card shadow rounded">
  <div class="text-center">
    <br>
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#a4cb39" class="bi bi-card-checklist" viewBox="0 0 16 16">
      <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
      <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
    </svg>
    <br>
    <br>
    <h1 style="color: #3a3e7b"><strong>GRADOS</strong></h1>
    <p style="color:black"><strong>Seleccione un grado.</strong></p>
    <br>
  </div>
</div>

<br>

<div class="row">
  @foreach($grados as $grado)
  @foreach($secciones as $seccion)
  @if($grado->ID_SC==$seccion->ID_SC)
    <div class="col-xl-4 col-sm-7 col-13 mb-5">
      <div class="card shadow rounded">
        <div class="card-body" id="{{$grado->ID_GR}}">
          <div class="text-center">
            <div class="align-self-center">
              <br>
              @php
              echo $grado->ICONO;
              @endphp
            </div>
            @if ($opf==1)      
            <div class="text-center">
              <a type="button" wire:click="mostrar_m('{{$grado->ID_GR}}','{{$grado->GRADO}}','{{$seccion->SECCION}}','{{$seccion->ID_SC}}',2)">
                <p>{{$grado->GRADO}} {{$seccion->SECCION}}</p>
              </a>
            </div>
            @elseif($opf==2)
            <div class="text-center">
              <a type="button" wire:click="mostrar_mef('{{$grado->ID_GR}}','{{$grado->GRADO}}','{{$seccion->SECCION}}','{{$seccion->ID_SC}}',6)">
                <p>{{$grado->GRADO}} {{$seccion->SECCION}}</p>
              </a>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
    @endif

    @endforeach
    @endforeach



  </div>