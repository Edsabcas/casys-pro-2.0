<div class="modal fade" id="staticBackdrop{{$PlanUni->ID_PLAN}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Seguro que desea eliminar?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Esta accion borrara los datos seleccionados
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-pre2" wire:click='deletep({{$PlanUni->ID_PLAN}})' data-bs-dismiss="modal">Eliminar</button>
        </div>
      </div>
    </div>
  </div>