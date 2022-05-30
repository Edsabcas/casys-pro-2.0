<div class="card ">
  <br>
  <h1 style="color: #a4cb39"><strong>UNIDAD 1</strong></h1>
  <hr>
      <div class="card-body">
        <h5 class="card-title">Materia: <strong>{{$NOMBRE_MATERIA}}</strong></h5>
        <h5 class="card-text">Maestro: <strong>{{$ID_DOCENTE}}</strong></h5>
        <td>
          @include('Unidades.Temas.modaltemas')
          <button class="btn btn-success" wire:click='limpiar()' data-bs-toggle="modal" data-bs-target="#tema" id=tema> Temas </button>
  
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

