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
                        <div class="mb-3">
                            <label for="floatingInput">Pre-inscripción::</label>
                            <input type="text" class="form-control" id="floatingInput"  wire:model="preinscripcion" required>
                        </div>
                    </div>                   
                    <div class="col">
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nivel académico:</label>
                        <input type="text" class="form-control" wire:model='nvlacademico' id="recipient-name">
                      </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Grado:</label>
                          <input type="text" class="form-control" wire:model='grado' id="recipient-name">
                        </div>
                      </div>
                      <div class="col">
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Mes:</label>
                          <input type="text" class="form-control" wire:model='mes' id="recipient-name">
                        </div>
                      </div>
                      <div class="col">
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Fecha de pago:</label>
                          <input type="text" class="form-control" wire:model='fpago' id="recipient-name">
                        </div>
                      </div>
                      <div class="col">
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Pago más reciente:</label>
                          <input type="text" class="form-control" wire:model='pagor' id="recipient-name">
                        </div>
                      </div>
                      <div class="col">
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Monto de inscripción:</label>
                          <input type="text" class="form-control" wire:model='montoins' id="recipient-name">
                        </div>
                      </div>
                      <div class="col">
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Monto de recuperación:</label>
                          <input type="text" class="form-control" wire:model='montorecu' id="recipient-name">
                        </div>
                      </div>
                      <div class="col">
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Monto mensual:</label>
                          <input type="text" class="form-control" wire:model='montomen' id="recipient-name">
                        </div>
                      </div>
                      <div class="col">
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Monto de descuento:</label>
                          <input type="text" class="form-control" wire:model='' id="recipient-name">
                        </div>
                      </div>
                </div>
              </form>

  @isset($cuentas)
  <div class="card shadow rounded">
    <div class="accordion accordion-flush rounded" id="accordionFlushExample">
      <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
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
                    <th>NO.</th>
                    <th>PRE-INSCRIPCIÓN</th>
                    <th>NIVEL ACADÉMICO</th>
                    <th>GRADO</th>
                    <th>MES</th>
                    <th>FECHA DE PAGO</th>
                    <th>PAGO MÁS RECIENTE</th>
                    <th>MONTO DE INSCRIPCIÓN</th>
                    <th>MONTO DE RECUPERACIÓN</th>
                    <th>MONTO MENSUAL</th>
                    <th>MONTO DE DESCUENTO</th>
                    <th>ESTADO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cuentas as $cuenta)
                    <tr>
                        <td>{{$cuenta->ID_CUENTA}}</td>
                        <td>{{$cuenta->ID_PRE}}</td>
                        <td>{{$cuenta->ID_NVL}}</td>
                        <td>{{$cuenta->ID_GR}}</td>
                        <td>{{$cuenta->ID_MES}}</td>
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
                @endforeach
            </tbody>
        </table>
    </div>

    @endisset