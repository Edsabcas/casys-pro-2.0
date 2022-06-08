<div  wire:ignore.self class="modal fade" id="cambioestado" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cambioestado" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header"  style="background:#a4cb39;color:rgba(255, 255, 255, 255.255)">
        
        </div>
        <div class="modal-body">
            <h5 class="modal-title text-center" id="staticBackdropLabel" style="color:#3a3e7b"><b>¿Confirme que desea cambiar de estado?</b></h5>
            <h4 class="form-label text text-center" style="font-size:25px">Gestion: #{{$gestion}}
              
            </h4> 
        </div>
        <div class="modal-footer">
            <a wire:click='cambioestado()' type="button" data-bs-dismiss="modal" class="btn btn-editb">Si</a>
          <button type="button" class="btn btn-secondary"  style="border-radius: 12px;"  id="info"  data-bs-dismiss="modal">Cancelar</button>
          
        </div>
      </div>
    </div>
    </div>