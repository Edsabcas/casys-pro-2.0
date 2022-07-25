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
  
  @if($op2!=null && $op2==1)
    <div class="card shadow rounded">
      <div class="text-center">
        <br>
        <h1 style="color: #3a3e7b"><strong>UNIDADES</strong></h1>
        <p style="color:black"><strong>Seleccione una unidad para ver el material de apoyo compartido por el maestro o maestra.</strong></p>
        <br>
      </div>
    </div>
  
    <br>
  
    <div class="card shadow rounded text-center">
      <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
          <br>
          <li class="nav-item">
            <button wire:click="validar_u_a('5')" class="btn btn-unib" value="5">Planificación Anual</button>
  
            @foreach($unidadesf as $unidadf)
            <button wire:click='validar_u_a("{{$unidadf->ID_UNIDADES_FIJAS}}")' class="btn btn-unib">{{$unidadf->NOMBRE_DE_UNIDAD}}</button>
            @endforeach
  
            @foreach($unidades as $uni)
            <button wire:click='validar_u2_a("{{$uni->ID_UNIDADES}}","{{$uni->NOMNBRE_UNIDAD}}")' class="btn btn-unib">{{$uni->NOMNBRE_UNIDAD}}</button>
            @endforeach
          </li>
          <br>
        </ul>
      </div>
      <div class="card-body text-center">
        @if($vista==1)
        @include('alumnovista.contenidos.Unidades_a.Unidad1_a')
        @endif
        
        @if($vista==2)
        @include('alumnovista.contenidos.Unidades_a.Unidad2_a')
        @endif
        
        @if($vista==3)
        @include('alumnovista.contenidos.Unidades_a.Unidad3_a')
        @endif
        
        @if($vista==4)
        @include('alumnovista.contenidos.Unidades_a.Unidad4_a')
        @endif
  
        @if($vista==5)
        @include('alumnovista.contenidos.Unidades_a.Planificacion_a')
        @endif
        
        @if($vista==6)
        @include('Unidades.Unidades_n')
        @endif
      </div>
    </div>
      
  
  
    
      
  
  @endif
    
  