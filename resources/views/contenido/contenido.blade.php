
<div class="card shadow rounded">
  <div class="text-center">
    <br>
    <h1 style="color: #3a3e7b"><strong>GRADOS</strong></h1>
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
                <p>{{$grado->GRADO}}{{$seccion->SECCION}}</p>
              </a>
            </div>
            @elseif($opf==2)
            <div class="text-center">
              <a type="button" wire:click="mostrar_mef('{{$grado->ID_GR}}','{{$grado->GRADO}}','{{$seccion->SECCION}}','{{$seccion->ID_SC}}',6)">
                <p>{{$grado->GRADO}}{{$seccion->SECCION}}</p>
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



    @endif

  </div>