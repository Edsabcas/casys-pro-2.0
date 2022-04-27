<div class="table-responsive">
    <table class="table table-info  table-striped table-hover table-bordered">
      <thead>
          <tr>
              <th>ID</th>
              <th>Unidad</th>
              <th>Fecha de Inicio</th>
              <th>Fecha de Finalización</th>
              <th>Accion</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($calendarizacion as $calen)
              <tr>
                  
                  <th>{{$calen->ID_CALENDARIZACION}}</th>
                  @foreach($unidades as $unidad)
                  @if($calen->ID_UNIDADES_FIJAS==$unidad->ID_UNIDADES_FIJAS)
                  <th>{{$unidad->NOMBRE_DE_UNIDAD}}</th>
                  @endif
                  @endforeach
                  <th>{{$calen->FECHA_INICIO}}</th>
                  <th>{{$calen->FECHA_FINAL}}</th>
            
                    <span>
                          
                        <td>
                            <button class="btn btn-success" wire:click='edit({{$calen->ID_CALENDARIZACION}})'> EDITAR </button>

                              @include('CALENDARIZACION.modaleliminar')
                              <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$calen->ID_CALENDARIZACION}}"> ELIMINAR </button>
                          </td>
                     
                    </span>

              </tr>
          @endforeach
      </tbody>
    </table>
  </div>
