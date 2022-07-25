<div class="container">
    @if(Session::get('op')=='asignacionestudiantes')
    <div class="container">
        @include('asignaciones.Asignación Estudiantes.asignaciones')
    </div>
    @elseif(Session::get('op')=='asignacionestudiantespresencial')
    <div class="container">
        @include('asignaciones.Asignación Estudiantes.asignarpresencial')
    </div>
    @elseif(Session::get('op')=='asignacionestudiantesvirtual')
    <div class="container">
        @include('asignaciones.Asignación Estudiantes.asignarvirtual')
    </div>
    @endif
</div>
