<div class="card ">
  <br>
  <h1 style="color: #a4cb39"><strong>UNIDAD 1</strong></h1>
  <hr>
      <div class="card-body">
        <h5 class="card-title">Materia: <strong>{{$NOMBRE_MATERIA}}</strong></h5>
        <h5 class="card-text">Maestro: <strong>{{$ID_DOCENTE}}</strong></h5>
        @isset($restriccion)   
        <td>
          @if($restriccion==1)
            @include('Unidades.Temas.modaltemas')
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tema" id=tema disabled> Temas </button>
    
              @include('Unidades.Actividades.modal_actividades')
              <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" disabled> Crear Actividades </button>
              
              <a wire:click='vista_a("4")' class="btn btn-success">Ver Actividades </a>
  
              <a wire:click='vista_t("5")' class="btn btn-success">Ver Temas </a>
          </td>
          @elseif($restriccion==0)
        <td>
          @include('Unidades.Temas.modaltemas')
          <button class="btn btn-success" wire:click='limpiar()' data-bs-toggle="modal" data-bs-target="#tema" id=tema> Temas </button>
  
            @include('Unidades.Actividades.modal_actividades')
            <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" Wire:Click="limpiar_act"> Crear Actividades </button>            
            <a wire:click='vista_a("4")' class="btn btn-success">Ver Actividades </a>

            <a wire:click='vista_t("5")' class="btn btn-success">Ver Temas </a>
        </td>
        @endif
        @endisset
        <br>
        <br>
        <br>
        @include('Unidades.Actividades.Actividades')
      </div>
    </div>

