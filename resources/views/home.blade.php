@extends('welcome')
@section('content')
@if(isset($op)==true)

@if($op=='addanuncio')
@livewire('anuncios-components')

@elseif($op=='vistaadanuncios')
@livewire('anuncios-admin');


@elseif($op=='guardaranun')
@livewire('guardar-component');


@elseif ($op=='addgrado')
@livewire('grado-components') 

@elseif ($op=='addseccion')
@livewire('seccion-components')   

@elseif ($op=='addmaestros')
@livewire('maestros-components')

@elseif ($op=='asignacion')
@livewire('asignaciones-components')   

@elseif ($op=='asigestudiantes')
@livewire('asignacioneses-components')

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
@include('contenido')

@elseif ($op=='addContenidos')
@livewire('contenido-component')

@elseif ($op=='addConsultar')
@livewire('consultarcomponent')

@elseif ($op=='addCalendarizacion')
@livewire('calendarizacion-component')

@elseif($op=='asigprecios')
@livewire('asignar-precio-component')

@endif
@endif
@endsection