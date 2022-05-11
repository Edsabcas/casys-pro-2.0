<div class="card border-dark mb-3" style="max-width: 50rem;">
    <div class="card-header">Planificacion {{$NOMBRE_MATERIA}}</div>
    <div class="card-body text-dark">
     @foreach($PlanUnion as $PlanU)
      <p class="card-text">{{$PlanU->DESCRIPCION}}</p>
      @endforeach
    </div>
  </div>