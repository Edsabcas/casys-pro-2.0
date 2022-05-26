<style>
.badge{
  position: absolute;
  right: 0px;
  top: 0px;
  padding: 12px 15px;
  border-radius: 0 0 0 26px;
  font-size: 14px;
  }
</style>

@if($op2!=null && $op2==1)
<div class="card shadow rounded">
  <div class="text-center">
    <br>
    <h1 style="color: #3a3e7b"><strong>CURSOS DE {{$nombre_g}} {{$nombre_s}} - JORNADA MATUTINA</strong></h1>
    <p style="color:black"><strong>Seleccione un curso para ver el material de apoyo compartido por el maestro o maestra.</strong></p>
    <br>
  </div>
</div>

<div class="container  mt-5 mb-5">
  @foreach($uniones as $union)
  @foreach($materias as $materia)
  @if($union->ID_MATERIA==$materia->ID_MATERIA)
  <div class="row">
    <div class="col-xl-4 col-sm-7 col-13 mb-5">
      <div class="card">
        <div class="card-body">
          <span class="badge bg-warning">*</span>
          <h3 class="card-title">{{$union->NOMBRE_MATERIA}}</h3>
          <a wire:click='mostrar_u("{{$materia->ID_MATERIA}}","{{$materia->NOMBRE_MATERIA}}","{{$union->NOMBRE_DOCENTE}}","2")' class="btn btn-warning">Temas</a>
          </div>
      </div>
    </div>
  </div>
  @endif
  @endforeach
  @endforeach
@elseif($op2!=null && $op2==2)
@include('Unidades.Unidad1')
@endif


