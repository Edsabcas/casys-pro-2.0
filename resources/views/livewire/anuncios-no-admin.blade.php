<div>
    @if($op2!=null and $op2==1)
    <div>
        @include('anuncios.comentariosvista.comentariosform')
    
        <div>
            @include('anuncios.comentariosvista.comentariosvista')
        </div>
    </div>
    @else
    <div class="container">
        @include('anuncios.anunciosvistas.anunciovistanoadmin')
    </div>
    @endif 
    
</div>
