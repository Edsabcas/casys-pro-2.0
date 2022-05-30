<div class="card ">
  <h6>{{$nombreu}}</h6>
  <div class="card-body  ">
        <h5 class="card-title">Materia:{{$NOMBRE_MATERIA}}</h5>
        <p class="card-text">Maestro: {{$ID_DOCENTE}}</p>
        <td>
          @include('Unidades.Temas.modal_tem_n')
          <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tema_n" id=tema> Temas </button>
  
          @include('Unidades.ActividadesN.modal_actividades_n')
          <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#modal_act_n"> Actividades </button>
            <a wire:click='vista_a("3")' class="btn btn-success">Ver Actividades </a>

            <a wire:click='vista_t("4")' class="btn btn-success">Ver Temas </a>
        </td>
        <br>
        <br>
        <br>
        @include('Unidades.Actividades.Actividades')
      </div>
    </div>


<div class="card ">
    <h6>{{$nombreu}}</h6>
        <div class="card-body  ">
          <h5 class="card-title">Materia:{{$NOMBRE_MATERIA}}</h5>
          <p class="card-text">Maestro: {{$ID_DOCENTE}}</p>
          <td>
            @include('Unidades.Temas.modal_tem_n')
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tema_n" id=tema> Temas </button>
    
              @include('Unidades.ActividadesN.modal_actividades_n')
              <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#modal_act_n"> Actividades </button>
          </td>
          <br>
          <br>
          <br>
          @include('Unidades.Actividades.Act_n')
        </div>
      </div>