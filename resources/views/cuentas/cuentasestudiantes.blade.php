<div class="card shadow rounded">
  <div class="text-center">
    <br>
    <h1 style="color: #3a3e7b"><strong>Información de Pagos</strong></h1>
    <br>
  </div>
</div>

<br>


  @isset($mensajeeliminar)
    @if($mensajeeliminar != null)
      <div  class="alert alert-success alert-dismissible fade show align-items-center" role="alert">
        <div>{{$mensajeeliminar}}
        <svg class="bi flex-shrink-0 me-2" width="10" height="10" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      </div>
    @endif
  @endisset

  @isset($mensajeeliminar1)    
    @if($mensajeeliminar1 != null)
      <div  class="alert alert-danger alert-dismissible fade show align-items-center"  role="alert">
        <div>{{$mensajeeliminar1}}
        <svg class="bi flex-shrink-0 me-2" width="10" height="10" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      </div>
    @endif
  @endisset

  @isset($mensaje3)
    @if($mensaje3 != null)
      <div  class="alert alert-success alert-dismissible fade show align-items-center" role="alert">
        <div>{{$mensaje3}}  
        <svg class="bi flex-shrink-0 me-2" width="10" height="10" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      
      </div>
      </div>
    @endif
  @endisset

  @isset($mensaje4)
    @if($mensaje4 != null)
      <div  class="alert alert-danger alert-dismissible fade show align-items-center"  role="alert">
        <div>{{$mensaje4}}
        <svg class="bi flex-shrink-0 me-2" width="10" height="10" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      </div>
    @endif
  @endisset

      <br
      ><br>

      @isset($cuentas)
      <div class="accordion-item" style="border-radius: 60px 60px 60px 60px; border-color: #3a3e7b" >
        <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  id="flush-headingOne">
          <button class="accordion-button collapsed"  style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            INFORMACIÓN SOBRE PAGOS | Visualizar tabla
              </button>
          </h2>    
          <div wire:ignore.self id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div wire:ignore.self class="accordion-body">
                <div class="table-responsive">
                    <table class="table table-light table-bordered">
                      <thead>
                          <tr>
                              <th>ALUMNO</th>
                              <th>MODALIDAD</th>
                              <th>GRADO</th>
                              <th>MES PAGO P.</th>
                              {{-- <th>FECHA DE PAGO</th>
                              <th>PAGO MÁS RECIENTE</th> --}}
                              <th>C. INSCRIPCIÓN</th>
                              <th>C. MENSUALIDAD</th>
                              {{-- <th>RECUPERACIÓN</th>
                              <th>DESCUENTO</th> --}}
                              {{-- <th>ESTADO</th> --}}
                              <th>DEBE</th>
                              <th>ACCIONES</th>
                            </tr>
                      </thead>
                          <tbody>
                            @foreach ($cuentas as $cuenta)
                              <tr>
                                    
                                <td>{{$cuenta->NOMBRE_ES}}</td>
                                <td>{{$cuenta->MODALIDAD_EST}}</td>
                                <td>{{$cuenta->GRADO}}</td>
                                <td>{{$cuenta->DESCRIPCION}}</td>
                                {{-- <td>{{$cuenta->FECHA_PAGO}}</td>
                                <td>{{$cuenta->FECHA_ULIMOPAGO}}</td> --}}
                                <td>Q. {{$cuenta->MONTO_INSCRIPCION+($cuenta->CUOTA_ANUAL)}}</td>
                                <td>Q. {{$cuenta->MONTO_MENSUAL}}</td>

                                {{-- Inscripción --}}

                                @if ($cuenta->ESTADO_CANCELADO==1)
                                  <td>Q. {{$cuenta->MONTO_MENSUAL*10+($cuenta->CUOTA_ANUAL)}}</td>   
                                  
                                  {{-- Inscripción + mensualidad --}}
                      
                                @elseif($cuenta->ESTADO_CANCELADO==2)
                                  <td>Q. {{$cuenta->MONTO_MENSUAL*9+($cuenta->CUOTA_ANUAL)}}</td>

                                  {{--Inscripción + cuota anual + mensualidad  --}}

                                @elseif($cuenta->ESTADO_CANCELADO==3)
                                  <td>Q. {{$cuenta->MONTO_MENSUAL*9}}</td>

                                  {{-- Inscripción + cuota anual --}}

                                  @elseif($cuenta->ESTADO_CANCELADO==4)
                                  <td>Q. {{$cuenta->MONTO_MENSUAL*10}}</td>  
                                  
                                @else
                                  <td>Q. {{$cuenta->MONTO_MENSUAL*10+($cuenta->MONTO_INSCRIPCION)+($cuenta->CUOTA_ANUAL)}}</td>  
                                @endif

                                {{-- <td>Q. {{$cuenta->MONTO_RECUPERACION}}</td>
                                <td>Q. {{$cuenta->MONTO_DESCUENTO}}</td> --}}

                                {{-- ESTADO --}}
                                {{-- 
                                @if($cuenta->ESTADO==1)
                                    <td>Activo</td>   
                                  @else
                                    <td>Inactivo</td>
                                @endif --}}
                              
                              <span>
                                <td>
                                  <button class="btn btn-editb" wire:click='edit({{$cuenta->ID_CUENTA}})'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                  </svg></button>        
                                
                                @include('cuentas.modaleliminar')
                            
                                  <button type="button" class="btn btn-secondary" style="border-radius: 12px;" data-bs-toggle="modal" data-bs-target="#exampleModal{{$cuenta->ID_CUENTA}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
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

  @endisset

  <br>
      <hr>
      <br>  
          <div class="accordion-item" style="border-radius: 60px 60px 60px 60px; border-color: #3a3e7b" >
            <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  id="flush-headingOne12">
              <button class="accordion-button collapsed"  style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne12" aria-expanded="false" aria-controls="flush-collapseOne">
                  FORMULARIO |  METODOS DE PAGO 
                  </button>
              </h2>    
              <div wire:ignore.self id="flush-collapseOne12" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div wire:ignore.self class="accordion-body">
                  <form row g-3 wire:submit.prevent="">
                    @csrf
                  <div class="container">
                      <div class="row">
                          <div class="col">
                            <label for="recipient-name" class="col-form-label">Alumno:</label>
                                  <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon" wire:model="preinscripcion" disabled>
                                    <option selected>Seleccionar:</option>
                                    @isset($inscripciones)
                                    @foreach ($inscripciones as $ins)
                                      <option value="{{$ins->ID_PRE}}">{{$ins->NOMBRE_ES}}</option>
                                    @endforeach              
                                  @endisset
                                  </select>
                          </div>                   
                        <div class="col">
                            <label for="recipient-name" class="col-form-label">Grado:</label>
                            <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon" wire:model="grado" disabled>
                              <option selected>Seleccionar:</option>
                              @isset($grados)
                                @foreach ($grados as $grado)
                                  <option value="{{$grado->ID_GR}}">{{$grado->GRADO}}</option>
                                @endforeach              
                              @endisset
                            </select>
                        </div>
                      <div class="col">
                          <label for="recipient-name" class="col-form-label">Mes:</label>
                          <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon" wire:model="mes" disabled>
                            <option selected>Seleccionar:</option>
                            @isset($meses)
                              @foreach ($meses as $mes)
                                <option value="{{$mes->ID_MES}}">{{$mes->DESCRIPCION}}</option>
                              @endforeach              
                            @endisset
                          </select>
                      </div>
                    </div>
                    <br>
                    <div class="container">
                      <div class="row">
                        <div class="col">
                          <label for="recipient-name" class="col-form-label">Monto de inscripción:</label>
                          <input type="number" class="form-control" wire:model='montoins' id="recipient-name" disabled readonly>
                        </div>
                        <div class="col">
                          <label for="recipient-name" class="col-form-label">Monto mensual:</label>
                          <input type="number" class="form-control" wire:model='montomen' id="recipient-name" disabled readonly>
                        </div>
                        <div class="col">
                          <label for="recipient-name" class="col-form-label">Monto de recuperación:</label>
                          <input type="number" class="form-control" wire:model='montorecu' id="recipient-name" >
                        </div>
                        <div class="col">
                          <label for="recipient-name" class="col-form-label">Monto de descuento:</label>
                          <input type="number" class="form-control" wire:model='montodes'  id="recipient-name">
                        </div>
                      </div>
                    </div>
                  
                    <br>
                    @if ($edit!=null)
                      <button class="btn btn-success" wire:click="update_montos_p()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg></button>
                    @else
                    <button class="btn btn-pre2" wire:click="guardar_cuenta()">Agregar</button>    
                    @endif
                  </form>
                </div>
              </div>
            </div>
        </div>

    