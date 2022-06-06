<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear una nueva advertencia</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @if($invalido==1)
            <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                <div>
                  Revise sus fechas antes de insertar
                </div>
              </div>
            @endif
          <div class="container-sm">
              <form action="" wire:submit.prevent='' enctype="multipart/form-data" method="POST">
                @csrf
                <input type="hidden" value='{{$editaadv}}' name='editaadv'>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" style="font-size:20px">Coloque un enunciado para la advertencia</label>
                <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor" rows="4" wire:model="texto_advertencia"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" style="font-size:20px">Coloque una prioridad para la advertencia</label>
                <select class="form-select" aria-label="Default select example" name="calidad" wire:model="prioridad_advertencia" required>
                  <option selected >Elige la calidad de la advertencia</option>
                  <option value="1">Informativo</option>
                  <option value="2">Importante</option>
                  <option value="3">Urgente</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="examplenombre" class="form-label" style="font-size:20px"> Fecha de Inicio de vigencia</label>
                <input type="date" class="form-control"  name='fecha_inicio' wire:model='fecha_inicio'>
              </div>
              <div class="mb-3">
                <label for="examplenombre" class="form-label" style="font-size:20px"> Fecha de final de vigencia</label>
                <input type="date" class="form-control"  name='fecha_fin' wire:model='fecha_fin'>
              </div>
            </form>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" name="update_adv()" data-bs-dismiss="modal">Actualizar</button>
        </div>
      </div>
    </div>
  </div>