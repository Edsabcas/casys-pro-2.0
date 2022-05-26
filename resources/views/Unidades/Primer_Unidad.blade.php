<div class="card ">
  <h6>Unidad 1</h6>
      <div class="card-body  ">
        <h5 class="card-title">Materia:{{$NOMBRE_MATERIA}}</h5>
        <p class="card-text">Maestro: {{$ID_DOCENTE}}</p>
        <td>
          @include('Unidades.Temas.modaltemas')
          <button class="btn btn-pre2" wire:click='limpiar()' data-bs-toggle="modal" data-bs-target="#tema" id=tema> Temas </button>
  
            @include('Unidades.Actividades.modal_actividades')
            <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" Wire:Click="limpiar_act"> Crear Actividades </button>            
            <a wire:click='vista_a("3")' class="btn btn-pre2">Ver Actividades </a>

            <a wire:click='vista_t("4")' class="btn btn-pre2">Ver Temas </a>
        </td>
        <br>
        <br>
        <br>
        @include('Unidades.Actividades.Actividades')
      </div>
    </div>

