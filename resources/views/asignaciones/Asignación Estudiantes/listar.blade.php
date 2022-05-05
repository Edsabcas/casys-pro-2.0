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

@isset($estudiante)

<div class="table-responsive">
<table class="table table-success table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>NOMBRE Y APELLIDO DEL ESTUDIANTE</th>
      <th>GRADO</th>
      <th>SECCIÓN</th>
      <th>FECHA</th>
      <th>ESTADO</th>
      <th>ACCIONES</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($estudiante as $est)
      <tr>
        <td>{{$est->ID_E}}</td>
        <td>{{$est->TB_INFO_NOMBRE}}  {{$est->TB_INFO_APELLIDO}}</td>
        <td>{{$est->GRADO}}</td>
        <td>{{$est->SECCION}}</td>
        <td>{{$est->FECHA_ASIGNACION}}</td>
          
        @if ($est->ESTADO==1)
            <td>Activo</td>
          @else
            <td>Inactivo</td>               
        @endif
        <span>  
          <td>
            <button class="btn btn-warning" wire:click='edit({{$est->ID_E}})'>Editar</button>        
          </td>
          <td>
            @include('Asignaciones.asignación estudiantes.modaleliminar')  
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$est->ID_E}}">Eliminar</button>
          </td> 
        </span>
      </tr>
    @endforeach
  </tbody>
</table>
</div>

@endisset