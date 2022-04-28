<div class="table-responsive">
    <table class="table table-info  table-striped table-hover table-bordered">
      <thead>
          <tr>
              <th>ID</th>

              <th>Grados</th>
              <th>Secciones</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($relaciones as $relacion)
              <tr>

                <th>{{$relacion->ID_REL}}</th>
                <th>{{$relacion->GRADO}}</th>
                <th>{{$relacion->SECCION}}</th>
                  

              </tr>
          @endforeach
      </tbody>
    </table>
  </div>
