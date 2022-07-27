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
    @if($op2==null)
    <li><a href="/Actividades"><strong>Materias</strong></a></li>
    @elseif($op2==1)
    <li><a href="/Actividades"><strong>Materias</strong></a></li>
    <li><a href="#" wire:click='paginacion("1")'><strong>Unidades</strong></a></li>
    @endif
  </ul>

  <div>
    <br>
  </div>  

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
        <h1 style="color: #3a3e7b"><strong>MATERIAS {{session('id_alumno_supervisado')}}</strong></h1>          
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
      @foreach($maestros as $maestro )
      @if($materia->ID_MATERIA==$relacion->ID_MATERIA && $maestro->ID_DOCENTE==$relacion->ID_DOCENTE)
      <div class="col-xl-4 col-sm-7 col-13 mb-5">
        <div class="card">
          <div class="card-body">
            <span class="badge bg-badge"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg></span>
            <h4 class="card-title">{{$materia->NOMBRE_MATERIA}}</h4>
            <h6 class="card-title">{{$maestro->NOMBRE_DOCENTE}}</h6>
            <a wire:click='mostrar_u_a("{{$materia->ID_MATERIA}}","{{$materia->NOMBRE_MATERIA}}","{{$maestro->ID_DOCENTE}}","{{$maestro->NOMBRE_DOCENTE}}","1","{{$union->GRADO_INGRESO}}", "{{$union->SECCION_ASIGNADA}}")' class="btn btn-currentColor fw-bold" style="background-color:#a4cb39; color:white">Temas</a>
          </div>
        </div>
      </div>
      @endif
      @endforeach
      @endforeach
      @endif
      @endforeach
      @endforeach
    @elseif($op2!=null && $op2==1)
    @include('alumnovista.contenidos.Unidades')
    @endif
    
    
    