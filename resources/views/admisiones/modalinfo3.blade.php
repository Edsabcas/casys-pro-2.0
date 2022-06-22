<div wire:ignore.self id="infodata3" style="border-radius: 60px 60px 60px 60px;" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="infodata3" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-center" style="background:#3a3e7b;color:rgba(255, 255, 255, 0.703)">
          <h3 class="modal-title text-center" style="color:rgba(255, 255, 255, 0.703)" >Proceso Pre-Inscripción</h3>
          <button type="button" class="btn btn-warning" style="color:rgba(22, 21, 21, 0.703)"  data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>

        <div class="modal-body">
            <div class="container-sm">
              <h4 class="form-label text text-center" style="font-size:25px">Gestion: #{{$no_gest}}
              
              </h4>
              <p  class="text text-center">Fecha de ultimo cambio: <b>{{$fecha_ultimo_cambio}}</b></p>
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
                      <div class="col-md">
                        <div class="form-group col-xs-12">
                          <label for="inputApellidos" style="font-size: 15px; color:#000000;">Profesión:</label>
                          <input type="text" placeholder="" type="email" wire:model="profesion_en" class="form-control " required>
                      </div>
                      @error('profesion_en')
                      <div class="alert alert-warning" role="alert">
                       Pendiente
                      </div>
                      @enderror
                    </div>
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
                  <div  wire:ignore.self id="panelsStayOpen-collapseThreePago" style="border-radius: 60px 60px 60px 60px;"class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThreePago">
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
                          <button type="button" class="btn btn-editb" style="float:"  data-bs-dismiss="modal" id="updtatecompro2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>  
                          </button>      
                          @else
                          @php
                          $foo = 0;
                          $vid = 0;
                          $pdf = 0;
                            if (strpos($archivo_comprobante, '.jpg' ) !== false || strpos($archivo_comprobante, '.png' ) !== false || strpos($archivo_comprobante, '.jpeg' ) !== false) 
                            { $foo=1; }
                            elseif(strpos($archivo_comprobante, '.mp4' ) !== false || strpos($archivo_comprobante, '.mpeg' ) !== false)
                            {$vid=1;}
                            elseif(strpos($archivo_comprobante, '.pdf' ) !== false)
                            {$pdf=1;}
                      @endphp
                      @if($foo==1)
                      <img src="imagen/comprobantes2022/{{$archivo_comprobante}}" height="400" weight="400" class="card-img-top" alt="...">
                      @endif
                      @if($vid==1)
                      <video height="400" weight="400" class="card-img-top" alt="..." controls>
                        <source src="imagen/comprobantes2022/{{$archivo_comprobante}}"  type="video/mp4">
                          <source src="imagen/comprobantes2022/{{$archivo_comprobante}}"  type="video/ogg">
                      </video>
                      @endif
                      @if($pdf==1)
                      <iframe style="width: 43rem; text-align:center" width="350" height="350" src="imagen/comprobantes2022/{{$archivo_comprobante}}" frameborder="0"></iframe>
                        @endif<button type="button" class="btn btn-editb" style="float:" data-bs-dismiss="modal"  id="updtatecompro2">
                          <svg xmlns="http://www.w3.org/2000/svg" style="float: center;" width="10" height="10" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg>  
                        </button> 
                        @endif
                        <!-- Button trigger modal -->
                        <a class="btn" type="button" data-bs-toggle="modal"  data-bs-dismiss="modal" id="vercompro2">
                          <b><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                          </svg></b>  
                        </a>
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
                      

                    </div> 
                      </div>
                        </form>
                   </div>
                  </div>
                </div>
              </div>
              <br>
              <form action="/update_datos_ins" method="POST" wire:submit.prevent=''>
                @csrf
              <input type="hidden" value='{{$id_pre_info}}' wire:model='id_pre_info'>
                <div wire:ignore.self class="accordion" id="accordionDatosVarios">
                 <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
                   <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOnedatosvarios">
                     <button class="accordion-button" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-datosvarios" aria-expanded="true" aria-controls="panelsStayOpen-datosvarios">
                         <h4 class="font-weight-bolder">
                             DATOS VARIOS
                           </h4>
                         </button>
                   </h2>
                   
                   <div  wire:ignore.self id="panelsStayOpen-datosvarios" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse " aria-labelledby="panelsStayOpen-headingOne">
                     <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
                       <div class="tab">
                         <strong><label for="exampleInputPassword1" class="form-label">¿Tiene hermanos en colegio?</label></strong>
                         <center>
                         <div style="width: 12rem;">
                         <div class="form-check">
                             <input class="form-check-input" type="radio" wire:model="confi" value="1" id="hermano1" wire:click="confirmar_hermano('1')">
                             <label class="form-check-label" for="hermano1">
                               Si
                             </label>
                           </div>
                           <div class="form-check">
                             <input class="form-check-input" type="radio" wire:model="confi" value="0" id="hermano2" wire:click="confirmar_hermano('0')">
                             <label class="form-check-label" for="hermano1">
                               No
                             </label>
                           </div>
                         </div>
                     </center>
                           @if($confi==1)
                         @error('gradoin') 
                         <div class="alert alert-danger d-flex align-items-center" role="alert">
                           <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                           
                             <span>Debe seleccionar un grado</span>
                            </div> @enderror
                         
                         <ul class="list-group" style="border-radius: 60px 60px 60px 60px;">
                           @foreach($grados as $grado)
                           <li class="list-group-item list-group-item-action"  for="flexRadioGrado{{$grado->ID_GR}}">
                             <input class="form-check-input me-1" type="radio" wire:click='insertar_grados_hermanos("{{$grado->ID_GR}}","{{$grado->GRADO}}")' wire:model="grados_selecionados" value="{{$grado->ID_GR}}" aria-label="..." id="flexRadioGrado{{$grado->ID_GR}}">
                             <label class="form-check-label" for="flexRadioGrado{{$grado->ID_GR}}" style="font-size: 15px; color:#000000;">
                           {{$grado->GRADO}}
                             </label>
                           </li>
                           
                           @endforeach
                         
                         </ul>
                         <br>
                        
                         <h5>Grados escogidos {{$grados_mostrar}}</h5>
                        
                         @endif  
                         
                         <br>
                         <div class="row">
                             <div class="col-md-6">
                                 <strong><label  for="labelañoingreso" class="form-label">Coloque el año de primer ingreso</label></strong>
                                 <input  type="number" class="form-control"  wire:model="año_ingreso">
                               </div>
                               @error('año_ingreso')
                               <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                 <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                 <div>
                                     Es necesario que llenes este campo para envíar la información
                                 </div>
                               </div>
                               @enderror
                               <div class="col-md-6">
                                 <strong><label for="exampleInputPassword1" class="form-label" >Coloque el grado de primer ingreso</label></strong>
                                 <select class="form-select" aria-label="Default select example" wire:model="grado_primer_ingreso">
                                   <option selected >Elige el grado de primer ingreso</option>
                                   @foreach($grados as $grado)
                                   <option value="{{$grado->ID_GR}}">{{$grado->GRADO}}</option>
                                   @endforeach
                                 </select>
                               </div>
                               @error('grado_primer_ingreso')
                               <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                 <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                 <div>
                                     Es necesario que llenes este campo para envíar la información
                                 </div>
                               </div>
                               @enderror
                         </div>
                         
                        
                     </div>
                     </div>
                   </div>
                 </div>
               </div> 
               <br>
               <div wire:ignore.self class="accordion" id="accordionDatosdelpadre">
                 <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
                   <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOnedatospadre">
                     <button class="accordion-button" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-padre" aria-expanded="true" aria-controls="panelsStayOpen-padre">
                         <h4 class="font-weight-bolder">
                             DATOS DEL PADRE
                           </h4>
                         </button>
                   </h2>
                   
                   <div  wire:ignore.self id="panelsStayOpen-padre" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse " aria-labelledby="panelsStayOpen-headingOne">
                     <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
                       <div class="tab">
                         <div class="row">
                             <div class="col-md-6">
                                 <strong><label  for="Labelnombrepadre" class="form-label"> nombre del padre</label></strong>
                                 <input  type="text" class="form-control"  wire:model="nombre_padre">
                               </div>
                               @error('nombre_padre')
                               <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                 <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                 <div>
                                     Es necesario que llenes este campo para envíar la información
                                 </div>
                               </div>
                               @enderror
                               <div class="col-md-6">
                                 <strong><label  for="Labelnombrepadre" class="form-label"> fecha de nacimiento del padre</label></strong>
                                 <input  type="date" class="form-control"  wire:model="nacimiento_padre">
                               </div>
                               @error('nacimiento_padre')
                               <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                 <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                 <div>
                                     Es necesario que llenes este campo para envíar la información
                                 </div>
                               </div>
                               @enderror    
                         </div>
                         <div class="row">
                             <div class="col-md-6">
                                 <strong><label  for="Labelnombrepadre" class="form-label"> nacionalidad del padre</label></strong>
                                 <input  type="text" class="form-control"  wire:model="nacionalidad_padre">
                               </div>
                               @error('nacionalidad_padre')
                               <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                 <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                 <div>
                                     Es necesario que llenes este campo para envíar la información
                                 </div>
                               </div>
                               @enderror
                             <div class="col-md-6">
                                 <strong><label  for="Labelnombrepadre" class="form-label"> lugar de nacimiento del padre</label></strong>
                                 <input  type="text" class="form-control"  wire:model="lugar_nacimiento_padre">
                               </div>
                               @error('lugar_nacimiento_padre')
                               <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                 <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                 <div>
                                     Es necesario que llenes este campo para envíar la información
                                 </div>
                               </div>
                               @enderror
                         </div>
                         <div class="row">
                             <div class="row">
                                 <strong><label  for="Labelnombrepadre" class="form-label"> estado civil del padre</label></strong>
                                 <div class="col-md-4">
                                     <div class="form-check">
                                         <input class="form-check-input" type="radio" wire:model="estadocivilp" value="1" wire:click="estado_civil_padre('1')">
                                         <label class="form-check-label" for="estadocivilp1">
                                           Casado(a)
                                         </label>
                                       </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-check">
                                         <input class="form-check-input" type="radio" wire:model="estadocivilp" value="2" wire:click="estado_civil_padre('2')">
                                         <label class="form-check-label" for="estadocivilp1">
                                           Separado(a)
                                         </label>
                                       </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-check">
                                         <input class="form-check-input" type="radio" wire:model="estadocivilp" value="3"  wire:click="estado_civil_padre('3')">
                                         <label class="form-check-label" for="estadocivilp1">
                                           Soltero(a)
                                         </label>
                                       </div>
                                 </div>  
                             </div>
                             <br>
                             
                         </div>
                         <br>
                         <div class="row">
                             <div class="col-md-6">
                                 <strong><label  for="Labelnombrepadre" class="form-label"> número de DPI del padre</label></strong>
                                 <input  type="text" class="form-control"  wire:model="DPI_padre">
                               </div>
                               @error('DPI_padre')
                               <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                 <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                 <div>
                                     Es necesario que llenes este campo para envíar la información
                                 </div>
                               </div>
                               @enderror
                             <div class="col-md-6">
                                 <strong><label  for="Labelnombrepadre" class="form-label"> número de celular del padre</label></strong>
                                 <input  type="number" class="form-control"  wire:model="celular_padre">
                               </div>
                               @error('celular_padre')
                               <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                 <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                 <div>
                                     Es necesario que llenes este campo para envíar la información
                                 </div>
                               </div>
                               @enderror
                         </div>
                         <div class="row">
                             <div class="col-md-6">
                                 <strong><label  for="Labelnombrepadre" class="form-label"> número de casa del padre</label></strong>
                                 <input  type="number" class="form-control"  wire:model="telefono_padre">
                               </div>
                               @error('telefono_padre')
                               <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                 <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                 <div>
                                     Es necesario que llenes este campo para envíar la información
                                 </div>
                               </div>
                               @enderror
                             <div class="col-md-6">
                                 <strong><label  for="Labelnombrepadre" class="form-label"> dirección de la residencia del padre</label></strong>
                                 <input  type="text" class="form-control"  wire:model="direccion_residencia">
                               </div>
                               @error('direccion_residencia')
                               <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                 <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                 <div>
                                     Es necesario que llenes este campo para envíar la información
                                 </div>
                               </div>
                               @enderror
                         </div>
                         <div class="row">
                             <div class="col-md-6">
                                 <strong><label  for="Labelnombrepadre" class="form-label"> correo electrónico del padre</label></strong>
                                 <input  type="text" class="form-control"  wire:model="correo_padre">
                               </div>
                               @error('correo_padre')
                               <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                 <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                 <div>
                                     Es necesario que llenes este campo para envíar la información
                                 </div>
                               </div>
                               @enderror
                               <div class="col-md-6">
                                 <strong><label  for="Labelprofesionpadre" class="form-label"> profesion del padre</label></strong>
                                 <input  type="text" class="form-control"  wire:model="profesion_padre">
                               </div>
                               @error('profesion_padre')
                               <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                 <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                 <div>
                                   Es necesario que llenes este campo para envíar la información
                                 </div>
                               </div>
                               @enderror
                             <div class="col-md-6">
                                 <strong><label  for="Labelnombrepadre" class="form-label"> lugar de trabajo del padre</label></strong>
                                 <input  type="text" class="form-control"  wire:model="lugar_profesion_padre">
                               </div>
                               @error('lugar_profesion_padre')
                               <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                 <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                 <div>
                                   Es necesario que llenes este campo para envíar la información
                                 </div>
                               </div>
                               @enderror
                               <div class="col-md-6">
                                 <strong><label  for="Labelnombrepadre" class="form-label"> cargo de trabajo que ocupa el padre</label></strong>
                                 <input  type="text" class="form-control"  wire:model="cargo_profesion_padre">
                               </div>
                               @error('cargo_profesion_padre')
                               <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                 <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                 <div>
                                   Es necesario que llenes este campo para envíar la información
                                 </div>
                               </div>
                               @enderror
                               <div class="col-md-6">
                                 <strong><label  for="Labelnombrepadre" class="form-label"> religion que profesa el padre</label></strong>
                                 <input  type="text" class="form-control"  wire:model="religion_padre">
                               </div>
                               @error('religion_padre')
                               <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                 <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                 <div>
                                   Es necesario que llenes este campo para envíar la información
                                 </div>
                               </div>
                               @enderror
                               <div class="col-md-6">
                                 <strong><label  for="Labelnombrepadre" class="form-label"> NIT del padre(por favor no utilice ningun signo solo ingerese números)</label></strong>
                                 <input  type="number" class="form-control"  wire:model="NIT_padre">
                               </div>
                               @error('NIT_padre')
                               <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                 <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                 <div>
                                   Es necesario que llenes este campo para envíar la información
                                 </div>
                               </div>
                               @enderror
                               <div class="row">
                                 <div class="row">
                                     <strong><label  for="Labelnombrepadre" class="form-label">¿Vive con el padre?</label></strong>
                                     <center>
                                     <div style="width: 12rem;">
                                     <div class="col-md-7">
                                         <div class="form-check">
                                             <input class="form-check-input" type="radio" wire:model="vive_con_elpadre" value="1" wire:click="confirmar_vive_padre('1')">
                                             <label class="form-check-label" for="vivepadre1">
                                               Si
                                             </label>
                                           </div>
                                     </div>
                                     <div class="col-md-7">
                                         <div class="form-check">
                                             <input class="form-check-input" type="radio" wire:model="vive_con_elpadre" value="2" wire:click="confirmar_vive_padre('2')">
                                             <label class="form-check-label" for="vivepadre1">
                                               No
                                             </label>
                                           </div>
                                     </div>
                                 </div>
                               </center>
                               </div>
                             </div>
                         </div>
                       </div>
                     </div>   
                     </div>
                   </div>
                   </div>
                   <br>
                    
               <div wire:ignore.self class="accordion" id="accordionDatosdelamadre">
 
                 <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
                   <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOneDatosdelamadre">
                     <button class="accordion-button" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-madre" aria-expanded="true" aria-controls="panelsStayOpen-madre">
                         <h4 class="font-weight-bolder">
                             DATOS DE LA MADRE
                           </h4>
                         </button>
                   </h2>
               <div  wire:ignore.self id="panelsStayOpen-madre" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse " aria-labelledby="panelsStayOpen-headingOne">
                 <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
                   <div class="tab">
                     <div class="row">
                     <div class="col-md-6">
                       <strong><label  for="Labelnombrepadre" class="form-label"> nombre de la madre</label></strong>
                       <input  type="text" class="form-control"  wire:model="nombre_madre">
                     </div>
                     @error('nombre_madre')
                     <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                       <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                       <div>
                         Es necesario que llenes este campo para envíar la información
                       </div>
                     </div>
                     @enderror
                     <div class="col-md-6">
                       <strong><label  for="Labelnombrepadre" class="form-label"> fecha de nacimiento de la madre</label></strong>
                       <input  type="date" class="form-control"  wire:model="fechana_madre">
                     </div>
                     @error('fechana_madre')
                     <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                       <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                       <div>
                         Es necesario que llenes este campo para envíar la información
                       </div>
                     </div>
                     @enderror
                     <div class="col-md-6">
                       <strong><label  for="Labelnombrepadre" class="form-label"> nacionalidad de la madre</label></strong>
                       <input  type="text" class="form-control"  wire:model="nacionalidad_madre">
                     </div>
                     @error('nacionalidad_madre')
                     <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                       <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                       <div>
                         Es necesario que llenes este campo para envíar la información
                       </div>
                     </div>
                     @enderror
                     <div class="col-md-6">
                       <strong><label  for="Labelnombrepadre" class="form-label"> lugar de nacimiento de la madre</label></strong>
                       <input  type="text" class="form-control"  wire:model="lugar_nacimiento_madre">
                     </div>
                     @error('lugar_nacimiento_madre')
                     <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                       <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                       <div>
                         Es necesario que llenes este campo para envíar la información
                       </div>
                     </div>
                     @enderror
                     <div class="row">
                       <div class="row">
                           <strong><label  for="Labelnombrepadre" class="form-label"> estado civil de la madre</label></strong>
                           <div class="col-md-4">
                               <div class="form-check">
                                   <input class="form-check-input" type="radio" wire:model="estadocivilma" value="1"  wire:click="estado_civil_madre('1')">
                                   <label class="form-check-label" for="flexRadioDefault1">
                                     Casado(a)
                                   </label>
                                 </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-check">
                                   <input class="form-check-input" type="radio" wire:model="estadocivilma" value="2" wire:click="estado_civil_madre('2')">
                                   <label class="form-check-label" for="flexRadioDefault1">
                                     Separado(a)
                                   </label>
                                 </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-check">
                                   <input class="form-check-input" type="radio" wire:model="estadocivilma" value="3"  wire:click="estado_civil_madre('3')">
                                   <label class="form-check-label" for="flexRadioDefault1">
                                     Soltero(a)
                                   </label>
                                 </div>
                           </div>  
                       </div>
                       <br>
                       
                   </div>
                   <br>
                   <div class="col-md-6">
                     <strong><label  for="Labelnombrepadre" class="form-label"> DPI de la madre</label></strong>
                     <input  type="number" class="form-control"  wire:model="DPI_madre">
                   </div>
                   @error('DPI_madre')
                   <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                     <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                     <div>
                       Es necesario que llenes este campo para envíar la información
                     </div>
                   </div>
                   @enderror
                   <div class="col-md-6">
                     <strong><label  for="Labelnombrepadre" class="form-label"> telefono de la madre</label></strong>
                     <input  type="number" class="form-control"  wire:model="telefono_madre">
                   </div>
                   @error('telefono_madre')
                   <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                     <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                     <div>
                       Es necesario que llenes este campo para envíar la información
                     </div>
                   </div>
                   @enderror
                   <div class="col-md-6">
                     <strong><label  for="Labelnombrepadre" class="form-label"> celular de la madre</label></strong>
                     <input  type="number" class="form-control"  wire:model="celular_madre">
                   </div>
                   @error('celular_madre')
                   <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                     <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                     <div>
                       Es necesario que llenes este campo para envíar la información
                     </div>
                   </div>
                   @enderror
 
                   <div class="col-md-6">
                     <strong><label  for="Labelnombremadre" class="form-label"> dirección de la residencia de la madre</label></strong>
                     <input  type="text" class="form-control"  wire:model="direccion_residenciamadre">
                   </div>
                   @error('direccion_residenciamadre')
                   <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                     <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                     <div>
                         Es necesario que llenes este campo para envíar la información
                     </div>
                   </div>
                   @enderror
                 <div class="col-md-6">
                     <strong><label  for="Labelnombremadre" class="form-label"> correo electrónico de la madre</label></strong>
                     <input  type="text" class="form-control"  wire:model="correo_madre">
                   </div>
                   @error('correo_madre')
                   <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                     <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                     <div>
                         Es necesario que llenes este campo para envíar la información
                     </div>
                   </div>
                   @enderror
                 <div class="col-md-6">
                     <strong><label  for="Labelnombremadre" class="form-label"> profesión a la que se decica la madre <label></strong>
                     <input  type="text" class="form-control"  wire:model="profesion_madre">
                   </div>
                   @error('profesion_madre')
                   <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                     <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                     <div>
                       Es necesario que llenes este campo para envíar la información
                     </div>
                   </div>
                   @enderror
 
                   <div class="col-md-6">
                     <strong><label  for="Labelnombremadre" class="form-label"> lugar donde la madre ejerce su profesion <label></strong>
                     <input  type="text" class="form-control"  wire:model="lugar_prof_madre">
                   </div>
                   @error('lugar_prof_madre')
                   <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                     <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                     <div>
                       Es necesario que llenes este campo para envíar la información
                     </div>
                   </div>
                   @enderror
                   <div class="col-md-6">
                     <strong><label  for="Labelnombremadre" class="form-label">Ingrese cual es el cargo que la madre ocupa en su profesion <label></strong>
                     <input  type="text" class="form-control"  wire:model="cargo_madre">
                   </div>
                   @error('cargo_madre')
                   <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                     <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                     <div>
                       Es necesario que llenes este campo para envíar la información
                     </div>
                   </div>
                   @enderror
                   <div class="col-md-6">
                     <strong><label  for="Labelnombremadre" class="form-label">Ingrese cual es la religion que la madre profesa<label></strong>
                     <input  type="text" class="form-control"  wire:model="religion_madre">
                   </div>
                   @error('religion_madre')
                   <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                     <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                     <div>
                       Es necesario que llenes este campo para envíar la información
                     </div>
                   </div>
                   @enderror
                   <div class="col-md-6">
                     <strong><label  for="Labelnombremadre" class="form-label"> NIT de la madre(por favor no utilice ningun signo solo ingerese números)<label></strong>
                     <input  type="number" class="form-control"  wire:model="NIT_madre">
                   </div>
                   @error('NIT_madre')
                   <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                     <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                     <div>
                       Es necesario que llenes este campo para envíar la información
                     </div>
                   </div>
                   @enderror
                         <strong><label  for="Labelnombremadre" class="form-label">¿El alumno vive con la madre?</label></strong>
                         <div class="col-md">
                             <div class="form-check">
                                 <input class="form-check form-check-inline"type="radio" wire:model="vive_madre" value="1" wire:click="vive_con_la_madre('1')">
                                 <label class="form-check-label" for="flexRadioDefault1">
                                   Si
                                 </label>
                               </div>
                         <div class="col-md">
                           <div class="form-check">
                               <input class="form-check form-check-inline" type="radio" wire:model="vive_madre" value="2" wire:click="vive_con_la_madre('2')">
                               <label class="form-check-label" for="flexRadioDefault1">
                                 No
                               </label>
                             </div>
                       </div>
                     <br>                          
             </div>
                   </div>
                 </div>
                 </div>
               </div>
             </div>
           </div> 
      <br>
      <div wire:ignore.self class="accordion" id="accordionDatosdelencargado">
        <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
          <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOnedatosencargado">
            <button class="accordion-button collapsed" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-encargado" aria-expanded="false" aria-controls="panelsStayOpen-encargado">
                <h4 class="font-weight-bolder">
                    DATOS DEL ENCARGADO
                  </h4>
                </button>
          </h2>
          
          <div  wire:ignore.self id="panelsStayOpen-encargado" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
            <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
              <div class="tab">
                <div class="row">
                  <div class="row">
                      <strong><label  for="Labelnombrepadre" class="form-label">¿Quien es el encargado?</label></strong>
                      <div class="col-md-4">
                          <div class="form-check">
                              <input class="form-check-input" type="radio" Wire.model="quien_encargado1"  value="1" wire:click="quien_encargado('1')">
                              <label class="form-check-label" for="qencargado1">
                                El padre
                              </label>
                            </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-check">
                              <input class="form-check-input" type="radio" Wire.model="quien_encargado1" value="2" wire:click="quien_encargado('2')">
                              <label class="form-check-label" for="qencargado1">
                                La madre      
                              </label>
                            </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-check">
                              <input class="form-check-input" type="radio" Wire.model="quien_encargado1"  value="3" wire:click="quien_encargado('3')">
                              <label class="form-check-label" for="qencargado1">
                                Otro encargado
                              </label>
                            </div>
                      </div>  
                  </div>
                  <br>
                  
              </div>
              @if($quien_encargado1==3)
                <div class="row">
                    <div class="col-md-6">
                        <strong><label  for="Labelnombreencargado" class="form-label">Nombre completo</label></strong>
                        <input  type="text" class="form-control"  wire:model="nombre_encargado">
                      </div>
                      
                      <div class="col-md-6">
                        <strong><label  for="Labelnombreencargado" class="form-label">Fecha de nacimiento</label></strong>
                        <input  type="date" class="form-control"  wire:model="nacimiento_encargado">
                      </div>
                      @error('nombre_encargado')
                      <div class="col-md-6">
                      <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>
                            Es necesario que llenes este campo para envíar la información
                        </div>
                      </div>
                      </div>
                      @enderror
                      @error('nacimiento_encargado')
                      <div class="col-md-6">
                      <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>
                            Es necesario que llenes este campo para envíar la información
                        </div>
                      </div>
                      </div>
                      @enderror    
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <strong><label  for="Labelnombreencargado" class="form-label">Nacionalidad</label></strong>
                        <input  type="text" class="form-control"  wire:model="nacionalidad_encargado">
                      </div>
                      
                    <div class="col-md-6">
                        <strong><label  for="Labelnombreencargado" class="form-label">Lugar de nacimiento</label></strong>
                        <input  type="text" class="form-control"  wire:model="lugar_nacimiento_encargado">
                      </div>
                      @error('nacionalidad_encargado')
                      <div class="col-md-6">
                      <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>
                            Es necesario que llenes este campo para envíar la información
                        </div>
                      </div>
                      </div>
                      @enderror
                      @error('lugar_nacimiento_encargado')
                      <div class="col-md-6">
                      <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>
                            Es necesario que llenes este campo para envíar la información
                        </div>
                      </div>
                      </div>
                      @enderror
                </div>
                <div class="row">
                    <div class="row">
                        <strong><label  for="Labelnombreencargado" class="form-label">Estado civil</label></strong>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" Wire.model="estadocivilencargado" value="1" wire:click="estado_civil_encargado('1')">
                                <label class="form-check-label" for="estadocivilencargado">
                                  Casado(a)
                                </label>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" Wire.model="estadocivilencargado" value="2"  wire:click="estado_civil_encargado('2')">
                                <label class="form-check-label" for="estadocivilencargado">
                                  Separado(a)
                                </label>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" Wire.model="estadocivilencargado" value="3" wire:click="estado_civil_encargado('3')">
                                <label class="form-check-label" for="estadocivilencargado">
                                  Soltero(a)
                                </label>
                              </div>
                        </div>  
                    </div>
                    <br>
                    
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <strong><label  for="Labelnombreencargado" class="form-label">Número de DPI</label></strong>
                        <input  type="number" class="form-control"  wire:model="DPI_encargado">
                      </div>
      
                    <div class="col-md-6">
                        <strong><label  for="Labelnombreencargado" class="form-label">Número de celular</label></strong>
                        <input  type="number" class="form-control"  wire:model="celular_encargado">
                      </div>
    
                      @error('DPI_encargado')
                      <div class="col-md-6">
                      <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>
                            Es necesario que llenes este campo para envíar la información
                        </div>
                      </div>
                      </div> 
                      @enderror
                      @error('celular_encargado')
                      <div class="col-md-6">
                      <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>
                            Es necesario que llenes este campo para envíar la información
                        </div>
                      </div>
                      </div>
                      @enderror
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <strong><label  for="Labelnombreencargado" class="form-label">Número de casa</label></strong>
                        <input  type="number" class="form-control"  wire:model="telefono_encargado">
                      </div>
                 
                    <div class="col-md-6">
                        <strong><label  for="Labelnombreencargado" class="form-label">Dirección de la residencia</label></strong>
                        <input  type="text" class="form-control"  wire:model="direccion_residencia_encargado">
                      </div>
                      @error('telefono_encargado')
                      <div class="col-md-6">
                      <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>
                            Es necesario que llenes este campo para envíar la información
                        </div>
                      </div>
                      </div>
                      @enderror
                      @error('direccion_residencia_encargado')
                      <div class="col-md-6">
                      <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>
                            Es necesario que llenes este campo para envíar la información
                        </div>
                      </div>
                      </div>
                      @enderror
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <strong><label  for="Labelnombreencargado" class="form-label">Correo electrónico</label></strong>
                        <input  type="text" class="form-control"  wire:model="correo_encargado">
                      </div>
                      
                      <div class="col-md-6">
                        <strong><label  for="Labelprofesionencargado" class="form-label">Profesión</label></strong>
                        <input  type="text" class="form-control"  wire:model="profesion_encargado">
                      </div>
                      @error('correo_encargado')
                      <div class="col-md-6">
                      <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>
                            Es necesario que llenes este campo para envíar la información
                        </div>
                      </div>
                      </div>
                      @enderror
                      @error('profesion_encargado')
                      <div class="col-md-6">
                      <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>
                          Es necesario que llenes este campo para envíar la información
                        </div>
                      </div>
                      </div>
                      @enderror
                    <div class="col-md-6">
                        <strong><label  for="Labelnombreencargado" class="form-label">Lugar de trabajo</label></strong>
                        <input  type="text" class="form-control"  wire:model="lugar_profesion_encargado">
                      </div>
                      
                      <div class="col-md-6">
                        <strong><label  for="Labelnombreencargado" class="form-label">Cargo de trabajo que ocupa</label></strong>
                        <input  type="text" class="form-control"  wire:model="cargo_profesion_encargado">
                      </div>
    
                      @error('lugar_profesion_encargado')
                      <div class="col-md-6">
                      <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>
                          Es necesario que llenes este campo para envíar la información
                        </div>
                      </div>
                      </div>
                      @enderror
                      @error('cargo_profesion_encargado')
                      <div class="col-md-6">
                      <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>
                          Es necesario que llenes este campo para envíar la información
                        </div>
                      </div>
                      </div>
                      @enderror
                      <div class="col-md-6">
                        <strong><label  for="Labelnombreencargado" class="form-label">Religión que profesa</label></strong>
                        <input  type="text" class="form-control"  wire:model="religion_encargado">
                      </div>
                      
                      <div class="col-md-6">
                        <strong><label  for="Labelnombreencargado" class="form-label">NIT (no utilice guion)</label></strong>
                        <input  type="number" class="form-control"  wire:model="NIT_encargado">
    
                      @error('religion_encargado')
                      <div class="col-md-6">
                      <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>
                          Es necesario que llenes este campo para envíar la información
                        </div>
                      </div>
                      </div>
                      @enderror
                      @error('NIT_encargado')
                      <div class="col-md-6">
                      <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>
                          Es necesario que llenes este campo para envíar la información
                        </div>
                      </div>
                      </div>
                      @enderror
                    </div>
                      <center>
                        <div class="col-md-6">
                       <strong><label  for="Labelnombreencargado" class="form-label">¿Que relacion tiene el encargado con el alumno?</label></strong>
                       <input  type="text" class="form-control"  wire:model="Especifique_rel">
                       </div>
                       </center>
                      <center>
                      <div class="row">
                          <strong><label  for="Labelnombreencargado" class="form-label">¿El alumno vive con el encargado?</label></strong>
                          <center>
                            <div style="width: 12rem;">
                          <div class="col-md-7">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" Wire.model="vive_con_el_encargado"  wire:click="vive_con_el_encargado('1')">
                                  <label class="form-check-label" for="viveen1">
                                    Si
                                  </label>
                                </div>
                          </div>
                          <div class="col-md-7">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" Wire.model="viveen"  wire:click="vive_con_el_encargado('2')">
                                  <label class="form-check-label" for="viveen1">
                                    No
                                  </label>
                                </div>
                          </div>
                      </div>
                          </center>
                          
                    </div>
                  </center>
                    @endif
              </div>
            </div>   
            </div>
          </div>
          </div>
       <br>
 
   <div wire:ignore.self class="accordion" id="accordiondatosmedicos">
     <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
       <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOnedatosmedicos  ">
         <button class="accordion-button" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-medicos" aria-expanded="true" aria-controls="panelsStayOpen-medicos">
           <h4 class="font-weight-bolder">
             DATOS MEDICOS
           </h4>
         </button>
       </h2>
             
       <div wire:ignore.self id="panelsStayOpen-medicos" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse " aria-labelledby="panelsStayOpen-headingOne">
       <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
                 <div class="tab">
                   <div class="row">
                   <strong><label for="exampleInputPassword1" class="form-label">¿El alumno tiene alguna enfermedad o alergia?</label></strong>
                   <center>
                   <div style="width: 12rem;">
                   <div class="form-check">
                       <input class="form-check-input" type="radio" wire:model="tiene_alergia" id="alergia1" value="1" wire:click="tiene_alergia('1')">
                       <label class="form-check-label" for="alergia1">
                         Si
                       </label>
                   </div>
                     <div class="form-check">
                       <input class="form-check-input" type="radio" wire:model="tiene_alergia" id="alergia2" value="0" wire:click="tiene_alergia('0')">
                       <label class="form-check-label" for="alergia1">
                         No
                       </label>
                     </div>
                   </div>
               </center>
               @if($tiene_alergia==1)
              <center>
             <div class="col-md-6">
              <strong><label  for="Labelnombreaseguradora" class="form-label">IEspecifique cuales</label></strong>
              <input  type="text" class="form-control"  wire:model="Especifique_alerg">
             </div>
              </center>
               @endif
              
               </div>
             </div>
                 
             <div class="tab">
               <div class="row">
               <strong><label for="exampleInputPassword1" class="form-label">¿El alumno es alergico a un medicamento?</label></strong>
               <center>
               <div style="width: 12rem;">
               <div class="form-check">
                   <input class="form-check-input" type="radio" wire:model="medicamento" id="medicamento1" value="1" wire:click="medicamento('1')">
                   <label class="form-check-label" for="medicamento1">
                     Si
                   </label>
               </div>
                 <div class="form-check">
                   <input class="form-check-input" type="radio" wire:model="medicamento" id="medicamento2" value="0" wire:click="medicamento('0')">
                   <label class="form-check-label" for="medicamento1">
                     No
                   </label>
                 </div>
               </div>
           </center>
           @if($medicamento==1)
          <center>
         <div class="col-md-6">
          <strong><label  for="labelmedicamento" class="form-label">Especifique cuales</label></strong>
          <input  type="text" class="form-control"  wire:model="Especifique_medi">
         </div>
          </center>
           @endif
           </div>
         </div>
       
         <div class="tab">
           <div class="row">
           <strong><label for="exampleInputPassword1" class="form-label">¿El alumno es alergico a un alimento?</label></strong>
           <center>
           <div style="width: 12rem;">
           <div class="form-check">
               <input class="form-check-input" type="radio" wire:model="alimento" id="alimento1" value="1" wire:click="alimento('1')">
               <label class="form-check-label" for="alimento1">
                 Si
               </label>
           </div>
             <div class="form-check">
               <input class="form-check-input" type="radio" wire:model="alimento" id="alimento2" value="0" wire:click="alimento('0')">
               <label class="form-check-label" for="alimento1">
                 No
               </label>
             </div>
           </div>
           </center>
            @if($alimento==1)
           <center>
          <div class="col-md-6">
         <strong><label  for="labelalimento" class="form-label">Especifique cuales</label></strong>
         <input  type="text" class="form-control"  wire:model="Especifique_ali">
         </div>
         </center>
         @endif
        </div>
       </div>
 
           <div class="tab">
             <strong><label for="exampleInputPassword1" class="form-label">¿El alumno tiene todas las vacunas?</label></strong>
               <center>
                 <div style="width: 12rem;">
                   <div class="form-check">
                     <input class="form-check-input" type="radio" wire:model="vacunas" id="vacunas1" value="1" wire:click="vacunas('1')">
                       <label class="form-check-label" for="vacunas1">
                         Si
                       </label>
                   </div>
                   <div class="form-check">
                     <input class="form-check-input" type="radio" wire:model="vacunas" id="vacunas2" value="0" wire:click="vacunas('0')">
                       <label class="form-check-label" for="vacunas1">
                         No
                       </label>
                     </div>
                 </div>
               </center>
           </div>
             
       
           <div class="tab">
             <strong><label for="exampleInputPassword1" class="form-label">¿El alumno esta asegurado?</label></strong>
               <center>
                 <div style="width: 12rem;">
                   <div class="form-check">
                     <input class="form-check-input" type="radio" wire:model="alumno_asegurado" id="alumnoasegurado1" value="1" wire:click="alumno_asegurado('1')">
                       <label class="form-check-label" for="alumnoasegurado1">
                         Si
                       </label>
                   </div>
                 <div class="form-check">
                   <input class="form-check-input" type="radio" wire:model="alumno_asegurado" id="alumnoasegurado2" value="0" wire:click="alumno_asegurado('0')">
                     <label class="form-check-label" for="alumnoasegurado1">
                       No
                     </label>
                 </div>
                 </div>
                 </center>
                   @if($alumno_asegurado==1)
                 <center>
                   <div class="col-md-6">
                     <strong><label  for="Labelnombreaseguradora" class="form-label"> nombre de la aseguradora</label></strong>
                       <input  type="text" class="form-control"  wire:model="nombre_aseguradora">
                   </div>
                 </center>
                   @endif
 
           </div>
 
               
       <div class="row">
         <div class="col-md-6">
           <strong><label  for="Labelpoliza" class="form-label"> poliza de seguro</label></strong>
             <input  type="text" class="form-control"  wire:model="poliza">
         </div>
                   
         <div class="col-md-6">
             <strong><label  for="Labelcarneseguro" class="form-label"> número del carné de seguro</label></strong>
               <input  type="number" class="form-control"  wire:model="carne_seguro">
         </div>
                   
       </div>
     </div>
    </div>
   </div>
 </div>
 
   <br>
 
   <div wire:ignore.self class="accordion" id="accordionDatossalida"> 
    <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
        <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOnedatossalida">
          <button class="accordion-button collapsed" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-salida" aria-expanded="false" aria-controls="panelsStayOpen-salida">
            <h4 class="font-weight-bolder">
            DATOS DE SALIDA
            </h4>
          </button>
        </h2>
  
        <div  wire:ignore.self id="panelsStayOpen-salida" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
          <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
            <div class="tab">
              <strong><label for="exampleInputPassword1" class="form-label">¿El alumno se retira solo?</label></strong>
                <center>
            <div style="width: 12rem;">
            <div class="form-check">
              <input class="form-check-input" type="radio" value="1" wire:model="solo_alumno" id="solo1" wire:click="solo_alumno('1')">
                <label class="form-check-label" for="solo1">
                 Si
                </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" value="2" wire:model="solo_alumno" id="solo2" wire:click="solo_alumno('2')">
              <label class="form-check-label" for="solo1">
                No
              </label>
            </div>
            </center>
          </div>
  
      @if($solo_alumno==2)
            <div class="tab">
              <strong><label for="exampleInputPassword1" class="form-label">¿El alumno se retira con un encargado?</label></strong>
              <center>
              <div style="width: 12rem;">
              <div class="form-check">
                  <input class="form-check-input" type="radio" value="1" wire:model="encargado_alumno" id="encargado1" wire:click="encargado_alumno('1')">
                  <label class="form-check-label" for="encargado1">
                    Si
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="2" wire:model="encargado_alumno" id="encargado2" wire:click="encargado_alumno('2')">
                  <label class="form-check-label" for="encargado1">
                    No
                  </label>
                </div>
              </div>
           </center>
           @if($encargado_alumno==1)
           <center>
          <div class="col-md-6">
            <strong><label  for="Labelnombrepadre" class="form-label">Nombre del encargado</label></strong>
            <input  type="text" class="form-control"  wire:model="nombreencargado">
          </div>
         </center>
          @endif
          
          
          </div>
  
          @if($encargado_alumno==2)
          <div class="tab">
            <strong><label for="exampleInputPassword1" class="form-label">¿El alumno se retira en bus del colegio?</label></strong>
            <center>
            <div style="width: 12rem;">
            <div class="form-check">
                <input class="form-check-input" type="radio" value="1" wire:model="bus_colegio" id="buscolegio1" wire:click="bus_colegio('1')">
                <label class="form-check-label" for="buscolegio1">
                  Si
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="2" wire:model="bus_colegio" id="buscolegio2" wire:click="bus_colegio('2')">
                <label class="form-check-label" for="buscolegio1">
                  No
                </label>
              </div>
            </div>
        </center>
        </div>
  
        @if($bus_colegio==2)
        <center>
          <div class="col-md-6">
            <strong><label  for="Labelnombrepadre" class="form-label">Número de la matrícula del bus ajeno al Colegio</label></strong>
            <input  type="text" class="form-control"  wire:model="matricula_bus_aj">
          </div>
         </center>
        @endif
      @endif
      @endif
        </div>
        </div>
  </div>
  
  </div>
 
 
 
       </form>


            </div>
            
            @if($mensajeins!=null && $mensajeins==1)
            <br>
            <div class="alert alert-success" role="alert">
                Editado Correctamente!
              </div>
            @endif
              @if($mensajeins1!=null && $mensajeins1==1)
              <br>
              <div class="alert alert-Danger" role="alert">
                No fue Editado Correctamente!
              </div>
              @endif
                    
        </div>

        <div class="modal-footer">
          <div>
          @if($estado_ges==4)
          
          <a  id="valestadoinfo4" wire:click="cambio_estado(3)" type="button" style="border-radius: 60px 60px 60px 60px;" class="btn btn-success" data-bs-dismiss="modal">Reg. Estado</a>
              
            <a  id="valestadoinfo4" wire:click="cambio_estado(5)" type="button" style="border-radius: 60px 60px 60px 60px;" class="btn btn-warning" data-bs-dismiss="modal">Sig. Estado</a>

            <a  type="button"  wire:click="update_datos_ins()" style="border-radius: 60px 60px 60px 60px;" class="btn btn-primary" >Actualizar</a>
          
            @elseif($estado_ges==3)
            
            <a  id="valestadoinfo4" wire:click="cambio_estado(2)" type="button" style="border-radius: 60px 60px 60px 60px;" class="btn btn-success" data-bs-dismiss="modal">Reg. Estado</a>
              
            <a  id="valestadoinfo4" wire:click="cambio_estado(4)" type="button" style="border-radius: 60px 60px 60px 60px;" class="btn btn-warning" data-bs-dismiss="modal">Sig. Estado</a>

            <a  type="button"  wire:click="update_datos_ins()" style="border-radius: 60px 60px 60px 60px;" class="btn btn-primary" >Actualizar</a>
            
            @endif
          </div>
            
        </div>

    </div>
  </div>     
        </div>
   @include('admisiones.codmineduc')
   @include('admisiones.modalverysubircomp2')
   @include('admisiones.modalestado4')