<div class="card-header p-2">
  <ul class="nav nav-pills" wire:ignore>
      <li @click.prevent="currentTab = 'perfil'" class="nav-item"><a class="nav-link" :class="currentTab === 'perfil' ? 'active' : ''" href="#perfil" data-toggle="tab"><i class="fa fa-user mr-1"></i> Perfil </a></li>
      <li @click.prevent="currentTab = 'c_pass_perfiles'" class="nav-item"><a class="nav-link" :class="currentTab === 'c_pass_perfiles' ? 'active' : ''" href="#c_pass_perfiles" data-toggle="tab"><i class="fa fa-key mr-1"></i> Cambiar Contraseña</a></li>
  </ul>
</div>
</div><!-- /.card-header -->
<div class="card-body">
    <div class="tab-content">
        <div class="tab-pane" :class="currentTab === 'perfil' ? 'active' : ''" id="perfil" wire:ignore.self>
          <table class="table table-bordered">
                <div class="form-group row">
                  <thead>
                    <tr>
                        <th>NOMBRE</th>
                        <th>EMAIL</th>
                        <th>USUARIO</th>
                        <th>FOTO DE PERFIL</th>
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
                    </tr>  
                </div>
                <br>
          @endforeach
              </table>
        </div>

        <div class="tab-pane" :class="currentTab === 'c_pass_perfiles' ? 'active' : ''" id="c_pass_perfiles" wire:ignore.self>
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
              </div>
                <div class="form-group row">
                    <div class="offset-sm-3 col-sm-9">
                        <button wire:click='c_pass' class="btn btn-success"><i class="fa fa-save mr-1"></i> Guardar Cambios</button>
                    </div>
                </div>
            </form>
        </div>