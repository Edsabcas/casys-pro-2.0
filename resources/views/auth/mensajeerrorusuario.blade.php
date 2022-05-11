@isset($mensaje20)
@if ($mensaje20!=null)
<div class="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Error</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Su usuario y/o contraseña es incorrecta</p>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  @endif
@endisset