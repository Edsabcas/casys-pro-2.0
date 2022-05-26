<div class="modal fade" id="confirmacionedit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Seguro que desea Editar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Si continua con la edicion el archivo anterior se borrara y tendra reinsertarlo o cambiarlo si lo desea.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          @include('Unidades.Actividades.modal_actividades')
          <button class="btn btn-editb"  id="val" data-bs-toggle="modal" data-bs-target="#staticBackdrop"   wire:click='edita({{$actividad->ID_ACTIVIDADES}})'>  Continuar </button>
        </div>
      </div>
    </div>
  </div>