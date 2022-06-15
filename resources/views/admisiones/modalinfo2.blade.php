      @isset($mensajeup)
        @if ($mensajeup!=null)
          <div class="alert alert-success" role="alert">
          Agregado Correctamente!
          </div>
        @endif
      @endisset
      @isset($mensajeup1)
        @if($mensajeup1!=null)
          <div class="alert alert-danger" role="alert">
          No se logro insetar sección
          </div>
        @endif
      @endisset
  
  
  <div wire:ignore.self id="infodata2" style="border-radius: 60px 60px 60px 60px;" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="infodata2" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
          <h3 class="modal-title text-center" style="color:rgb(255, 255, 255)" >Proceso Pre-Inscripción</h3>
          <button type="button" class="btn btn-close btn-warning" style="color:rgb(255, 255, 255)"  data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <div class="container-sm">

              <h4 class="form-label text text-center" style="font-size:25px">Gestion: #{{$gestion}}
              
              </h4> 
              <p  class="text text-center">Fecha de solicitud: <b>{{$fingreso_gestion}}</b></p>
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
                                    <label for="inputNombres" style="font-size: 15px; color:#000000;">Nombre Completo:
                                    </label>
                                    <input  wire:model="nombre_es" class="form-control " required>
                                    @error('nombre_es')
                                    <div class="alert alert-warning" role="alert">
                                     Pendiente
                                    </div>
                                    @enderror
                                </div>
                              </div>
                                <div class="row g-3">
                                  <div class="col-md">
                                    <label for="inputApellidos" style="font-size: 15px; color:#000000;">Fecha de Nacimiento:</label>
                                    <input type="date"  wire:model="f_nacimiento_es" class="form-control " min="2000-01-01" max="2020-12-31" required>
                                    @error('f_nacimiento_es')
                                    <div class="alert alert-warning" role="alert">
                                     Pendiente
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md">
                                  <label for="inputApellidos" style="font-size: 15px; color:#000000;">Género:</label>
                                  <br>
                                  <div class="form-check form-check-inline ">
                                    <input class="form-check-input"  wire:model='genero' value="Masculino" type="radio" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1" style="font-size: 15px; color:#000000;">
                                      Masculino
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline " >
                                    <input class="form-check-input"  wire:model='genero' value="Femenino" type="radio"  id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2" style="font-size: 15px; color:#000000;">
                                      Femenino
                                    </label>
                                    @error('genero')
                                    <div class="alert alert-warning" role="alert">
                                      Pendiente
                                    </div>
                                    @enderror
                                  </div>
                                </div>
                               </div>
                                
                               
                    
                                <div class="row g-3">
                                  <div class="col-md">
                                  <label for="inputDireccion" style="font-size: 15px; color:#000000;">CUI:</label>
                                  <input type='number' placeholder=""  wire:model="cui_es" class="form-control " required>
                                  @error('cui_es')
                                  <div class="alert alert-warning" role="alert">
                                   Pendiente
                                  </div>
                                  @enderror
                              </div>
                    
                              <div class="col-md">
                                <label for="inputInstitucion" style="font-size: 15px; color:#000000;">Código Personal (Mineduc):
                    
                                      <!-- Button trigger modal -->
                                    <a class="btn" type="button" style="background-color:#a4cb39" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                  <b>!</b>  
                                    </a>
                                </label>
                             
                                <input type='text' placeholder=""  wire:model="codigo_pe_es" class="form-control " required>
                                @error('codigo_pe_es')
                                <div class="alert alert-warning" role="alert">
                                  Pendiente
                                </div>
                                @enderror
                              </div>
                            </div>
                            
                          <div class="row g-3">
                            <div class="col-md">
                                  <label for="inputInstitucion" style="font-size: 15px; color:#000000;">Nacionalidad:</label>
                                  <input type='text' placeholder=""  wire:model="nac_es" class="form-control " required>
                              </div>
                              @error('nac_es')
                              <div class="alert alert-warning" role="alert">
                               Pendiente
                              </div>
                              @enderror
                              <div class="col-md">
                                <label for="inputInstitucion" style="font-size: 15px; color:#000000;">Lugar Nacimiento (País):</label>
                                <input type='text' placeholder="" wire:model="lug_nac_es" class="form-control " required>
                            </div>
                            @error('lug_nac_es')
                            <div class="alert alert-warning" role="alert">
                             Pendiente
                            </div>
                            @enderror
                          </div>
                          <div class="row g-3">
                            <div class="col-md">
                              <label for="inputInstitucion" style="font-size: 15px; color:#000000;">Dirección de domicilio:</label>
                              <input type='text' placeholder=""  wire:model="direccion_es" class="form-control" required>
                            </div>
                            @error('direccion_es')
                            <div class="alert alert-warning" role="alert">
                            Pendiente
                            </div>
                            @enderror
                           
                          </div>
                    
                        <div class="row g-3">
                          <div class="col-md">
                            <label for="inputInstitucion" style="font-size: 15px; color:#000000;">Teléfono Celular:</label>
                            <input type='number' placeholder=""  wire:model="cel_es" class="form-control " required>
                            @error('cel_es')
                            <div class="alert alert-warning" role="alert">
                              Pendiente
                            </div>
                            @enderror
                          </div>

                      
                          <div class="col-md">
                            <label for="inputApellidos" style="font-size: 15px; color:#000000;">Religión:</label>
                            <br>
                            <input type='text' placeholder=""  wire:model="religion_es" class="form-control" required>
                          </div>

                          @error('religion_es')
                          <div class="alert alert-warning" role="alert">
                          Pendiente
                          </div>
                          @enderror 
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              
              </div>
              <br>
              <div class="accordion" id="accordionPanelsStayOpenExample3">
                <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
                  <h2  style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;"  type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    <h4 class="font-weight-bolder">  <b>Datos Encargado:</b>   </h4>
                    </button>
                
                  </h2>
                  <div  wire:ignore.self id="panelsStayOpen-collapseThree" style="border-radius: 60px 60px 60px 60px;"class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
                      <div class="table-responsive">
                        <form wire:submit.prevent="" class="form-floating">
                          <div class="form-group col-xs-12">
                            <label for="inputNombres" style="font-size: 15px; color:#000000;">Nombre Completo:</label>
                            <input type="text" placeholder=""  wire:model="nombre_en" class="form-control " required>
                        </div>
                        @error('nombre_en')
                        <div class="alert alert-warning" role="alert">
                         Pendiente
                        </div>
                        @enderror
                        <div class="row g-3">
                          <div class="col-md">
                          <label for="fnacimiento_en" style="font-size: 15px; color:#000000;">Fecha Nacimiento:</label>
                          <input type="date" placeholder=""   wire:model="fnacimiento_en" class="form-control " required>
                      </div>
                      @error('fnacimiento_en')
                      <div class="alert alert-warning" role="alert">
                       Pendiente
                      </div>
                      @enderror
                    
                      <div class="col-md">
                            <label for="inputDPI" style="font-size: 15px; color:#000000;">DPI:</label>
                            <input type="number" placeholder="" type="number"   wire:model="dpi_en" class="form-control " required>
                        </div>
                        @error('dpi_en')
                        <div class="alert alert-warning" role="alert">
                         Pendiente
                        </div>
                        @enderror
                      </div>
                        <div class="row g-3">
                          <div class="col-md">
                          <label for="inputNombres" style="font-size: 15px; color:#000000;">Extendido en:</label>
                          <input type="text" placeholder=""  wire:model="extentido_en" class="form-control " required>
                      </div>
                      @error('extentido_en')
                      <div class="alert alert-warning" role="alert">
                       Pendiente
                      </div>
                      @enderror
                      <div class="col-md">
                        <label for="inputApellidos" style="font-size: 15px; color:#000000;">Estado Civil:</label>
                        <br>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input"  type="radio" wire:model="es_civil_en" value="Casado" id="flexRadioEstado1">
                          <label class="form-check-label" for="flexRadioEstado1" style="font-size: 15px; color:#000000;">
                          Casado
                          </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" wire:model="es_civil_en" value="Soltero" id="flexRadioEstado2">
                          <label class="form-check-label" for="flexRadioEstado2" style="font-size: 15px; color:#000000;">
                            Soltero
                          </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" wire:model="es_civil_en"  value="Viuda" id="flexRadioEstado3">
                          <label class="form-check-label" for="flexRadioEstado3" style="font-size: 15px; color:#000000;">
                            Viuda/o
                          </label>
                        </div>
                      </div>
                      @error('es_civil_en')
                      <div class="alert alert-warning" role="alert">
                       Pendiente
                      </div>
                      @enderror
                      </div>
                      <div class="row g-3">
                      <div class="form-group col-xs-12">
                        <label for="inputApellidos" style="font-size: 15px; color:#000000;">Direccion de domicilio:</label>
                        <input type="text" placeholder="" type="email" wire:model="direccion_en" class="form-control " required>
                    </div>
                    @error('direccion_en')
                    <div class="alert alert-warning" role="alert">
                     Pendiente
                    </div>
                    @enderror
                  </div>
                    <div class="row g-3">
                      <div class="col-md">
                      <label for="inputApellidos" style="font-size: 15px; color:#000000;">Telefono de casa:</label>
                      <input placeholder="" type="number"  wire:model="tel_casa_en" class="form-control " required>
                  </div>
                  @error('tel_casa_en')
                  <div class="alert alert-warning" role="alert">
                   Pendiente
                  </div>
                  @enderror
                    <div class="col-md">
                    <label for="inputApellidos" style="font-size: 15px; color:#000000;">Telefono celular:</label>
                    <input placeholder="" type="number"  wire:model="cel_en" class="form-control " required>
                  </div>
                  @error('cel_en')
                  <div class="alert alert-warning" role="alert">
                  Pendiente
                  </div>
                  @enderror
                    </div>
                  
                  <div class="row g-3">
                  <div class="col-md">
                            <label for="inputApellidos" style="font-size: 15px; color:#000000;">Correo electronico:</label>
                            <input placeholder="" type="email"  wire:model="correo_en" class="form-control " required>
                        </div>
                        @error('correo_en')
                        <div class="alert alert-warning" role="alert">
                         Pendiente
                        </div>
                        @enderror
                        <div class="col-md">
                          <label for="inputApellidos" style="font-size: 15px; color:#000000;">Religión:</label>
                          <input type="text"  wire:model="religion_en" class="form-control " required>
                          <br>
                        </div>
                        @error('religion_en')
                        <div class="alert alert-warning" role="alert">
                         Pendiente
                        </div>
                        @enderror
                      
                  </div>
                  <br>
                  <br>
              
                        </form>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="accordion" id="accordionPanelsStayOpenExample3">
                <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
                  <h2  style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingThreePago">
                    <button class="accordion-button collapsed" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;"  type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThreePago" aria-expanded="false" aria-controls="panelsStayOpen-collapseThreePago">
                    <h4 class="font-weight-bolder">   <b>Información Pago</b>   </h4>
                    </button>
                
                  </h2>
                  <div  wire:ignore.self id="panelsStayOpen-collapseThreePago" style="border-radius: 60px 60px 60px 60px;"class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingThreePago">
                    <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
                        <form wire:submit.prevent="" class="form-floating">

                        <div class="row g-3">
                          <div class="col-md">
                          <label for="fpago" style="font-size: 15px; color:#000000;">Forma de Pago:</label>
                          <select class="form-select" wire:model="fpago" aria-label="Default select example" required>
                            <option selected>Seleccionar:</option>
                            @isset($formasdepago)
                              @foreach ($formasdepago as $forma)
                                <option value="{{$forma->ID_F_PAGO}}">{{$forma->DESCRIPCION}}</option>
                              @endforeach              
                            @endisset
                          </select>
                      </div>
                      @error('fpago')
                      <div class="alert alert-warning" role="alert">
                       Pendiente
                      </div>
                      @enderror
                      <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label">Metodo de pago:</label>
                            <select class="form-select" aria-label="Default select example" wire:model="metodo" required>
                              <option selected>Seleccionar:</option>
                              @isset($metododepago)
                              @foreach ($metododepago as $metodo)
                                <option value="{{$metodo->ID_T_D_PAGO}}">{{$metodo->DESCRIPCION}}</option>
                              @endforeach              
                            @endisset
                            </select>
                      </div>
                      @error('metodo')
                        <div class="alert alert-warning" role="alert">
                        Pendiente
                        </div>
                      @enderror
                        
                        <div class="mb-3">
                          <label for="message-text" class="col-form-label">Observación:</label>
                          <textarea class="form-control" id="message-text" wire:model="observacion" required></textarea>
                        </div>
                      @error('observacion')
                      <div class="alert alert-warning" role="alert">
                       Pendiente
                      </div>
                      @enderror
                    <div class="col-md">

                      <div class="col-md">
                        <label for="inputDPI" style="font-size: 15px; color:#000000;">Comprobante de Pago:</label>
                        <br>
                          @if ($archivo_comprobante=="" or $archivo_comprobante==null )
                          <img class="rounded-circle" src="img/undraw_profile_1.svg" width="80" height="80" alt="...">        
                          <button type="button" class="btn btn-editb" style="float:" data-bs-toggle="modal" data-bs-target="#subirimagen{{$id_ges_cambio}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>  
                          </button>      
                          @else
                        <img class="img-profile rounded-circle" style="float: center;" width="80" height="80" src="imagen/comprobantes2022/{{$archivo_comprobante}}">
                        <button type="button" class="btn btn-editb" style="float:" data-bs-toggle="modal" data-bs-target="#subirimagen{{$id_ges_cambio}}">
                          <svg xmlns="http://www.w3.org/2000/svg" style="float: center;" width="10" height="10" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg>  
                        </button> 
                        @endif
                        <!-- Button trigger modal -->
                        <a class="btn" type="button" data-bs-toggle="modal" data-bs-target="#visualizarimagen{{$id_ges_cambio}}">
                          <b><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                          </svg></b>  
                        </a>
                      </div>
                      
                        <div  wire:ignore.self class="modal fade" id="visualizarimagen{{$id_ges_cambio}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="visualizarimagenLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title text-center" id="visualizarimagenLabel" style="color:rgb(0, 0, 0)"><b>Visualización del comprobante</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body modal-dialog-centered">
                                  @if($archivo_comprobante=="" or $archivo_comprobante==null )
                                    <img class="rounded-circle" src="img/undraw_profile_1.svg" width="300" height="300" alt="...">          
                                    @else
                                    <img class="img-profile " style="float: center;" width="400" height="400" src="imagen/comprobantes2022/{{$archivo_comprobante}}">                                          
                                  @endif
                              </div>
                            </div>
                          </div>
                        </div>

                      <div wire:ignore.self class="modal fade" id="subirimagen{{$id_ges_cambio}}" tabindex="-1" aria-labelledby="perfilmodal2Label" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                              <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
                                <h3 class="modal-title text-center" id="perfilmodal2Label" style="color:rgb(255, 255, 255)" ><strong><b>Comprobante de Pago</b></strong></h3>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form wire:submit.prevent='' class="form-horizontal">
                                <div class="form-group row">
                                  <label for="exampleInputPassword1" class="form-label" style="font-size:20px">Elegir foto o archivo de comprobante:</label>
                                  <div class="mb-3">
                                    <input type="file" id="archivo"  wire:model="archivo_comprobante2">
                                  </div> 
                              </div>
                              <div class="mb-3">
                                <div wire:loading wire:target="archivo_comprobante2" class="alert alert-warning" role="alert">
                                  <strong class="font-bold">¡Imagen cargando!</strong>
                                    <span class="block sm:inlone">Espere un momento hasta que la imagen se haya procesado.</span>
                                  <div class="spinner-border text-warning" role="status">
                                  </div>
                                </div>
                                @if($tipo==1)
                                <h3 class="form-label">Visualización de Imagen</h3>
                                <img src="{{$archivo_comprobante2->temporaryURL()}}" height="100" weight="100"  alt="...">
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
                              <button class="btn btn-pre2" wire:click="cambiofoto()">Publicar</button>
                            </form>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div> 
                      </div>
                        </form>
                   </div>
                  </div>
                </div>
              </div>
              
            </div>        
        </div>

        <div class="modal-footer">

          <button class="btn btn-pre2" style="border-radius: 60px 60px 60px 60px;" wire:click="actualizar_validacion_pago()">Actualizar</button>

          <a  id="valpedido" wire:click="tipo_cambio(0)" type="button" style="border-radius: 60px 60px 60px 60px;" class="btn btn-success" data-bs-dismiss="modal">Reg. Estado</a>
              
          @if($estado_ges==2)
            <a  id="valpedido" wire:click="tipo_cambio(1)" type="button" style="border-radius: 60px 60px 60px 60px;" class="btn btn-warning" data-bs-dismiss="modal">Sig. Estado</a>
            @endif
 
        </div>
      </div>
    </div>
  </div>    

   @include('admisiones.codmineduc')