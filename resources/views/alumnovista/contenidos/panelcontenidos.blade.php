<style>
    .badge{
      position: absolute;
      background-color: #a4cb39;
      right: 0px;
      top: 0px;
      padding: 12px 15px;
      border-radius: 0 0 0 26px;
      font-size: 14px;
      }
    </style>
    
    
    @if($op2==null or $op2=="")
    <div class="card shadow rounded">
      <div class="text-center">
        <br>  
        <h1 style="color: #3a3e7b"><strong>Materias</strong></h1>          
        <p style="color:black"><strong>Seleccione un curso para ver el material de apoyo compartido por el maestro o maestra. </strong></p>
        <br>
      </div>
    </div>
    
    <br>
    
    <div class="row">
      @foreach($uniones as $union)
      @foreach($relaciones as $relacion)
      @if($union->GRADO_INGRESO==$relacion->ID_GR && $union->SECCION_ASIGNADA==$relacion->ID_SC)
      @foreach($materias as $materia)
      @if($materia->ID_MATERIA==$relacion->ID_MATERIA)
      <div class="col-xl-4 col-sm-7 col-13 mb-5">
        <div class="card">
          <div class="card-body">
            <span class="badge bg-badge"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg></span>
            <h4 class="card-title">{{$materia->NOMBRE_MATERIA}}</h4>
            <a wire:click='mostrar_u_a("{{$materia->ID_MATERIA}}","{{$materia->NOMBRE_MATERIA}}","{{$relacion->ID_DOCENTE}}","1","{{$union->GRADO_INGRESO}}", "{{$union->SECCION_ASIGNADA}}")' class="btn btn-currentColor fw-bold" style="background-color:#a4cb39; color:white">Temas</a>
          </div>
        </div>
      </div>
      @endif
      @endforeach
      @endif
      @endforeach
      @endforeach
    @elseif($op2!=null && $op2==1)
    @include('alumnovista.contenidos.Unidades')
    @endif
    
    
    