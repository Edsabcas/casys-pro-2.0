<div class="container">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <script>
    $(document).on('click', '#info', function() {
  $('#infodata').modal('show');
  });

  $(document).on('click', '#info4', function() {
  $('#infodata3').modal('show');
  });

  $(document).on('click', '#info5', function() {
  $('#infodata5').modal('show');
  });
  
  $(document).on('click', '#valpedido', function() {
  $('#cambioestadoinfo').modal('show');
  });

  $(document).on('click', '#valestado', function() {
  $('#cambioestadoinfo5').modal('show');
  });

  $(document).on('click', '#valestado4', function() {
  $('#cambioestadoinfo4').modal('show');
  });

  $(document).on('click', '#eliminfo', function() {
  $('#eliminformacion').modal('show');
  });
  
  $(document).on('click', '#valeliminar', function() {
  $('#eliminarinfo2').modal('show');
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
        <strong>{{$mensaje}}.</strong> 
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
          {{$mensaje1}}
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
                               
                                    <button type="button" class="btn btn-secondary" wire:click="id_eliminar('{{ $estado_cer->ID_PRE}}','{{$estado_cer->NO_GESTION}}')" style="border-radius: 12px;" id="eliminfo"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
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
                  <br>
                <div class="table-responsive">
                    <table class="table table-light table-bordered">
                        <thead>
                          <tr>
                            <th scope="col"># Gestión</th>
                            <th scope="col">Estudiante</th>
                            <th scope="col">Grado Ingreso</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Comprobante</th>
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
                        <td>
                            @if ($estado_un->COMPROBANTE_PAGO=="" or $estado_un->COMPROBANTE_PAGO==null)
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-image" viewBox="0 0 16 16">
                              <path d="M8.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                              <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v8l-2.083-2.083a.5.5 0 0 0-.76.063L8 11 5.835 9.7a.5.5 0 0 0-.611.076L3 12V2z"/>
                            </svg>                            
                            <button type="button" class="btn btn-editb" style="float: right;" data-bs-toggle="modal" data-bs-target="#subirimagen{{$estado_un->ID_PRE}}">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                              </svg>  
                            </button>  
                              
                            @else
                            <img class="img-profile rounded-circle" style="float: center;" width="35" height="40" src="public/comprobantes/imagenes/{{$estado_un->COMPROBANTE_PAGO}}" />
                            <button type="button" class="btn btn-editb" style="float: right;" data-bs-toggle="modal" data-bs-target="#subirimagen{{$estado_un->ID_PRE}}">
                              <svg xmlns="http://www.w3.org/2000/svg" style="float: center;" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                              </svg>  
                            </button> 
                          @endif 
                          <div wire:ignore.self class="modal fade" id="subirimagen{{$estado_un->ID_PRE}}" tabindex="-1" aria-labelledby="perfilmodal2Label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                  <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
                                    <h3 class="modal-title text-center" id="perfilmodal2Label" style="color:rgb(255, 255, 255)" ><strong><b>Comprobante de Pago</b></strong></h3>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form wire:submit.prevent='' class="form-horizontal">
                                    <div class="form-group row">
                                      <label for="exampleInputPassword1" class="form-label" style="font-size:20px">Elegir archivo:</label>
                                      <div class="mb-3">
                                        <input type="file" id="archivo"  wire:model="archivo_comprobante">
                                      </div> 
                                  </div>
                                  <div class="mb-3">
                                    <div wire:loading wire:target="archivo_comprobante" class="alert alert-warning" role="alert">
                                      <strong class="font-bold">¡Imagen cargando!</strong>
                                        <span class="block sm:inlone">Espere un momento hasta que la imagen se haya procesado.</span>
                                      <div class="spinner-border text-warning" role="status">
                                      </div>
                                    </div>
                                    @if($tipo==1)
                                    <h3 class="form-label">Visualización de Imagen</h3>
                                    <img src="{{$archivo_comprobante->temporaryURL()}}" height="100" weight="100"  alt="...">
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
                                  <button class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                  <button class="btn btn-pre2" wire:click="cambiofoto({{$estado_un->ID_PRE}})">Publicar</button>
                                </form>
                                </div>
                              </div>
                            </div>
                          </div> 
                          </td>
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
                                <button class="btn btn-editb" wire:click="editardi({{ $estado_dos->ID_PRE}}, {{$estado_dos->NO_GESTION}})" data-bs-toggle="modal" data-bs-target="#infodata3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
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
              <div  wire:ignore.self  class="accordion-body">
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
                  @foreach ($estado_tres as $estado_tre)
                  <tr>
                      <th scope="row">{{ $estado_tre->NO_GESTION}}</th>
                      <td>{{ $estado_tre->NOMBRE_ES}}</td>
                      <td>{{ $estado_tre->GRADO}}</td>
                      @if($estado_tre->ESTADO_PRE_INS==5)
                      <td><span class="badge rounded-pill bg-warning text-dark">Pendiente R.</span></td>
                      @elseif($estado_tre->ESTADO_PRE_INS==6)
                      <td><span class="badge rounded-pill bg-danger">Validar C.</span></td>
                      @endif
                    
                      <span>
                          <td>
                              <button class="btn btn-editb" wire:click="editardiaco({{ $estado_tre->ID_PRE}}, {{$estado_tre->NO_GESTION}})" data-bs-toggle="modal" data-bs-target="#infodata5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg></button>        
                         
                       
                          
                              <button type="button"  class="btn btn-secondary" wire:click="tipo_cambio('{{ $estado_tre->ID_PRE}}',0,{{$estado_tre->NO_GESTION}})" style="border-radius: 12px;" data-bs-toggle="modal" data-bs-target="#cambioestado"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
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
      @include('admisiones.eliminar.modalvaleliminar')
      @include('admisiones.eliminar.modaleliminar')
      @include('admisiones.modalinfo5')
      @include('admisiones.modalestado4')
      @include('admisiones.modalestado5')
</div>