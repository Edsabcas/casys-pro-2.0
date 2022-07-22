<div>
    @if(Session::get('op')=='panelanuncios')
    <div class="container">
        @include('anuncios.panelanuncios.panelanuncios')
    </div>
    @elseif(Session::get('op')=='paneleditar')
    <div class="container">
        @include('anuncios.panelanuncios.editaranuncios')
    </div>
    @endif
</div>
