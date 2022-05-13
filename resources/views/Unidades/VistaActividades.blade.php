@foreach ($actividades as $actividad)
<div class="card border-primary mb-3" style="max-width: 55rem;" >
    <div class="card-body">

 <div class="accordion accordion-flush" id="accordion{{$actividad->ID_ACTIVIDADES}}">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-heading{{$actividad->ID_ACTIVIDADES}}">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$actividad->ID_ACTIVIDADES}}" aria-expanded="false" aria-controls="flush-collapse{{$actividad->ID_ACTIVIDADES}}">
          {{$actividad->NOMBRE_ACTIVIDAD}}
          <br>
          <br>
          
          Fecha de Creación:{{$actividad->fecha_cr}} <br> <br> Fecha de Entrega:{{$actividad->fecha_entr}}
        </button>
      </h2>
      <div id="flush-collapse{{$actividad->ID_ACTIVIDADES}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$actividad->ID_ACTIVIDADES}}" data-bs-parent="#accordionFlush{{$actividad->ID_ACTIVIDADES}}">
        <div class="accordion-body">Descripcion:{{$actividad->descripcion}} <br> <br> Creado por:{{$actividad->name}}
        <br> <br> {{$actividad->archivos}}</div>
      </div>
    </div>
  </div>

</div>
</div>
@endforeach