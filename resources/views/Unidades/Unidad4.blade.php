<div class="card ">
  <h6>Unidad 4</h6>
      <div class="card-body  ">
        <h5 class="card-title">Materia:{{$NOMBRE_MATERIA}}</h5>
        <p class="card-text">Maestro: {{$ID_DOCENTE}}</p>
        <td>
          @include('Unidades.modaltemas')
          <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tema" id=tema> Temas </button>
  
            @include('Unidades.modal_actividades')
            <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Actividades </button>

            <a wire:click='vista_a("3")' class="btn btn-success">Ver Actividades </a>
        </td>
        <br>
        <br>
        <br>
        @include('Unidades.Actividades')
      </div>
    </div>