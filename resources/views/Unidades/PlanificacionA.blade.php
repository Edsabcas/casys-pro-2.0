
<div class="card ">
    <td>
      @php
          if (isset($PlanUnion)){
            $a=0;
            foreach ($PlanUnion as $Planuni) {
              $a=$a+1;
            }
          }
      @endphp
       @if($a>0)
        @include('Unidades.ModalPlanificacion')
        <button class="btn btn-pre2" data-bs-toggle="modal" data-bs-target="#plan"  disabled> Crear Planificación </button>
        @else
        @include('Unidades.ModalPlanificacion')
        <button class="btn btn-pre2" data-bs-toggle="modal" data-bs-target="#plan" > Crear Planificación </button>
        @endif
      </td>
      @foreach($PlanUnion as $PlanUni)
        <div class="align-items-center card-body  ">             
          <br>
          @include('Unidades.VistaPlan')
          <br>
          <br>
          @include('Unidades.modalPlanificacion')
          <button class="btn btn-editb"  data-bs-toggle="modal" data-bs-target="#plan" wire:click='editp({{$PlanUni->ID_PLAN}})'> Editar </button>

          @include('Unidades.modaleliminarp')
          <button class="btn btn-secondary" Style="border-radius: 12px;"  data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$PlanUni->ID_PLAN}}"> Eliminar </button>
        </div>
      </div>
     @endforeach 