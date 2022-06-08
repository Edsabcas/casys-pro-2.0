
  <div class="modal fade" id="staticBackdrop{{$relacion->ID_REL}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
          <h5 class="modal-title" id="staticBackdropLabel" style="color:rgb(255, 255, 255)"><strong>Eliminar Datos</strong></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Está seguro(a) que desea eliminar los datos? ¡Esta acción es irreversible!        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-pre2" wire:click='delete({{$relacion->ID_REL}})' data-bs-dismiss="modal">Eliminar</button>
        </div>
      </div>
    </div>
  </div>


