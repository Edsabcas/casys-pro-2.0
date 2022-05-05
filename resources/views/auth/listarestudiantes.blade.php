
          <table class="table table-bordered">
                <div class="form-group row position-absolute top-0 start-50 translate-middle">
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
                  @foreach ($listadousers as $listadouser)
                    <tr>
                        <td>{{$listadouser->name}}</td>
                        <td>{{$listadouser->email}}</td>
                        <td>{{$listadouser->usuario}}</td>
                        <td>
                          <img class="rounded-circle" src="img/undraw_profile_1.svg" width="60" height="60" 
                                                alt="...">
                        </td>
                        <td>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Editar
                          </button>                        
                        </td>
                    </tr>  
                </div>
          @endforeach
              </table>

              <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Realizar cambios en el usuario</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form wire:submit.prevent='' class="form-horizontal">
                        <div class="form-group row">
                          <label for="n_name" class="col-sm-3 col-form-label">Nuevo nombre:</label>
                          <div class="col-sm-9">
                              <input wire:model="n_name" type="text" class="form-control"  id="n_name" >
                              @error('n_name')
                              <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                  Pendiente de ingreso
                                </div>
                              </div>
                              @enderror
                          </div>
                      </div>
                          <div class="form-group row">
                              <label for="n_email" class="col-sm-3 col-form-label">Nuevo email:</label>
                              <div class="col-sm-9">
                                  <input wire:model="n_email" type="email" class="form-control"  id="n_email" >
                                  @error('n_email')
                                  <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                    <div>
                                      Pendiente de ingreso
                                    </div>
                                  </div>
                                  @enderror
                              </div>
                          </div>
                          <div class="form-group row">
                            <label for="n_user" class="col-sm-3 col-form-label">Nuevo usuario:</label>
                            <div class="col-sm-9">
                                <input wire:model="n_user" type="text" class="form-control"  id="n_user" >
                                @error('n_user')
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                  <div>
                                    Pendiente de ingreso
                                  </div>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="n_password" class="col-sm-3 col-form-label">Nueva contraseña:</label>
                          <div class="col-sm-9">
                              <input wire:model="n_password" type="password" class="form-control"  id="n_password" >
                              @error('n_password')
                              <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                  Pendiente de ingreso
                                </div>
                              </div>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="c_password" class="col-sm-3 col-form-label">Confirmar contraseña:</label>
                        <div class="col-sm-9">
                            <input wire:model="c_password" type="password" class="form-control"  id="c_password" >
                            @error('c_password')
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                              <div>
                                Pendiente de ingreso
                              </div>
                            </div>
                            @enderror
                            @if($mensaje7 != null)
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                              <div>{{$mensaje7}}
                              </div>
                            </div>
                            @endif
                        </div>
                    </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                      <button wire:click='e_perfiles' class="btn btn-primary">Guardar</button>
                    </div>
                  </div>
                </div>
              </div>

