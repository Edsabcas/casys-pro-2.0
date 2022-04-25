
@if($op2!=null && $op2==1)
<h3>CURSOS DE {{$nombre_g}} {{$nombre_s}} JORNADA MATUTINA</h3>
<H6>Seleccione un curso para ver el material de apoyo compartido por el maestro o maestra</H6>
<div class="table-responsive">
    <table class="table table-info  table-striped table-hover table-bordered">
      <thead>
          <tr>
              <th>Materia</th>
              <th>Accion</th>
          </tr>
      </thead>
      <tbody>
        @foreach($uniones as $union)
        <tr>
          <th>{{$union->NOMBRE_MATERIA}}</th> 
      <th>
      <span>
        @foreach($materias as $materia)
        @if($union->ID_MATERIA==$materia->ID_MATERIA)
        <a wire:click='mostrar_u("{{$materia->ID_MATERIA}}","{{$materia->NOMBRE_MATERIA}}","{{$union->NOMBRE_MAESTROS}}","2")' class="btn btn-success">Temas
          @endif
          @endforeach
        </a>
      </span>
      </th>
</tr>
@endforeach
      </tbody>
    </table>
  </div>
@elseif($op2!=null && $op2==2)
@include('Unidades.Unidad1')
@endif


