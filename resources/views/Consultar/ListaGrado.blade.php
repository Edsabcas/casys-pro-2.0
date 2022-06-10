<div class="table-responsive">
  <table class="table table-light table-bordered">
      <thead>
          <tr>
              <th>Grados consultados</th>

              
          </tr>
      </thead>
      <tbody>
        @foreach($asignaciones as $asignacion)
              <tr>

                <th>
                  <div class="accordion accordion-flush" id="accordion{{$asignacion->ID_GR}}">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-heading{{$asignacion->ID_GR}}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$asignacion->ID_GR}}" aria-expanded="false" aria-controls="flush-collapse{{$asignacion->ID_GR}}">
                          {{$asignacion->GRADO}} {{$asignacion->SECCION}}
                        </button>
                      </h2>
                      <div id="flush-collapse{{$asignacion->ID_GR}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$asignacion->ID_GR}}" data-bs-parent="#accordionFlush{{$asignacion->ID_GR}}">
                        <div class="accordion-body">
                          
                         
                          <strong>Alumnos: {{$asignacion->TB_INFO_NOMBRE}}</strong>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </th>

              </tr>
              
      </tbody>
    </table>
  </div>
