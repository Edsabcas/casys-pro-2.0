<div>
    <center>
        <h1><strong><i>Etapas de admisiones{{$estadovalor}}</i></strong></h1>
    </center>
    @isset($mensaje_eliminacion)
@if($mensaje_eliminacion==1)

<div class="alert alert-success alert-dismissible fade show" role="alert">
    Gestión eliminada correctamente!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @elseif($mensaje_eliminacion==0)
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    La gestión no fue eliminada correctamente!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
@endisset
@isset($mensajeelevar)
@if($mensajeelevar==1)

<div class="alert alert-success alert-dismissible fade show" role="alert">
    Gestión continuada correctamente!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @elseif($mensajeelevar==0)
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    La gestión no fue continuada correctamente!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
@endisset
    <!--Estado 1-->
<div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="estado1">
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#estado1admisiones" aria-expanded="false" aria-controls="flush-collapseThree2">
          Confirmación de información | Alumnos aspirantes  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($estudiantesaspirantes1);@endphp</span>
      </button>
    </h2>
    <div   wire:ignore.self id="estado1admisiones" class="accordion-collapse collapse" aria-labelledby="estado1admisiones" data-bs-parent="#accordionFlushExample">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
              <div class="form-outline">
                <input type="search" wire:model="searchexamenadmisiones1" id="searchexamenadmisiones1" class="form-control" placeholder="Buscar:" />
              </div>
              <button type="button" class="btn btn-pre2">
                <i class="fas fa-search"></i>
              </button>
            </div>
            <div class="table-responsive">
              <table class="table table-light table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">NÚMERO_GESTION</th>
                      <th scope="col">NOMBRES</th>
                      <th scope="col">CUI</th>
                      <th scope="col">GRADO</th>
                      <th scope="col">ESTADO</th>
                      <th scope="col">ACCIONES</th>
                    </tr>
                  </thead>
          <tbody>
              @foreach ($estudiantesaspirantes1 as $estuaspirantes1)
              <tr>
                  <th scope="row">{{ $estuaspirantes1->NO_GESTION}}</th>
                  <td>{{ $estuaspirantes1->NOMBRES}}</td>
                  <td>{{ $estuaspirantes1->CUI}}</td>
                  <td>{{ $estuaspirantes1->GRADO}}</td>
                  
                  @if($estuaspirantes1->ESTADO==1)
                        <td><span class="badge rounded-pill bg-warning text-dark">Pendiente R.</span></td>
                        @elseif($estuaspirantes1->ESTADO==4)
                        <td><span class="badge rounded-pill bg-danger">Validar C.</span></td>
                        @endif
                
                  <span>
                      <td>
                        
                        <button class="btn btn-editb" wire:click='editar_admision({{$estuaspirantes1->ID_GESTION}})' type="button" data-bs-toggle="modal" data-bs-target="#editaradmision"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg></button> 
                          
                          <button class="btn btn-secondary"  style="border-radius: 12px;" wire:click='eliminar({{$estuaspirantes1->ID_GESTION}})' data-bs-toggle="modal" data-bs-target="#eliminaradmision"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                          </svg>
                          </button>
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
<!--Estado 2-->
<div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="estado2">
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#estado2admisiones" aria-expanded="false" aria-controls="flush-collapseThree2">
          Confirmación de información etapa 2| Alumnos aspirantes  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($estudiantesaspirantes2);@endphp</span>
      </button>
    </h2>
    <div   wire:ignore.self id="estado2admisiones" class="accordion-collapse collapse" aria-labelledby="estado2admisiones" data-bs-parent="#accordionFlushExample">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
              <div class="form-outline">
                <input type="search" wire:model="searchexamenadmisiones2" id="searchexamenadmisiones2" class="form-control" placeholder="Buscar:" />
              </div>
              <button type="button" class="btn btn-pre2">
                <i class="fas fa-search"></i>
              </button>
            </div>
            <div class="table-responsive">
              <table class="table table-light table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">NÚMERO_GESTION</th>
                      <th scope="col">NOMBRES</th>
                      <th scope="col">CUI</th>
                      <th scope="col">GRADO</th>
                      <th scope="col">ESTADO</th>
                      <th scope="col">ACCIONES</th>
                    </tr>
                  </thead>
          <tbody>
              @foreach ($estudiantesaspirantes2 as $estuaspirantes2)
              <tr>
                  <th scope="row">{{ $estuaspirantes2->NO_GESTION}}</th>
                  <td>{{ $estuaspirantes2->NOMBRES}}</td>
                  <td>{{ $estuaspirantes2->CUI}}</td>
                  <td>{{ $estuaspirantes2->GRADO}}</td>
                  @if($estuaspirantes2->ESTADO==2)
                        <td><span class="badge rounded-pill bg-warning text-dark">Pendiente R.</span></td>
                        @elseif($estuaspirantes2->ESTADO==4)
                        <td><span class="badge rounded-pill bg-danger">Validar C.</span></td>
                        @endif
                
                  <span>
                      <td>
                        
                        <button class="btn btn-editb" wire:click='editar_admision({{$estuaspirantes2->ID_GESTION}})' type="button" data-bs-toggle="modal" data-bs-target="#editaradmision"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg></button>  

                          <button class="btn btn-secondary"  style="border-radius: 12px;" wire:click='eliminar({{$estuaspirantes2->ID_GESTION}})' data-bs-toggle="modal" data-bs-target="#eliminaradmision"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                          </svg>
                          </button>
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
<!--Estado 3-->
<div class="accordion-item" style="border-radius: 60px 60px 60px 60px;" >
    <h2 class="accordion-header" style="border-radius: 60px 60px 60px 60px;"  style="color: #3a3e7b" id="estado3">
      <button class="accordion-button collapsed" style="border-radius: 60px 60px 60px 60px; color: #3a3e7b"  type="button" data-bs-toggle="collapse" data-bs-target="#estado3admisiones" aria-expanded="false" aria-controls="flush-collapseThree2">
          Listo para inscripción | Alumnos aspirantes  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<span class="badge rounded-pill bg-warning text-dark">@php echo count($estudiantesaspirantes3);@endphp</span>
      </button>
    </h2>
    <div   wire:ignore.self id="estado3admisiones" class="accordion-collapse collapse" aria-labelledby="estado3admisiones" data-bs-parent="#accordionFlushExample">
      <div wire:ignore.self class="accordion-body">
          <div class="input-group justify-content">
              <div class="form-outline">
                <input type="search" wire:model="searchexamenadmisiones3" id="searchexamenadmisiones3" class="form-control" placeholder="Buscar:" />
              </div>
              <button type="button" class="btn btn-pre2">
                <i class="fas fa-search"></i>
              </button>
            </div>
            <div class="table-responsive">
              <table class="table table-light table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">NÚMERO_GESTION</th>
                      <th scope="col">NOMBRES</th>
                      <th scope="col">CUI</th>
                      <th scope="col">GRADO</th>
                      <th scope="col">ESTADO</th>
                      <th scope="col">ACCIONES</th>
                    </tr>
                  </thead>
          <tbody>
              @foreach ($estudiantesaspirantes3 as $estuaspirantes3)
              <tr>
                  <th scope="row">{{ $estuaspirantes3->NO_GESTION}}</th>
                  <td>{{ $estuaspirantes3->NOMBRES}}</td>
                  <td>{{ $estuaspirantes3->CUI}}</td>
                  <td>{{ $estuaspirantes3->GRADO}}</td>
                  @if($estuaspirantes3->ESTADO==3)
                        <td><span class="badge rounded-pill bg-warning text-dark">Pendiente R.</span></td>
                        @elseif($estuaspirantes3->ESTADO==4)
                        <td><span class="badge rounded-pill bg-danger">Validar C.</span></td>
                        @endif
                
                  <span>
                      <td>
                        
                        <button class="btn btn-editb" wire:click='editar_admision({{$estuaspirantes3->ID_GESTION}})' type="button" data-bs-toggle="modal" data-bs-target="#editaradmision"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg></button>  

                          <button class="btn btn-secondary"  style="border-radius: 12px;" wire:click='eliminar({{$estuaspirantes3->ID_GESTION}})' data-bs-toggle="modal" data-bs-target="#eliminaradmision"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                          </svg>
                          </button>
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
@include('admisiones2.modaleditaradmisiones')
@include('admisiones2.modaleliminaradmisiones')
</div>