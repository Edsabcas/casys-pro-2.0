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
<table class="table table-success table-striped table-bordered">
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
            <button class="btn btn-editb" wire:click='edit({{$est->ID_E}})'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg></button>        
            @include('Asignaciones.asignación estudiantes.modaleliminar')  
            <button class="btn btn-secondary" style="border-radius: 12px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$est->ID_E}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
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