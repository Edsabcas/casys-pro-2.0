<div class="card ">
  <h6>Unidad 2</h6>
      <div class="card-body  ">
        <h5 class="card-title">Materia:{{$NOMBRE_MATERIA}}</h5>
        <p class="card-text">Maestro: {{$ID_DOCENTE}}</p>
        <td>
          @include('Unidades.modaltemas')
          <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tema" id=tema> Temas </button>
  
            @include('Unidades.modal_actividades')
            <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Actividades </button>

            @include('Unidades.VistaActividades')
            <button class="btn btn-success" data-bs-target="#staticBackdrop"> Ver Actividades </button>
        </td>
        <br>
        <br>
        <br>
        @include('Unidades.Actividades')
      </div>
    </div>