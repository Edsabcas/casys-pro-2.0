<div>
    @if(session('op')=='alumnosupervisado')
    <div class="container">
        @include('alumnovista.panelgeneral')
    </div>
    @elseif(session('op')=='alumnosupervisadoanuncios')
    <div class="container">
        @include('alumnovista.anunciosvistapadre.feedanuncios')
    </div>
    @elseif(session('op')=='alumnosupervisadocalificaiones')
    <div class="container">
        @include('alumnovista.calificaciones.calificaciones')
    </div>
    @elseif(session('op')=='alumnosupervisadocalendario')
    <div class="container">
        @include('alumnovista.calendario.calendario')
    </div>
    @elseif(session('op')=='alumnosupervisadoreportes')
    <div class="container">
        @include('alumnovista.reportes.panelreportes')
    </div>
    @elseif(session('op')=='alumnosupervisadopagos')
    <div class="container">
        @include('alumnovista.pagos.panelpagos')
    </div>
    @endif
    
</div>
