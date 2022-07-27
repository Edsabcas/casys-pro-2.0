<center>
<div class="card" style="width: 40rem;">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-light table-bordered">
                <thead>
                <tr>
                    <th>ESTADO</th>                   
                    <th>ACTIVO</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">CÓDIGO DE FAMILIA:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th scope="row">SALDO DE CUOTAS MENSAULES E INSCRIPCIÓN:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th scope="row">SALDO DE COMPLEMENTOS:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th scope="row">SALDO DEL CICLO 2023:</th>
                        <th></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</center>


<div class="card" style="width: 69rem;">
    <div class="card-body">
        <nav class="navbar navbar-light">
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
        </nav>
              <br>
                <center>
                    <button class="btn btn-pre2" style="border-radius: 60px 60px 60px 60px;" {{-- wire:click="" --}}>Pagos Varios</button>
                    <button class="btn btn-pre2" style="border-radius: 60px 60px 60px 60px;" wire:click="vista_pagos3(2)">Pagos Mensuales</button>
                    <button class="btn btn-pre2" style="border-radius: 60px 60px 60px 60px;" {{-- wire:click="" --}}>Ir A Buscador De Pagos</button>
                </center>
            
            <hr>
            <br>


            <button class="btn btn-pre2" style="border-radius: 60px 60px 60px 60px;" {{-- wire:click="" --}}>Programa anual de pagos</button>
            <button class="btn btn-pre2" style="border-radius: 60px 60px 60px 60px;" {{-- wire:click="" --}}>Estado de cuenta del almuno</button>
            <button class="btn btn-pre2" style="border-radius: 60px 60px 60px 60px;" {{-- wire:click="" --}}>Estado de cuenta de la familia</button>
            <br>
        <div class="table-responsive">
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


