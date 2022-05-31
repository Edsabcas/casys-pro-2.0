<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    @if($op2==null)
    <li class="breadcrumb-item"><a href="/Contenidos">Grados</a></li>
    @elseif($op2==1)
    <li class="breadcrumb-item"><a href="/Contenidos">Grados</a></li>
    <li class="breadcrumb-item"><a href="#" wire:click='paginacion("1")'>Materias</a></li>
    @elseif($op2==2)
    <li class="breadcrumb-item"><a href="/Contenidos">Grados</a></li>
    <li class="breadcrumb-item"><a href="#" wire:click='paginacion("1")'>Materias</a></li>
    <li class="breadcrumb-item"><a href="#" wire:click='paginacion("2")'>Unidades</a></li>
    @elseif($op2==3)
    <li class="breadcrumb-item"><a href="/Contenidos">Grados</a></li>
    <li class="breadcrumb-item"><a href="#" wire:click='paginacion("1")'>Materias</a></li>
    <li class="breadcrumb-item"><a href="#" wire:click='paginacion("2")'>Unidades</a></li>
    <li class="breadcrumb-item"><a href="#" wire:click='paginacion("3")'>Actividades</a></li>
    @elseif($op2==4)
    <li class="breadcrumb-item"><a href="/Contenidos">Grados</a></li>
    <li class="breadcrumb-item"><a href="#" wire:click='paginacion("1")'>Materias</a></li>
    <li class="breadcrumb-item"><a href="#" wire:click='paginacion("2")'>Unidades</a></li>
    <li class="breadcrumb-item"><a href="#" wire:click='paginacion("4")'>Temas</a></li>
    @endif
  </ol>
</nav>
@if($op2==null)
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
            <div class="text-center">
              <a type="button" wire:click="mostrar_m('{{$grado->ID_GR}}','{{$grado->GRADO}}','{{$seccion->SECCION}}','{{$seccion->ID_SC}}',1)">
                <p>{{$grado->GRADO}}{{$seccion->SECCION}}</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif

    @endforeach
    @endforeach

    @elseif($op2!=null && $op2==1)
    @include('Temas.Pre_kinder')
    @elseif($op2!=null && $op2==2)
    @include('Unidades.Unidad1')
    @elseif($op2!=null && $op2==3)
    @include('Unidades.Actividades.VistaActividades');
    @elseif($op2!=null && $op2==4)
    @include('Unidades.Temas.VistaTemas');
    @endif

  </div>