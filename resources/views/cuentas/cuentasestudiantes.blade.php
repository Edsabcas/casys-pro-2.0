<div class="card shadow rounded">
    <div class="text-center">
      <br>
      <h1 style="color: #3a3e7b"><strong>Información de Pagos</strong></h1>
      <br>
    </div>
  </div>
        <br><br>

          <form row g-3 wire:submit.prevent="">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col">
                      <label for="recipient-name" class="col-form-label">Pre-inscripción::</label>
                            <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon" wire:model="preinscripcion">
                              <option selected>Seleccionar:</option>
                              @isset($inscripciones)
                              @foreach ($inscripciones as $ins)
                                <option value="{{$ins->ID_PRE}}">{{$ins->NOMBRE_ES}}</option>
                              @endforeach              
                            @endisset
                            </select>
                    </div>                   
                    <div class="col">
                        <label for="recipient-name" class="col-form-label">Nivel académico:</label>
                        <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon" wire:model="nvlacademico">
                          <option selected>Seleccionar:</option>
                          @isset($academicos)
                          @foreach ($academicos as $academico)
                            <option value="{{$academico->ID_NVL}}">{{$academico->NIVEL_ACADEMICO}}</option>
                          @endforeach              
                        @endisset
                        </select>
                    </div>
                  <div class="col">
                      <label for="recipient-name" class="col-form-label">Grado:</label>
                      <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon" wire:model="grado">
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
                    <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon" wire:model="mes">
                      <option selected>Seleccionar:</option>
                      @isset($meses)
                        @foreach ($meses as $mes)
                          <option value="{{$mes->ID_MES}}">{{$mes->DESCRIPCION}}</option>
                        @endforeach              
                      @endisset
                    </select>
                </div>
              </div>
            </div>
            <br>
            <div class="container">
              <div class="row">
                <div class="col">
                  <label for="recipient-name" class="col-form-label">Fecha de pago:</label>
                  <input type="date" class="form-control" wire:model='fpago' id="recipient-name">
                </div>

                <div class="col">
                  <label for="recipient-name" class="col-form-label"> Fecha del pago más reciente:</label>
                  <input type="date" class="form-control" wire:model='pagor' id="recipient-name">
                </div>
              </div>
            </div>
            <br>
            <div class="container">
              <div class="row">
                <div class="col">
                  <label for="recipient-name" class="col-form-label">Monto de inscripción:</label>
                  <input type="number" class="form-control" wire:model='montoins' id="recipient-name">
                </div>
                <div class="col">
                  <label for="recipient-name" class="col-form-label">Monto mensual:</label>
                  <input type="number" class="form-control" wire:model='montomen' id="recipient-name">
                </div>
                <div class="col">
                  <label for="recipient-name" class="col-form-label">Monto de recuperación:</label>
                  <input type="number" class="form-control" wire:model='montorecu' id="recipient-name">
                </div>
                <div class="col">
                  <label for="recipient-name" class="col-form-label">Monto de descuento:</label>
                  <input type="number" class="form-control" wire:model='montodes' id="recipient-name">
                </div>
              </div>
            </div>
            <br>
            <button class="btn btn-pre2" wire:click="guardar_cuenta()">Agregar</button>    

          </form>

          <br>
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
                              <th>NO. GESTION</th>
                              <th>PRE-INSCRIPCIÓN</th>
                              <th>NIVEL ACADÉMICO</th>
                              <th>GRADO</th>
                              <th>MES</th>
                              <th>FECHA DE PAGO</th>
                              <th>PAGO MÁS RECIENTE</th>
                              <th>MONTO DE INSCRIPCIÓN</th>
                              <th>MONTO MENSUAL</th>
                              <th>MONTO DE RECUPERACIÓN</th>
                              <th>MONTO DE DESCUENTO</th>
                              <th>ESTADO</th>
                          </tr>
                      </thead>
                          <tbody>
                            @foreach ($cuentas as $cuenta)
                              <tr>
                                @foreach($inscripciones as $inscrip)
                                  @if($cuenta->ID_PRE==$inscrip->ID_PRE)
                                    <td>#{{$inscrip->NO_GESTION}}</td>
                                  @endif
                                @endforeach
                                @foreach($inscripciones as $inscrip)
                                  @if($cuenta->ID_PRE==$inscrip->ID_PRE)
                                    <td>{{$inscrip->NOMBRE_ES}}</td>
                                  @endif
                                @endforeach
                                @foreach($academicos as $academico)
                                  @if($cuenta->ID_NVL==$academico->ID_NVL)
                                    <td>{{$academico->NIVEL_ACADEMICO}}</td>
                                  @endif
                                @endforeach
                                @foreach($grados as $grado)
                                  @if($cuenta->ID_GR==$grado->ID_GR)
                                    <td>{{$grado->GRADO}}</td>
                                  @endif
                                @endforeach
                                @foreach($meses as $mes)
                                  @if($cuenta->ID_MES==$mes->ID_MES)
                                    <td>{{$mes->DESCRIPCION}}</td>
                                  @endif
                                @endforeach
                                <td>{{$cuenta->FECHA_PAGO}}</td>
                                <td>{{$cuenta->FECHA_ULIMOPAGO}}</td>
                                <td>{{$cuenta->MONTO_INSCRIPCION}}</td>
                                <td>{{$cuenta->MONTO_RECUPERACION}}</td>
                                <td>{{$cuenta->MONTO_MENSUAL}}</td>
                                <td>{{$cuenta->MONTO_DESCUENTO}}</td>
                                @if($cuenta->ESTADO==1)
                                    <td>Activo</td>   
                                  @else
                                    <td>Inactivo</td>
                                @endif
                              </tr>
                            @endforeach
                          </tbody>
                    </table>
                </div>
            </div>
          </div>
      </div>

    @endisset