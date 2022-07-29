<div  wire:ignore.self class="modal fade" id="modalsubiractividades" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalsubiractividades" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header"  style="background:#a4cb39;color:rgba(255, 255, 255, 255.255)">
            <h5 class="modal-title text-center" id="staticBackdropLabel" style="color:#3a3e7b"><b>{{$nombre_act}}:</b> <b style="color:#ffffff">{{$descripact}}</b> </h5>
            
        </div>
        <div class="modal-body">
            <div class="card border-Secondary mb-3" style="max-width: 90rem;" >
                <div class="card-body">
                 <Center> <label style="color:#3a3e7b">Suba sus archivos aquí</label> </Center>

@if($mas_arch==0)
<center><div class="col-sm-12">
  <input type="file" class="form-control " wire:model='archivo'  style="border:2px solid rgba(86, 95, 76, 0.466);" id="exampleInputPassword1">
   <div class="col-sm-10">
    @if($formato==1)
    <h3 class="form-label">Visualización de Imagen</h3>
    <img src="{{$archivo->temporaryURL()}}" height="200" weight="200"  alt="...">
    @endif
    @if($formato==2)
    <h3 class="form-label">Visualización de Video</h3>
    <video height="500" weight="500" class="card-img-top" alt="..." controls>
      <source src="{{$archivo->temporaryURL()}}"  type="video/mp4">
    </video>
    @endif
    @if($formato==3)
    <h3 class="form-label">Visualización de PDF</h3>
      <iframe width="400" height="400" src="/imagen/temporalpdf/{{$arch}}" frameborder="0"></iframe>
    @endif
   </div>

</div>    </center> <br>
<div wire:loading wire:target="archivo" class="alert alert-warning" role="alert">
  <strong class="font-bold">¡Documento cargando!</strong>
    <span class="block sm:inlone">Espere un momento hasta que el documento se haya procesado completamente.</span>
  <div class="spinner-border text-warning" role="status">
  </div>
</div>
</div>
<center> <a type="submit" type="button" wire:click='subir_mas_arch()' style="border-radius: 60px 60px 60px 60px;"  class="btn btn-warning">Subir otro archivo</a></center> 
</div>


@elseif($mas_arch==1)
<center><div class="col-sm-12">
  <h6>nuevo archivo2</h6>
  <input type="file" class="form-control " wire:model='archivo2'  style="border:2px solid rgba(86, 95, 76, 0.466);" id="example1">
   <div class="col-sm-10">
    @if($formato2==1)
    <h3 class="form-label">Visualización de Imagen</h3>
    <img src="{{$archivo2->temporaryURL()}}" height="200" weight="200"  alt="...">
    @endif
    @if($formato2==2)
    <h3 class="form-label">Visualización de Video</h3>
    <video height="500" weight="500" class="card-img-top" alt="..." controls>
      <source src="{{$archivo2->temporaryURL()}}"  type="video/mp4">
    </video>
    @endif
    @if($formato2==3)
    <h3 class="form-label">Visualización de PDF 2</h3>
      <iframe width="400" height="400" src="/imagen/temporalpdf/{{$arch2}}" frameborder="0"></iframe>
    @endif
   </div>

</div>    </center> <br>
<div wire:loading wire:target="archivo2" class="alert alert-warning" role="alert">
  <strong class="font-bold">¡Documento2 cargando!</strong>
    <span class="block sm:inlone">Espere un momento hasta que el documento se haya procesado completamente.</span>
  <div class="spinner-border text-warning" role="status">
  </div>
</div>
</div>
<center> <a type="submit" type="button" wire:click='subir_mas_arch2()' style="border-radius: 60px 60px 60px 60px;"  class="btn btn-warning">Subir otro archivo2</a></center> 
</div>

@elseif($mas_arch==2)

<center><div class="col-sm-12">
  <h6>nuevo archivo 3</h6>
  <input type="file" class="form-control " wire:model='archivo3'  style="border:2px solid rgba(86, 95, 76, 0.466);" id="example2">
   <div class="col-sm-10">
    @if($formato3==1)
    <h3 class="form-label">Visualización de Imagen</h3>
    <img src="{{$archivo3->temporaryURL()}}" height="200" weight="200"  alt="...">
    @endif
    @if($formato3==2)
    <h3 class="form-label">Visualización de Video</h3>
    <video height="500" weight="500" class="card-img-top" alt="..." controls>
      <source src="{{$archivo3->temporaryURL()}}"  type="video/mp4">
    </video>
    @endif
    @if($formato3==3)
    <h3 class="form-label">Visualización de PDF 3</h3>
      <iframe width="400" height="400" src="/imagen/temporalpdf/{{$arch3}}" frameborder="0"></iframe>
    @endif
   </div>

</div>    </center> <br>
<div wire:loading wire:target="archivo3" class="alert alert-warning" role="alert">
  <strong class="font-bold">¡Documento3 cargando!</strong>
    <span class="block sm:inlone">Espere un momento hasta que el documento se haya procesado completamente.</span>
  <div class="spinner-border text-warning" role="status">
  </div>
</div>
</div>
<center> <a type="submit" type="button" wire:click='subir_mas_arch3()' style="border-radius: 60px 60px 60px 60px;"  class="btn btn-warning">Subir otro archivo3</a></center> 
</div>


@elseif($mas_arch==3)


<center><div class="col-sm-12">
  <h6>nuevo archivo 4</h6>
  <input type="file" class="form-control " wire:model='archivo4'  style="border:2px solid rgba(86, 95, 76, 0.466);" id="example3">
   <div class="col-sm-10">
    @if($formato4==1)
    <h3 class="form-label">Visualización de Imagen</h3>
    <img src="{{$archivo4->temporaryURL()}}" height="200" weight="200"  alt="...">
    @endif
    @if($formato4==2)
    <h3 class="form-label">Visualización de Video</h3>
    <video height="500" weight="500" class="card-img-top" alt="..." controls>
      <source src="{{$archivo4->temporaryURL()}}"  type="video/mp4">
    </video>
    @endif
    @if($formato4==3)
    <h3 class="form-label">Visualización de PDF 3</h3>
      <iframe width="400" height="400" src="/imagen/temporalpdf/{{$arch4}}" frameborder="0"></iframe>
    @endif
   </div>

</div>    </center> <br>
<div wire:loading wire:target="archivo4" class="alert alert-warning" role="alert">
  <strong class="font-bold">¡Documento4 cargando!</strong>
    <span class="block sm:inlone">Espere un momento hasta que el documento se haya procesado completamente.</span>
  <div class="spinner-border text-warning" role="status">
  </div>
</div>
</div>
<center> <a type="submit" type="button" wire:click='subir_mas_arch4()' style="border-radius: 60px 60px 60px 60px;"  class="btn btn-warning">Subir otro archivo4</a></center> 
</div>

@elseif($mas_arch==4)

<center><div class="col-sm-12">
  <h6>nuevo archivo 5</h6>
  <input type="file" class="form-control " wire:model='archivo4'  style="border:2px solid rgba(86, 95, 76, 0.466);" id="example5">
   <div class="col-sm-10">
    @if($formato5==1)
    <h3 class="form-label">Visualización de Imagen</h3>
    <img src="{{$archivo5->temporaryURL()}}" height="200" weight="200"  alt="...">
    @endif
    @if($formato5==2)
    <h3 class="form-label">Visualización de Video</h3>
    <video height="500" weight="500" class="card-img-top" alt="..." controls>
      <source src="{{$archivo5->temporaryURL()}}"  type="video/mp4">
    </video>
    @endif
    @if($formato5==3)
    <h3 class="form-label">Visualización de PDF 5</h3>
      <iframe width="400" height="400" src="/imagen/temporalpdf/{{$arch5}}" frameborder="0"></iframe>
    @endif
   </div>

</div>    </center> <br>
<div wire:loading wire:target="archivo5" class="alert alert-warning" role="alert">
  <strong class="font-bold">¡Documento5 cargando!</strong>
    <span class="block sm:inlone">Espere un momento hasta que el documento se haya procesado completamente.</span>
  <div class="spinner-border text-warning" role="status">
  </div>
</div>
</div>
<center> <h1>No se puede subir mas de 5 archivos</h1></center> 
</div>


@endif
        
        </div>
        <div class="modal-footer">
          @if($mas_arch==0)
          <a type="submit" type="button" wire:click='Subir_T()' style="border-radius: 60px 60px 60px 60px;" data-bs-dismiss="modal" class="btn btn-warning">Enviar</a>
          @elseif($mas_arch==1)
          <a type="submit" type="button" wire:click='Subir_T2()' style="border-radius: 60px 60px 60px 60px;" data-bs-dismiss="modal" class="btn btn-warning">Enviar2</a>
          @elseif($mas_arch==2)
          <a type="submit" type="button" wire:click='Subir_T3()' style="border-radius: 60px 60px 60px 60px;" data-bs-dismiss="modal" class="btn btn-warning">Enviar3</a>

          @elseif($mas_arch==3)
          <a type="submit" type="button" wire:click='Subir_T4()' style="border-radius: 60px 60px 60px 60px;" data-bs-dismiss="modal" class="btn btn-warning">Enviar4</a>

          @elseif($mas_arch==4)
          <a type="submit" type="button" wire:click='Subir_T5()' style="border-radius: 60px 60px 60px 60px;" data-bs-dismiss="modal" class="btn btn-warning">Enviar5</a>

          @endif
          <button type="button" class="btn btn-secondary"  style="border-radius: 60px 60px 60px 60px;"  data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
    </div>