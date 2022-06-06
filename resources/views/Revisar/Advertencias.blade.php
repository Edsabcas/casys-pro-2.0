<!-- Button trigger modal -->
<h1><strong>Presione para crear una nueva advertencia</strong></h1>
@include('Revisar.ModalAdvertencia')
@if($blockadvertencia==1)
<button type="button" class="btn btn-unib" data-bs-toggle="modal" data-bs-target="#exampleModal" disabled>
    Crear una nueva advertencia
  </button>
@elseif($blockadvertencia==0)
<button type="button" class="btn btn-unib" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Crear una nueva advertencia
</button>
@endif

<br>
<br>
<h2><strong>Alerta en vigencia</strong></h2>
<div class="table">
    <table class="table table-success table-striped">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Contenido</th>
              <th scope="col">Prioridad</th>
              <th scope="col">Inicio de vigencia</th>
              <th scope="col">Final de vigencia</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
              @foreach($advertenciass as $advertenciaa)
              <tr>
                  <th>{{$advertenciaa->ID_ADVERTENCIA}}</th>
                  <th>{{$advertenciaa->DESCRIPCION}}</th>
                  @if($advertenciaa->PRIORIDAD==1)
                  <td>Informativo</td>
                  @elseif($advertenciaa->PRIORIDAD==2)
                  <td>Importante</td>
                   @else
                   <td>Urgente</td>
                   @endif
                  <th>{{$advertenciaa->FECHA_INICIO}}</th>
                  <th>{{$advertenciaa->FECHA_FIND}}</th>
                  <td>
                      <span>
                          <td>
                              <button class="btn btn-success">Editar</button>
                          </td>
                          <td>
                              <button class="btn btn-danger">Eliminar</button>
                          </td>
                      </span>
                  </td>
              </tr>
              @endforeach
          </tbody>
    </table>
</div>
