<div class="card ">
    <h6>{{$nombreu}}</h6>
        <div class="card-body  ">
          <h5 class="card-title">Materia:{{$NOMBRE_MATERIA}}</h5>
          <p class="card-text">Maestro: {{$ID_DOCENTE}}</p>
          <td>
            @include('Unidades.modal_tem_n')
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tema_n" id=tema> Temas </button>
    
              @include('Unidades.modal_actividades_n')
              <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#modal_act_n"> Actividades </button>
          </td>
          <br>
          <br>
          <br>
        </div>
      </div>