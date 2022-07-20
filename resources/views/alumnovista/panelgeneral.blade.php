<div>
  <center>
    <p style="color:#3a3e7b; font-size:30px"class="text-center"><strong>Panel de supervisión de <i>{{$nombre_panel}}</i></strong></p>
  </center>
</div>
<br>
<hr>
<div class="row">
    <div class="col-xl-4 col-sm-7 col-13 mb-5">
      <div class="card shadow rounded">
        <div class="card-body">
          <div class="text-center">
            <div class="align-self-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="color: #5ab507" class="bi bi-card-heading" viewBox="0 0 16 16">
                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z"/>
              </svg>
              <br>
            <a href="/Vista_Anuncios_Alumno" style="color: #000000"><strong>Anuncios {{Session::get('id_alumno_supervisado')}}</strong></a>
            </div>
          </div>
        <br>
        </div>
      </div>
    </div>
    <!-- Calificaciones -->
    <div class="col-xl-4 col-sm-7 col-13 mb-5">
      <div class="card shadow rounded">
        <div class="card-body">
          <div class="text-center">
            <div class="align-self-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="color: #5ab507" class="bi bi-card-checklist" viewBox="0 0 16 16">
                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
              </svg>
              <br>
            <a href="/Vista_Calificaiones" style="color: #000000"><strong>Calificaciones</strong></a>
            </div>
          </div>
        <br>
        </div>
      </div>
    </div>
    <!-- Calendario -->
    <div class="col-xl-4 col-sm-7 col-13 mb-5">
      <div class="card shadow rounded">
        <div class="card-body">
          <div class="text-center">
            <div class="align-self-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="color: #5ab507" class="bi bi-calendar2-date-fill" viewBox="0 0 16 16">
                <path d="M9.402 10.246c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2z"/>
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zm9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5zm-4.118 9.79c1.258 0 2-1.067 2-2.872 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684c.047.64.594 1.406 1.703 1.406zm-2.89-5.435h-.633A12.6 12.6 0 0 0 4.5 8.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675V7.354z"/>
              </svg>
              <br>
            <a href="/Vista_Calendario" style="color: #000000"><strong>Calendario</strong></a>
            </div>
          </div>
        <br>
        </div>
      </div>
    </div>
    <!-- Reportes -->
    <div class="col-xl-4 col-sm-7 col-13 mb-5">
      <div class="card shadow rounded">
        <div class="card-body">
          <div class="text-center">
            <div class="align-self-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="color: #5ab507" class="bi bi-clipboard" viewBox="0 0 16 16">
                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
              </svg>
              <br>
            <a href="/Vista_Reportes" style="color: #000000"><strong>Reportes</strong></a>
            </div>
          </div>
        <br>
        </div>
      </div>
    </div>
    <!-- Reportes -->
    <div class="col-xl-4 col-sm-7 col-13 mb-5">
      <div class="card shadow rounded">
        <div class="card-body">
          <div class="text-center">
            <div class="align-self-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="color: #5ab507" class="bi bi-card-heading" viewBox="0 0 16 16">
                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z"/>
              </svg>
              <br>
            <a href="/Vista_Pagos" style="color: #000000"><strong>Pagos</strong></a>
            </div>
          </div>
        <br>
        </div>
      </div>
    </div>
  </div>