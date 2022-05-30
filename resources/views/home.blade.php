@extends('welcome')
@section('content')
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


@endif
@endif
@endsection
