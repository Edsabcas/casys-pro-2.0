@isset($maestros)
<div class="table-responsive">
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>NO.</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>DPI</th>
                <th>TELÉFONO</th>
                <th>ESTADO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($maestros as $maestro)
                <tr>
                    <td>{{$maestro->ID_DOCENTE}}</td>
                    <td>{{$maestro->NOMBRE_DOCENTE}}</td>
                    <td>{{$maestro->APELLIDO_DOCENTE}}</td>
                    <td>{{$maestro->DPI}}</td>
                    <td>{{$maestro->TELEFONO}}</td>

                    
                    @if ($maestro->ESTADO==1)
                    <td>Activo</td>
                    @else
                    <td>Inactivo</td> 
                    @endif
                    <td>
                        <button class="btn btn-success" wire:click='edit({{$maestro->ID_USER}})'>Editar</button>
                    </td>
                    
                    @include('Maestros.modalusuario')
                        <td>
                            <button wire:click='edit({{$maestro->ID_DOCENTE}})' class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Usuario</button>
                        </td>   
                      
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endisset