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
        @php
          $cero=0;
          $cantidad_estudiantes=count($estu);
          $cantidad_actividades=count($actividades);
          $matriz= array();
          $nombres_matriz= array();
          $nombres_matriz2= array();
          foreach ($estu as $est) {
            $nombre_matriz[]=$est->TB_INFO_NOMBRE;
          }
          foreach ($actividades as $activi) {
            $nombre_matriz2[]=$activi->ID_ACTIVIDADES;
          }

            for ($i=0; $i < $cantidad_estudiantes; $i++) { 
              $matriz=array($nombre_matriz[$i]);
              for ($i2=1; $i2 <=$cantidad_actividades; $i2++){
                $matriz[$i][$i2]=$nombre_matriz2[$i2-1];
                //$matriz[$i][$cero]=$nombres_matriz[$i];
              }
              
            }
          
          print_r($matriz);
          
        @endphp
         
        @foreach($estu as $est)
       
        <tr>
          
          <th>{{$est->TB_INFO_NOMBRE}}</th> 
          @foreach($actividades as $activi)
          <div class="md-form w-30">
          <th><input type="text" class="input" id="exampleForm{{$est->TB_INFO_NOMBRE}}{{$activi->ID_ACTIVIDADES}}" wire:model='nota{{$est->TB_INFO_NOMBRE}}{{$activi->ID_ACTIVIDADES}}' placeholder="nota" autocomplete="off" tabindex="10"></th>
          @endforeach
          </div>
          
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>


