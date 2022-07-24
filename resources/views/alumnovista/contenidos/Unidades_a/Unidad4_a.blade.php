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
  <h1 style="color: #a4cb39"><strong>UNIDAD 4</strong></h1>
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
        <td>

          @include('Unidades.Temas.temas_original')
          <button class="btn btn-editb" wire:click='limpiar()' data-bs-toggle="modal" data-bs-target="#tema" id=tema> Temas </button>
  
            @include('Unidades.Actividades.modal_actividades')

            <button class="btn btn-editb" id="Crear" Wire:Click="limpiar_act"> Crear Actividades </button>            
            <a wire:click='vista_a("4")' class="btn btn-editb">Ver Actividades </a>


            <a wire:click='vista_t("5")' class="btn btn-editb">Ver Temas </a>
        </td>
        <br>
        <br>
        <br>
      </div>
    </div>

