<!-- Modal -->
<div class="modal fade" id="exampleModal{{$grado->ID_GR}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ELIMINAR DATOS DE GRADOS</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Está seguro que desea eliminar estos datos?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-pre2" wire:click='delete({{$grado->ID_GR}})' data-bs-dismiss="modal">Eliminar Datos</button>
        </div>
      </div>
    </div>
  </div>