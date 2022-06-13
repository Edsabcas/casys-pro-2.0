<div class="table-responsive shadow rounded">
    <table class="table table-light table-bordered">
      <thead>
        

        
          <tr>
              <th>Alumno</th>
              @foreach ($actividades2 as $activi2)
              <th>Actividad {{$activi2->NOMBRE_ACTIVIDAD}}</th>
              @endforeach
          </tr>
        
        
      </thead>
     
      <tbody>
        @foreach($estu as $est)
        <tr>
          
          <th>{{$est->TB_INFO_NOMBRE}}</th> 
          @foreach($actividades2 as $activi2)
          <th><input type="number" class="form-control" id="exampleForm{{$est->TB_INFO_NOMBRE}}" placeholder="Nota" wire:click='nota("{{$activi2->ID_ACTIVIDADES}}")'></th>
          @endforeach
          
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>


