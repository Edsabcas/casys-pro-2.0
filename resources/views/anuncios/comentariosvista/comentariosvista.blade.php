 <!-- Modal -->
 <div class="modal fade" id="staticBackdrop{{$categoria->ID_CATEGORIA}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">¿Seguro que deseas eliminar este dato?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary" wire:click='eliminar_cat({{$categoria->ID_CATEGORIA}})' data-bs-dismiss="modal">Eliminar</button>
        </div>
      </div>
    </div>
  </div>
