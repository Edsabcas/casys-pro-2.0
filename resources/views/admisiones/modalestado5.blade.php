<div  wire:ignore.self class="modal fade" id="cambioestadoinfo5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cambioestadoinfo5" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header"  style="background:#a4cb39;color:rgba(255, 255, 255, 255.255)">
        
        </div>
        <div class="modal-body">
            <h5 class="modal-title text-center" id="staticBackdropLabel" style="color:#3a3e7b"><b>¿Desea cambiar de estado?</b></h5>
            <h4 class="form-label text text-center" style="font-size:25px">Gestion: #{{$id_gest}}
              
            </h4> 
        </div>
        <div class="modal-footer">
            <a wire:click='cambio_estadocon({{$id_gest}})' type="button" style="border-radius: 60px 60px 60px 60px;" data-bs-dismiss="modal" class="btn btn-warning">Confirmar</a>
          <button type="button" class="btn btn-secondary"  style="border-radius: 60px 60px 60px 60px;"  id="info5"  data-bs-dismiss="modal">Cancelar</button>
          
        </div>
      </div>
    </div>
    </div>