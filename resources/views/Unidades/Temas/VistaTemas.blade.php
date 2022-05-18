@foreach ($temas as $tema)
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
  @include('Unidades.Temas.edit')
  <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#edittema">  Editar </button></div>
</div>
</div>

@endforeach
