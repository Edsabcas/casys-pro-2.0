<br>
@isset($mensaje3)
  @if ($mensaje3!=null)
      <div class="alert alert-success" role="alert">
        Editado Correctamente
      </div>
  @endif
@endisset
@isset($mensaje4)
  @if($mensaje4!=null)
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

@isset($grados)

  <div class="table-responsive">
  <table class="table table-success table-striped">
      <thead>
          <tr>
          <th>ID</th>
          <th>GRADO</th>
          <th>SECCION</th>
          <th>ESTADO</th>
          <th>ACCIONES</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($grados as $grado)
        <tr>
            <td>{{$grado->ID_GR}}</td>
            <td>{{$grado->GRADO}}</td> 
            <td>{{$grado->ID_SC}}</td> 
            @if ($grado->ESTADO==1)
            <td>Activo</td>
            @else
            <td>Inactivo</td>               
            @endif 
           <span>
              <td>
                <button class="btn btn-warning" wire:click='edit({{$grado->ID_GR}})'>Editar</button>        
              </td>
              @include('Grados.modaleliminar')
              <td>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$grado->ID_GR}}">Eliminar</button>
              </td>
            </span>                  
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    
@endisset
