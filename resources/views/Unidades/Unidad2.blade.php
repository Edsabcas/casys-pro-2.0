<div class="card ">
  <h6>Unidad 2</h6>
      <div class="card-body  ">
        <h5 class="card-title">Materia:{{$NOMBRE_MATERIA}}</h5>
        <p class="card-text">Maestro: {{$ID_DOCENTE}}</p>
        @isset($restriccion)   
        <td>
          @if($restriccion==1)
            @include('Unidades.Temas.modaltemas')
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tema" id=tema disabled> Temas </button>
    
              @include('Unidades.Actividades.modal_actividades')
              <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" disabled> Crear Actividades </button>
              
              <a wire:click='vista_a("3")' class="btn btn-success">Ver Actividades </a>
  
              <a wire:click='vista_t("4")' class="btn btn-success">Ver Temas </a>
          </td>
          @elseif($restriccion==0)
        <td>
          @include('Unidades.Temas.modaltemas')
          <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tema" id=tema> Temas </button>
  
            @include('Unidades.Actividades.modal_actividades')
            <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Crear Actividades </button>
            
            <a wire:click='vista_a("3")' class="btn btn-success">Ver Actividades </a>

            <a wire:click='vista_t("4")' class="btn btn-success">Ver Temas </a>
        </td>
        @endif
        @endisset
        <br>
        <br>
        <br>
        @include('Unidades.Actividades.Actividades')
      </div>
    </div>

