<style>
    .btn-unib {
      border: 2px solid #a4cb39;
      -webkit-border-radius: 12px;
      border-radius: 12px;
      background: -webkit-linear-gradient(-90deg,  #f7f7f7 0,  #f7f7f7 100%);
      background: -moz-linear-gradient(180deg,  #f7f7f7 0,  #f7f7f7 100%);
      background: linear-gradient(180deg, r #f7f7f7 0,  #f7f7f7 100%);
      background-position: 50% 50%;
      -webkit-background-origin: padding-box;
      background-origin: padding-box;
      -webkit-background-clip: border-box;
      background-clip: border-box;
      -webkit-background-size: auto auto;
      background-size: auto auto;
    }
  
    .btn-unib:hover {
      font-weight: 600;
      color: white;
      border: 2px solid #a4cb39;
      -webkit-border-radius: 12px;
      border-radius: 12px;
      background: -webkit-linear-gradient(-90deg,  #a4cb39 0,  #a4cb39 100%);
      background: -moz-linear-gradient(180deg,  #a4cb39 0,  #a4cb39 100%);
      background: linear-gradient(180deg, r #a4cb39 0,  #a4cb39 100%);
      background-position: 50% 50%;
      -webkit-background-origin: padding-box;
      background-origin: padding-box;
      -webkit-background-clip: border-box;
      background-clip: border-box;
      -webkit-background-size: auto auto;
      background-size: auto auto;
    }
            
    .btn-unib:active {
      -webkit-border-radius: 17px;
      border-radius: 12px;
      background: -webkit-linear-gradient(-90deg, #7a962a 0,  #7a962a 100%);
      background: -moz-linear-gradient(180deg,  #7a962a 0,  #7a962a 100%);
      background: linear-gradient(180deg,  #7a962a 0,  #7a962a 100%);
      background-position: 50% 50%;
      -webkit-background-origin: padding-box;
      background-origin: padding-box;
      -webkit-background-clip: border-box;
      background-clip: border-box;
      -webkit-background-size: auto auto;
      background-size: auto auto;
    }
  </style>
  
  @if($op2!=null && $op2==6)
    <div class="card shadow rounded">
      <div class="text-center">
        <br>
        <h1 style="color: #3a3e7b"><strong>UNIDADES</strong></h1>
        <p style="color:black"><strong>Seleccione una unidad para ver las materias a revisar</strong></p>
        <br>
      </div>
    </div>
  
    <br>
  
    <div class="card shadow rounded text-center">
      <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
          <br>
          <li class="nav-item">
            <button wire:click="validar_ur('5')" class="btn btn-unib" value="5">Planificación Anual</button>
  
            @foreach($unidadesf as $unidadf)
            <button wire:click='validar_ur("{{$unidadf->ID_UNIDADES_FIJAS}}")' class="btn btn-unib">{{$unidadf->NOMBRE_DE_UNIDAD}}</button>
            @endforeach
  
            @foreach($unidadesr as $uni)
            <button wire:click='validar_u2r("{{$uni->ID_UNIDADES}}","{{$uni->NOMNBRE_UNIDAD}}")' class="btn btn-unib">{{$uni->NOMNBRE_UNIDAD}}</button>
            @endforeach

            <button wire:click="advertencia('7')" class="btn btn-unib" value="7">Advertencias</button>
          </li>
          <br>
        </ul>
      </div>
      <div class="card-body text-center">
        @if($vistar==1)
        @include('Revisar.Unidad1');
        @endif
        
        @if($vistar==2)
        @include('Revisar.Unidad2');
        @endif
        
        @if($vistar==3)
        @include('Revisar.Unidad3');
        @endif
        
        @if($vistar==4)
        @include('Revisar.Unidad4');
        @endif
  
        @if($vistar==5)
        @include('Revisar.Planificacion');
        @endif
        
        @if($vistar2==6)
        @include('Unidades.Unidades_n');
        @endif

        @if($vistar==7)
        @include('Revisar.Advertencias');
        @endif
      </div>
    </div>
      
  
  
    
      
  
  @endif