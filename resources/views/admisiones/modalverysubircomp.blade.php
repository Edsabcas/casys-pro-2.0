
  <div  wire:ignore.self class="modal fade" id="visualizarimagen" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="visualizarimagenLabel" aria-hidden="true">
    <div class="modal-lg modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="visualizarimagenLabel" style="color:rgb(0, 0, 0)"><b>Visualización del comprobante</b></h5>
          <button type="button" class="btn-close"  data-bs-dismiss="modal" id="valinfopago" aria-label="Close"></button>
        </div>
        <div class="modal-body modal-dialog-centered">
            @if($archivo_comprobante=="" or $archivo_comprobante==null )
              <img class="rounded-circle" src="img/undraw_profile_1.svg" width="400" height="400" alt="...">          
              @else
              <img class="img-fluid img-profile mx-auto" style="float: center;" width="400" height="400" src="imagen/comprobantes2022/{{$archivo_comprobante}}">                                          
            @endif
        </div>
      </div>
    </div>
  </div>


  <div wire:ignore.self class="modal fade" id="subirimagen" tabindex="-1" aria-labelledby="perfilmodal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
            <h3 class="modal-title text-center" id="perfilmodal2Label" style="color:rgb(255, 255, 255)" ><strong><b>Comprobante de Pago</b></strong></h3>
          <button type="button" class="btn-close"  data-bs-dismiss="modal" id="valinfopago" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent='' class="form-horizontal">
            <div class="form-group row">
              <label for="exampleInputPassword1" class="form-label" style="font-size:20px">Elegir foto o archivo de comprobante:</label>
              <div class="mb-3">
                <input type="file" id="archivo"  wire:model="archivo_comprobante2">
              </div> 
          </div>
          <div class="mb-3">
            <div wire:loading wire:target="archivo_comprobante2" class="alert alert-warning" role="alert">
              <strong class="font-bold">¡Imagen cargando!</strong>
                <span class="block sm:inlone">Espere un momento hasta que la imagen se haya procesado.</span>
              <div class="spinner-border text-warning" role="status">
              </div>
            </div>
            @if($tipo==1)
            <h3 class="form-label">Visualización de Imagen</h3>
            <img src="{{$archivo_comprobante2->temporaryURL()}}" height="100" weight="100"  alt="...">
            @endif

          </div>  
          <button class="btn btn-danger" data-bs-dismiss="modal" id="valinfopago">Cerrar</button>
          <button class="btn btn-pre2" wire:click="cambiofoto()" data-bs-dismiss="modal" id="valinfopago">Publicar</button>
        </form>
        </div>
      </div>
    </div>
  </div>
