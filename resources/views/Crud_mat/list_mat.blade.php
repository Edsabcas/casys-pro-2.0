<div class="table-responsive">
    <br>
    <table class="table table-info  table-striped table-hover table-bordered">
      <thead>
          <tr>
              <th>ID</th>          
              <th>Materia</th>
              <th>Tipo</th>
              <th>Estado</th>
              <th>Accion</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($materias as $materia)
              <tr>
                 <th>{{$materia->ID_MATERIA}}</th>                
                  <th>{{$materia->NOMBRE_MATERIA}}</th>
                  @if($materia->TIPO_DE_MATERIA==1)
                  <td>Practica</td>   
                  @else
                      <td>Teorica</td>
                  @endif
                  @if($materia->ESTADO==1)
                  <td>Activo</td>   
                  @else
                      <td>Inactivo</td>
                  @endif
            
                    <span>
                          
                        <td>
                            <button class="btn btn-success" wire:click='edit({{$materia->ID_MATERIA}})'> EDITAR </button>

                              @include('Crud_mat.modaleliminar_mat')
                              <button class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$materia->ID_MATERIA}}"> ELIMINAR </button>
                          </td>
                     
                    </span>

              </tr>
          @endforeach
      </tbody>
    </table>
  </div>
