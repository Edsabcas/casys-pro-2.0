<div class="table-responsive">
    <table class="table table-info  table-striped table-hover table-bordered">
      <thead>
          <tr>
              <th>Alumno</th>
              @foreach ($actividades as $actividad)
              <th>{{$actividad->ID_ACTIVIDADES}}</th>
              @endforeach
          </tr>
      </thead>
      <tbody>
        @foreach($asignaciones as $asignacion)
        <tr>
          <th>{{$asignacion->TB_INFO_NOMBRE}}</th> 
          <th><input type="text" class="form-control" id="exampleForm{{$asignacion->ID_E}}" placeholder="MateriaEjemplo" wire:click='nota'></th>
        </tr>
@endforeach
      </tbody>
    </table>
  </div>


