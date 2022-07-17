<div>
    @if(session('op')=='alumnosupervisado')
    <div class="container">
        @include('alumnovista.panelgeneral')
    </div>
    @elseif(session('op')=='alumnosupervisadoanuncios')
    <div class="container">
        @include('alumnovista.anunciosvistapadre.feedanuncios')
    </div>
    @endif
    
</div>
