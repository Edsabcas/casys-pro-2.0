<div  wire:ignore.self class="modal fade" id="correlativocambio" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="correlativocambio" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header"  style="background:#a4cb39;color:rgba(255, 255, 255, 255.255)">
        
        </div>
        <div class="modal-body">
            <h5 class="modal-title text-center" id="staticBackdropLabel" style="color:#3a3e7b"><b>¿Está seguro de cambiar el número correlativo? Esta acción es irreversible.</b></h5>
            <h4 class="form-label text text-center" style="font-size:25px">Gestión: #{{$no_gest}}
              
            </h4>
            <label for="" class="form-label" style="font-size:20px; color: #3a3e7b"><strong>• Seleccione el correlativo </strong></label>
            <select class="form-select rounded-pill shadow-sm rounded" wire:model="correlativon" style="border-radius: 70px 70px 70px 70px; border-color: #a4cb39" aria-label="Default select example" required> 
            <option selected>Seleccionar:</option>
            @isset($correlativos)
            @foreach($correlativos as $correlativo)
            @if($correlativo->ESTADO==1)
            <option value="{{$correlativo->ID_CORRELATIVO}}">{{$correlativo->NO_CORRELATIVO_P1}}{{$correlativo->NO_CORRELATIVO_P2}}</option> 
            @endif
            @endforeach
            @endisset
            </select>
            @error('correlativon')
                        <div class="alert alert-warning" role="alert">
                        Pendiente
                        </div>
                      @enderror
        </div>
        <div class="modal-footer">
            <a wire:click='cambio_estadocorre({{$no_gest}})' type='submit' type="button" style="border-radius: 60px 60px 60px 60px;" data-bs-dismiss="modal" class="btn btn-warning">Confirmar</a>
          <button type="button" class="btn btn-secondary"  style="border-radius: 60px 60px 60px 60px;"  id="cambioestadoinfo4"  data-bs-dismiss="modal">Cancelar</button>
          
        </div>
      </div>
    </div>
    </div>