<div>
    <div class="card">
        <form wire:submit.prevent='' class="row g-3 needs-validation" novalidate>
            <br>
            <h5 class="card-title text-center">AGREGAR PRECIOS</h5>
            <div class="col-md-5">
                <label for="validationCustom01" class="form-label">Grado</label>
                <select class="form-select" id="validationCustom01" wire:model="id_grado" required>
                  <option selected value="">Grados...</option>
                   @foreach($tb_grados as $grado)
                   <option value="{{$grado->ID_GR}}">{{$grado->GRADO}}</option>
                   @endforeach      
                </select>
                @error('id_grado')
                <div class="alert alert-danger" role="alert">
                    Seleccionar un grado
                  </div>
              @enderror
            </div>
              <div class="col-md-5">
                <label for="validationCustom04" class="form-label">Tipo de Pago</label>
                <select class="form-select" id="validationCustom04"  wire:model="id_pro" required>
                  <option selected  value="">Tipo...</option>
                   @foreach($tb_procesos as $tb_proceso)
                   <option value="{{$tb_proceso->ID_PROCESO_P}}">{{$tb_proceso->DESCRIPCION}}</option>
                   @endforeach      
                </select>
                @error('id_pro')
                <div class="alert alert-danger" role="alert">
                    Seleccionar un tipo
                  </div>
                @enderror
              </div>
            <div class="col-md-5">
              <label for="validationCustom03" class="form-label">Monto Q.</label>
              <input type="number" class="form-control" wire:model="monto" id="validationCustom03" required>
              @error('monto')
              <div class="alert alert-danger" role="alert">
                Ingrese un monto
              </div>
              @enderror
            </div>
                <button class="btn btn-success" wire:click="validar()">Guardar</button>
          </form>

          @if($mensaje!=null and $mensaje==1)
          <div class="alert alert-success" role="alert">
           Insertado Correctamente.
          </div>
          @endif
          @if($mensaje1!=null and $mensaje1==1)
          <div class="alert alert-danger" role="alert">
           No fue posible insertar.
          </div>
          @endif
    </div>
    <br>
    <hr>
    <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Precios Grados</h5>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Grado</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Accion</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($tb_precios_g as $tb_precios)
                  <tr>
                    <th scope="row">{{$tb_precios->ID_GRADO}}</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Precios Inscripción</h5>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Grado</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Accion</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($tb_precios_ins as $tb_precios_in)
                  <tr>
                    <th scope="row">{{$tb_precios_in->ID_GRADO}}</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <br>
      <div class="card text-center">
        <div class="card-header">
            <h5 class="card-title text-center">  Precios Recuperación</h5>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Grado</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Accion</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($tb_precios_rec as $tb_precios_re)
                  <tr>
                    <th scope="row">{{$tb_precios_re->ID_GRADO}}</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
      </div>
</div>