<div  wire:ignore.self class="modal fade" id="asignarseccion" data-bs-toggle="modal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" tabindex="-1" aria-labelledby="asignarseccion" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header"  style="background:#a4cb39;color:rgba(255, 255, 255, 255.255)">
        
        </div>
        <div class="modal-body">
            <h5 class="modal-title text-center" id="staticBackdropLabel" style="color:#3a3e7b"><b>Asignar sección al alumno.</b></h5> 
            @foreach($estudianteeditar as $estueditar)
            <div class="row">
                <div class="col-md-6">
                    <p><Strong>Nombre:</Strong> {{$estueditar->NOMBRE}}</p>
                </div>
                <div class="col-md-6">
                    <p><Strong>CUI:</Strong> {{$estueditar->CUI}}</p>
                </div>
            </div> 
            <div class="row">
                <div class="col-md-6">
                    <p><Strong>Código personal:</Strong> {{$estueditar->CODIGO_PERSONAL}}</p>
                </div>
                @foreach($grados as $grado)
                  @if($estueditar->GRADO_INGRESO == $grado->ID_GR)
                  <div class="col-md-6">
                    <p><Strong>Grado Ingreso:</Strong> {{$grado->GRADO}}</p>
                 </div>
                  @endif
                  @endforeach
                
            </div> 
            @endforeach  

            <form wire:submit.prevent="" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="" class="form-label" style="font-size:20px; color: #3a3e7b"><strong>• Sección a la cuál el alumno será asignado</strong></label>
                    <select class="form-select rounded-pill shadow-sm rounded" style="border-radius: 70px 70px 70px 70px; border-color: #a4cb39" aria-label="Default select example" wire:model="seccion_asig">
                      <option selected>Elija la sección a la cuál el alumno será asignado:</option>
                      @isset($secciones)
                      @foreach($secciones as $seccion)
                      <option value="{{$seccion->ID_SC}}">{{$seccion->SECCION}}</option>
                      @endforeach
                      @endisset
            
                    </select>
                  </div>
            </form>
            
           
        </div>
        <div class="modal-footer">
            
          <button type="submit" class="btn btn-editb"  style="border-radius: 12px;" wire:click="asignar_seccion()"  data-bs-dismiss="modal">Asignar</button>
          <button type="button" class="btn btn-secondary"  style="border-radius: 12px;"  data-bs-dismiss="modal">No asignar</button>
          
        </div>
      </div>
    </div>
    </div>