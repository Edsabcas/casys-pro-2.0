<div  wire:ignore.self class="modal fade" id="eliminformacion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="eliminformacion" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header"  style="background:#a4cb39;color:rgba(255, 255, 255, 255.255)">
        Eliminar gestión
        </div>
        <div class="modal-body">
           <h4 class="form-label text text-center" style="font-size:25px">Gestión: #{{$gestion}}
            </h4>

            <div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" style="font-size: 15px; color:#000000;">Motivo de eliminar:</label>
                    <textarea class="form-control" wire:model="observacion" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  @error('observacion')
                  <div class="alert alert-warning" role="alert">
                  Pendiente
                  </div>
                  @enderror 
            </div>

        </div>
        <div class="modal-footer">
            <a id="valeliminar" type="button" style="border-radius: 60px 60px 60px 60px;" data-bs-dismiss="modal" class="btn btn-warning">Eliminar</a>
          <button type="button" class="btn btn-secondary"  style="border-radius: 60px 60px 60px 60px;" data-bs-dismiss="modal">Cancelar</button>
          
        </div>
      </div>
    </div>
    </div>