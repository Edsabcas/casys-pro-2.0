<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
            
  $(document).on('click', '#Editaract', function() {

$('#Editact').modal('show');

});



$(document).on('click', '#val1', function() {

$('#exampleModaledit1').modal('show');

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

  <button class="btn btn-editb"  id="val" data-bs-toggle="modal" data-bs-target="#editaractividades"   wire:click='edita({{$actividad->ID_ACTIVIDADES}})'> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
  </svg> </button>



  @include('Unidades.Actividades.modelimiaract')
  <button class="btn btn-secondary" style="border-radius: 12px;" data-bs-toggle="modal" data-bs-target="#eliminaract"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
  </svg> </button>
</div>
</div>

@endforeach
