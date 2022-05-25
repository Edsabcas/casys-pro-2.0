<div class="table-responsive">
    <table class="table table-success table-striped table-bordered">
      <thead>
          <tr>
              <th>ID</th>
              <th>Grado</th>
              <th>Seccion</th>
              <th>Estado</th>
              <th>Accion</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($grados as $grado)
              <tr>
                  
                  <th>{{$grado->ID_GRADOS}}</th>
                  <th>{{$grado->NOMBRE_GRADO}}</th>
                  @foreach($secciones as $seccion)
                  @if($grado->ID_SECCIONES==$seccion->ID_SECCIONES)
                  <th>{{$seccion->SECCION}}</th>
                  @endif
                  @endforeach
                  @if($grado->ESTADO==1)
                  <td>Activo</td>   
                  @else
                      <td>Inactivo</td>
                  @endif
            
                    <span>
                          
                        <td>
                            <button class="btn btn-editb" wire:click='edit({{$grado->ID_GRADOS}})'> EDITAR </button>

                              @include('Crud.modaleliminar')
                              <button class="btn btn-secondary" style="border-radius: 12px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$grado->ID_GRADOS}}"> ELIMINAR </button>
                          </td>
                     
                    </span>

              </tr>
          @endforeach
      </tbody>
    </table>
  </div>
