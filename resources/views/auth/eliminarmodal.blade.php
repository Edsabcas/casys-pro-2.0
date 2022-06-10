  <!-- Modal -->
  <div class="modal fade" id="eliminar{{$listadouser->ID_USUARIO}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
          <h3 class="modal-title text-center" id="staticBackdropLabel" style="color:rgb(255, 255, 255)" ><strong>Eliminar Datos</strong></h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Está seguro(a) que desea eliminar los datos? ¡Esta acción es irreversible!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-pre2" wire:click='delete({{$listadouser->ID_USUARIO}})' data-bs-dismiss="modal">Eliminar Datos</button>
        </div>
      </div>
    </div>
  </div>