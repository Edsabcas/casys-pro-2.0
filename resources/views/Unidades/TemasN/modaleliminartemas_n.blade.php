<div class="modal fade" id="deletetema_n{{$tema->ID_TEMA}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
          <h3 class="modal-title text-center" style="color:rgb(255, 255, 255)" ><strong>Eliminar datos</strong></h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Está seguro(a) que desea eliminar los datos? ¡Esta acción es irreversible!
                </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-pre2" wire:click='deletet2({{$tema->ID_TEMA}})' data-bs-dismiss="modal">Eliminar</button>
        </div>
      </div>
    </div>
  </div>