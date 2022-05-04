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
        @foreach($uniones as $union)
        <tr>
          <th>{{$union->NOMBRE_MATERIA}}</th> 
          <th></th>
        </tr>
@endforeach
      </tbody>
    </table>
  </div>


