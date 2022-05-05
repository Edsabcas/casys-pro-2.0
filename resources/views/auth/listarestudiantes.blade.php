@isset ('listadousers')
<div class="card-header p-2">
  <ul class="nav nav-pills" wire:ignore>
      <li @click.prevent="currentTab = 'profile'" class="nav-item"><a class="nav-link" :class="currentTab === 'profile' ? 'active' : ''" href="#profile" data-toggle="tab"><i class="fa fa-user mr-1"></i> Perfil </a></li>
      <li @click.prevent="currentTab = 'changePassword'" class="nav-item"><a class="nav-link" :class="currentTab === 'changePassword' ? 'active' : ''" href="#changePassword" data-toggle="tab"><i class="fa fa-key mr-1"></i> Cambiar Contraseña</a></li>
  </ul>
</div>
</div><!-- /.card-header -->
<div class="card-body">
    <div class="tab-content">
        <div class="tab-pane" :class="currentTab === 'profile' ? 'active' : ''" id="profile" wire:ignore.self>
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
                  @foreach ($listadousers as $listadouser)
                    <tr>
                        <td>{{$listadouser->name}}</td>
                        <td>{{$listadouser->email}}</td>
                        <td>{{$listadouser->usuario}}</td>
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
        @endisset
