<div class="card ">
  <h6>Unidad 1</h6>
      <div class="card-body  ">
        <h5 class="card-title">Materia:{{$NOMBRE_MATERIA}}</h5>
        <p class="card-text">Maestro: {{$ID_DOCENTE}}</p>
        <td>
          @include('Unidades.Temas.modaltemas')
          <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tema" id=tema> Crea Temas </button>
  
            @include('Unidades.Actividades.modal_actividades')
            <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Crear Actividades </button>
            
            @include('Unidades.Actividades.VistaActividades')
            <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Ver Actividades </button>

            @include('Unidades.Temas.VistaTemas')
            <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Ver Temas </button>
        </td>
        <br>
        <br>
        <br>
        @include('Unidades.Actividades.Actividades')
      </div>
    </div>


