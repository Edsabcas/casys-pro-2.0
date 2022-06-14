<h1 style="color: #a4cb39"><strong>UNIDAD 1</strong></h1>
@foreach($uniones as $union)
@foreach($materias as $materia)
  @if($union->ID_MATERIA==$materia->ID_MATERIA)
<div class="accordion-item" style="border-radius: 70px 70px 70px 70px; border-color: #3a3e7b">
    <h2 class="accordion-header" style="border-radius: 70px 70px 70px 70px; border-color:#3a3e7b"  style="" id="headingThree{{$materia->ID_MATERIA}}">
      <button class="accordion-button collapsed rounded-pill" wire:click='confirmar_materia("{{$materia->ID_MATERIA}}")' style="border-color:#3a3e7b; color: #3a3e7b" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree{{$materia->ID_MATERIA}}" aria-expanded="false" aria-controls="collapseThree{{$materia->ID_MATERIA}}">
        <strong>{{$union->NOMBRE_MATERIA}}</strong> 
      </button>
    </h2>
    <div  wire:ignore.self  id="collapseThree{{$materia->ID_MATERIA}}" class="accordion-collapse collapse" aria-labelledby="headingThree{{$materia->ID_MATERIA}}" data-bs-parent="#accordionExample{{$materia->ID_MATERIA}}">
      <div  wire:ignore.self  class="accordion-body">
          <div class="table-responsive">
              <table class="table table-light table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Actividad</th>
                      <th scope="col">Usuario</th>
                      <th scope="col">Fecha Entrega</th>
                      <th scope="col">Estado</th>
                      <th scope="col">Acción</th>
                    </tr>
                  </thead>
          <tbody>
               @foreach ($actividades as $actividad)
              <tr>
                  <th>{{$actividad->NOMBRE_ACTIVIDAD}}</th>
                  <th>{{$actividad->name}}</th>
                  <th>{{$actividad->fecha_entr}}</th>
                  @foreach ($Estado_acts as $estado_act)
                  @if($actividad->ID_ACTIVIDADES==$estado_act->ID_ACTIVIDADES)
                  @if($estado_act->ESTADO==1)
                  <td><span class="badge rounded-pill bg-warning text-dark">Pendiente R.</span></td>
                  @elseif($estado_act->ESTADO==2)
                  <td><span class="badge rounded-pill bg-success">Validado</span></td>
                  @elseif($estado_act->ESTADO==3)
                  <td><span class="badge rounded-pill bg-danger">Por corregir</span></td>
                  @endif
                  @endif
                  @endforeach
                
                  <span>
                    
                    <td>
                     
                      <button class="btn btn-success"  id="val" data-bs-toggle="modal" data-bs-target="#editaractividades"   wire:click='editarevisar({{$actividad->ID_ACTIVIDADES}})'>  Editar </button>       
                   
                 
                    
                      <button class="btn btn-secondary" style="border-radius: 12px;" data-bs-toggle="modal" data-bs-target="#eliminaract{{$actividad->ID_ACTIVIDADES}}">  Eliminar </button>
                    </td>
                </span>
                @include('Unidades.Actividades.modaledit_act')
                @include('Unidades.Actividades.modelimiaract')
                </tr>                      
              @endforeach
          </tbody>
      </table>
      </div>
    </div>
  </div>
</div>
<br>
  @endif  
  @endforeach
  @endforeach