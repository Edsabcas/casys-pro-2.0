<div class="container">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <script>
    $(document).on('click', '#info', function() {
  $('#infodata').modal('show');
  });
  
  $(document).on('click', '#valpedido', function() {
  $('#cambioestadoinfo').modal('show');
  });
  </script>
  
    <div class="card shadow rounded">
        <div class="text-center">
          <br>
          <h1 style="color: #3a3e7b"><strong>Pre-Inscripción @php echo date('Y'); @endphp</strong></h1>
          <br>
        </div>
      </div>
      <br><br>
      @if($mensaje!=null)
      <div id="cerrar"class="alert alert-success alert-dismissible fade show cerrar" role="alert">
        <strong> Actualizado Correctamente.</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
<script>
  $('#cerrar').fadeIn();     
  setTimeout(function() {
   $mensaje=""
       $("#cerrar").fadeOut();           
  },2000);
</script>
      @if($mensaje1!=null)
      <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
         No fue posible actualizar.
        </div>
      </div>
      @endif

      <div class="accordion accordion-flush rounded" id="accordionFlushExample">
      @if (Session::get('rol_usuario_activo')==1 or Session::get('rol_usuario_activo')==2)  
        <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
          <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  id="flush-headingOne">
            <button class="accordion-button collapsed"  style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Estado 0 | Validación Datos
            </button>
          </h2>
          <div wire:ignore.self id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div wire:ignore.self class="accordion-body">
                <div class="input-group justify-content">
                    <div class="form-outline">
                      <input type="search" pattern="[A-Za-z0-9_-]{1,15}" wire:model="search0" id="form1" class="form-control" placeholder="Buscar:" />
                    </div>
                    <button type="button" class="btn btn-pre2">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                <div class="table-responsive">
                <table class="table table-light table-bordered">
                    <thead>
                      <tr>
                        <th scope="col"># Gestión</th>
                        <th scope="col">Estudiante</th>
                        <th scope="col">Grado Ingreso</th>
                        <th scope="col">Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($estado_cero as $estado_cer)
                        <tr>
                            <th scope="row">{{ $estado_cer->NO_GESTION}}</th>
                            <td>{{ $estado_cer->NOMBRE_ES}}</td>
                            <td>{{ $estado_cer->GRADO}}</td>
                            <span>
                                <td>
                                    
                                    <button id="info" class="btn btn-editb" wire:click="editar1({{ $estado_cer->ID_PRE}})" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                      </svg></button>        
                               
                                    <button type="button" class="btn btn-secondary" wire:click="tipo_cambio('{{ $estado_cer->ID_PRE}}',0,{{$estado_cer->NO_GESTION}})" style="border-radius: 12px;" data-bs-toggle="modal" data-bs-target="#cambioestado"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                      </svg></button>
                                </td>
                            </span> 
                          </tr>                        
                        @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
          </div>
        </div>
        @endif

        <br>
        @if (Session::get('rol_usuario_activo')==1 or Session::get('rol_usuario_activo')==2 or Session::get('rol_usuario_activo')==8)  
        <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
          <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="" id="flush-headingTwo">
            <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Estado 1-2 | Validación de Pago 
            </button>
          </h2>
          <div  wire:ignore.self  id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div  wire:ignore.self  class="accordion-body">
                <div class="input-group justify-content">
                    <div class="form-outline">
                      <input type="search" wire:model="search1" id="form1" class="form-control" placeholder="Buscar:" />
                    </div>
                    <button type="button" class="btn btn-pre2">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                <div class="table-responsive">
                    <table class="table table-light table-bordered">
                        <thead>
                          <tr>
                            <th scope="col"># Gestión</th>
                            <th scope="col">Estudiante</th>
                            <th scope="col">Grado Ingreso</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acción</th>
                          </tr>
                        </thead>
                <tbody>
                    @foreach ($estado_uno as $estado_un)
                    <tr>
                        <th scope="row">{{ $estado_un->NO_GESTION}}</th>
                        <td>{{ $estado_un->NOMBRE_ES}}</td>
                        <td>{{ $estado_un->GRADO}}</td>
                        @if($estado_un->ESTADO_PRE_INS==1)
                        <td><span class="badge rounded-pill bg-warning text-dark">Pendiente R.</span></td>
                        @elseif($estado_un->ESTADO_PRE_INS==2)
                        <td><span class="badge rounded-pill bg-danger">Validar C.</span></td>
                        @endif
                      
                        <span>
                            <td>
                                <button class="btn btn-editb" wire:click="editar2({{ $estado_un->ID_PRE}})" data-bs-toggle="modal" data-bs-target="#infodata2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                  </svg></button>        
                            
                                <button type="button"  class="btn btn-secondary" wire:click="tipo_cambio('{{ $estado_un->ID_PRE}}',0,{{$estado_un->NO_GESTION}})" style="border-radius: 12px;" data-bs-toggle="modal" data-bs-target="#cambioestado"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                  </svg></button>
                            </td>
                        </span> 
                      </tr>                        
                    @endforeach
                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
        @endif

        <br>
        @if (Session::get('rol_usuario_activo')==1 or Session::get('rol_usuario_activo')==2)
        <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
          <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree">
            <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Estado 3-4 | Datos Inscripción
            </button>
          </h2>
          <div   wire:ignore.self id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div wire:ignore.self class="accordion-body">
                <div class="input-group justify-content">
                    <div class="form-outline">
                      <input type="search" wire:model="search2" id="form1" class="form-control" placeholder="Buscar:" />
                    </div>
                    <button type="button" class="btn btn-pre2">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-light table-bordered">
                        <thead>
                          <tr>
                            <th scope="col"># Gestión</th>
                            <th scope="col">Estudiante</th>
                            <th scope="col">Grado Ingreso</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acción</th>
                          </tr>
                        </thead>
                <tbody>
                    @foreach ($estado_dos as $estado_dos)
                    <tr>
                        <th scope="row">{{ $estado_dos->NO_GESTION}}</th>
                        <td>{{ $estado_dos->NOMBRE_ES}}</td>
                        <td>{{ $estado_dos->GRADO}}</td>
                        @if($estado_dos->ESTADO_PRE_INS==3)
                        <td><span class="badge rounded-pill bg-warning text-dark">Pendiente R.</span></td>
                        @elseif($estado_dos->ESTADO_PRE_INS==4)
                        <td><span class="badge rounded-pill bg-danger">Validar C.</span></td>
                        @endif
                      
                        <span>
                            <td>
                                <button class="btn btn-editb" wire:click="editar2({{ $estado_dos->ID_PRE}})" data-bs-toggle="modal" data-bs-target="#infodata3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                  </svg></button>        
                           
                         
                            
                                <button type="button"  class="btn btn-secondary" wire:click="tipo_cambio('{{ $estado_dos->ID_PRE}}',0,{{$estado_dos->NO_GESTION}})" style="border-radius: 12px;" data-bs-toggle="modal" data-bs-target="#cambioestado"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                  </svg></button>
                            </td>
                        </span> 
                      
                      </tr>                        
                    @endforeach
                
                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
        @endif

        <br>
        @if (Session::get('rol_usuario_activo')==1 or Session::get('rol_usuario_activo')==2)
        <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
            <h2 class="accordion-header"  style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree2" >
              <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree2" aria-expanded="false" aria-controls="flush-collapseThree2">
                Estado 5-6 | Contrato DIACO
              </button>
            </h2>
            <div   wire:ignore.self  id="flush-collapseThree2" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2" data-bs-parent="#accordionFlushExample">
              <div  wire:ignore.self  class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
            </div>
          </div>
          @endif

          <br>
          @if (Session::get('rol_usuario_activo')==1 or Session::get('rol_usuario_activo')==2)
          <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
            <h2 class="accordion-header"  style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree3" >
              <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree3" aria-expanded="false" aria-controls="flush-collapseThree3">
                Estado 7 | Usuarios
              </button>
            </h2>
            <div  wire:ignore.self  id="flush-collapseThree3" class="accordion-collapse collapse" aria-labelledby="flush-headingThree3" data-bs-parent="#accordionFlushExample">
              <div  wire:ignore.self  class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
            </div>
          </div>
          @endif

          <br>
          @if (Session::get('rol_usuario_activo')==1 or Session::get('rol_usuario_activo')==2)
          <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
            <h2 class="accordion-header"  style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree4" >
              <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree4" aria-expanded="false" aria-controls="flush-collapseThree4">
                Estado 8 | Finalizados
              </button>
            </h2>
            <div  wire:ignore.self  id="flush-collapseThree4" class="accordion-collapse collapse" aria-labelledby="flush-headingThree4" data-bs-parent="#accordionFlushExample">
              <div  wire:ignore.self  class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
            </div>
          </div>
          @endif

      </div>
      @include('admisiones.modalinfo')
      @include('admisiones.modaleliminarges')
      @include('admisiones.modalvalinfo')
      @include('admisiones.modalinfo2')
      @include('admisiones.modalinfo3')

</div>