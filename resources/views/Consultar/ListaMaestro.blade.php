<div class="table-responsive">
  <table class="table table-info  table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>Maestro</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($relaciones as $relacion)
            <tr>
              <th><div class="accordion" id="ID_MAESTROS">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      {{$relacion->NOMBRE_MAESTROS}}
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                          <strong>DPI:</strong>
                          <br>
                          <strong>Telefono:</strong>
                          <br>
                          <strong>Correo:</strong>
                    </div>
                  </div>
                </div>
              </div></th>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>


