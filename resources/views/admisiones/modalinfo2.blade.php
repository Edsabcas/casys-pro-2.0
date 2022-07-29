<div wire:ignore.self id="infodata2" style="border-radius: 60px 60px 60px 60px;" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="infodata2" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
        <h3 class="modal-title text-center" style="color:rgb(255, 255, 255)" >Proceso de Inscripción</h3>
        <button type="button" class="btn btn-close btn-warning" style="color:rgb(255, 255, 255)"  data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
          <div class="container-sm">

            <h4 class="form-label text text-center" style="font-size:25px">Gestion: #{{$gestion}}
            
            </h4> 
            <p  class="text text-center">Fecha de último cambio: <b>{{$fecha_ultimo_cambio}}</b></p>
            <br>

              <div wire:ignore.self class="accordion" id="accordionPanelsStayOpenExample2">
                <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
                  <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;"  type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    <h4 class="font-weight-bolder">  <b>Datos Del Estudiante:</b>   </h4>
                    </button>
                   
                  </h2>
                  <div  wire:ignore.self id="panelsStayOpen-collapseTwo"style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
                               <form wire:submit.prevent="" class="form-floating">
                                <div class="row g-3">
                                  <div class="col-md">
                                    <label for="inputNombres" style="font-size: 15px; color:#000000;">Nombres:
                                    </label> 
                                    <input  wire:model="nombre_es" class="form-control " required>
                                    @error('nombre_es')
                                    <div class="alert alert-warning" role="alert">
                                     Pendiente
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md">
                                  <label for="inputApellidos" style="font-size: 15px; color:#000000;">Apellidos:</label>
                                  <input  wire:model="apellidos_est" class="form-control " required>
                                  @error('apellidos_est')
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
                                    <input class="form-check-input"  wire:model='genero' value="Masculino" type="radio" wire:model="genero_es" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1" style="font-size: 15px; color:#000000;">
                                      Masculino
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline " >
                                    <input class="form-check-input"  wire:model='genero' value="Femenino" type="radio" wire:model="genero_es" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2" style="font-size: 15px; color:#000000;">
                                      Femenino
                                    </label>
                                    @error('genero_es')
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
                        
                        <div class="row g-3">
                          <div class="col-md">
                            <label for="inputApellidos" style="font-size: 15px; color:#000000;">Grado ingreso:</label>
                            <br>
                            <select class="form-select form-select-lg mb-3" wire:model="gradoin" aria-label=".form-select-lg example">
                              @foreach($grados as $grado)
                              <option value="{{$grado->ID_GR}}">{{$grado->GRADO}}</option>
                              @endforeach
                            </select>
                            @error('gradoin')
                            <div class="alert alert-warning" role="alert">
                            Pendiente
                            </div>
                            @enderror 
                          </div>

                          <div class="mb-3">
                            <option></option>
                            <label for="lastname" style="color: #3a3e7b">
                                <b>¿Cómo prefiere que sus hijos estudien el ciclo escolar 2023?</b></label>
                                <br>
                                <br>
                                <li class="list-group-item list-group-item-action">
                                 
                                    <input class="form-check-input me-1"  type="radio" wire:model="tipo2" value="Presencial" aria-label="..."  id="flexRadioGradopre">
                                    <label class="form-check-label" for="flexRadioGradopre" style="font-size: 15px; color:#000000;">
                                        Presencial 
                                      </label>
                                    
                                  </li>
                                  <li class="list-group-item list-group-item-action">
                                    <input class="form-check-input me-1"  type="radio"  wire:model="tipo2" value="Virtual" aria-label="..."  id="flexRadioGradvir">
                                    <label class="form-check-label" for="flexRadioGradvir" style="font-size: 15px; color:#000000;">
                                      Virtual
                                      </label>
                                  
                                  </li>
                                  @error('tipo') 
                                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                          
                                            <span>Seleccionar: </span>
                                           </div> @enderror
                        </div>
                        <div class="mb-3">
                          <option></option>
                          <label for="lastname" style="color: #3a3e7b">
                              <b>Inscripción:</b></label>
                              <br>
                              <br>
                              <li class="list-group-item list-group-item-action">
                               
                                  <input class="form-check-input me-1"  type="radio" wire:model="tipo_ins" value="1" aria-label="..."  id="flexRadioGradopre1">
                                  <label class="form-check-label" for="flexRadioGradopre1" style="font-size: 15px; color:#000000;">
                                    Re-ingreso 
                                    </label>
                                  
                                </li>
                                <li class="list-group-item list-group-item-action">
                                  <input class="form-check-input me-1"  type="radio"  wire:model="tipo_ins" value="2" aria-label="..."  id="flexRadioGradvir2">
                                  <label class="form-check-label" for="flexRadioGradvir2" style="font-size: 15px; color:#000000;">
                                    Nuevo ingreso
                                    </label>
                                
                                </li>
                                @error('tipo_ins') 
                                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                        
                                          <span>seleccionar:</span>
                                         </div> @enderror
                      </div>
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
                    <h4 class="font-weight-bolder">  <b>Datos Del Encargado:</b>   </h4>
                    </button>
                
                  </h2>
                  <div  wire:ignore.self id="panelsStayOpen-collapseThree" style="border-radius: 60px 60px 60px 60px;"class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
                      <div class="table-responsive">
                        <form wire:submit.prevent="val3()" class="form-floating">
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
                            Viuda(o)
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
                        <label for="inputApellidos" style="font-size: 15px; color:#000000;">Dirección de domicilio:</label>
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
                      <label for="inputApellidos" style="font-size: 15px; color:#000000;">Teléfono de casa:</label>
                      <input placeholder="" type="number"  wire:model="tel_casa_en" class="form-control " required>
                  </div>
                  @error('tel_casa_en')
                  <div class="alert alert-warning" role="alert">
                   Pendiente
                  </div>
                  @enderror
                    <div class="col-md">
                    <label for="inputApellidos" style="font-size: 15px; color:#000000;">Teléfono celular:</label>
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
                            <label for="inputApellidos" style="font-size: 15px; color:#000000;">Correo electrónico:</label>
                            <input placeholder="" type="email"  wire:model="correo_en" class="form-control " required>
                        </div>
                        @error('correo_en')
                        <div class="alert alert-warning" role="alert">
                         Pendiente
                        </div>
                        @enderror
                        <div class="col-md">
                          <label for="inputApellidos" style="font-size: 15px; color:#000000;">Correo electrónico (opcional):</label>
                          <input placeholder="" type="email"  wire:model="correo_en2" class="form-control " required>
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
                  <h4 class="font-weight-bolder">   <b>Información Sobre El Pago</b>   </h4>
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
                      <label for="exampleInputEmail1" class="form-label">Método de pago:</label>
                          <select class="form-select" aria-label="Default select example" wire:model="metodo" required>
                            <option selected>Seleccionar:</option>
                            @isset($metododepago)
                            @foreach ($metododepago as $metodos)
                              <option value="{{$metodos->ID_T_D_PAGO}}">{{$metodos->DESCRIPCION}}</option>
                            @endforeach              
                          @endisset
                          </select>
                    </div>
                      @error('metodo')
                        <div class="alert alert-warning" role="alert">
                          Pendiente
                        </div>
                      @enderror
                      <br>
                      {{-- EFECTIVO --}}
                      @if($metodo==1)

                        <div class="mb-3">
                          <label for="message-text" class="col-form-label">Observación:</label>
                            <textarea class="form-control" id="message-text" wire:model="observacion" required></textarea>
                        </div>
                        @error('observacion')
                          <div class="alert alert-warning" role="alert">
                            Pendiente
                          </div>
                        @enderror
                          
                      {{-- TRANSFERENCIA --}}
                      @elseif($metodo==2)

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
                                  @endif
                                  {{-- <img class="img-profile rounded-circle" style="float: center;" width="80" height="80" src="imagen/comprobantes2022/{{$archivo_comprobante}}">
                                  --}}
                                  <button type="button" class="btn btn-editb" style="float:" data-bs-dismiss="modal"  id="updtatecompro">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="float: center;" width="10" height="10" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>  
                                  </button> 
                                  @endif
                                  <!-- Button trigger modal -->
                                  <a class="btn" type="button" data-bs-toggle="modal"  data-bs-dismiss="modal" id="vercompro">
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
                                            
                        <center>
                          <hr>
                          <div class="col-md">
                            <label for="inputApellidos" style="font-size: 20px; color:#000000;"><strong>Se realizo transacción completa:</strong></label>
                            <br>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input"  type="radio" wire:model="validacion_comp" value="1" wire:click="validacion_comp('1')">
                              <label class="form-check-label" for="val1" style="font-size: 15px; color:#000000;">
                              Si
                              </label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" wire:model="validacion_comp" value="2" wire:click="validacion_comp('2')">
                              <label class="form-check-label" for="val1" style="font-size: 15px; color:#000000;">
                              No
                              </label>
                            </div>
                            @if($validacion_comp==2)
                              <div class="mb-3">
                                <label for="message-text" class="col-form-label">Observación:</label>
                                <textarea class="form-control" id="rechazo" wire:model="observacion2"></textarea>
                              </div>                            
                            @endif
                          </div>
                        </center>    

                      {{-- PAGO EN LINEA TARJETA DE CREDITO --}}        
                      @elseif($metodo==4)

                            <form>
                                          
                              {{-- Nombre en la tarjeta --}}
                              <div class="container">
                                <div class="row"> 
                                  <div class="col">
                                    <div class="mb-3">
                                      <label for="ncompleto" class="col-form-label">Nombre en la tarjeta:</label>
                                        <input type="text" class="form-control" id="ntarjeta" wire:model="ntarjeta">
                                    </div>
                                  </div>
                                      @error('ntarjeta') 
                                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                            </svg>
                                            <span>¡Pendiente de ingresar!</span>
                                          </div>                                   
                                      @enderror

                                    {{-- Número de la tarjeta --}}
                                    <div class="col">
                                      <div class="mb-3">
                                        <label for="notarjeta" class="col-form-label">Numero de la tarjeta:</label>
                                        <input type="number" class="form-control" id="notarjeta" wire:model="notarjeta">
                                      </div>
                                    </div>
                                </div>
                              </div>
                                @error('notarjeta') 
                                  <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                      <span>¡Pendiente de ingresar!</span>
                                  </div> 
                                @enderror
                        

                              {{-- Nombre en la tarjeta --}}
                              <div class="container">
                                <div class="row"> 
                                  <div class="col">
                                    <div class="mb-3">
                                      <label for="fvencimiento" class="col-form-label">Fecha de vencimiento:</label>
                                        <input type="date" class="form-control" id="fvencimiento" wire:model="fvencimiento">
                                    </div>
                                  </div>
                                      @error('fvencimiento') 
                                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                            </svg>
                                            <span>¡Pendiente de ingresar!</span>
                                          </div>                                   
                                      @enderror

                                    {{-- Número de la tarjeta --}}
                                    <div class="col">
                                      <div class="mb-3">
                                        <label for="cseguridad" class="col-form-label">Codigo de seguridad:</label>
                                        <input type="number" class="form-control" id="cseguridad" wire:model="cseguridad">
                                      </div>
                                    </div>
                                </div>
                              </div>
                                @error('cseguridad') 
                                  <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                      <span>¡Pendiente de ingresar!</span>
                                  </div> 
                                @enderror

                            </form>
                      
                      @endif
                    </form>

                    {{-- Mensajes --}}

                      @isset($mensajeup)
                        @if ($mensajeup!=null)
                          <div id="cerrar"class="alert alert-success alert-dismissible fade show cerrar" role="alert">
                              <strong>¡Editado correctamente!</strong> 
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @endif
                      @endisset
                      @isset($mensajeup1)
                        @if($mensajeup1!=null)
                          <div id="cerrar"class="alert alert-danger alert-dismissible fade show cerrar" role="alert">
                              ¡No se logro editar correctamente!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @endif
                      @endisset
                    </div>
                 </div>
                </div>
              </div>
            </div>
            
          </div>        
      </div>
<br>
      <div class="modal-footer">

        @if ($validacion_comp==2)

        <button class="btn btn-pre2" style="border-radius: 60px 60px 60px 60px;"  wire:click="rechazar_comprobante()" data-bs-dismiss="modal">Rechazar</button>
        
        @else
        
        <button class="btn btn-pre2" style="border-radius: 60px 60px 60px 60px;" wire:click="actualizar_validacion_pago()">Actualizar</button>

        <a  id="valpedido" wire:click="tipo_cambio(1)" type="button" style="border-radius: 60px 60px 60px 60px;" class="btn btn-warning" data-bs-dismiss="modal">Reg. Estado</a>

        <a  id="valpedido"  wire:click="tipo_cambio(3)" type="button" style="border-radius: 60px 60px 60px 60px;" class="btn btn-editb" data-bs-dismiss="modal">Sig. Estado</a>          
        @endif

       {{--  @if($estado_ges==1)

        <button class="btn btn-pre2" style="border-radius: 60px 60px 60px 60px;" wire:click="actualizar_validacion_pago()">Actualizar</button>

        <a  id="valpedido" wire:click="tipo_cambio(0)" type="button" style="border-radius: 60px 60px 60px 60px;" class="btn btn-warning" data-bs-dismiss="modal">Reg. Estado</a>

        <a  id="valpedido"  wire:click="tipo_cambio(2)" type="button" style="border-radius: 60px 60px 60px 60px;" class="btn btn-editb" data-bs-dismiss="modal">Sig. Estado</a>

        @endif  
        @if($estado_ges==2)
        <button class="btn btn-pre2" style="border-radius: 60px 60px 60px 60px;" wire:click="actualizar_validacion_pago()">Actualizar</button>

        <a  id="valpedido" wire:click="tipo_cambio(1)" type="button" style="border-radius: 60px 60px 60px 60px;" class="btn btn-warning" data-bs-dismiss="modal">Reg. Estado</a>

        <a  id="valpedido"  wire:click="tipo_cambio(3)" type="button" style="border-radius: 60px 60px 60px 60px;" class="btn btn-editb" data-bs-dismiss="modal">Sig. Estado</a>
          @endif --}}

      </div>
    </div>
  </div>
</div>   
@include('admisiones.modalverysubircomp')
 @include('admisiones.codmineduc')