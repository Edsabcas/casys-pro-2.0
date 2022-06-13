<div class="card ">
  <br>
  <h1 style="color: #a4cb39"><strong>{{$nombreu}}</strong></h1>
  <hr>
  <div class="card-body  ">
    <div class="container">
      <div class="row">
        <div class="col">
          <h5 class="card-title">Materia: <strong>{{$NOMBRE_MATERIA}}</strong></h5>
        </div>
        <div class="col">
          <h5 class="card-text">Maestro: <strong>{{$ID_DOCENTE}}</strong></h5>
        </div>
      </div>
      <br>
          @isset($restriccion)   
        <td> 
          @if($restriccion==1)
          @include('Unidades.TemasN.modal_tem_n')
          <button class="btn btn-editb" wire:click='limpiar2()' data-bs-toggle="modal" data-bs-target="#tema_n" id=tema disabled>Temas </button>
  
          @include('Unidades.ActividadesN.modal_actividades_n')

          <button class="btn btn-editb"  data-bs-toggle="modal" data-bs-target="#modal_act_n" Wire:Click="limpiar_act2" disabled>Crear Actividades </button>
            <a wire:click='vista_a("5")' class="btn btn-editb">Ver Actividades </a>

            <a wire:click='vista_t("6")' class="btn btn-editb">Ver Temas </a>
          </td>
          @elseif($restriccion==0)
          @include('Unidades.TemasN.modal_tem_n')
          <button class="btn btn-editb" wire:click='limpiar2()' data-bs-toggle="modal" data-bs-target="#tema_n" id=tema>Temas </button>
  
          @include('Unidades.ActividadesN.modal_actividades_n')

          <button class="btn btn-editb"  data-bs-toggle="modal" data-bs-target="#modal_act_n" Wire:Click="limpiar_act2">Crear Actividades </button>
            <a wire:click='vista_a("5")' class="btn btn-editb">Ver Actividades </a>

            <a wire:click='vista_t("6")' class="btn btn-editb">Ver Temas </a>
        </td>
        @endif
        @endisset
        <br>
        <br>
        <br>
        @include('Unidades.ActividadesN.Act_n')
        <br>
      </div>
    </div>
