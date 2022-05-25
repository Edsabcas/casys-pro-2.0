<div class="table-responsive">
    <table class="table table-success table-striped table-bordered">
      <thead>
          <tr>
              <th>ID</th>
              <th>Grado</th>
              <th>Materia</th>
              <th>Estado</th>
              <th>Accion</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($uniones as $union)
              <tr>

                <th>{{$union->ID_ASIGNACION}}</th>
                <th>{{$union->NOMBRE_GRADO}}</th>
                <th>{{$union->NOMBRE_MATERIA}}</th>
                 @if($union->ESTADO==1)
                  <td>Activo</td>   
                  @else
                      <td>Inactivo</td>
                  @endif
                    <span>
                          
                        <td>
                            <button class="btn btn-editb" wire:click='edit({{$union->ID_ASIGNACION}})'> EDITAR </button>

                              @include('Crud_Union.modaleliminar')
                              <button class="btn btn-secondary" style="border-radius: 12px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$union->ID_ASIGNACION}}"> ELIMINAR </button>
                          </td>
                     
                    </span>

              </tr>
          @endforeach
      </tbody>
    </table>
  </div>
