<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
            
  $(document).on('click', '#Editar', function() {

$('#Editact').modal('show');

});



$(document).on('click', '#val', function() {

$('#exampleModal1').modal('show');

});

</script>
@foreach ($actividades as $actividad)
<div class="card border-primary mb-3" style="max-width: 70rem;" >
    <div class="card-body">

 <div class="accordion accordion-flush" id="accordion{{$actividad->ID_ACTIVIDADES}}">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-heading{{$actividad->ID_ACTIVIDADES}}">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$actividad->ID_ACTIVIDADES}}" aria-expanded="false" aria-controls="flush-collapse{{$actividad->ID_ACTIVIDADES}}">
          {{$actividad->NOMBRE_ACTIVIDAD}}
          <br>
          <br>
          
          Fecha de Creación:{{$actividad->fecha_cr}} <br> <br> Fecha de Entrega:{{$actividad->fecha_entr}}
        </button>
      </h2>
      <div id="flush-collapse{{$actividad->ID_ACTIVIDADES}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$actividad->ID_ACTIVIDADES}}" data-bs-parent="#accordionFlush{{$actividad->ID_ACTIVIDADES}}">
        <h6 class="accordion-body">Materia:{{$NOMBRE_MATERIA}} <br> <p class="card-text">Maestro: {{$ID_DOCENTE}}</p> </h6>
        
        <div class="accordion-body">Descripcion: {{$actividad->descripcion}} <br> <br> Creado por: {{$actividad->name}}
        <br> <br>
        @php
              $foo = 0;
              $vid = 0;
              $pdf = 0;
               if (strpos($actividad->archivos, '.jpg' ) !== false || strpos($actividad->archivos, '.png' ) !== false || strpos($actividad->archivos, '.jpeg' ) !== false) 
               { $foo=1; }
               elseif(strpos($actividad->archivos, '.mp4' ) !== false || strpos($actividad->archivos, '.mpeg' ) !== false)
               {$vid=1;}
               elseif(strpos($actividad->archivos, '.pdf' ) !== false)
               {$pdf=1;}
        @endphp
         @if($foo==1)
         <div class="offset-4 col-10">
         <img src="imagen/actividades/{{$actividad->archivos}}" height="360" weight="360" class="card" alt="...">
         </div>
         @endif
         @if($vid==1)
         <video height="500" weight="500" class="card-img-top" alt="..." controls>
           <source src="imagen/videos/{{$actividad->archivos}}"  type="video/mp4">
             <source src="imagen/videos/{{$actividad->archivos}}"  type="video/ogg">
         </video>
         @endif
         @if($pdf==1)
         <iframe style="width: 49rem; text-align:center" width="400" height="400" src="/imagen/pdf_act/{{$actividad->archivos}}" frameborder="0"></iframe>
         @endif
    </div>
      </div>
    </div>
  </div>
  @include('Unidades.Actividades.modaledit_act')
  <button class="btn btn-editb" id="Editar"  wire:click='edita({{$actividad->ID_ACTIVIDADES}})'>  Editar </button>            



  @include('Unidades.Actividades.modelimiaract')
  <button class="btn btn-secondary" style="border-radius: 12px;" data-bs-toggle="modal" data-bs-target="#eliminaract">  Eliminar </button>
</div>
</div>

@endforeach
