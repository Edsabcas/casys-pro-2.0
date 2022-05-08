          <table class="table table-bordered">
                <div class="form-group row">
                  <thead>
                    <tr>
                        <th>NOMBRE</th>
                        <th>EMAIL</th>
                        <th>USUARIO</th>
                        <th>FOTO DE PERFIL</th>
                        <th>EDITAR</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($perfiles as $perfil)
                    <tr>
                        <td>{{$perfil->name}}</td>
                        <td>{{$perfil->email}}</td>
                        <td>{{$perfil->usuario}}</td>
                        <td>
                          <img class="rounded-circle" src="img/undraw_profile_1.svg" width="60" height="60" 
                                                alt="...">
                        </td>
                        <td>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#perfilmodal">
                            Contraseña
                          </button>   
                        </td>
                    </tr>  
                </div>
          @endforeach
              </table>

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