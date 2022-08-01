<div  wire:ignore.self class="modal fade" id="editaradmision" data-bs-toggle="modal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" tabindex="-1" aria-labelledby="eliminaranuncio" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header"  style="background:#a4cb39;color:rgba(255, 255, 255, 255.255)">
        
        </div>
        <div class="modal-body">
            @isset($mensaje)
@if($mensaje==1)
<div class="alert alert-success alert-dismissible fade show" role="alert">
    Datos editados correctamente!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @elseif($mensaje==0)
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    Los datos no fueron asignados correctamente!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
@endisset
@isset($mensajeadmin)
@if($mensajeadmin==1)
<div class="alert alert-success alert-dismissible fade show" role="alert">
    Comentario agregado correctamente!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @elseif($mensajeadmin==0)
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    El comentario no fue agregado correctamente!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
@endisset
            <h5 class="modal-title text-center" id="staticBackdropLabel" style="color:#3a3e7b"><b>Formulario de aspirante al colegio.</b></h5>    
            <form wire:submit.prevent='' style= "float:right; max-width:5000px; margin-top: -7px;" class="formulario formulario-eliminar">
                @csrf
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <option></option>
                        <label for="name" style="color: #3a3e7b" data-aos="fade"><b>Nombre completo del alumno</b></label><br>
                        <div>
                            <input class="form-control input100 rounded-pill" id="nombre" wire:model="nombres" type="text" class="validate" required>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <option></option>
                        <label for="encargado" style="color: #3a3e7b" data-aos="fade"><b>Nombre competo del encargado</b></label>
                        <input class="form-control me-2 input100 rounded-pill" id="encargado" wire:model="nombres_en" type="text" class="validate" required>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <option></option>
                        <label for="ciclo" style="color: #3a3e7b" data-aos="fade"><b>Ciclo Escolar</b></label><br>        
                        <select class="form-control me-2 input100 rounded-pill" wire:model="ciclo_escolar" aria-label="Default select example" required>
                          <option selected></option>
                          @php
                          $anio=date('Y');
                          $a=1;
                          while ($a<=2)
                          {
                            echo '<option value='.$anio.'>'.$anio.'</option>';
                            $anio=$anio+1;
                            $a=$a+1;
                          }
                          @endphp
                          
                        </select>
                      </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <option></option>
                        <label for="grado" style="color: #3a3e7b" data-aos="fade"><b>Grado</b></label><br>        
                        <select class="form-control me-2 input100 rounded-pill" wire:model="grado" aria-label="Default select example" required>
                          <option selected></option>
                          <option value="PRE-KÍNDER">PRE-KÍNDER</option>
                          <option value="KÍNDER">KÍNDER</option>
                          <option value="PREPARATORIA">PREPARATORIA</option>
                          <option value="PRIMERO PRIMARIA">PRIMERO PRIMARIA</option>
                          <option value="SEGUNDO PRIMARIA">SEGUNDO PRIMARIA</option>
                          <option value="TERCERO PRIMARIA">TERCERO PRIMARIA</option>
                          <option value="CUARTO PRIMARIA">CUARTO PRIMARIA</option>
                          <option value="QUINTO PRIMARIA">QUINTO PRIMARIA</option>
                          <option value="SEXTO PRIMARIA">	SEXTO PRIMARIA</option>
                          <option value="SÉPTIMO">SÉPTIMO</option>
                          <option value="OCTAVO">OCTAVO</option>
                          <option value="NOVENO">NOVENO</option>
                          <option value="DÉCIMO">DÉCIMO</option>
                          <option value="ONCEAVO">ONCEAVO</option>
                        </select>
                    </div>
                     
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <option></option>
                        <label for="celular" style="color: #3a3e7b" data-aos="fade"><b>Número de celuar</b></label>
                        <input class="form-control me-2 input100 rounded-pill" id="celular" wire:model="telefono" type="number" class="validate" required>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <option></option>
                        <label for="correo" style="color: #3a3e7b" data-aos="fade"><b>Correo electrónico</b></label>
                        <input class="form-control me-2 input100 rounded-pill" id="correo" wire:model="email" type="email" class="validate" required>
                    </div><br>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <option></option>
                        <label for="dia_ev" style="color: #3a3e7b" data-aos="fade"><b>Día de evaluación</b></label>           
                        <select class="form-control me-2 input100 rounded-pill" id='dia_ev'wire:model="dia_evaluacion" type="select" class="validate" required>
                          <option selected style="color: #000000"></option>
                          <option value="Martes" style="color: #000000">Martes</option>
                          <option value="Miercoles" style="color: #000000">Miércoles</option>
                          <option value="Jueves" style="color: #000000">Jueves</option>
                        </select>
                    </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <option></option>
                        <label for="horario_p" style="color: #3a3e7b" data-aos="fade"><b>Horario de inicio:</b></label>           
                        <select class="form-control me-2 input100 rounded-pill" id='horario_p' wire:model="horario_evaluacion" type="select" class="validate" required>
                          <option selected style="color: #000000"></option>
                          <option value="08:00" style="color: #000000">08:00</option>
                          <option value="09:00" style="color: #000000">09:00</option>
                          <option value="10:00" style="color: #000000">10:00</option>
                          <option value="11:00" style="color: #000000">11:00</option>
                        </select>
                      </div><br>
                       
                      <div>
                        <option></option>
                        <label for="mensaje" style="color: #3a3e7b" data-aos="fade"><b>Observación</b></label>
                        <p><Strong></Strong>{{$mensaje}}</p> 
                    </div>
                    <form wire:submit.prevent="" enctype="multipart/form-data">
                      <div>
                        <option></option>
                        <label for="mensaje" style="color: #3a3e7b" data-aos="fade"><b>Observación de administración respecto al número de gestión</b></label>        
                        <textarea class="form-control me-2 input100" id="mensaje" rows="5" wire:model="mensajeadministracion" data-length="240"></textarea>
                    </div>
                    </form>
                    <br>
                    
                    <div>
                        <option></option>  <option></option>
                        <button type="submit" class="btn btn-pre2"  style="border-radius: 12px;" wire:click="comentario_administracion()">Agregar observación</button>

                    </div>
                </div>
             
                </form>
        </div>
        <div class="modal-footer">
            @if($estado==1)
            <button type="button" class="btn btn-secondary"  style="border-radius: 12px;"  id="info"  data-bs-dismiss="modal">Salir</button>
            <button type="button" class="btn btn-editb"  style="border-radius: 12px;" wire:click='update_admision({{$id_gestion}})'>Actualizar</button>
          <button class="btn btn-warning" style="border-radius: 12px;" data-bs-target="#confirmacionelevar" data-bs-toggle="modal" wire:click='siguienteestado({{1}})' data-bs-dismiss="modal">Siguiente estado</button>
            @elseif($estado==2)
            <button type="button" class="btn btn-secondary"  style="border-radius: 12px;"  id="info"  data-bs-dismiss="modal">Salir</button>
            <button type="button" class="btn btn-editb"  style="border-radius: 12px;" wire:click='update_admision({{$id_gestion}})'>Actualizar</button>
          <button type="button" class="btn btn-pre2"  style="border-radius: 12px;" data-bs-target="#confirmacionelevar"  data-bs-toggle="modal" wire:click='siguienteestado({{2}})'  data-bs-dismiss="modal">Regresar estado</button>
          <button type="button" class="btn btn-warning" style="border-radius: 12px;" data-bs-target="#confirmacionelevar" data-bs-toggle="modal" wire:click='siguienteestado({{1}})' data-bs-dismiss="modal">Siguiente estado</button>
            @elseif($estado==3)
            <button type="button" class="btn btn-secondary"  style="border-radius: 12px;"  id="info"  data-bs-dismiss="modal">Salir</button>
            <button type="button" class="btn btn-editb"  style="border-radius: 12px;" wire:click='update_admision({{$id_gestion}})'>Actualizar</button>
            <button type="button" class="btn btn-pre2"  style="border-radius: 12px;" data-bs-target="#confirmacionelevar"  data-bs-toggle="modal" wire:click='siguienteestado({{2}})'  data-bs-dismiss="modal">Regresar estado</button>
            @endif
            
          
          
        </div>
      </div>
    </div>
    </div>
    <!--otro modal-->
    <div wire:ignore.self class="modal fade" id="confirmacionelevar" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header" style="background:#a4cb39;color:rgba(255, 255, 255, 255.255)">
            <h5 class="modal-title" id="exampleModalToggleLabel2">Revisión de proceso de admisión</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            @if($botonsiguiente==1)
            <p><Strong>¿Está seguro de continuar con el proceso de este número de gestión?</Strong></p>
            @elseif($botonsiguiente==2)
            <p><Strong>¿Está seguro de pausar el proceso de este número de gestión?</Strong></p>
            @endif
            
            <br>
            <div class="row">
                <div class="col-md-6">
                    <p><Strong>Nombre del alumno:</Strong> {{$nombres}}</p>
                </div>
                <div class="col-md-6">
                    <p><Strong>Nombre del encargado:</Strong> {{$nombres_en}}</p>
                </div>
            </div> 
            <div class="row">
                <div class="col-md-6">
                    <p><Strong>Ciclo escolar:</Strong> {{$ciclo_escolar}}</p>
                </div>
                  <div class="col-md-6">
                    <p><Strong>Grado de Ingreso:</Strong> {{$grado}}</p>
                 </div>
                
            </div> 
            <div class="row">
              <div class="col-md-6">
                <p><Strong>Teléfono:</Strong> {{$telefono}}</p>
            </div>
              <div class="col-md-6">
                <p><Strong>Correo electrónico:</Strong> {{$email}}</p>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <p><Strong>Día de evaluación:</Strong> {{$dia_evaluacion}}</p>
            </div>
              <div class="col-md-6">
                <p><Strong>Horario de evaluación:</Strong> {{$horario_evaluacion}}</p>
             </div>
            </div>
          </div>
          <div class="modal-footer">
            @if($botonsiguiente==1)
            <button type="button" class="btn btn-editb"  style="border-radius: 12px;" wire:click='update_estado()' data-bs-dismiss="modal">Confirmar</button>
            <button type="button" class="btn btn-secondary"  style="border-radius: 12px;"  id="info"  data-bs-dismiss="modal">Cancelar</button>
            @elseif($botonsiguiente==2)
            <button type="button" class="btn btn-editb"  style="border-radius: 12px;" wire:click='lower_estado()' data-bs-dismiss="modal">Confirmar</button>
            <button type="button" class="btn btn-secondary"  style="border-radius: 12px;"  id="info"  data-bs-dismiss="modal">Cancelar</button>
            @endif
          </div>
        </div>
      </div>
    </div>