<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="/Estudiantes" class="btn btn-pre2">Regresar</a>
  </div>
<center>
    <h2><strong><i>Asignación de secciones de modalidad presencial</i></strong></h2>
</center>
<br>
@isset($mensaje)
@if($mensaje==1)
<div class="alert alert-success alert-dismissible fade show" role="alert">
    Estudiante asignado correctamente!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @elseif($mensaje==0)
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    El estudiante no fue asignado correctamente!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
@endisset
<!--Prekinder-->
<div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree2">
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree2" aria-expanded="false" aria-controls="flush-collapseThree2">
          Pre-kinder | Alumnos NO Asignados  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($estudiantesprekinder);@endphp</span>
      </button>
    </h2>
    <div   wire:ignore.self id="flush-collapseThree2" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2" data-bs-parent="#accordionFlushExample">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
              <div class="form-outline">
                <input type="search" wire:model="searchprekinderpresencial" id="searchprekinderpresencial" class="form-control" placeholder="Buscar:" />
              </div>
              <button type="button" class="btn btn-pre2">
                <i class="fas fa-search"></i>
              </button>
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
              @foreach ($estudiantesprekinder as $estuprekinder)
              <tr>
                  <th scope="row">{{ $estuprekinder->NOMBRE}}</th>
                  <td>{{ $estuprekinder->CUI}}</td>
                  <td>{{ $estuprekinder->CODIGO_PERSONAL}}</td>
                  @foreach($grados as $grado)
                  @if($estuprekinder->GRADO_INGRESO == $grado->ID_GR)
                  <td>{{$grado->GRADO}}</td>
                  @endif
                  @endforeach
                
                  <span>
                      <td>
                        
                        <button class="btn btn-editb" wire:click='editar_seccion({{$estuprekinder->ID_USER}})' type="button" data-bs-toggle="modal" data-bs-target="#asignarseccion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
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
<br>
  <!--kinder-->
  <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree2">
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#acordeonkinder" aria-expanded="false" aria-controls="acordeonkinder">
          Kinder | Alumnos NO Asignados  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($estudianteskinder);@endphp</span>
      </button>
    </h2>
    <div   wire:ignore.self id="acordeonkinder" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2" data-bs-parent="#accordionFlushExample">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
              <div class="form-outline">
                <input type="search" wire:model="searchkinderpresencial" id="searchkinderpresencial" class="form-control" placeholder="Buscar:" />
              </div>
              <button type="button" class="btn btn-pre2">
                <i class="fas fa-search"></i>
              </button>
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
              @foreach ($estudianteskinder as $estukinder)
              <tr>
                  <th scope="row">{{ $estukinder->NOMBRE}}</th>
                  <td>{{ $estukinder->CUI}}</td>
                  <td>{{ $estukinder->CODIGO_PERSONAL}}</td>
                  @foreach($grados as $grado)
                  @if($estukinder->GRADO_INGRESO == $grado->ID_GR)
                  <td>{{$grado->GRADO}}</td>
                  @endif
                  @endforeach
                
                  <span>
                      <td>
                        
                        <button class="btn btn-editb" wire:click='editar_seccion({{$estukinder->ID_USER}})' type="button" data-bs-toggle="modal" data-bs-target="#asignarseccion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
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
  <br>
  <!--preparatoria-->
  <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree2">
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#acordeonprepa" aria-expanded="false" aria-controls="acordeonprepa">
          Preparatoria | Alumnos NO Asignados  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($estudiantesprepa);@endphp</span>
      </button>
    </h2>
    <div   wire:ignore.self id="acordeonprepa" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2" data-bs-parent="#accordionFlushExample">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
              <div class="form-outline">
                <input type="search" wire:model="searchprepapresencial" id="searchprepapresencial" class="form-control" placeholder="Buscar:" />
              </div>
              <button type="button" class="btn btn-pre2">
                <i class="fas fa-search"></i>
              </button>
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
              @foreach ($estudiantesprepa as $estuprepa)
              <tr>
                  <th scope="row">{{ $estuprepa->NOMBRE}}</th>
                  <td>{{ $estuprepa->CUI}}</td>
                  <td>{{ $estuprepa->CODIGO_PERSONAL}}</td>
                  @foreach($grados as $grado)
                  @if($estuprepa->GRADO_INGRESO == $grado->ID_GR)
                  <td>{{$grado->GRADO}}</td>
                  @endif
                  @endforeach
                
                  <span>
                      <td>
                        
                        <button class="btn btn-editb" wire:click='editar_seccion({{$estuprepa->ID_USER}})' type="button" data-bs-toggle="modal" data-bs-target="#asignarseccion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
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
  <br>
  <!--primero-->
  <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree2">
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#acordeonprimero" aria-expanded="false" aria-controls="acordeonprimero">
          Primero Primaria| Alumnos NO Asignados  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($estudiantesprimero);@endphp</span>
      </button>
    </h2>
    <div   wire:ignore.self id="acordeonprimero" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2" data-bs-parent="#acordeonprimero">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
              <div class="form-outline">
                <input type="search" wire:model="searchprimeropresencial" id="searchprimeropresencial" class="form-control" placeholder="Buscar:" />
              </div>
              <button type="button" class="btn btn-pre2">
                <i class="fas fa-search"></i>
              </button>
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
              @foreach ($estudiantesprimero as $estuprimero)
              <tr>
                  <th scope="row">{{ $estuprimero->NOMBRE}}</th>
                  <td>{{ $estuprimero->CUI}}</td>
                  <td>{{ $estuprimero->CODIGO_PERSONAL}}</td>
                  @foreach($grados as $grado)
                  @if($estuprimero->GRADO_INGRESO == $grado->ID_GR)
                  <td>{{$grado->GRADO}}</td>
                  @endif
                  @endforeach
                
                  <span>
                      <td>
                        <button class="btn btn-editb" wire:click='editar_seccion({{$estuprimero->ID_USER}})' type="button" data-bs-toggle="modal" data-bs-target="#asignarseccion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
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
  <br>
  <!--segundo-->
  <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree2">
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#acordeonsegundo" aria-expanded="false" aria-controls="acordeonsegundo">
          Segundo Primaria | Alumnos NO Asignados  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($estudiantessegundo);@endphp</span>
      </button>
    </h2>
    <div   wire:ignore.self id="acordeonsegundo" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2" data-bs-parent="#acordeonsegundo">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
              <div class="form-outline">
                <input type="search" wire:model="searchsegundopresencial" id="searchsegundopresencial" class="form-control" placeholder="Buscar:" />
              </div>
              <button type="button" class="btn btn-pre2">
                <i class="fas fa-search"></i>
              </button>
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
              @foreach ($estudiantessegundo as $estusegundo)
              <tr>
                  <th scope="row">{{ $estusegundo->NOMBRE}}</th>
                  <td>{{ $estusegundo->CUI}}</td>
                  <td>{{ $estusegundo->CODIGO_PERSONAL}}</td>
                  @foreach($grados as $grado)
                  @if($estusegundo->GRADO_INGRESO == $grado->ID_GR)
                  <td>{{$grado->GRADO}}</td>
                  @endif
                  @endforeach
                
                  <span>
                      <td>
                        <button class="btn btn-editb" type="button" wire:click='editar_seccion({{$estusegundo->ID_USER}})' data-bs-toggle="modal" data-bs-target="#asignarseccion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
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
  <br>
  <!--tercero-->
  <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree2">
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#acordeontercero" aria-expanded="false" aria-controls="acordeontercero">
          Tercero Primaria | Alumnos NO Asignados  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($estudiantestercero);@endphp</span>
      </button>
    </h2>
    <div   wire:ignore.self id="acordeontercero" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2" data-bs-parent="#acordeontercero">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
              <div class="form-outline">
                <input type="search" wire:model="searchterceropresencial" id="searchterceropresencial" class="form-control" placeholder="Buscar:" />
              </div>
              <button type="button" class="btn btn-pre2">
                <i class="fas fa-search"></i>
              </button>
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
              @foreach ($estudiantestercero as $estutercero)
              <tr>
                  <th scope="row">{{ $estutercero->NOMBRE}}</th>
                  <td>{{ $estutercero->CUI}}</td>
                  <td>{{ $estutercero->CODIGO_PERSONAL}}</td>
                  @foreach($grados as $grado)
                  @if($estutercero->GRADO_INGRESO == $grado->ID_GR)
                  <td>{{$grado->GRADO}}</td>
                  @endif
                  @endforeach
                
                  <span>
                      <td>
                        <button class="btn btn-editb" type="button" wire:click='editar_seccion({{$estutercero->ID_USER}})' data-bs-toggle="modal" data-bs-target="#asignarseccion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
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
  <br>
  <!--cuarto-->
  <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree2">
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#acordeoncuarto" aria-expanded="false" aria-controls="acordeoncuarto">
          Cuarto Primaria | Alumnos NO Asignados  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($estudiantescuarto);@endphp</span>
      </button>
    </h2>
    <div   wire:ignore.self id="acordeoncuarto" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2" data-bs-parent="#acordeoncuarto">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
              <div class="form-outline">
                <input type="search" wire:model="searchcuartopresencial" id="searchcuartopresencial" class="form-control" placeholder="Buscar:" />
              </div>
              <button type="button" class="btn btn-pre2">
                <i class="fas fa-search"></i>
              </button>
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
              @foreach ($estudiantescuarto as $estucuarto)
              <tr>
                  <th scope="row">{{ $estucuarto->NOMBRE}}</th>
                  <td>{{ $estucuarto->CUI}}</td>
                  <td>{{ $estucuarto->CODIGO_PERSONAL}}</td>
                  @foreach($grados as $grado)
                  @if($estucuarto->GRADO_INGRESO == $grado->ID_GR)
                  <td>{{$grado->GRADO}}</td>
                  @endif
                  @endforeach
                
                  <span>
                      <td>
                        <button class="btn btn-editb" type="button" wire:click='editar_seccion({{$estucuarto->ID_USER}})' data-bs-toggle="modal" data-bs-target="#asignarseccion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
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
  <br>
  <!--quinto-->
  <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree2">
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#acordeonquinto" aria-expanded="false" aria-controls="acordeonquinto">
          Quinto Primaria | Alumnos NO Asignados  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($estudiantesquinto);@endphp</span>
      </button>
    </h2>
    <div   wire:ignore.self id="acordeonquinto" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2" data-bs-parent="#acordeonquinto">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
              <div class="form-outline">
                <input type="search" wire:model="searchquintopresencial" id="searchquintopresencial" class="form-control" placeholder="Buscar:" />
              </div>
              <button type="button" class="btn btn-pre2">
                <i class="fas fa-search"></i>
              </button>
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
              @foreach ($estudiantesquinto as $estuquinto)
              <tr>
                  <th scope="row">{{ $estuquinto->NOMBRE}}</th>
                  <td>{{ $estuquinto->CUI}}</td>
                  <td>{{ $estuquinto->CODIGO_PERSONAL}}</td>
                  @foreach($grados as $grado)
                  @if($estuquinto->GRADO_INGRESO == $grado->ID_GR)
                  <td>{{$grado->GRADO}}</td>
                  @endif
                  @endforeach
                
                  <span>
                      <td>
                        <button class="btn btn-editb" type="button" wire:click='editar_seccion({{$estuquinto->ID_USER}})' data-bs-toggle="modal" data-bs-target="#asignarseccion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
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
  <br>
  <!--sexto-->
  <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree2">
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#acordeonsexto" aria-expanded="false" aria-controls="acordeonsexto">
          Sexto Primaria | Alumnos NO Asignados  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($estudiantessexto);@endphp</span>
      </button>
    </h2>
    <div   wire:ignore.self id="acordeonsexto" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2" data-bs-parent="#acordeonsexto">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
              <div class="form-outline">
                <input type="search" wire:model="searchsextopresencial" id="searchsextopresencial" class="form-control" placeholder="Buscar:" />
              </div>
              <button type="button" class="btn btn-pre2">
                <i class="fas fa-search"></i>
              </button>
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
              @foreach ($estudiantessexto as $estusexto)
              <tr>
                  <th scope="row">{{ $estusexto->NOMBRE}}</th>
                  <td>{{ $estusexto->CUI}}</td>
                  <td>{{ $estusexto->CODIGO_PERSONAL}}</td>
                  @foreach($grados as $grado)
                  @if($estusexto->GRADO_INGRESO == $grado->ID_GR)
                  <td>{{$grado->GRADO}}</td>
                  @endif
                  @endforeach
                
                  <span>
                      <td>
                        <button class="btn btn-editb" type="button" wire:click='editar_seccion({{$estusexto->ID_USER}})' data-bs-toggle="modal" data-bs-target="#asignarseccion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
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
  <br>
  <!--septimo-->
  <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree2">
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#acordeonseptimo" aria-expanded="false" aria-controls="acordeonseptimo">
          Séptimo Grado| Alumnos NO Asignados  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($estudiantesseptimo);@endphp</span>
      </button>
    </h2>
    <div   wire:ignore.self id="acordeonseptimo" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2" data-bs-parent="#acordeonseptimo">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
              <div class="form-outline">
                <input type="search" wire:model="searchseptimopresencial" id="searchseptimopresencial" class="form-control" placeholder="Buscar:" />
              </div>
              <button type="button" class="btn btn-pre2">
                <i class="fas fa-search"></i>
              </button>
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
              @foreach ($estudiantesseptimo as $estuseptimo)
              <tr>
                  <th scope="row">{{ $estuseptimo->NOMBRE}}</th>
                  <td>{{ $estuseptimo->CUI}}</td>
                  <td>{{ $estuseptimo->CODIGO_PERSONAL}}</td>
                  @foreach($grados as $grado)
                  @if($estuseptimo->GRADO_INGRESO == $grado->ID_GR)
                  <td>{{$grado->GRADO}}</td>
                  @endif
                  @endforeach
                
                  <span>
                      <td>
                        <button class="btn btn-editb" type="button" wire:click='editar_seccion({{$estuseptimo->ID_USER}})' data-bs-toggle="modal" data-bs-target="#asignarseccion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
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
  <br>
  <!--octavo-->
  <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree2">
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#acordeonoctavo" aria-expanded="false" aria-controls="acordeonoctavo">
          Octavo Grado| Alumnos NO Asignados  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($estudiantesoctavo);@endphp</span>
      </button>
    </h2>
    <div   wire:ignore.self id="acordeonoctavo" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2" data-bs-parent="#acordeonoctavo">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
              <div class="form-outline">
                <input type="search" wire:model="searchoctavopresencial" id="searchoctavopresencial" class="form-control" placeholder="Buscar:" />
              </div>
              <button type="button" class="btn btn-pre2">
                <i class="fas fa-search"></i>
              </button>
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
              @foreach ($estudiantesoctavo as $estuoctavo)
              <tr>
                  <th scope="row">{{ $estuoctavo->NOMBRE}}</th>
                  <td>{{ $estuoctavo->CUI}}</td>
                  <td>{{ $estuoctavo->CODIGO_PERSONAL}}</td>
                  @foreach($grados as $grado)
                  @if($estuoctavo->GRADO_INGRESO == $grado->ID_GR)
                  <td>{{$grado->GRADO}}</td>
                  @endif
                  @endforeach
                
                  <span>
                      <td>
                        <button class="btn btn-editb" type="button" wire:click='editar_seccion({{$estuoctavo->ID_USER}})' data-bs-toggle="modal" data-bs-target="#asignarseccion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
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
  <br>
  <!--noveno-->
  <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree2">
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#acordeonnoveno" aria-expanded="false" aria-controls="acordeonnoveno">
          Noveno Grado| Alumnos NO Asignados  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($estudiantesnoveno);@endphp</span>
      </button>
    </h2>
    <div   wire:ignore.self id="acordeonnoveno" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2" data-bs-parent="#acordeonnoveno">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
              <div class="form-outline">
                <input type="search" wire:model="searchnovenopresencial" id="searchnovenopresencial" class="form-control" placeholder="Buscar:" />
              </div>
              <button type="button" class="btn btn-pre2">
                <i class="fas fa-search"></i>
              </button>
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
              @foreach ($estudiantesnoveno as $estunoveno)
              <tr>
                  <th scope="row">{{ $estunoveno->NOMBRE}}</th>
                  <td>{{ $estunoveno->CUI}}</td>
                  <td>{{ $estunoveno->CODIGO_PERSONAL}}</td>
                  @foreach($grados as $grado)
                  @if($estunoveno->GRADO_INGRESO == $grado->ID_GR)
                  <td>{{$grado->GRADO}}</td>
                  @endif
                  @endforeach
                
                  <span>
                      <td>
                        <button class="btn btn-editb" type="button" wire:click='editar_seccion({{$estunoveno->ID_USER}})' data-bs-toggle="modal" data-bs-target="#asignarseccion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
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
  <br>
  <!--decimo-->
  <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree2">
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#acordeondecimo" aria-expanded="false" aria-controls="acordeondecimo">
          Décimo Grado| Alumnos NO Asignados  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($estudiantesdecimo);@endphp</span>
      </button>
    </h2>
    <div   wire:ignore.self id="acordeondecimo" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2" data-bs-parent="#acordeondecimo">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
              <div class="form-outline">
                <input type="search" wire:model="searchdecimopresencial" id="searchdecimopresencial" class="form-control" placeholder="Buscar:" />
              </div>
              <button type="button" class="btn btn-pre2">
                <i class="fas fa-search"></i>
              </button>
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
              @foreach ($estudiantesdecimo as $estudecimo)
              <tr>
                  <th scope="row">{{ $estudecimo->NOMBRE}}</th>
                  <td>{{ $estudecimo->CUI}}</td>
                  <td>{{ $estudecimo->CODIGO_PERSONAL}}</td>
                  @foreach($grados as $grado)
                  @if($estudecimo->GRADO_INGRESO == $grado->ID_GR)
                  <td>{{$grado->GRADO}}</td>
                  @endif
                  @endforeach
                
                  <span>
                      <td>
                        <button class="btn btn-editb" type="button" wire:click='editar_seccion({{$estudecimo->ID_USER}})' data-bs-toggle="modal" data-bs-target="#asignarseccion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
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
  <br>
  <!--onceavo-->
  <div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="flush-headingThree2">
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#acordeononceavo" aria-expanded="false" aria-controls="acordeononceavo">
          Onceavo Grado| Alumnos NO Asignados  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($estudiantesonceavo);@endphp</span>
      </button>
    </h2>
    <div   wire:ignore.self id="acordeononceavo" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2" data-bs-parent="#acordeononceavo">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
              <div class="form-outline">
                <input type="search" wire:model="searchonceavopresencial" id="searchonceavopresencial" class="form-control" placeholder="Buscar:" />
              </div>
              <button type="button" class="btn btn-pre2">
                <i class="fas fa-search"></i>
              </button>
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
              @foreach ($estudiantesonceavo as $estuonceavo)
              <tr>
                  <th scope="row">{{ $estuonceavo->NOMBRE}}</th>
                  <td>{{ $estuonceavo->CUI}}</td>
                  <td>{{ $estuonceavo->CODIGO_PERSONAL}}</td>
                  @foreach($grados as $grado)
                  @if($estuonceavo->GRADO_INGRESO == $grado->ID_GR)
                  <td>{{$grado->GRADO}}</td>
                  @endif
                  @endforeach
                
                  <span>
                      <td>
                        <button class="btn btn-editb" type="button" wire:click='editar_seccion({{$estuonceavo->ID_USER}})' data-bs-toggle="modal" data-bs-target="#asignarseccion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
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
  @include('asignaciones.Asignación Estudiantes.modalasignacion')