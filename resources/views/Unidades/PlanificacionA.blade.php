<div class="card ">
    <td>
        @include('Unidades.ModalPlanificacion')
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#plan" id=plan> Crear Planificación </button>
      </td>
        <div class="card-body  ">
          <h5 class="card-title">Materia:{{$NOMBRE_MATERIA}}</h5>
          <p class="card-text">Maestro: {{$ID_DOCENTE}}</p>
          
          <br>
          <br>
          <br>
          @include('Unidades.VistaPlan')
        </div>
      </div>