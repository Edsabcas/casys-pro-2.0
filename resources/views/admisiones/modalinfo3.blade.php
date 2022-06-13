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
                   
                   <div  wire:ignore.self id="panelsStayOpen-datosvarios" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
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
                   
                   <div  wire:ignore.self id="panelsStayOpen-padre" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                     <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
                       <div class="tab">
                         <div class="row">
                             <div class="col-md-6">
                                 <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el nombre del padre</label></strong>
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
                                 <strong><label  for="Labelnombrepadre" class="form-label">Ingrese la fecha de nacimiento del padre</label></strong>
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
                                 <strong><label  for="Labelnombrepadre" class="form-label">Ingrese la nacionalidad del padre</label></strong>
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
                                 <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el lugar de nacimiento del padre</label></strong>
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
                                 <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el estado civil del padre</label></strong>
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
                                 <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el número de DPI del padre</label></strong>
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
                                 <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el número de celular del padre</label></strong>
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
                                 <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el número de casa del padre</label></strong>
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
                                 <strong><label  for="Labelnombrepadre" class="form-label">Ingrese la dirección de la residencia del padre</label></strong>
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
                                 <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el correo electrónico del padre</label></strong>
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
                                 <strong><label  for="Labelprofesionpadre" class="form-label">Ingrese la profesion del padre</label></strong>
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
                                 <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el lugar de trabajo del padre</label></strong>
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
                                 <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el cargo de trabajo que ocupa el padre</label></strong>
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
                                 <strong><label  for="Labelnombrepadre" class="form-label">Ingrese la religion que profesa el padre</label></strong>
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
                                 <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el NIT del padre(por favor no utilice ningun signo solo ingerese números)</label></strong>
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
               <div  wire:ignore.self id="panelsStayOpen-madre" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                 <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
                   <div class="tab">
                     <div class="row">
                     <div class="col-md-6">
                       <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el nombre de la madre</label></strong>
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
                       <strong><label  for="Labelnombrepadre" class="form-label">Ingrese la fecha de nacimiento de la madre</label></strong>
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
                       <strong><label  for="Labelnombrepadre" class="form-label">Ingrese la nacionalidad de la madre</label></strong>
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
                       <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el lugar de nacimiento de la madre</label></strong>
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
                           <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el estado civil de la madre</label></strong>
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
                     <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el DPI de la madre</label></strong>
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
                     <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el telefono de la madre</label></strong>
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
                     <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el celular de la madre</label></strong>
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
                     <strong><label  for="Labelnombremadre" class="form-label">Ingrese la dirección de la residencia de la madre</label></strong>
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
                     <strong><label  for="Labelnombremadre" class="form-label">Ingrese el correo electrónico de la madre</label></strong>
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
                     <strong><label  for="Labelnombremadre" class="form-label">Ingrese la profesión a la que se decica la madre <label></strong>
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
                     <strong><label  for="Labelnombremadre" class="form-label">Ingrese el lugar donde la madre ejerce su profesion <label></strong>
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
                     <strong><label  for="Labelnombremadre" class="form-label">Ingrese el NIT de la madre(por favor no utilice ningun signo solo ingerese números)<label></strong>
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
 
   <div wire:ignore.self class="accordion" id="accordiondatosmedicos">
     <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
       <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOnedatosmedicos  ">
         <button class="accordion-button" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-medicos" aria-expanded="true" aria-controls="panelsStayOpen-medicos">
           <h4 class="font-weight-bolder">
             DATOS MEDICOS
           </h4>
         </button>
       </h2>
             
       <div wire:ignore.self id="panelsStayOpen-medicos" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
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
                     <strong><label  for="Labelnombreaseguradora" class="form-label">Ingrese el nombre de la aseguradora</label></strong>
                       <input  type="text" class="form-control"  wire:model="nombre_aseguradora">
                   </div>
                 </center>
                   @endif
 
           </div>
 
               
       <div class="row">
         <div class="col-md-6">
           <strong><label  for="Labelpoliza" class="form-label">Ingrese la poliza de seguro</label></strong>
             <input  type="text" class="form-control"  wire:model="poliza">
         </div>
                   
         <div class="col-md-6">
             <strong><label  for="Labelcarneseguro" class="form-label">Ingrese el número del carné de seguro</label></strong>
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
           <button class="accordion-button" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-salida" aria-expanded="true" aria-controls="panelsStayOpen-salida">
             <h4 class="font-weight-bolder">
             DATOS DE SALIDA
             </h4>
           </button>
         </h2>
 
         <div  wire:ignore.self id="panelsStayOpen-salida" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
           <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
             <div class="tab">
               <strong><label for="exampleInputPassword1" class="form-label">¿El alumno se retira solo?</label></strong>
                 <center>
             <div style="width: 12rem;">
             <div class="form-check">
               <input class="form-check-input" type="radio" wire:model="solo_alumno" id="solo1" value="1" wire:click="solo_alumno('1')">
                 <label class="form-check-label" for="solo1">
                  Si
                 </label>
             </div>
             <div class="form-check">
             <input class="form-check-input" type="radio" wire:model="solo_alumno" id="solo2" value="0" wire:click="solo_alumno('0')">
               <label class="form-check-label" for="solo1">
                 No
               </label>
             </div>
             </center>
           </div>
 
             <div class="tab">
               <strong><label for="exampleInputPassword1" class="form-label">¿El alumno se retira con un encargado?</label></strong>
               <center>
               <div style="width: 12rem;">
               <div class="form-check">
                   <input class="form-check-input" type="radio" wire:model="encargado_alumno" id="encargado1" value="1" wire:click="encargado_alumno('1')">
                   <label class="form-check-label" for="encargado1">
                     Si
                   </label>
                 </div>
                 <div class="form-check">
                   <input class="form-check-input" type="radio" wire:model="encargado_alumno" id="encargado2" value="0" wire:click="encargado_alumno('0')">
                   <label class="form-check-label" for="encargado1">
                     No
                   </label>
                 </div>
               </div>
            </center>
            @if($encargado_alumno==1)
            <center>
           <div class="col-md-6">
             <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el nombre del encargado</label></strong>
             <input  type="text" class="form-control"  wire:model="nombreencargado">
           </div>
          </center>
           @endif
           
           </div>
 
           <div class="tab">
             <strong><label for="exampleInputPassword1" class="form-label">¿El alumno se retira en bus del colegio?</label></strong>
             <center>
             <div style="width: 12rem;">
             <div class="form-check">
                 <input class="form-check-input" type="radio" wire:model="bus_colegio" id="buscolegio1" value="1" wire:click="bus_colegio('1')">
                 <label class="form-check-label" for="buscolegio1">
                   Si
                 </label>
               </div>
               <div class="form-check">
                 <input class="form-check-input" type="radio" wire:model="bus_colegio" id="buscolegio2" value="0" wire:click="bus_colegio('0')">
                 <label class="form-check-label" for="buscolegio1">
                   No
                 </label>
               </div>
             </div>
         </center>
         </div>
 
         <div class="tab">
           <strong><label for="exampleInputPassword1" class="form-label">¿El alumno se retira en bus ajeno al colegio?</label></strong>
           <center>
           <div style="width: 12rem;">
           <div class="form-check">
               <input class="form-check-input" type="radio" wire:model="bus_no_colegio" id="busnocolegio1" value="1" wire:click="bus_no_colegio('1')">
               <label class="form-check-label" for="busnocolegio1">
                 Si
               </label>
           </div>
             <div class="form-check">
               <input class="form-check-input" type="radio" wire:model="bus_no_colegio" id="busnocolegio2" value="0" wire:click="bus_no_colegio('0')">
               <label class="form-check-label" for="busnocolegio1">
                 No
               </label>
             </div>
           </div>
           </center>
         </div>
         </div>
         </div>
   </div>
 
 </div>
 
 <br>
   <div wire:ignore.self class="accordion" id="accordionDatosusuarios">
       <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
         <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOnedatosusuarios">
           <button class="accordion-button" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-usuario" aria-expanded="true" aria-controls="panelsStayOpen-usuario">
               <h4 class="font-weight-bolder">
                   DATOS DE USUARIOS
                 </h4>
               </button>
         </h2>
 
         <div  wire:ignore.self id="panelsStayOpen-usuario" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
         <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
         <div class="row">
           <div class="col-md-6">
               <strong><label  for="Labelcodigodefamilia" class="form-label">Ingrese el codigo de familia</label></strong>
               <input  type="text" class="form-control"  wire:model="codigo_fam">
             </div>
             @error('codigo_fam')
             <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
               <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
               <div>
                   Es necesario que llenes este campo para envíar la información
               </div>
             </div>
             @enderror
 
           <div class="col-md-6">
               <strong><label  for="Labelnombrefam" class="form-label">Ingrese el nombre de la familia</label></strong>
               <input  type="text" class="form-control"  wire:model="nombre_fam">
             </div>
             @error('nombre_fam')
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
 
 
       </form>


            </div>        
        </div>
        <div class="modal-footer">
          <a  id="valestado4" wire:click="cambio_estado(4)" type="button" style="border-radius: 60px 60px 60px 60px;" class="btn btn-success" data-bs-dismiss="modal">Reg. Estado</a>
              
            <a  id="valestado4" wire:click="cambio_estado(5)" type="button" style="border-radius: 60px 60px 60px 60px;" class="btn btn-warning" data-bs-dismiss="modal">Sig. Estado</a>

            <a  type="button"  wire:click="update_datos_ins()" style="border-radius: 60px 60px 60px 60px;" class="btn btn-primary" >Actualizar</a>
    
        </div>
      </div>
    </div>
  </div>     
   @include('admisiones.codmineduc')