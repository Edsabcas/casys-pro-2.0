<div class="table-responsive">
    <table class="table table-info  table-striped table-hover table-bordered">
      <thead>
        

        
          <tr>
              <th>Alumno</th>
              @foreach ($actividades as $activi)
              <th>{{$activi->NOMBRE_ACTIVIDAD}}</th>
              @endforeach
          </tr>
        
        
      </thead>
     
      <tbody>
        @foreach($estu as $est)
        <tr>
          
          <th>{{$est->TB_INFO_NOMBRE}}</th> 
          @foreach($actividades as $activi)
          <th><input type="number" class="form-control" id="exampleForm{{$est->TB_INFO_NOMBRE}}" wire:model='nota' placeholder="Nota" wire:click='nota("{{$activi->ID_ACTIVIDADES}}")'></th>
          @endforeach
          
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>


