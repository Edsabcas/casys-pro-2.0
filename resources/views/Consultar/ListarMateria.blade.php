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
                <th>
                  <div class="accordion accordion-flush" id="accordion{{$relacion->ID_MATERIA}}">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading{{$relacion->ID_MATERIA}}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$relacion->ID_MATERIA}}" aria-expanded="false" aria-controls="flush-collapse{{$relacion->ID_MATERIA}}">
                                {{$relacion->NOMBRE_MATERIA}} 
                            </button>
                          </h2>
                          <div id="flush-collapse{{$relacion->ID_MATERIA}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$relacion->ID_MATERIA}}" data-bs-parent="#accordionFlush{{$relacion->ID_MATERIA}}">
                        <div class="accordion-body">
                            <strong>Tipo de materia:@if($relacion->TIPO_DE_MATERIA==1)
                                Practica
                                @else
                                    Teorica
                                @endif</strong>
                                <br>
                                <strong>Nombre Ministerial:</strong>
                                <br>
                                <strong>Codigo:</strong>
                        </div>
                        </div>
                    </div>
                    </div>
                  
              </th>
              </tr>
          @endforeach
      </tbody>
    </table>
  </div>
   


