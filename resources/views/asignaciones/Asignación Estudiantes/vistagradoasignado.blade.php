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
  <li><a href="#"><strong>Alumnos asignados</strong></a></li>
  <li><a href="#"><strong>Seciones existentes</strong></a></li>
</ul>

<div>
  <br>
</div>

<center>
  @foreach($grados_listar as $grado_listar)
  <h2><strong><i>Secciones existentes de {{$grado_listar->GRADO}}</i></strong></h2>
  @endforeach
</center>
<br>
@isset($mensajeeditado)
@if($mensajeeditado==1)
<div class="alert alert-success alert-dismissible fade show" role="alert">
    Estudiante asignado correctamente!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @elseif($mensajeeditado==0)
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    El estudiante no fue asignado correctamente!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
@endisset
<!--SECCION A-->
@if($alumnos_seccionA!=null)
<div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree2">
        @foreach($grados_listar as $grado_listar)
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#seccionA" aria-expanded="false" aria-controls="seccionA">
          {{$grado_listar->GRADO}} | Alumnos asignados sección A &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($alumnos_seccionA);@endphp</span>
      </button>
      @endforeach
    </h2>
    <div   wire:ignore.self id="seccionA" class="accordion-collapse collapse" aria-labelledby="seccionA" data-bs-parent="#accordionFlushExample">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
            <!--acá iba el buscador-->
            </div>
            <div class="table-responsive">
              <table class="table table-light table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Nombre</th>
                      <th scope="col">CUI</th>
                      <th scope="col">Código Personal</th>
                      <th scope="col">Grado de Ingreso</th>
                      <th scope="col">Asignar</th>
                    </tr>
                  </thead>
          <tbody>
              @foreach ($alumnos_seccionA as $alum_seccionA)
              <tr>
                  <th scope="row">{{ $alum_seccionA->NOMBRE}}</th>
                  <td>{{ $alum_seccionA->CUI}}</td>
                  <td>{{ $alum_seccionA->CODIGO_PERSONAL}}</td>
                  @foreach($grados as $grado)
                  @if($alum_seccionA->GRADO_INGRESO == $grado->ID_GR)
                  <td>{{$grado->GRADO}}</td>
                  @endif
                  @endforeach
                
                  <span>
                      <td>
                        
                        <button class="btn btn-editb" wire:click='editar_seccion2({{$alum_seccionA->ID_USER}})' type="button" data-bs-toggle="modal" data-bs-target="#editarseccion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg></button>  
                      </td>
                  </span> 
                
                </tr>                        
              @endforeach
          
          </tbody>
      </table>
      </div>
      </div>
    </div>
  </div>
@endif
<br>
<!--SECCION B-->
@if($alumnos_seccionB!=null)
<div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree2">
        @foreach($grados_listar as $grado_listar)
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#seccionB" aria-expanded="false" aria-controls="seccionB">
        {{$grado_listar->GRADO}} | Alumnos asignados sección B &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($alumnos_seccionB);@endphp</span>
      </button>
      @endforeach
    </h2>
    <div   wire:ignore.self id="seccionB" class="accordion-collapse collapse" aria-labelledby="seccionB" data-bs-parent="#accordionFlushExample">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
              
            </div>
            <div class="table-responsive">
              <table class="table table-light table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Nombre</th>
                      <th scope="col">CUI</th>
                      <th scope="col">Código Personal</th>
                      <th scope="col">Grado de Ingreso</th>
                      <th scope="col">Asignar</th>
                    </tr>
                  </thead>
          <tbody>
              @foreach ($alumnos_seccionB as $alum_seccionB)
              <tr>
                  <th scope="row">{{ $alum_seccionB->NOMBRE}}</th>
                  <td>{{ $alum_seccionB->CUI}}</td>
                  <td>{{ $alum_seccionB->CODIGO_PERSONAL}}</td>
                  @foreach($grados as $grado)
                  @if($alum_seccionB->GRADO_INGRESO == $grado->ID_GR)
                  <td>{{$grado->GRADO}}</td>
                  @endif
                  @endforeach
                
                  <span>
                      <td>
                        
                        <button class="btn btn-editb" wire:click='editar_seccion2({{$alum_seccionB->ID_USER}})' type="button" data-bs-toggle="modal" data-bs-target="#editarseccion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg></button>  
                      </td>
                  </span> 
                
                </tr>                        
              @endforeach
          
          </tbody>
      </table>
      </div>
      </div>
    </div>
  </div>
@endif
<br>
<!--SECCION C-->
@if($alumnos_seccionC!=null)
<div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree2">
        @foreach($grados_listar as $grado_listar)
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#seccionC" aria-expanded="false" aria-controls="seccionC">
        {{$grado_listar->GRADO}} | Alumnos asignados sección C &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($alumnos_seccionC);@endphp</span>
      </button>
      @endforeach
    </h2>
    <div   wire:ignore.self id="seccionC" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2" data-bs-parent="#accordionFlushExample">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
              
            </div>
            <div class="table-responsive">
              <table class="table table-light table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Nombre</th>
                      <th scope="col">CUI</th>
                      <th scope="col">Código Personal</th>
                      <th scope="col">Grado de Ingreso</th>
                      <th scope="col">Asignar</th>
                    </tr>
                  </thead>
          <tbody>
              @foreach ($alumnos_seccionC as $alum_seccionC)
              <tr>
                  <th scope="row">{{ $alum_seccionC->NOMBRE}}</th>
                  <td>{{ $alum_seccionC->CUI}}</td>
                  <td>{{ $alum_seccionC->CODIGO_PERSONAL}}</td>
                  @foreach($grados as $grado)
                  @if($alum_seccionC->GRADO_INGRESO == $grado->ID_GR)
                  <td>{{$grado->GRADO}}</td>
                  @endif
                  @endforeach
                
                  <span>
                      <td>
                        
                        <button class="btn btn-editb" wire:click='editar_seccion2({{$alum_seccionC->ID_USER}})' type="button" data-bs-toggle="modal" data-bs-target="#editarseccion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg></button>  
                      </td>
                  </span> 
                
                </tr>                        
              @endforeach
          
          </tbody>
      </table>
      </div>
      </div>
    </div>
  </div>
@endif
<br>
<!--SECCION D-->
@if($alumnos_seccionD!=null)
<div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree2">
        @foreach($grados_listar as $grado_listar)
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#seccionD" aria-expanded="false" aria-controls="seccionD">
        {{$grado_listar->GRADO}} | Alumnos asignados sección D &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($alum_seccionD);@endphp</span>
      </button>
      @endforeach
    </h2>
    <div   wire:ignore.self id="seccionD" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2" data-bs-parent="#accordionFlushExample">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
              
            </div>
            <div class="table-responsive">
              <table class="table table-light table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Nombre</th>
                      <th scope="col">CUI</th>
                      <th scope="col">Código Personal</th>
                      <th scope="col">Grado de Ingreso</th>
                      <th scope="col">Asignar</th>
                    </tr>
                  </thead>
          <tbody>
              @foreach ($alumnos_seccionD as $alum_seccionD)
              <tr>
                  <th scope="row">{{ $alum_seccionD->NOMBRE}}</th>
                  <td>{{ $alum_seccionD->CUI}}</td>
                  <td>{{ $alum_seccionD->CODIGO_PERSONAL}}</td>
                  @foreach($grados as $grado)
                  @if($alum_seccionD->GRADO_INGRESO == $grado->ID_GR)
                  <td>{{$grado->GRADO}}</td>
                  @endif
                  @endforeach
                
                  <span>
                      <td>
                        
                        <button class="btn btn-editb" wire:click='editar_seccion2({{$alum_seccionD->ID_USER}})' type="button" data-bs-toggle="modal" data-bs-target="#editarseccion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg></button>  
                      </td>
                  </span> 
                
                </tr>                        
              @endforeach
          
          </tbody>
      </table>
      </div>
      </div>
    </div>
  </div>
@endif
<br>
<!--SECCION E-->
@if($alumnos_seccionE!=null)
<div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree2">
        @foreach($grados_listar as $grado_listar)
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#seccionE" aria-expanded="false" aria-controls="seccionE">
        {{$grado_listar->GRADO}} | Alumnos asignados sección E &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($alum_seccionE);@endphp</span>
      </button>
      @endforeach
    </h2>
    <div   wire:ignore.self id="seccionE" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2" data-bs-parent="#accordionFlushExample">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
              
            </div>
            <div class="table-responsive">
              <table class="table table-light table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Nombre</th>
                      <th scope="col">CUI</th>
                      <th scope="col">Código Personal</th>
                      <th scope="col">Grado de Ingreso</th>
                      <th scope="col">Asignar</th>
                    </tr>
                  </thead>
          <tbody>
              @foreach ($alumnos_seccionE as $alum_seccionE)
              <tr>
                  <th scope="row">{{ $alum_seccionE->NOMBRE}}</th>
                  <td>{{ $alum_seccionE->CUI}}</td>
                  <td>{{ $alum_seccionE->CODIGO_PERSONAL}}</td>
                  @foreach($grados as $grado)
                  @if($alum_seccionE->GRADO_INGRESO == $grado->ID_GR)
                  <td>{{$grado->GRADO}}</td>
                  @endif
                  @endforeach
                
                  <span>
                      <td>
                        
                        <button class="btn btn-editb" wire:click='editar_seccion2({{$alum_seccionE->ID_USER}})' type="button" data-bs-toggle="modal" data-bs-target="#editarseccion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg></button>  
                      </td>
                  </span> 
                
                </tr>                        
              @endforeach
          
          </tbody>
      </table>
      </div>
      </div>
    </div>
  </div>
@endif
@include('asignaciones.Asignación Estudiantes.modaleditarseccion')