    <div class="input-group justify-content">
      <div class="form-outline">
        <input type="search" wire:model="search" id="form1" class="form-control" placeholder="Buscar:" />
      </div>
      <button type="button" class="btn btn-primary">
        <i class="fas fa-search"></i>
      </button>
    </div>
    <br>
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
                 
                    <span>
                        <td>
                            <button class="btn btn-success" wire:click='edit({{$maestro->ID_DOCENTE}})'>Editar</button>        
                        </td>
                        @include('Maestros.modalusuario')
                        <td>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$maestro->ID_DOCENTE}}">Eliminar</button>
                        </td>
                    </span>   
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endisset