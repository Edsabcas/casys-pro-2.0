<div class="card ">
  <h1 style="color: #a4cb39"><strong>{{$nombreu}}</strong></h1>
  <div class="card-body  ">
        <h5 class="card-title">Materia:{{$NOMBRE_MATERIA}}</h5>
        <p class="card-text">Maestro: {{$ID_DOCENTE}}</p>
          @isset($restriccion)   
        <td> 
          @if($restriccion==1)
          @include('Unidades.Temas.modal_tem_n')
          <button class="btn btn-success" wire:click='limpiar2()' data-bs-toggle="modal" data-bs-target="#tema_n" id=tema disabled>Temas </button>
  
          @include('Unidades.ActividadesN.modal_actividades_n')

          <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#modal_act_n" Wire:Click="limpiar_act2" disabled>Crear Actividades </button>
            <a wire:click='vista_a("5")' class="btn btn-success">Ver Actividades </a>

            <a wire:click='vista_t("6")' class="btn btn-success">Ver Temas </a>
          </td>
          @elseif($restriccion==0)
          @include('Unidades.Temas.modal_tem_n')
          <button class="btn btn-success" wire:click='limpiar2()' data-bs-toggle="modal" data-bs-target="#tema_n" id=tema>Temas </button>
  
          @include('Unidades.ActividadesN.modal_actividades_n')

          <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#modal_act_n" Wire:Click="limpiar_act2">Crear Actividades </button>
            <a wire:click='vista_a("5")' class="btn btn-success">Ver Actividades </a>

            <a wire:click='vista_t("6")' class="btn btn-success">Ver Temas </a>
        </td>
        @endif
        @endisset
        <br>
        <br>
        <br>
        @include('Unidades.ActividadesN.Act_n')
      </div>
    </div>
