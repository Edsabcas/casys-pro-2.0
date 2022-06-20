
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
              @php
              $foo = 0;
              $vid = 0;
              $pdf = 0;
                if (strpos($archivo_comprobante, '.jpg' ) !== false || strpos($archivo_comprobante, '.png' ) !== false || strpos($archivo_comprobante, '.jpeg' ) !== false) 
                { $foo=1; }
                elseif(strpos($archivo_comprobante, '.mp4' ) !== false || strpos($archivo_comprobante, '.mpeg' ) !== false)
                {$vid=1;}
                elseif(strpos($archivo_comprobante, '.pdf' ) !== false)
                {$pdf=1;}
          @endphp
          @if($foo==1)
          <img src="imagen/comprobantes2022/{{$archivo_comprobante}}" height="400" weight="400" class="card-img-top" alt="...">
          @endif
          @if($vid==1)
          <video height="400" weight="400" class="card-img-top" alt="..." controls>
            <source src="imagen/comprobantes2022/{{$archivo_comprobante}}"  type="video/mp4">
              <source src="imagen/comprobantes2022/{{$archivo_comprobante}}"  type="video/ogg">
          </video>
          @endif
          @if($pdf==1)
          <iframe style="width: 43rem; text-align:center" width="350" height="350" src="imagen/comprobantes2022/{{$archivo_comprobante}}" frameborder="0"></iframe>
            @endif
            {{-- <img class="img-profile rounded-circle" style="float: center;" width="80" height="80" src="imagen/comprobantes2022/{{$archivo_comprobante}}">
             --}}
             <button type="button" class="btn btn-editb" style="float:" data-bs-dismiss="modal"  id="updtatecompro">
              <svg xmlns="http://www.w3.org/2000/svg" style="float: center;" width="10" height="10" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg>  
            </button> 
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
