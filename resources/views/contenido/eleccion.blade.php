<nav aria-label="breadcrumb">
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
      <h1 style="color: #3a3e7b"><strong>Seleccione una opcion</strong></h1>
      <br>
    </div>
  </div> 

  <br>
  <br>
    <div class="col-xl-4 col-sm-7 col-13 mb-5">
      <div class="card shadow rounded">
        <div class="card-body" id="crear">
          <div class="text-center">
            <div class="align-self-center">
            </div>
            <div class="text-center">
              <a type="button" wire:click="vista_eleccion('1','1')"> Crear Contenido
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-sm-7 col-13 mb-5">
        <div class="card shadow rounded">
          <div class="card-body" id="crear2">
            <div class="text-center">
              <div class="align-self-center">
              </div>
              <div class="text-center">
                <a type="button" wire:click="vista_eleccion2('1','2')"> Revisar Contenido
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    @elseif($op2!=null && $op2==1)
    @include('contenido.contenido')
    @elseif($op2!=null && $op2==2)
    @include('Temas.Pre_kinder')
    @elseif($op2!=null && $op2==3)
    @include('Unidades.Unidad1')
    @elseif($op2!=null && $op2==4)
    @include('Unidades.Actividades.VistaActividades');
    @elseif($op2!=null && $op2==5)
    @include('Unidades.Temas.VistaTemas');
    @elseif($op2!=null && $op2==6)
    @include('Revisar.UnidadR');
    @endif    