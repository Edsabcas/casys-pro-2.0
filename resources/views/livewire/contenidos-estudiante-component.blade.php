<div class='container'>
    @if(Session::get('op')=='addcontenidosest')
    @include('alumnovista.contenidos.panelcontenidos')
    @elseif(Session::get('op')=='addarchivosest')
    @include('alumnovista.contenidos.archivosestudiantes')
    @endif
</div>
