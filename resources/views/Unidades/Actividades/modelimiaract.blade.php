<div class="modal fade" id="eliminaract{{$actividad->ID_ACTIVIDADES}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
          <h5 class="modal-title text-center" style="color:rgb(255, 255, 255)" id="staticBackdropLabel"><strong>Eliminar datos</strong></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Está seguro(a) que desea eliminar los datos? ¡Esta acción es irreversible!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-pre2" wire:click='deleteact({{$actividad->ID_ACTIVIDADES}})' data-bs-dismiss="modal">Eliminar</button>
        </div>
      </div>
    </div>
  </div>