<div class="table-responsive">
    <table class="table table-info  table-striped table-hover table-bordered">
      <thead>
          <tr>
              <th>Materia</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($relaciones as $relacion)
              <tr>
                <th><div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            {{$relacion->NOMBRE_MATERIA}}
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                          <strong>Tipo de materia:@if($relacion->TIPO_DE_MATERIA==1)
                            Practica   
                            @else
                                Teorica
                            @endif</strong>
                          <br>
                          <strong>Nombre por Mineduc:</strong>
                          <br>
                          <strong>Codigo:</strong></div>
                      </div>
                    </div>
                  </div></th>
              </tr>
          @endforeach
      </tbody>
    </table>
  </div>
   