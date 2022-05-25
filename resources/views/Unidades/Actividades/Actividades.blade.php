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
          <div class="md-form w-30">
          <th><input type="text" class="input" id="exampleForm{{$est->TB_INFO_NOMBRE}}{{$activi->ID_ACTIVIDADES}}"  wire:model="nota.{{$est->TB_INFO_NOMBRE}}{{$activi->ID_ACTIVIDADES}}" value="{{$activi->ID_ACTIVIDADES}}" wire:click='nota("{{$activi->ID_ACTIVIDADES}}","{{$est->TB_INFO_NOMBRE}}")' placeholder="nota" autocomplete="off" tabindex="10"></th>
          @endforeach
          </div>
          
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>


