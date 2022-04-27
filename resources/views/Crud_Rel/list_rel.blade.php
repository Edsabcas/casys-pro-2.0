 <div class="table-responsive">
    <table class="table table-info  table-striped table-hover table-bordered">
      <thead>
          <tr>
              <th>ID</th>
              <th>Materia</th>
              <th>Maestro</th>
              <th>Grados</th>
              <th>secciones</th>
              <th>Accion</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($relaciones as $relacion)
              <tr>

                <th>{{$relacion->id_rel}}</th>
                <th>{{$relacion->nombre_materia}}</th>
                <th>{{$relacion->nombre_docente}}</th>
                <th>{{$relacion->grado}}</th>
                <th>{{$relacion->seccion}}</th>
                    <span>
                          
                        <td>
                            <button class="btn btn-success" wire:click='edit({{$relacion->id_rel}})'> EDITAR </button>

                              @include('Crud_Rel.modaleliminar_rel')
                              <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$relacion->id_rel}}"> ELIMINAR </button>
                          </td>
                     
                    </span>

              </tr>
          @endforeach
      </tbody>
    </table>
  </div>
