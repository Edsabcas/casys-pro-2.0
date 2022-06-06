<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
            
  $(document).on('click', '#Crear', function() {

$('#exampleModal').modal('show');

});



$(document).on('click', '#val', function() {

$('#exampleModal1').modal('show');

});

</script>


<div class="card ">
  <br>
  <h1 style="color: #a4cb39"><strong>UNIDAD 3</strong></h1>
  <hr>
      <div class="card-body">
        <div class="container">
          <div class="row">
            <div class="col">
              <h5 class="card-title">Materia: <strong>{{$NOMBRE_MATERIA}}</strong></h5>
            </div>
            <div class="col">
              <h5 class="card-text">Maestro: <strong>{{$ID_DOCENTE}}</strong></h5>
            </div>
          </div>
          <br>
        @isset($restriccion)   
        <td>
          @if($restriccion==1)
            @include('Unidades.Temas.modaltemas')
            <button class="btn btn-editb" data-bs-toggle="modal" data-bs-target="#tema" id=tema disabled> Temas </button>
    
<<<<<<< HEAD
              @include('Unidades.Actividades.modal_actividades')
              <button class="btn btn-editb"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" disabled> Crear Actividades </button>
=======
            @include('Unidades.Actividades.modal_actividades')
              <button class="btn btn-success" id="Crear" data-bs-toggle="modal" data-bs-target="#staticBackdrop" disabled> Crear Actividades </button>
              
>>>>>>> 7caa5eee4f85b419fa6b47cdfb342d4e72174bd2
              
              <a wire:click='vista_a("4")' class="btn btn-editb">Ver Actividades </a>
  
              <a wire:click='vista_t("5")' class="btn btn-editb">Ver Temas </a>
          </td>
          @elseif($restriccion==0)
        <td>
          @include('Unidades.Temas.modaltemas')
<<<<<<< HEAD
          <button class="btn btn-editb" wire:click='limpiar()' data-bs-toggle="modal" data-bs-target="#tema" id=tema> Temas </button>
  
            @include('Unidades.Actividades.modal_actividades')

            <button class="btn btn-editb"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" Wire:Click="limpiar_act"> Crear Actividades </button>            
            <a wire:click='vista_a("4")' class="btn btn-editb">Ver Actividades </a>
=======
          <button class="btn btn-success" wire:click='limpiar()' data-bs-toggle="modal" data-bs-target="#tema" id=tema>Temas </button>
  
            @include('Unidades.Actividades.modal_actividades')

            <button class="btn btn-success"  id="Crear" data-bs-toggle="modal" data-bs-target="#staticBackdrop" Wire:Click="limpiar_act"> Crear Actividades </button>
            
            <a wire:click='vista_a("4")' class="btn btn-success">Ver Actividades </a>
>>>>>>> 7caa5eee4f85b419fa6b47cdfb342d4e72174bd2

            <a wire:click='vista_t("5")' class="btn btn-editb">Ver Temas </a>
        </td>
        @endif
        @endisset
        <br>
        <br>
        <br>
        @include('Unidades.Actividades.Actividades')
      </div>
    </div>

