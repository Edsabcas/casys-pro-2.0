<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      @if($op2==null)
      <li class="breadcrumb-item"><a href="/Contenidos">Seleccion</a></li>
      @elseif($op2==1)
      <li class="breadcrumb-item"><a href="/Contenidos">Seleccion</a></li>
      <li class="breadcrumb-item"><a href="#" wire:click='paginacion("1")'>Grados</a></li>
      @elseif($op2==2)
      <li class="breadcrumb-item"><a href="/Contenidos">Seleccion</a></li>
      <li class="breadcrumb-item"><a href="#" wire:click='paginacion("1")'>Grados</a></li>
      <li class="breadcrumb-item"><a href="#" wire:click='paginacion("2")'>Materias</a></li>
      @elseif($op2==3)
      <li class="breadcrumb-item"><a href="/Contenidos">Seleccion</a></li>
      <li class="breadcrumb-item"><a href="#" wire:click='paginacion("1")'>Grados</a></li>
      <li class="breadcrumb-item"><a href="#" wire:click='paginacion("2")'>Materias</a></li>
      <li class="breadcrumb-item"><a href="#" wire:click='paginacion("3")'>Unidades</a></li>
      @elseif($op2==4)
      <li class="breadcrumb-item"><a href="/Contenidos">Seleccion</a></li>
      <li class="breadcrumb-item"><a href="#" wire:click='paginacion("1")'>Grados</a></li>
      <li class="breadcrumb-item"><a href="#" wire:click='paginacion("2")'>Materias</a></li>
      <li class="breadcrumb-item"><a href="#" wire:click='paginacion("3")'>Unidades</a></li>
      <li class="breadcrumb-item"><a href="#" wire:click='paginacion("4")'>Actividades</a></li>
      @elseif($op2==5)
      <li class="breadcrumb-item"><a href="/Contenidos">Seleccion</a></li>
      <li class="breadcrumb-item"><a href="#" wire:click='paginacion("1")'>Grados</a></li>
      <li class="breadcrumb-item"><a href="#" wire:click='paginacion("2")'>Materias</a></li>
      <li class="breadcrumb-item"><a href="#" wire:click='paginacion("3")'>Unidades</a></li>
      <li class="breadcrumb-item"><a href="#" wire:click='paginacion("5")'>Materias</a></li>
      @elseif($op2==6)
      <li class="breadcrumb-item"><a href="/Contenidos">Seleccion</a></li>
      <li class="breadcrumb-item"><a href="#" wire:click='paginacion("1")'>Grados</a></li>
      <li class="breadcrumb-item"><a href="#" wire:click='paginacion("6")'>Revisar</a></li>
      @endif
    </ol>
  </nav>


  @if($op2==null)
  <div class="card shadow rounded">
    <div class="text-center">
      <br>
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#a4cb39" class="bi bi-journal-text" viewBox="0 0 16 16">
          <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
          <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
          <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
        </svg>
      <br>
      <br>
      <h1 style="color: #3a3e7b"><strong>CONTENIDOS</strong></h1>
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
          <div class="card-body" id="crear">
            <div class="text-center">
              <div class="align-self-center">
              </div>
              <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#a4cb39" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                </svg>
                <br>
                <h5 type="button" wire:click="vista_eleccion('1','1')"><strong>Crear Contenido</strong></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow rounded">
          <div class="card-body" id="crear2">
            <div class="text-center">
              <div class="align-self-center">
              </div>
              <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#a4cb39" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
                <br>
                <h5 type="button" wire:click="vista_eleccion2('1','2')"><strong>Revisar Contenido</strong></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>

    @elseif($op2!=null && $op2==1)
    @include('contenido.contenido')
    @elseif($op2!=null && $op2==2)
    @include('Temas.Pre_kinder')
    @elseif($op2!=null && $op2==3)
    @include('Unidades.Unidad1')
    @elseif($op2!=null && $op2==4)
    @include('Unidades.Actividades.VistaActividades')
    @elseif($op2!=null && $op2==5)
    @include('Unidades.Temas.VistaTemas')
    @elseif($op2!=null && $op2==6)
    @include('Revisar.UnidadR')
    @endif    