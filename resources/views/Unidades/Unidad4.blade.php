<div class="card ">
  <h6>Unidad4</h6>
      <div class="card-body  ">
        <h5 class="card-title">Materia:{{$NOMBRE_MATERIA}}</h5>
        <p class="card-text">Maestro: {{$ID_DOCENTE}}</p>
        <td>
          <button class="btn btn-success" wire:click=''> Temas </button>
  
            @include('Unidades.modal_actividades')
            <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Actividades </button>
        </td>
        <div class="row">
          <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
              <div class="card card-body  ">
                Contenidos              
              </div>
            </div>
            <div class="collapse multi-collapse" id="multiCollapseExample2">
              <div class="card card-body ">
                Actividades
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>