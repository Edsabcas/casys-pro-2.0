<div class="table-responsive">
  <table class="table table-light table-bordered">
      <thead>
          <tr>
              <th>Maestro</th>
              <th>Grado Guia</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($relaciones as $relacion)
              <tr>
                <th>{{$relacion->NOMBRE_MAESTROS}}</th>
                <th>{{$relacion->NOMBRE_GRADO}}</th>

              </tr>
          @endforeach
      </tbody>
    </table>
  </div>
  
  
  