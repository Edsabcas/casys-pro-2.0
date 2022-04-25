  @isset($mensaje2)
    @if ($mensaje2!=null)
        <div class="alert alert-success" role="alert">
          Editado Correctamente
        </div>
    @endif
  @endisset

  @isset($mensaje3)
    @if($mensaje3!=null)
        <div class="alert alert-danger" role="alert">
          No se logro editar los datos
        </div>
    @endif
  @endisset

  @isset($mensajeeliminar)
    @if ($mensajeeliminar!==null)
      <div class="alert alert-success" role="alert">
        Eliminado Correctamente!
      </div>
    @endif
  @endisset

  @isset($mensajeeliminar1)
    @if($mensajeeliminar1!==null)
      <div class="alert alert-danger" role="alert">
        No se ha logrado eliminar!
      </div>
    @endif
  @endisset

@isset($asignacion)

  <div class="table-responsive">
    <table class="table table-success table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>GRADO</th>
          <th>SECCIÓN</th>
          <th>MAESTRO</th>
          <th>FECHA</th>
          <th>ESTADO</th>
          <th>ACCIONES</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($asignacion as $asi)
          <tr>
            <td>{{$asi->ID_A}}</td>
            <td>{{$asi->GRADO}}</td>
            <td>{{$asi->SECCION}}</td>
            <td>{{$asi->NOMBRE_DOCENTE}}</td>
            <td>{{$asi->FECHA_ASIGNACION}}</td>
              
            @if ($asi->ESTADO==1)
                <td>Activo</td>
              @else
                <td>Inactivo</td>               
            @endif
            <span>  
              <td>
                <button class="btn btn-warning" wire:click='edit({{$asi->ID_A}})'>Editar</button>        
              </td>
              <td>
                @include('Asignaciones.asignación maestro.modaleliminar')  
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$asi->ID_A}}">Eliminar</button>
              </td> 
            </span>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    
@endisset