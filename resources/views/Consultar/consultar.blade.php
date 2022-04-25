<nav class="navbar navbar-expand-lg navbar-success bg-success">
    <div class="container-fluid">

      <a class="navbar-brand text-white" style="font-size:20px" href="#">Seleccione filtros de consulta</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
  <form wire:submit.prevent='' > 
    @csrf     
    <div class="form-check">
    <input class="form-check-input"  type="checkbox" name="checkbox1" wire:click="buscar('1')" value="1" >
    <label class="form-check-label text-white"> Maestros</label >
     <label class="text-success">////</label>
     
    <input class="form-check-input" type="checkbox" name="checkbox2" wire:click="buscar('2')" value="2" >
    <label class="form-check-label text-white"> Grados  </label>
    <label class="text-success">////</label>

    <input class="form-check-input" type="checkbox" name="checkbox3" wire:click="buscar('3')" value="3" >
    <label class="form-check-label text-white"> Materia </label>
    <label class="text-success">////</label>
  
        </ul>
      </div>
      @if($primera==null)
        <a class="btn btn-light" wire:click='validar_check()' >Buscar</a>
      
      @endif
      @if($segunda==1)
        <a   class="btn btn-light" wire:click='validar_check2()' >Buscar111</a>

      @endif

      @if($tercera==null)
        <a   class="btn btn-light" wire:click='validar_check3()' >Buscar222</a>
      
      @endif

    </div>
</form> 

</nav>
@if($vista==1)

  @include('Consultar.ListaMaestro');

@endif

@if($vista==2)

  @include('Consultar.ListaGrado');

@endif

@if($vista==3)

  @include('Consultar.ListarMateria');

@endif

@if($vista2==1)

  @include('Consultar.List_MA_GR');

@endif

@if($vista2==2)

  @include('Consultar.List_MA_MAT');

@endif

@if($vista2==3)

  @include('Consultar.List_GR_MAT');

@endif

@if($vista3==1)

  @include('Consultar.List_TODOS');

@endif





 