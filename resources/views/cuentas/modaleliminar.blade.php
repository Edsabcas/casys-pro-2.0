<!-- Modal -->
<div class="modal fade" id="exampleModal{{$cue->ID_CUENTA}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
          <h3 class="modal-title text-center" style="color:rgb(255, 255, 255)"><strong>Eliminar datos de grados</strong></h3>
          <button type="button" class="btn btn-close" style="color:rgb(255, 255, 255)"  data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Está seguro(a) que desea eliminar los datos? ¡Esta acción es irreversible!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-pre2" wire:click='delete({{$cue->ID_CUENTA}})' data-bs-dismiss="modal">Eliminar</button>
        </div>
      </div>
    </div>
  </div>