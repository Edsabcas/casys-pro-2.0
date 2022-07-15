<div wire:ignore.self id="infodata7" style="border-radius: 60px 60px 60px 60px;" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="infodata7" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
          <h3 class="modal-title text-center" style="color:rgb(255, 255, 255)" >Proceso de Inscripción</h3>
          <button type="button" class="btn btn-close btn-warning" style="color:rgb(255, 255, 255)"  data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <div class="container-sm">
              <h4 class="form-label text text-center" style="font-size:25px">Gestion: #{{$no_gest}}</h4>
              <p  class="text text-center">Fecha de registro: <b>{{$fecha_ultimo_cambio}}</b></p>
              <hr>
      <br>
      <div wire:ignore.self class="accordion" id="accordionPanelsStayOpenExample2">
        <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
          <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;"  type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
            <h4 class="font-weight-bolder">  <b>Datos del Estudiante:</b>   </h4>
            </button>
           
          </h2>
          <div  wire:ignore.self id="panelsStayOpen-collapseTwo"style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
            <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
                <form wire:submit.prevent="" class="form-floating">
                  <div class="row g-3">
                    <div class="col-md">
                        <label for="inputNombres" style="font-size: 15px; color:#000000;">Nombre del Estudiante:</label>
                        <input type="text" wire:model="nombre_es" class="form-control" disabled>                           
                    </div>
                    <div class="col-md">
                      <label for="inputApellidos" style="font-size: 15px; color:#000000;">Fecha de Nacimiento:</label>
                      <input type="date"  wire:model="f_nacimiento_es" class="form-control " min="2000-01-01" max="2020-12-31" disabled>
                    </div>
                  </div>
                  <div class="row g-3">
                    <div class="col-md">
                      <label for="inputDireccion" style="font-size: 15px; color:#000000;">CUI:</label>
                      <input type='number' placeholder=""  wire:model="cui_es" class="form-control " disabled>
                    </div>
                    <div class="col-md">
                      <label for="inputInstitucion" style="font-size: 15px; color:#000000;">Código Personal (Mineduc):</label>
                      <input type='text' placeholder=""  wire:model="codigo_pe_es" class="form-control " disabled>
                    </div>
                  </div>
                  <hr>
                  <div class="row g-3">
                    <div class="col-md-6">
                        <strong><label  for="Labelnombrepadre" class="form-label"> Nombre del padre</label></strong>
                        <input  type="text" class="form-control"  wire:model="nombre_padre" disabled>
                    </div>

                    <div class="col-md-6">
                        <strong><label  for="Labelnombrepadre" class="form-label">Nombre de la madre</label></strong>
                        <input  type="text" class="form-control"  wire:model="nombre_madre" disabled>
                    </div>
                </div>
                </form>
            </div>
          </div>
        </div>
      </div>
      <br>
    <div wire:ignore.self class="accordion" id="accordionDatosdelencargado">
        <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
          <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOnedatosencargado">
            <button class="accordion-button collapsed" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-encargado" aria-expanded="false" aria-controls="panelsStayOpen-encargado">
                <h4 class="font-weight-bolder"> <b>Datos del Encargado:</b> </h4>
                </button>
          </h2>
          
          <div  wire:ignore.self id="panelsStayOpen-encargado" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
            <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
                <form wire:submit.prevent="" class="form-floating">
                    @if ($quien_encargado1==1)
                    <div class="row g-3">
                      <div class="col-md-6">
                        <strong><label  for="Labelnombrepadre" class="form-label"> Nombre del padre</label></strong>
                        <input  type="text" class="form-control"  wire:model="nombre_padre" disabled>
                      </div>
                      <div class="col-md-6">
                        <strong><label  for="Labelnombrepadre" class="form-label"> Fecha de nacimiento del padre</label></strong>
                        <input  type="date" class="form-control"  wire:model="nacimiento_padre" disabled>
                      </div>
                      <div class="col-md-6">
                        <strong><label  for="Labelnombrepadre" class="form-label">DPI del padre</label></strong>
                        <input  type="text" class="form-control"  wire:model="DPI_padre" disabled>
                      </div>
                      <div class="col-md-6">
                        <strong><label  for="Labelnombrepadre" class="form-label"> Grado:</label></strong>
                        <select class="form-select form-select-lg mb-3" wire:model="gradoin" aria-label=".form-select-lg example"  disabled>
                          @foreach($grados as $grado)
                            <option value="{{$grado->ID_GR}}">{{$grado->GRADO}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  @elseif($quien_encargado1==2)
                      <div class="row g-3">
                        <div class="col-md-6">
                          <strong><label  for="Labelnombrepadre" class="form-label"> Nombre de la madre</label></strong>
                          <input  type="text" class="form-control"  wire:model="nombre_madre" disabled>
                        </div>   
                        <div class="col-md-6">
                          <strong><label  for="Labelnombrepadre" class="form-label"> Fecha de nacimiento de la madre</label></strong>
                          <input  type="date" class="form-control"  wire:model="fechana_madre" disabled>
                        </div>
                        <div class="col-md-6">
                          <strong><label  for="Labelnombrepadre" class="form-label"> DPI de la madre</label></strong>
                          <input  type="number" class="form-control"  wire:model="DPI_madre" disabled>
                        </div>
                        <div class="col-md-6">
                          <strong><label  for="Labelnombrepadre" class="form-label"> Grado:</label></strong>
                          <select class="form-select form-select-lg mb-3" wire:model="gradoin" aria-label=".form-select-lg example"  disabled>
                            @foreach($grados as $grado)
                              <option value="{{$grado->ID_GR}}">{{$grado->GRADO}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                  @elseif($quien_encargado1==3)
                      <div class="row g-3">
                        <div class="col-md-6">
                          <strong><label  for="Labelnombrepadre" class="form-label"> Nombre de la madre</label></strong>
                          <input  type="text" class="form-control"  wire:model="nombre_encargado" disabled>
                        </div>   
                        <div class="col-md-6">
                          <strong><label  for="Labelnombrepadre" class="form-label"> Fecha de nacimiento de la madre</label></strong>
                          <input  type="date" class="form-control"  wire:model="nacimientoencargado" disabled>
                        </div>
                        <div class="col-md-6">
                          <strong><label  for="Labelnombrepadre" class="form-label"> DPI de la madre</label></strong>
                          <input  type="number" class="form-control"  wire:model="DPIencargado" disabled>
                        </div>
                        <div class="col-md-6">
                          <strong><label  for="Labelnombrepadre" class="form-label"> Grado:</label></strong>
                          <select class="form-select form-select-lg mb-3" wire:model="gradoin" aria-label=".form-select-lg example"  disabled>
                            @foreach($grados as $grado)
                              <option value="{{$grado->ID_GR}}">{{$grado->GRADO}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                  @endif
                </form>
              </div>   
            </div>
        </div>
    </div>
        </div>
    </div>
        <div class="modal-footer">
            <button class="btn btn-pre2" style="border-radius: 60px 60px 60px 60px;" wire:click="generar_use()" data-bs-target="#infodata7_1" data-bs-toggle="modal" data-bs-dismiss="modal">Siguiente</button>
        </div>


  </div>     
</div>
</div>


<div wire:ignore.self id="infodata7_1" style="border-radius: 60px 60px 60px 60px;" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="infodata7_1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
          <h3 class="modal-title text-center" style="color:rgb(255, 255, 255)" >Proceso de Inscripción</h3>
          <button type="button" class="btn btn-close btn-warning" style="color:rgb(255, 255, 255)"  data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <div class="container-sm">
              <h4 class="form-label text text-center" style="font-size:25px">Gestion: #{{$no_gest}}
              
              </h4>
              <hr>
      <br>

      <div wire:ignore.self class="accordion" id="accordionPanelsStayOpenExample2">
        <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
          <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;"  type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
            <h4 class="font-weight-bolder">  <b>Usuario del Estudiante:</b>   </h4>
            </button>
           
          </h2>
          <div  wire:ignore.self id="panelsStayOpen-collapseTwo"style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
            <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
                <form wire:submit.prevent="" class="form-floating">
                    <div class="row">
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Usuario:</label>
                            <input type="text" class="form-control" wire:model='usuario' id="recipient-name">
                        </div>
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Correo:</label>
                            <input type="text" class="form-control" wire:model='correoed' id="recipient-name">
                        </div>
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Contraseña:</label>
                            <input type="password" class="form-control" wire:model='pass' id="password">
                            <input style="margin-left:20px;" type="checkbox" id="mostrar_contrasena" title="clic para mostrar contraseña"/>
                            &nbsp;&nbsp;Mostrar Contraseña
                        </div>
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
            </div>
          </div>
        </div>
      </div>
      <br>
    <div wire:ignore.self class="accordion" id="accordionDatosdelencargado">
        <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
          <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOnedatosencargado">
            <button class="accordion-button collapsed" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-encargado" aria-expanded="false" aria-controls="panelsStayOpen-encargado">
                <h4 class="font-weight-bolder"> <b>Usuario del Encargado:</b> </h4>
                </button>
          </h2>
          
          <div  wire:ignore.self id="panelsStayOpen-encargado" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
            <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
                <form wire:submit.prevent="" class="form-floating">
                    <div class="row">
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Usuario:</label>
                            <input type="text" class="form-control" wire:model='usuario2' id="recipient-name">
                        </div>
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Correo:</label>
                            <input type="text" class="form-control" wire:model='correoed2' id="recipient-name">
                        </div>
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Contraseña:</label>
                            <input type="password" class="form-control" wire:model='pass2' id="password1">
                            <input style="margin-left:20px;" type="checkbox" id="mostrar_contrasena1" title="clic para mostrar contraseña"/>
                            &nbsp;&nbsp;Mostrar Contraseña
                        </div>
                    </div>
                </form>
                <script>
                    $(document).ready(function () {
                      $('#mostrar_contrasena1').click(function () {
                        if ($('#mostrar_contrasena1').is(':checked')) {
                          $('#password1').attr('type', 'text');
                        } else {
                          $('#password1').attr('type', 'password');
                        }
                      });
                    });
                    </script>
              </div>   
            </div>
        </div>
    </div>
        </div>
    </div>
        <div class="modal-footer">
            <a class="btn btn-pre2" style="border-radius: 60px 60px 60px 60px;" wire:click="usuario_aluenca(8)" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Guardar</a>
          </div>


  </div>     
</div>
</div>