<div class="table-responsive">
  <table class="table table-light table-bordered">
    <thead>
        <tr>
            <th>Maestro</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($relaciones as $relacion)
            <tr>
              <th><div class="accordion accordion-flush" id="accordion{{$relacion->ID_DOCENTE}}">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-heading{{$relacion->ID_DOCENTE}}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$relacion->ID_DOCENTE}}" aria-expanded="false" aria-controls="flush-collapse{{$relacion->ID_DOCENTE}}">
                      {{$relacion->NOMBRE_DOCENTE}}
                    </button>
                  </h2>
                  <div id="flush-collapse{{$relacion->ID_DOCENTE}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$relacion->ID_DOCENTE}}" data-bs-parent="#accordionFlush{{$relacion->ID_DOCENTE}}">
                    <div class="accordion-body">
                          <strong>DPI:{{$relacion->DPI}}</strong>
                          <br>
                          <strong>Telefono:{{$relacion->TELEFONO}}</strong>
                          <br>
                          <strong>Correo:{{$relacion->CORREO}}</strong>
                    </div>
                  </div>
                </div>
              </div></th>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>


