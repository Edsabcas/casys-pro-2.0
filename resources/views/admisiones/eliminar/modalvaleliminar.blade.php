<div  wire:ignore.self class="modal fade" id="eliminarinfo2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="eliminarinfo2" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header"  style="background:#a4cb39;color:rgba(255, 255, 255, 255.255)">
        Confirme Eliminar gestión
        </div>
        <div class="modal-body">
           <h4 class="form-label text text-center" style="font-size:25px">Gestion: #{{$gestion}}
            </h4>
            <div>
                <h5 style="font-size: 18px; color:#000000;">Motivo eliminar: {{$observacion}}</h5>
            </div>
        </div>
        <div class="modal-footer">
            <a wire:click='eliminar_gestion()' type="button" style="border-radius: 60px 60px 60px 60px;" data-bs-dismiss="modal" class="btn btn-warning">Si</a>
          <button type="button" class="btn btn-secondary"  style="border-radius: 60px 60px 60px 60px;"   id="eliminfo"   data-bs-dismiss="modal">Cancelar</button>
          
        </div>
      </div>
    </div>
    </div>