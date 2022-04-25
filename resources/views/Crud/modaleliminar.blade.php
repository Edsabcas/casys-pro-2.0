
  <div class="modal fade" id="staticBackdrop{{$grado->ID_GRADOS}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Seguro que desea eliminar?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Esta accion borrara todos los datos de la columna seleccionada
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" wire:click='delete({{$grado->ID_GRADOS}})' data-bs-dismiss="modal">Eliminar</button>
        </div>
      </div>
    </div>
  </div>