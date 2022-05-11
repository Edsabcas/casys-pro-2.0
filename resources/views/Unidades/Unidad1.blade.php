<div class="btn-group btn-group-lg"  role="group" aria-label="Basic outlined example">
  <a wire:click="validar_u('5')" class="btn btn-success" value="5">Planificación Anual</a>

  @foreach($unidadesf as $unidadf)
  <a wire:click='validar_u()' class="btn btn-success">{{$unidadf->NOMBRE_DE_UNIDAD}}
  </a>
  @endforeach

    @foreach($unidades as $unidad)
    <a wire:click='validar_u()' class="btn btn-success">{{$unidad->NOMNBRE_UNIDAD}}
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