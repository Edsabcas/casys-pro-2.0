<br>
@isset($mensaje4)
  @if ($mensaje4!=null)
      <div class="alert alert-success" role="alert">
        Editado Correctamente
      </div>
  @endif
@endisset
<br>
@isset($mensaje5)
  @if($mensaje5!=null)
      <div class="alert alert-danger" role="alert">
        No se logro editar los datos
      </div>
  @endif
@endisset

@isset($mensajeeliminar)
@if ($mensajeeliminar!==null)
    <div class="alert alert-success" role="alert">
    ELIMINADO CORRECTAMENTE!
    </div>
    @endif
    @endisset

    @isset($mensajeeliminar1)
    @if($mensajeeliminar1!==null)
    <div class="alert alert-danger" role="alert">
    NO SE LOGRÓ ELIMINAR LOS DATOS :(
    </div>
@endif
@endisset

@isset($secciones)

  <div class="table-responsive">
  <table class="table table-success table-striped">
      <thead>
          <tr>
          <th>ID</th>
          <th>SECCION</th>
          <th>ESTADO</th>
          <th>ACCIONES</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($secciones as $seccion)
        <tr>
            <td>{{$seccion->ID_SC}}</td>
            <td>{{$seccion->SECCION}}</td> 
            @if ($seccion->ESTADO==1)
            <td>Activo</td>
            @else
            <td>Inactivo</td>               
            @endif       
            <td>
                <span>
                <button class="btn btn-success" wire:click='edit({{$seccion->ID_SC}})'>Editar</button>        
            </td>
            @include('Secciones.modaleliminar')
              <td>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$seccion->ID_SC}}">Eliminar</button>
              </td>
        </span> 
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    
@endisset
