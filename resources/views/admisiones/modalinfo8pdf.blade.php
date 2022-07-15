<!-- Modal -->
<div wire:ignore.self class="modal fade" id="modal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Generar PDF de datos de usuario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h4 class="form-label text text-center" style="font-size:25px">Gestión: #{{$datosusuario4}}
            <iframe src="/Usuario_pdf" width="100%" height="300" style="border:none;">
            </iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" wire:click='correo_datos({{$datosusuario4}})' class="btn btn-primary">Enviar</button>
        </div>
      </div>
    </div>
  </div>