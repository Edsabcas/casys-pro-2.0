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
                            <button class="btn btn-success" wire:click='edit({{$maestro->ID_DOCENTE}})'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                              </svg></button>        
                       
                        @include('Maestros.modalusuario')
                        
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$maestro->ID_DOCENTE}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                              </svg></button>
                        </td>
                    </span>   
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endisset