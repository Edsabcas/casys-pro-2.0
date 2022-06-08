@extends('welcome')
@section('content')
@if(Session::get('rol_usuario_activo')==3)
@php
$dia_exacto=date("Y-m-d");
@endphp
@foreach(Session::get('advertencias_activas') as $advertenciasa)
           @if($dia_exacto>=$advertenciasa->FECHA_INICIO && $dia_exacto<=$advertenciasa->FECHA_FIND)
           @if($advertenciasa->PRIORIDAD == 1)
           <div class="alert alert-success d-flex align-items-center rounded-pill" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
            <div>
              Informativo : {{$advertenciasa->DESCRIPCION}}
            </div>
          </div>
           @elseif($advertenciasa->PRIORIDAD == 2)
           <div class="alert alert-warning d-flex align-items-center rounded-pill" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
              Importante : {{$advertenciasa->DESCRIPCION}}
            </div>
          </div>
           @elseif($advertenciasa->PRIORIDAD == 3)
           <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            <div>
              Urgente : {{$advertenciasa->DESCRIPCION}}
            </div>
          </div>
           @endif
           @endif
           @endforeach
@endif
@if(isset($op)==true)

@if($op=='addanuncio')
@livewire('anuncios-components')

@elseif($op=='vistaadanuncios')
@livewire('anuncios-admin');

@elseif($op=='vistanoadanuncios')
@livewire('anuncios-no-admin');


@elseif($op=='guardaranun')
@livewire('guardar-component');

@elseif($op=="addanunciomaestro")
@livewire('form-maestros-components');

@elseif($op=="validacionvista")
@livewire('validacion-vista-component');

@elseif ($op=='addgrado')
@livewire('grado-components') 

@elseif ($op=='addseccion')
@livewire('seccion-components')   

@elseif ($op=='addmaestros')
@livewire('maestros-components')

@elseif ($op=='asignacion')
@livewire('asignaciones-components')   

@elseif ($op=='asignacionestudiantes')
@livewire('asignaciones-es-components')

@elseif ($op=='addmaterias')
@livewire('materiacomponent')  

@elseif ($op=='botones')
@livewire('botones-component')      

@elseif ($op=='addrelaciones')
@livewire('relacionescomponent')   

@elseif ($op=='addunidades')
@livewire('unidades-component')   

@elseif ($op=='addcontenidos')
@livewire('contenido-component')   

@elseif($op==0)
@if($rol==1 or $rol==2)
@include('contenido')
@else
@livewire('anuncios-no-admin');
@endif

@elseif ($op=='addContenidos')
@livewire('contenido-component')

@elseif ($op=='edittemas')
@include('Unidades.Temas.modaltemas')

@elseif ($op=='editplan')
@include('Unidades.modalplanificacion')

@elseif ($op=='editact')
@include('Unidades.Temas.modal_actividades')

@elseif ($op=='editrevact')
@include('Revisar.modal_coment')

@elseif ($op=='addConsultar')
@livewire('consultarcomponent')

@elseif ($op=='addCalendarizacion')
@livewire('calendarizacion-component')

@elseif($op=='asigprecios')
@livewire('asignar-precio-component')

@elseif($op=='aconfigperfil')
@livewire('perfil-component')

@elseif($op=='aconfigusuarios')
@livewire('listadeusuarios-component')

@elseif($op=='addanunciomaestro')
@livewire('maestroform-component')


@elseif($op=='nivelacademico')
@livewire('nivel-academico')


@elseif($op=='jornada')
@livewire('tipo-de-jornada-component')

@elseif($op=='aMostrarRoles')
@livewire('rolesdeusuario-component')

@elseif($op=='admisiones')
@livewire('adminisiones-componet')

@elseif($op=='addvertencias')
@livewire('contenido-componet')



@elseif($op=='addvertenciasedit')
@livewire('contenido-componet')

@endif
@endif
@endsection
