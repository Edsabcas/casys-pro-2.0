<div class="table-responsive">
    <table class="table table-success table-striped table-bordered">
      <thead>
          <tr>
              <th>Materia</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($materias as $materia)
              <tr>
                <th>
                  <div class="accordion accordion-flush" id="accordion{{$materia->ID_MATERIA}}">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading{{$materia->ID_MATERIA}}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$materia->ID_MATERIA}}" aria-expanded="false" aria-controls="flush-collapse{{$materia->ID_MATERIA}}">
                                {{$materia->NOMBRE_MATERIA}} 
                            </button>
                          </h2>
                          <div id="flush-collapse{{$materia->ID_MATERIA}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$materia->ID_MATERIA}}" data-bs-parent="#accordionFlush{{$materia->ID_MATERIA}}">
                        <div class="accordion-body">
                            <strong>Tipo de materia:@if($materia->TIPO_DE_MATERIA==1)
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
   


