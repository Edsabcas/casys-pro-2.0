<script>$(function() 
{
  $('.input').keyup(function(e) {
    if(e.keyCode==37)//38 para arriba
      mover(e,-1);
    if(e.keyCode==38)//38 para arriba
      mover(e,-2);
    if(e.keyCode==39)//40 para abajo
      mover(e,1);
    if(e.keyCode==40)//38 para arriba
      mover(e,2);
  });
});


function mover(event, to) {
   let list = $('input');
   let index = list.index($(event.target));
   index = (index + to) % list.length;
   list.eq(index).focus();
}
</script>

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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        @foreach($estu as $est)
       
        <tr>
          
          <th>{{$est->TB_INFO_NOMBRE}}</th> 
          @foreach($actividades as $activi)

          @foreach($notas as $nota)
          @if($nota->ID_ACTIVIDADES == $activi->ID_ACTIVIDADES)
          <div class="md-form w-30">
          <th><input type="text" class="input" id="exampleForm{{$est->id}}{{$activi->ID_ACTIVIDADES}}" value="{{$nota->NOTA}}"  wire:model="nota.{{$est->id}}{{$activi->ID_ACTIVIDADES}}.name"  wire:click='nota("{{$activi->ID_ACTIVIDADES}}","{{$est->id}}")' placeholder="nota" autocomplete="off" tabindex="10"></th>
          @endif
          @endforeach
          @endforeach 
          </div>
          
        </tr>
        @endforeach
        @if($prueba2!=null)
        <p>{{$prueba2}}</p>
        @endif
      </tbody>
    </table>
  </div>


