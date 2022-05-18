
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
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#plan"  disabled> Crear Planificación </button>
        @else
        @include('Unidades.ModalPlanificacion')
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#plan" > Crear Planificación </button>
        @endif
      </td>
      @foreach($PlanUnion as $PlanUni)
        <div class="align-items-center card-body  ">             
          <br>
          @include('Unidades.VistaPlan')
          <br>
          <br>
          @include('Unidades.modalPlanificacion')
          <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#plan" wire:click='editp({{$PlanUni->ID_PLAN}})'> Editar </button>
        </div>
      </div>
     @endforeach 