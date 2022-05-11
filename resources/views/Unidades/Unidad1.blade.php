<div class="btn-group btn-group-lg"  role="group" aria-label="Basic outlined example">
  <a wire:click="validar_u('5')" class="btn btn-success" value="5">Planificación Anual</a>
  <a wire:click="validar_u('1')" class="btn btn-success" value="1">Unidad 1</a>
  <a wire:click="validar_u('2')" class="btn btn-success" value="2">Unidad 2</a>
  <a wire:click="validar_u('3')" class="btn btn-success" value="3">Unidad 3</a>
  <a wire:click="validar_u('4')" class="btn btn-success" value="4">Unidad 4</a>

    @foreach($unidades as $unidad)
    <a wire:click='validar_u("6")' class="btn btn-success">{{$unidad->NOMNBRE_UNIDAD}}
    </a>
    @endforeach
    </div>


  
    @if($vista==1)

    @include('Unidades.Primer_Unidad');
  
  @endif
  
  @if($vista==2)
  
    @include('Unidades.Unidad2');
  
  @endif
  
  @if($vista==3)
  
    @include('Unidades.Unidad3');
  
  @endif

  @if($vista==4)
  
  @include('Unidades.Unidad4');

  @endif

  @if($vista==5)
  
  @include('Unidades.PlanificacionA');

  @endif

  @if($vista==6)
  
  @include('Unidades.Unidades_n');

  @endif