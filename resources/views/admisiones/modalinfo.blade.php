
  <div wire:ignore.self id="infodata" style="border-radius: 60px 60px 60px 60px;" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="infodata" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
          <h3 class="modal-title text-center" style="color:rgb(255, 255, 255)" >Proceso de Inscripción</h3>
          <button type="button" class="btn btn-warning btn-close" style="color:rgb(255, 255, 255)"  data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <div class="container-sm">

              <h4 class="form-label text text-center" style="font-size:25px">Gestión: #{{$gestion}}
              
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
                  <div  wire:ignore.self id="panelsStayOpen-collapseTwo"style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
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
                                    <input class="form-check-input"  wire:model='genero' value="Masculino" wire:click="valfecha"  type="radio" wire:model="genero_es" id="flexRadioDefault1">
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
                                <label for="inputInstitucion" style="font-size: 15px; color:#000000;">Lugar de Nacimiento (País):</label>
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
                                          
                                            <span>Seleccione:</span>
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
                                        
                                          <span>Seleccionar: </span>
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
                    <h4 class="font-weight-bolder">  <b>Datos Encargado:</b>   </h4>
                    </button>
                
                  </h2>
                  <div  wire:ignore.self id="panelsStayOpen-collapseThree" style="border-radius: 60px 60px 60px 60px;"class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingThree">
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
                          <label for="fnacimiento_en" style="font-size: 15px; color:#000000;">Fecha de Nacimiento:</label>
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
              
            </div>    

        </div>
      @if($mensajeup!=null)
      <div id="cerrar"class="alert alert-success alert-dismissible fade show cerrar" role="alert">
        <strong> Actualizado Correctamente.</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if($mensajeup1!=null)
      <div id="cerrar"class="alert alert-danger alert-dismissible fade show cerrar" role="alert">
        <strong> No fue posible actualizar.</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
        <div class="modal-footer">

          <a  wire:click="actualizar_inf()" type="button" style="border-radius: 60px 60px 60px 60px;" class="btn btn-pre2">Actualizar</a>
                
            <a  id="valpedido" wire:click="tipo_cambio(1)" type="button" style="border-radius: 60px 60px 60px 60px;" class="btn btn-editb" data-bs-dismiss="modal">Sig. estado</a>

        </div>
      </div>
    </div>
  </div>     
   @include('admisiones.codmineduc')