<div wire:ignore.self class="modal fade" id="comentario_revision" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="comentario_revision">Publicar un comentario en la actividad</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container-sm">
              <form action="/revisiones" method="POST">
                @csrf 
                <input type="hidden" value='{{$id_estado_act}}' name='id_estado_act'>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" style="font-size:20px">Agregue su comentario</label>
                <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor" rows="4" wire:model="comentario_d_r"></textarea>
            </div>
            
            </form>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" wire:click='revisiones(3)'>Guardar</button>
        </div>
      </div>
    </div>
  </div>