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
    @elseif(Session::get('op')=='verestudiantespresencial')
    <div class="container">
        @include('asignaciones.Asignación Estudiantes.panelgradoasignados')
    </div>
    @elseif(Session::get('op')=='verestudiantesvirtual')
    <div class="container">
        @include('asignaciones.Asignación Estudiantes.panelgradoasignadovirtual')
    </div>
    @elseif(Session::get('op')=='verestudiantesasignados')
    <div class="container">
        @include('asignaciones.Asignación Estudiantes.vistagradoasignado')
    </div>
    @endif
</div>
