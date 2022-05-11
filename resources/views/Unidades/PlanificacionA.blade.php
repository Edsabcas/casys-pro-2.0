<div class="card ">
    <td>
        @include('Unidades.ModalPlanificacion')
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#plan" id=plan> Crear Planificación </button>
      </td>
        <div class="align-items-center card-body  ">             
          <br>
          @include('Unidades.VistaPlan')
        </div>
      </div>