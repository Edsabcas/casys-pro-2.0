<center>
  <div class="card shadow rounded">
    <div class="card-body">
<br>
          <div class="d-grid gap-5 d-md-flex justify-content-md-center">
            <button class="btn btn-pre2" style="border-radius: 60px 60px 60px 60px;" {{-- wire:click="" --}}>Pagos Varios</button>
            <button class="btn btn-pre2" style="border-radius: 60px 60px 60px 60px;" wire:click="vista_pagos3(2)">Pagos Mensuales</button>
            <button class="btn btn-pre2" style="border-radius: 60px 60px 60px 60px;" {{-- wire:click="" --}}>Ir A Buscador De Pagos</button>
          </div>
          <br>
          <hr>
          <div class="table-responsive">
            <table class="table table-light table-bordered">
              <tbody>
                <tr>
                  <th scope="row"></th>
                  <td>ESTADO:</td>
                  <td>ACTIVO</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>CÓDIGO DE FAMILIA:</td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>SALDO DE CUOTAS MENSUALES E INSCRIPCIÓN:</td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>SALDOS DE COMPLEMENTOS:</td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>SALDO DEL CICLO 2023:</td>
                  <td></td>
                </tr>
              </tbody>
            </table></center>
          <div>
          <br>
          <br>

<center>
  <div class="card shadow rounded" >
    <div class="card-body">
        <strong><nav class="navbar navbar-light">
            <div class="container-fluid">
                    <div class="col">
                      Usuario:
                      <br>
                      Nombre:
                      <br>
                      Jornada:
                    </div>
                    <div class="col">
                      Grado:
                      <br>
                      Sección:
                    </div>
            </div>
        </nav> </strong>
              <br>
              
            <hr>
            <br>

          <div class="d-grid gap-5 d-md-flex justify-content-md-center">
            <button class="btn btn-pre2" style="border-radius: 60px 60px 60px 60px;" {{-- wire:click="" --}}>Programa anual de pagos</button>
            <button class="btn btn-pre2" style="border-radius: 60px 60px 60px 60px;" {{-- wire:click="" --}}>Estado de cuenta del almuno</button>
            <button class="btn btn-pre2" style="border-radius: 60px 60px 60px 60px;" {{-- wire:click="" --}}>Estado de cuenta de la familia</button>
          </div>
            <br>
        <div class="table-responsive">
            <br>
              <div class="card text-center">
                <div class="card-header">
                  <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="true" href="#">Emitidos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Anulados</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" >Comentarios</a>
                    </li>
                  </ul>
              
                  <br>
                  <center><h4 style="color: #3a3e7b"><strong>RECIBOS VARIOS EMITIDOS</strong></h4></center>
                  <br>
                  <table class="table table-light table-bordered">
                      <thead>
                      <tr>
                          <th>No.</th>
                          <th>Recibo</th>
                          <th>Recibo Colegio</th>           
                          <th>Docu No.</th>
                          <th>Tipo de pago</th>
                          <th>Descripción</th>
                          <th>Observación</th>
                          <th>Fecha de Pago</th>
                          <th>Fecha de Sistema</th>           
                          <th>Precio</th>
                          <th>Mora</th>
                          <th>Subtotal</th>
                          <th>Estado</th>
                      </tr>
                      </thead>
                      <tbody>
                      </tbody>
                  </table>
                </div>
              </div>
          </div>
    </div>
  </div>
</center>
