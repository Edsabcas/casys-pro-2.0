<div  wire:ignore.self class="modal fade" id="editaradmision" data-bs-toggle="modal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" tabindex="-1" aria-labelledby="eliminaranuncio" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header"  style="background:#a4cb39;color:rgba(255, 255, 255, 255.255)">
        
        </div>
        <div class="modal-body">
            <h5 class="modal-title text-center" id="staticBackdropLabel" style="color:#3a3e7b"><b>¿Está seguro de eliminar esta gestión?, esta acción será irreversible.</b></h5>    
            <form wire:submit.prevent='' style= "float:right; max-width:5000px; margin-top: -7px;" class="formulario formulario-eliminar">
                @csrf
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <option></option>
                        <label for="name" style="color: #3a3e7b" data-aos="fade"><b>Nombre completo del Alumno</b></label><br>
                        <div>
                            <input class="form-control input100 rounded-pill" id="nombre" wire:model="nombres" type="text" class="validate" required>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <option></option>
                        <label for="encargado" style="color: #3a3e7b" data-aos="fade"><b>Nombre competo encargado</b></label>
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
                        <label for="celular" style="color: #3a3e7b" data-aos="fade"><b>Celular Contacto</b></label>
                        <input class="form-control me-2 input100 rounded-pill" id="celular" wire:model="telefono" type="number" class="validate" required>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <option></option>
                        <label for="correo" style="color: #3a3e7b" data-aos="fade"><b>Correo Contacto</b></label>
                        <input class="form-control me-2 input100 rounded-pill" id="correo" wire:model="email" type="email" class="validate" required>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <span class="text-black" style="font-size: 15px; color:#2e117e;" data-aos="fade">Seleccione el dia y hora agendar su inicio de admisión.</span>
                        <label for="dia_ev" style="color: #3a3e7b" data-aos="fade"><b>Dias de evaluación</b></label>           
                        <select class="form-control me-2 input100 rounded-pill" id='dia_ev'wire:model="dia_evaluacion" type="select" class="validate" required>
                          <option selected style="color: #000000"></option>
                          <option value="Martes" style="color: #000000">Martes</option>
                          <option value="Miercoles" style="color: #000000">Miercoles</option>
                          <option value="Jueves" style="color: #000000">Jueves</option>
                        </select>
                    </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <span class="text-black" style="font-size: 15px; color:#2e117e;" data-aos="fade">&nbsp;&nbsp;&nbsp;</span>    
                         <option></option>                   
                        <label for="horario_p" style="color: #3a3e7b" data-aos="fade"><b>Horarios de inicio:</b></label>           
                        <select class="form-control me-2 input100 rounded-pill" id='horario_p' wire:model="horario_evaluacion" type="select" class="validate" required>
                          <option selected style="color: #000000"></option>
                          <option value="08:00" style="color: #000000">08:00</option>
                          <option value="09:00" style="color: #000000">09:00</option>
                          <option value="10:00" style="color: #000000">10:00</option>
                          <option value="11:00" style="color: #000000">11:00</option>
                        </select>
                      </div>
                      <span class="text-black" style="font-size: 15px; color:#2e117e;" data-aos="fade">* Horario pendiente de confirmar vía correo.</span>
                       
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <option></option>
                        <label for="mensaje" style="color: #3a3e7b" data-aos="fade"><b>Observación</b></label>        
                        <textarea class="form-control me-2 input100" id="mensaje" rows="20" wire:model="mensaje" data-length="240"></textarea>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <option></option>  <option></option>
                    <input type="submit"class="btn enjoy-css input100 rounded-pill" value="Enviar">
                    <p style= "float:right; max-width:5000px; margin-top: -7px;" class="green-text" id="enviado"></p>
                </div>
                </div>
             
                </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-editb"  style="border-radius: 12px;" wire:click='eliminar_la_gestion({{$eliminar_no_gestion}})'  data-bs-dismiss="modal">Si</button>
          <button type="button" class="btn btn-secondary"  style="border-radius: 12px;"  id="info"  data-bs-dismiss="modal">No</button>
          
        </div>
      </div>
    </div>
    </div>
