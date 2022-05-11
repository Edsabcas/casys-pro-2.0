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
    @endif
  </ol>
</nav>
@if($op2==null)
<div class="card">
  <h5 class="card-header">Grados</h5>
  <div class="card-body">

    
    @foreach($grados as $grado)
    @foreach($secciones as $seccion)
    @if($grado->ID_SC==$seccion->ID_SC)
    <a wire:click='mostrar_m("{{$grado->ID_GR}}","{{$grado->GRADO}}","{{$seccion->SECCION}}","{{$seccion->ID_SC}}"1")' class="btn btn-success">{{$grado->GRADO}} {{$seccion->SECCION}}
    @endif
    @endforeach
    </a>
  @endforeach
   @elseif($op2!=null && $op2==1)
   @include('Temas.Pre_kinder')

   @elseif($op2!=null && $op2==2)
   @include('Unidades.Unidad1')
   @endif

   
 </div>
</div>