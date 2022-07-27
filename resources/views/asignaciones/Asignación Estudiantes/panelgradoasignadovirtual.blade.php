<style>
  ul.breadcrumbs {
    margin: 25px 0px 0px;
    padding: 0px;
    font-size: 0px;
    line-height: 0px;
    display: inline-block;
    display: inline;
    zoom: 1;
    vertical-align: top;
    height: 40px;
  }
  
  ul.breadcrumbs li {
    position: relative;
    margin: 0px 0px;
    padding: 0px;
    list-style: none;
    list-style-image: none;
    display: inline-block;
    *display: inline;
    zoom: 1;
    vertical-align: top;
    border-left: 1px solid #ccc;
    transition: 0.3s ease;
  }
  
  ul.breadcrumbs li:hover:before {
    border-left: 10px solid #a4cb39;
  }
  
  ul.breadcrumbs li:hover a {
    color: #fff;
    background: #a4cb39;
  }
  
  ul.breadcrumbs li:before {
    content: "";
    position: absolute;
    right: -9px;
    top: -1px;
    z-index: 20;
    border-left: 10px solid #fff;
    border-top: 22px solid transparent;
    border-bottom: 22px solid transparent;
    transition: 0.3s ease;
  }
  
  ul.breadcrumbs li:after {
    content: "";
    position: absolute;
    right: -10px;
    top: -1px;
    z-index: 10;
    border-left: 10px solid #ccc;
    border-top: 22px solid transparent;
    border-bottom: 22px solid transparent;
  }
  
  ul.breadcrumbs li.active a {
    color: #000;
    background: #a4cb39;
  }
  
  ul.breadcrumbs li.first {
    border-left: none;
  }
  
  ul.breadcrumbs li.first a {
    font-size: 18px;
    padding-left: 20px;
    border-radius: 5px 0px 0px 5px;
  }
  
  ul.breadcrumbs li.last:before {
    display: none;
  }
  
  ul.breadcrumbs li.last:after {
    display: none;
  }
  
  ul.breadcrumbs li.last a {
    padding-right: 20px;
    border-radius: 0px 40px 40px 0px;
  }
  ul.breadcrumbs li a {
    display: block;
    font-size: 12px;
    line-height: 40px;
    color: #757575;
    padding: 0px 15px 0px 25px;
    text-decoration: none;
    background: #fff;
    border: 1px solid #ddd;
    white-space: nowrap;
    overflow: hidden;
    transition: 0.3s ease;
  }
  </style>

<ul class="breadcrumbs">
  <li><a href="/Estudiantes"><strong>Selección</strong></a></li>
  <li><a href="#"><strong>Alumnos asignados: Modalidad virtual</strong></a></li>
</ul>

<div>
  <br>
</div>

<div class="card shadow rounded">
    <div class="text-center">
      <br>
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#a4cb39" class="bi bi-card-checklist" viewBox="0 0 16 16">
        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
        <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
      </svg>
      <br>
      <br>
      <h1 style="color: #3a3e7b"><strong>Alumnos Asignados de forma virtual</strong></h1>
      <p style="color:black"><strong>Seleccione un grado para ver los alumnos y secciones asignados en el mismo.</strong></p>
      <br>
    </div>
  </div>
  
  <br>
<div class="row">
    @foreach($gradosvirtual as $gradovirtual)
      <div class="col-xl-4 col-sm-7 col-13 mb-5">
        <div class="card shadow rounded">
          <div class="card-body" id="{{$gradovirtual->ID_GR}}">
            <div class="text-center">
              <div class="align-self-center">
                <br>
                @php
                echo $gradovirtual->ICONO;
                @endphp
              </div>   
              <div class="text-center">
                <a type="button" href="/ver_estudiantes_asignados" wire:click="tomargrado('{{$gradovirtual->ID_GR}}')">
                  <p>{{$gradovirtual->GRADO}}</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
  
  
  
    </div>