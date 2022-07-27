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
  <li><a href="#"><strong>Selección</strong></a></li>
</ul>

<div>
  <br>
</div>

<div class="card shadow rounded">
  <div class="text-center">
    <br>
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#a4cb39" class="bi bi-check2-square" viewBox="0 0 16 16">
      <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
      <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
    </svg>
    <br>
    <br>
    <h1 style="color: #3a3e7b"><strong>ASIGNACIÓN</strong></h1>
    <p style="color:black"><strong>Seleccione una opción.</strong></p>
    <br>
  </div>
</div> 

<br>
<br>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card shadow rounded">
        <div class="card-body" id="asigpresencial">
          <div class="text-center">
            <div class="align-self-center">
            </div>
            <div type="button" href="/Estudiantes_presencial" class="text-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#a4cb39" class="bi bi-people-fill" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
              </svg><strong style="color: #a4cb39">+</strong>
              <br>
              <a type="button" href="/Estudiantes_presencial"><h5 style="color: #000"><strong>Asignar modalidad presencial</strong></h5></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow rounded">
        <div class="card-body" id="asigvirtual">
          <div class="text-center">
            <div class="align-self-center">
            </div>
            <div class="text-center"  type="button" href="/Estudiantes_virtual">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#a4cb39" class="bi bi-person-workspace" viewBox="0 0 16 16">
                <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
              </svg> <strong style="color: #a4cb39">+</strong>
              <br>
              <a type="button" href="/Estudiantes_virtual"><h5 style="color: #000"><strong>Asignar modalidad virtual</strong></h5></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <div class="card shadow rounded">
        <div class="card-body" id="alumasigpresencial">
          <div class="text-center">
            <div class="align-self-center">
            </div>
            <div type="button" href="/ver_Estudiantes_presencial" class="text-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#a4cb39" class="bi bi-people-fill" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
              </svg>
              <br>
              <a type="button" href="/ver_Estudiantes_presencial"><h5 style="color: #000"><strong>Ver alumnos asignados de forma presencial</strong></h5></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow rounded">
        <div class="card-body" id="alumasigvirtual">
          <div class="text-center">
            <div class="align-self-center">
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#a4cb39" class="bi bi-person-workspace" viewBox="0 0 16 16">
                <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
            </svg>
              <br>
              <a type="button" href="/ver_Estudiantes_virtual"><h5 style="color: #000"><strong>Ver alumnos asignados de forma virtual</strong></h5></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>