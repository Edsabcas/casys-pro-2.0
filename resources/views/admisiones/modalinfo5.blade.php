<div wire:ignore.self id="infodata5" style="border-radius: 60px 60px 60px 60px;" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="infodata5" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-center" style="background:#a4cb39;color:rgb(255, 255, 255)">
          <h3 class="modal-title text-center" style="color:rgb(255, 255, 255)" >Proceso de Contrato</h3>
          <button type="button" class="btn btn-close btn-warning" style="color:rgb(255, 255, 255)"  data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <div class="container-sm">
              <h4 class="form-label text text-center" style="font-size:25px">Gestión: #{{$id_gest}}
              
              </h4> 
              <form action="/update_diaco" method="POST" wire:submit.prevent=''>
                @csrf
              <input type="hidden" value='{{$id_pre}}' wire:model='id_pre'>
              
              <div wire:ignore.self class="accordion" id="accordioncontratodiaco">
                <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
                  <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOnecontratodiaco">
                    <button class="accordion-button" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-usuario" aria-expanded="true" aria-controls="panelsStayOpen-usuario">
                        <h4 class="font-weight-bolder">
                            CONTRATO DIACO
                          </h4>
                        </button>
                  </h2>
          
                  <div  wire:ignore.self id="panelsStayOpen-usuario" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                  <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
                  @foreach ($diaco as $dia)
                  <div class="row">
                    
                    @php
                    $foo = 0;
                    $vid = 0;
                    $pdf = 0;
                     
                     if(strpos($dia->CONTRATO, '.pdf' ) !== false)
                     {$pdf=1;}
              @endphp
               @if($pdf==1)
               <iframe style="width: 49rem; text-align:center" width="400" height="400" src="docs_con_reg\{{$dia->CONTRATO}}" frameborder="0"></iframe>
               @endif
               
                    
                </div>
                @endforeach
            </div>
            </div>
          </div>
          </div>

              </form>
            </div>        
        </div>
        <div class="modal-footer">
          @if($estado_pre_boton==6)
          <a  id="valestado" wire:click="cambio_estado(5)" type="button" style="border-radius: 60px 60px 60px 60px;" class="btn btn-pre2" data-bs-dismiss="modal">Reg. Estado</a>
              
            <a  id="valestado" wire:click="cambio_estado(7)" type="button" style="border-radius: 60px 60px 60px 60px;" class="btn btn-warning" data-bs-dismiss="modal">Sig. Estado</a>

            <a  type="button"  wire:click="update_diaco()" style="border-radius: 60px 60px 60px 60px;" class="btn btn-editb" >Actualizar</a>
            
            @elseif($estado_pre_boton==5)
            <a  id="valestado" wire:click="cambio_estado(4)" type="button" style="border-radius: 60px 60px 60px 60px;" class="btn btn-pre2" data-bs-dismiss="modal">Reg. Estado</a>
              
            <a  id="valestado" wire:click="cambio_estado(6)" type="button" style="border-radius: 60px 60px 60px 60px;" class="btn btn-warning" data-bs-dismiss="modal">Sig. Estado</a>

            <a  type="button"  wire:click="update_diaco()" style="border-radius: 60px 60px 60px 60px;" class="btn btn-editb" >Actualizar</a>
          @endif
          
        </div>
        
      </div>
    </div>
  </div>     
   @include('admisiones.codmineduc')