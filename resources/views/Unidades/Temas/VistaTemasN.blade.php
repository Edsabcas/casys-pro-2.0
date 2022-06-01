@foreach ($temas2 as $tema)
<div class="card border-primary mb-3" style="max-width: 70rem;" >
    <div class="card-body">

 <div class="accordion accordion-flush" id="accordion{{$tema->ID_TEMA}}">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-heading{{$tema->ID_TEMA}}">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$tema->ID_TEMA}}" aria-expanded="false" aria-controls="flush-collapse{{$tema->ID_TEMA}}">
          <strong>{{$tema->NOMBRE_TEMA}}</strong></button>
      </h2>
      <div id="flush-collapse{{$tema->ID_TEMA}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$tema->ID_TEMA}}" data-bs-parent="#accordionFlush{{$tema->ID_TEMA}}">
        <div class="accordion-body">Descripcion:{{$tema->DESCRIPCION}} <br> <br> Creado por:{{$tema->name}}
    </div>
      </div>
    </div>
  </div>
  @include('Unidades.Temas.modaltemas')
  <button class="btn btn-editb"  data-bs-toggle="modal" data-bs-target="#tema" wire:click='editt({{$tema->ID_TEMA}})'> Editar </button>
  
  @include('Unidades.Temas.modaleliminar')
  <button class="btn btn-secondary" Style="border-radius: 12px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$tema->ID_TEMA}}"> Eliminar </button>
</div>
</div>
@endforeach