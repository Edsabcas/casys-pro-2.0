<div class="table-responsive">
    <table class="table table-info  table-striped table-hover table-bordered">
      <thead>

        @foreach ($actividad as $activi)
          <tr>
              <th>Alumno</th>
              <th>{{$activi->ID_ACTIVIDADES}}</th>
          </tr>
        @endforeach
        
      </thead>
      <tbody>
        @foreach($estu as $est)
        <tr>
          <th>{{$est->TB_INFO_NOMBRE}}</th> 
          <th><input type="text" class="form-control" id="exampleForm{{$est->TB_INFO_NOMBRE}}" placeholder="Nota" wire:click='nota'></th>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>


