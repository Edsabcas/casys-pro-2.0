<div class="card row">
  <div class="card-body offset-1 col-10">
    <TABLE BORDER width="600" height="300"  class="table table-success table-striped table-bordered">
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
              @php
                $foo = 0;
                if (strpos($foto->img_users, '.jpg' ) !== false || strpos($foto->img_users, '.png' ) !== false || strpos($foto->img_users, '.jpeg' ) !== false) 
                { $foo=1; }
              @endphp
                  @if($foo==1)
                  @if($foto->id==auth()->user()->id)
                  <img src="imagen/perfil/{{$foto->img_users}}" height="150" weight="75" alt="...">
                  @endif
                  @endif
            @endforeach      
            <button type="button" class="btn btn-pre2" data-bs-toggle="modal" data-bs-target="#perfilmodal2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg>  
            </button> 
          </TD>
        </TR>
        <TR ALIGN=CENTER><TH>CONTRASEÑA</TH>
          <TD>
            <button type="button" class="btn btn-pre2" data-bs-toggle="modal" data-bs-target="#perfilmodal"> 
              Editar
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg>
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
              <div wire:loading wire:target="archivo_perfil" class="alert alert-warning" role="alert">
                <strong class="font-bold">¡Imagen cargando!</strong>
                  <span class="block sm:inlone">Espere un momento hasta que la imagen se haya procesado.</span>
                <div class="spinner-border text-warning" role="status">
                </div>
              </div>
              @if($tipo==1)
              <h3 class="form-label">Visualización de Imagen</h3>
              <img src="{{$archivo_perfil->temporaryURL()}}" height="200" weight="200"  alt="...">
              @endif
              @if($mensaje24 != null)
                            <div class="alert alert-success d-flex align-items-center" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                  <div>{{$mensaje24}}
                                  </div>
                                </div>
                              @endif
                            @if($mensaje25 != null)
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                  <div>{{$mensaje25}}
                                  </div>
                                </div>
                              @endif
            </div>  
            <button class="btn btn-pre2" wire:click="cambiofoto()">Publicar</button>
            <button type="button" class="btn btn-secondary" style="border-radius: 12px;" data-bs-dismiss="modal">Cerrar</button>
          </form>
          </div>
        </div>
      </div>
    </div>

              <div wire:ignore.self class="modal fade" id="perfilmodal" tabindex="-1" aria-labelledby="perfilmodalLabel" aria-hidden="true">
                <head>
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
                </head>
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
                            <input wire:model="current_password" type="password"  class="form-control" id="password" name="password" placeholder="Contraseña">
                              <input style="margin-left:20px;" type="checkbox" id="mostrar_contrasena" title="clic para mostrar contraseña"/>
                              &nbsp;&nbsp;
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
                                <input wire:model="new_password" type="password"  class="form-control" id="passwordd" name="passwordd" placeholder="Contraseña"> 
                                <input style="margin-left:20px;" type="checkbox" id="mostrar_contrasenaa" title="clic para mostrar contraseña"/>
                                &nbsp;&nbsp;
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
                              <input wire:model="new_password_confirmation" type="password"  class="form-control" id="ppassword" name="ppassword" placeholder="Contraseña"> 
                              <input style="margin-left:20px;" type="checkbox" id="mmostrar_contrasena" title="clic para mostrar contraseña"/>
                              &nbsp;&nbsp;
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
                              <button type="button" class="btn btn-secondary" style="border-radius: 12px;" data-bs-dismiss="modal">Cerrar</button>
                              <button wire:click='c_pass' class="btn btn-pre2">Guardar</button>
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
                      <script>
                        $(document).ready(function () {
                          $('#mostrar_contrasena').click(function () {
                            if ($('#mostrar_contrasena').is(':checked')) {
                              $('#password').attr('type', 'text');
                            } else {
                              $('#password').attr('type', 'password');
                            }
                          });
                        });
                        </script>

                        <script>
                          $(document).ready(function () {
                            $('#mostrar_contrasenaa').click(function () {
                              if ($('#mostrar_contrasenaa').is(':checked')) {
                                $('#passwordd').attr('type', 'text');
                              } else {
                                $('#passwordd').attr('type', 'password');
                              }
                            });
                          });
                          </script>

                          <script>
                            $(document).ready(function () {
                              $('#mmostrar_contrasena').click(function () {
                                if ($('#mmostrar_contrasena').is(':checked')) {
                                  $('#ppassword').attr('type', 'text');
                                } else {
                                  $('#ppassword').attr('type', 'password');
                                }
                              });
                            });
                            </script>
                    </div>
                    <div class="modal-footer">
                    </div>
                  </div>
                </div>
              </div>
