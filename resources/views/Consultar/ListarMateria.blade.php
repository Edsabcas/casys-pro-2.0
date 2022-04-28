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
                  <li class="nav-item">
                      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities{{$relacion->ID_REL}}"
                          aria-expanded="true" aria-controls="collapseUtilities{{$relacion->ID_MATERIA}}">
                          
                          <span>{{$relacion->NOMBRE_MATERIA}}</span>
                      </a>
                   
                      <div id="collapseUtilities{{$relacion->ID_MATERIA}}" class="collapse" aria-labelledby="headingUtilities"
                          data-parent="#accordionSidebar">
                          <div class="bg-white py-2 collapse-inner rounded">
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
                  </li>
                  
              </th>
              </tr>
          @endforeach
      </tbody>
    </table>
  </div>
   


