<div  wire:ignore.self class="modal fade" id="modalsubiractividades" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalsubiractividades" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header"  style="background:#a4cb39;color:rgba(255, 255, 255, 255.255)">
            <h5 class="modal-title text-center" id="staticBackdropLabel" style="color:#3a3e7b"><b>{{$nombre_act}}:</b> <b style="color:#ffffff">{{$descripact}}</b> </h5>
            
        </div>
        <div class="modal-body">
            <div class="card border-Secondary mb-3" style="max-width: 90rem;" >
                <div class="card-body">
                 <Center> <label style="color:#3a3e7b">Suba sus archivos aqui</label> </Center>
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
                  </div>    </center>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <a type="submit" type="button" style="border-radius: 60px 60px 60px 60px;" data-bs-dismiss="modal" class="btn btn-warning">Enviar</a> 
        </div>
      </div>
    </div>
    </div>