<div>
    @foreach($rol_activo as $activo_rol)
    @if($activo_rol->ID_ROL == 1 or $activo_rol->ID_ROL == 2)
    <div class="container">
        @include('anuncios.anunciosvistas.anunciovistaadmin')
    </div>
    @else
    <div class="container">
        @include('anuncios.anunciosvistas.anunciovistanoadmin')
    </div>
    @endif
    @endforeach
</div>
