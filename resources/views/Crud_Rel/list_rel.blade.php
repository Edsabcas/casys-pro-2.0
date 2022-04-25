 <div class="table-responsive">
    <table class="table table-info  table-striped table-hover table-bordered">
      <thead>
          <tr>
              <th>ID</th>
              <th>Materia</th>
              <th>Maestro</th>
              <th>Grados</th>
              <th>Secciones</th>
              <th>Accion</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($relaciones as $relacion)
              <tr>

                <th>{{$relacion->ID_REL}}</th>
                <th>{{$relacion->NOMBRE_MATERIA}}</th>
                <th>{{$relacion->NOMBRE_MAESTROS}}</th>
                <th>{{$relacion->NOMBRE_GRADO}}</th>
                <th>{{$relacion->SECCION}}</th>
                    <span>
                          
                        <td>
                            <button class="btn btn-success" wire:click='edit({{$relacion->ID_REL}})'> EDITAR </button>

                              @include('Crud_Rel.modaleliminar_rel')
                              <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$relacion->ID_REL}}"> ELIMINAR </button>
                          </td>
                     
                    </span>

              </tr>
          @endforeach
      </tbody>
    </table>
  </div>
