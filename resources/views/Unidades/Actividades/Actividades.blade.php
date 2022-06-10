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

<div class="table-responsive shadow rounded">
  <form  wire:submit.prevent='notas1'>
    <table class="table table-light table-bordered">
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
          @csrf
        @foreach($estu as $est)
        <tr>
          <th>{{$est->TB_INFO_NOMBRE}}</th> 

          @foreach($notas as $nota)
          @if($nota->id==$est->id)
          <div class="md-form w-30">
          <input type="hidden" name="idnota[]" value="{{$nota->ID_NOTA}}"/>
          <th>
            <input type="text" class="input" id="exampleForm{{$nota->ID_NOTA}}" value="{{$nota->NOTA}}" name="nota[]"  autocomplete="off" tabindex="10"/>
          </th>
        </div>
        @endif  
          @endforeach 
        </tr>
        @endforeach
    
      </tbody>

    </table>
    

    <script>
      function llamar(){
        $.ajax({url:"ContenidoComponent.php", success:function(notas1){
        $("div").text(notas1);}
        })
    }
      </script>
    <input class="btn btn-pre2" type="submit" onclick='llamar()' value="Guardar"/>
    <div></div>
    <br>
  </form>
  </div>


