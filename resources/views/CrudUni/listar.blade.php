<div class="table-responsive">
    <table class="table table-info  table-striped table-hover table-bordered">
      <thead>
          <tr>
              <th>ID</th>
              <th>Materia</th>
              <th>Unidad</th>
              <th>Estado</th>
              <th>Accion</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($unidades as $unidad)
              <tr>
                  
                  <th>{{$unidad->ID_UNIDADES}}</th>
                  @foreach($materias as $materia)
                  @if($unidad->ID_MATERIA==$materia->ID_MATERIA)
                  <th>{{$materia->NOMBRE_MATERIA}}</th>
                  @endif
                  @endforeach
                  <th>{{$unidad->NOMNBRE_UNIDAD}}</th>
                  @if($unidad->ESTADO==1)
                  <td>Activo</td>   
                  @else
                      <td>Inactivo</td>
                  @endif
            
                    <span>
                          
                        <td>
                            <button class="btn btn-success" wire:click='edit({{$unidad->ID_UNIDADES}})'> EDITAR </button>

                              @include('CrudUni.modaleliminar')
                              <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$unidad->ID_UNIDADES}}"> ELIMINAR </button>
                          </td>
                     
                    </span>

              </tr>
          @endforeach
      </tbody>
    </table>
  </div>
