<<<<<<< HEAD
<div class="card row">
  <div class="card-body offset-2 col-10">
=======
<div class="card row container m-50 mx-500">
  <div class="card-body" >
>>>>>>> 288304826fb316066a294ae0949f989264738365
    <TABLE BORDER width="600" height="300" class="table-striped">
      @foreach ($perfiles as $perfil)
        <TR ALIGN=CENTER><TH>NOMBRE</TH>
          <TD>{{$perfil->name}}</TD>
        </TR>
        <TR ALIGN=CENTER><TH>EMAIL</TH>
          <TD>{{$perfil->email}}</TD>
        </TR>
        <TR ALIGN=CENTER><TH>USUARIO</TH>
          <TD>{{$perfil->usuario}}</TD>
        </TR>
        <TR ALIGN=CENTER><TH>FOTO DE PERFIL</TH>
          <TD>
            @foreach ($fotos as $foto)
<<<<<<< HEAD
            @php
              $foo = 0;
              if (strpos($foto->img_users, '.jpg' ) !== false || strpos($foto->img_users, '.png' ) !== false || strpos($foto->img_users, '.jpeg' ) !== false)
              { $foo=1; }
            @endphp
                @if($foo==1)
                @if($foto->id==auth()->user()->id)
                <img src="imagen/perfil/{{$foto->img_users}}" height="200" weight="50" alt="...">
                @endif
                @endif
          @endforeach       
=======
              @php
                $foo = 0;
                if (strpos($foto->img_users, '.jpg' ) !== false || strpos($foto->img_users, '.png' ) !== false || strpos($foto->img_users, '.jpeg' ) !== false) 
                { $foo=1; }
              @endphp
                  @if($foo==1)
                  @if($foto->id==auth()->user()->id)
                  <img src="imagen/perfil/{{$foto->img_users}}" height="300" weight="100" alt="...">
                  @endif
                  @endif
            @endforeach      
>>>>>>> 288304826fb316066a294ae0949f989264738365
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#perfilmodal2">Cambiar</button> 
          </TD>
        </TR>
        <TR ALIGN=CENTER><TH>EDITAR</TH>
          <TD>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#perfilmodal"> 
              Contraseña
            </button>   
          </TD>
        </TR>
      @endforeach   
    </TABLE>
  </div>
</div>
          

    <div wire:ignore.self class="modal fade" id="perfilmodal2" tabindex="-1" aria-labelledby="perfilmodal2Label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="perfilmodal2Label">Cambio de foto de perfil</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form wire:submit.prevent='' class="form-horizontal">
              <div class="form-group row">
                <label for="exampleInputPassword1" class="form-label" style="font-size:20px">Elegir foto de perfil:</label>
                <div class="mb-3">
                  <input type="file" id="archivo"  wire:model="archivo_perfil">
                </div> 
            </div>
            <div class="mb-3">
              @if($tipo==1)
              <h3 class="form-label">Visualización de Imagen</h3>
              <img src="{{$archivo_perfil->temporaryURL()}}" height="200" weight="200"  alt="...">
              @endif
            </div>  
            <button type="submit" class="btn btn-primary" wire:click="cambiofoto()">Publicar</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
          </form>
          </div>
        </div>
      </div>
    </div>

              <div wire:ignore.self class="modal fade" id="perfilmodal" tabindex="-1" aria-labelledby="perfilmodalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="perfilmodalLabel">Cambio de contraseña</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form wire:submit.prevent='' class="form-horizontal">
                        <div class="form-group row">
                          <label for="current_password" class="col-sm-3 col-form-label">Contraseña actual:</label>
                          <div class="col-sm-9">
                              <input wire:model="current_password" type="password" class="form-control"  id="current_password" >
                              @error('current_password')
                              <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                  Pendiente de ingreso
                                </div>
                              </div>
                              @enderror
                              @if($mensaje1 != null)
                              <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>{{$mensaje1}}
                                </div>
                              </div>
                              @endif
                          </div>
                      </div>
                          <div class="form-group row">
                              <label for="new_password" class="col-sm-3 col-form-label">Contraseña nueva:</label>
                              <div class="col-sm-9">
                                  <input wire:model="new_password" type="password" class="form-control"  id="new_password" >
                                  @error('new_password')
                                  <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                    <div>
                                      Pendiente de ingreso
                                    </div>
                                  </div>
                                  @enderror
                                  @if($mensaje != null)
                                  <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                    <div>{{$mensaje}}
                                    </div>
                                  </div>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                            <label for="new_password_confirmation" class="col-sm-3 col-form-label">Confirmar la contraseña nueva:</label>
                            <div class="col-sm-9">
                                <input wire:model="new_password_confirmation" type="password" class="form-control"  id="new_password_confirmation" >
                                @error('new_password_confirmation')
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                  <div>
                                    Pendiente de ingreso
                                  </div>
                                </div>
                                @enderror
                            </div>
                            <br>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                              <button wire:click='c_pass' class="btn btn-primary">Guardar</button>
                            </div>
                            @if($mensaje12 != null)
                            <div class="alert alert-success d-flex align-items-center" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                  <div>{{$mensaje12}}
                                  </div>
                                </div>
                              @endif
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                  </div>
                </div>
              </div>
