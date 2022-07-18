<div class="container">
    @if(Session::get('op')=='alumnosupervisado')
    
        @include('alumnovista.panelgeneral')
    
    @elseif(Session::get('op')=='alumnosupervisadoanuncios')
    <div class="container">
        @include('alumnovista.anunciosvistapadre.feedanuncios')
    </div>
    @elseif(Session::get('op')=='alumnosupervisadocalificaiones')
    <div class="container">
        @include('alumnovista.calificaciones.calificaciones')
    </div>
    @elseif(Session::get('op')=='alumnosupervisadocalendario')
    <div class="container">
        @include('alumnovista.calendario.calendario')
    </div>
    @elseif(Session::get('op')=='alumnosupervisadoreportes')
    <div class="container">
        @include('alumnovista.reportes.panelreportes')
    </div>
    @elseif(Session::get('op')=='alumnosupervisadopagos')
    <div class="container">
        @include('alumnovista.pagos.panelpagos')
    </div>
    @endif
    
</div>
