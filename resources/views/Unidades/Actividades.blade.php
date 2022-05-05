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
          <th>{{$union->NOMBRE_ESTUDIANTE}}</th> 
          <th><input type="text" class="form-control" id="exampleForm{{$union->ID_E}}" placeholder="MateriaEjemplo" wire:click='nota'></th>
        </tr>
@endforeach
      </tbody>
    </table>
  </div>


