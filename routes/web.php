<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Livewire\Sessionscomponent;
use App\Http\Controllers\EdicionAnuncioController;
use App\Http\Controllers\AnunciosNoAdController;
use App\Http\Controllers\AnunciosAdController;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\GuardarController;
use App\Http\Controllers\VistaPruebaController;
use App\Http\Controllers\GradosController;
use App\Http\Controllers\SeccionController;
use App\Http\Controllers\MaestrosController;
use App\Http\Controllers\AsignacionController;
use App\Http\Controllers\AsignacionesEsController;
use App\Http\Controllers\ContenidosController;
use App\Http\Controllers\Materiascontrolador;
use App\Http\Controllers\BotonesController;
use App\Http\Controllers\UnidadesControlador;
use App\Http\Controllers\UnidadesController;
use App\Http\Controllers\Relaciones;
use App\Http\Controllers\UnionController;
use App\Http\Controllers\Conusltarcontroller;
use App\Http\Controllers\CalendarizacionController;
use App\Http\Controllers\AsignarPrecioController;
use App\Http\Controllers\FormMaestrosController;

use App\Http\Livewire\PerfilComponent;
use App\Http\Controllers\PerfilController;
use App\Http\Livewire\ListaDeEstudiantesComponent;
use App\Http\Controllers\ListaDeEstudiantesController;

use App\Http\Livewire\ListadeusuariosComponent;
use App\Http\Controllers\ListadeusuariosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Raiz principal para acceso a home
Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/inicio', [SessionController::class, 'inicio'])
->middleware('auth')->name('General.inicio');

//Formulario de ingreso de usuario
Route::get('/login', [SessionController::class, 'index'])
->name('login.index');

//Formulario de ingreso de usuario
Route::get('/register', [SessionController::class, 'register'])
->name('login.register');

//Formulario de ingreso de usuario
Route::post('/register', [SessionController::class, 'guardar'])
->name('login.guardar');

//Formulario de ingreso de usuario
Route::post('/ingresar', [Sessionscomponent::class, 'validar'])
->name('ingresar.validar');

Route::get('/logout', [SessionController::class, 'destroy'])
->middleware('auth')->name('login.logout');

//Rutas de submenu
//administracio
Route::get('/General', [GeneralComponent::class, 'index'])
->middleware('auth')->name('General.index');

Route::get('/Secciones', [SessionsComponent::class, 'index'])
->middleware('auth')->name('Secciones.index');

Route::get('/Opciones', [OpcionesComponent::class, 'index'])
->middleware('auth')->name('Opciones.index');

Route::get('/Configurar', [ConfigurarComponent::class, 'index'])
->middleware('auth')->name('Configurar.index');

Route::get('/Menu', [MenuComponent::class, 'index'])
->middleware('auth')->name('Menu.index');

Route::get('/Roles_de_Usuario', [RolesDeUsuarioComponent::class, 'index'])
->middleware('auth')->name('Roles_de_Usuario.index');

//Establecimiento
Route::get('/Niveles_Academicos', [NivelesAcademicosComponent::class, 'index'])
->middleware('auth')->name('Niveles_Academicos.index');

Route::get('/Jornadas', [JornadasComponent::class, 'index'])
->middleware('auth')->name('Jornadas.index');

Route::get('/Grado', [GradoComponent::class, 'index'])
->middleware('auth')->name('Grado.index');

Route::get('/Secciones', [Secciones2Component::class, 'index'])
->middleware('auth')->name('Secciones.index');

Route::get('/Usuarios', [UsuariosComponent::class, 'index'])
->middleware('auth')->name('Usuarios.index');

Route::get('/Informe_sobre_plataforma', [InformeSobrePlataformaComponent::class, 'index'])
->middleware('auth')->name('Informe_sobre_plataforma.index');

//cambiar contra de usuario
Route::get('/c_perfiles', [PerfilComponent::class, 'index'])
->name('c_perfiles.index');

Route::get('/configperfil', [PerfilController::class, 'configperfil'])
->name('configperfil.configperfil');

Route::get('/c_pass', [PerfilComponent::class, 'c_pass'])
->name('c_pass.c_pass');

Route::post('/c_pass', [PerfilComponent::class, 'c_pass'])
->name('c_pass.c_pass');


//Estudiantes
Route::get('/Lista_de_usuarios', [ListadeusuariosController::class, 'listarusers'])
->middleware('auth')->name('Lista_de_usuarios.listarusers');

Route::get('/e_perfiles', [ListadeusuariosComponent::class, 'e_perfiles'])
->middleware('auth')->name('e_perfiles.e_perfiles');

Route::get('/Modificar_Estudiantes', [ModificarEstudiantesComponent::class, 'index'])
->middleware('auth')->name('Modificar_Estudiantes.index');

Route::get('/Inscribir_estudiantes', [InscribirEstudiantesComponent::class, 'index'])
->middleware('auth')->name('Inscribir_estudiantes.index');

Route::get('/Admisiones', [AdmisionesComponent::class, 'index'])
->middleware('auth')->name('Admisiones.index');

Route::get('/Estudiantes_Retirados', [EstudiantesRetiradosComponent::class, 'index'])
->middleware('auth')->name('Estudiantes_Retirados.index');

Route::get('/Padres_de_familia', [PadresDeFamiliaComponent::class, 'index'])
->middleware('auth')->name('Padres_de_familia.index');

//anuncios
Route::get('/Anuncios_Publicados', [AnunciosPublicadosComponent::class, 'index'])
->middleware('auth')->name('Anuncios_Publicados.index');

Route::get('/Anuncios_Programados', [AnunciosProgramadosComponent::class, 'index'])
->middleware('auth')->name('Anuncios_Programados.index');

Route::get('/Anuncios_Guardados', [AnunciosGuardadosComponent::class, 'index'])
->middleware('auth')->name('Anuncios_Guardados.index');

//Asignación
Route::get('/Maestros', [MaestrosComponent::class, 'index'])
->middleware('auth')->name('Maestros.index');

Route::get('/Estudiantes', [AsignacionesEsController::class, 'agregar_e'])
->middleware('auth')->name('Estudiantes.agregar_e');

//Academico
Route::get('/Ingreso_de_calificaciones', [IngresoDeCalificacionesComponent::class, 'index'])
->middleware('auth')->name('Ingreso_de_calificaciones.index');

Route::get('/Calendario_de_tareas', [CalendarioDeTareasComponent::class, 'index'])
->middleware('auth')->name('Calendario_de_tareas.index');

Route::get('/Asistencia', [AsistenciaComponent::class, 'index'])
->middleware('auth')->name('Asistencia.index');

Route::get('/Comportamiento', [ComportamientoComponent::class, 'index'])
->middleware('auth')->name('Comportamiento.index');

//Informe academico
Route::get('/Boleta_de_calificaciones', [BoletaDeCalificacionesComponent::class, 'index'])
->middleware('auth')->name('Boleta_de_calificaciones.index');

Route::get('/Informes_estadisticos', [InformesEstadisticosComponent::class, 'index'])
->middleware('auth')->name('Informes_estadisticos.index');

Route::get('/Detalle_de_calificaciones', [DetalleDeCalificacionesComponent::class, 'index'])
->middleware('auth')->name('Detalle_de_calificaciones.index');

Route::get('/Calificaciones_por_maestro', [CalificacionesPorMaestroComponent::class, 'index'])
->middleware('auth')->name('Calificaciones_por_maestro.index');

Route::get('/Promedio_por_curso', [PromedioporCursoComponent::class, 'index'])
->middleware('auth')->name('Promedio_por_curso.index');

Route::get('/Promedio_por_unidad', [PromedioPorUnidad::class, 'index'])
->middleware('auth')->name('Promedio_por_unidad.index');

Route::get('/Promedio_General', [PromedioGeneralComponent::class, 'index'])
->middleware('auth')->name('Promedio_General.index');

Route::get('/Informe_de_contenido_por_curso', [InformeDeContenidoPorCursoComponent::class, 'index'])
->middleware('auth')->name('Informe_de_contenido_por_curso.index');

Route::get('/Maestros_designados', [MaestrosDesignadosComponent::class, 'index'])
->middleware('auth')->name('Maestros_designados.index');

//Configurar academico

Route::get('/Tipos_de_actividades', [TiposDeActividadComponent::class, 'index'])
->middleware('auth')->name('Tipos_de_actividades.index');

Route::get('/Administrar_Cursos', [AsignacionDeCursoComponent::class, 'index'])
->middleware('auth')->name('Administrar_Cursos.index');

Route::get('/Asignacion_de_cursos', [AsignacionDeCursoComponent::class, 'index'])
->middleware('auth')->name('Asignacion_de_cursos.index');

Route::get('/Configurar_Unidad', [ConfigurarUnidadComponent::class, 'index'])
->middleware('auth')->name('Configurar_Unidad.index');

Route::get('/Fecha_de_publicacion', [FechaDePublicacionComponent::class, 'index'])
->middleware('auth')->name('Fecha_de_publicacion.index');

//Pagos

Route::get('/Ingreso_de_pagos', [IngresoDePagosComponent::class, 'index'])
->middleware('auth')->name('Ingreso_de_pagos.index');

Route::get('/Recibos', [RecibosComponent::class, 'index'])
->middleware('auth')->name('Recibos.index');

Route::get('/Pagos_personalizados', [PagosPersonalizadosComponent::class, 'index'])
->middleware('auth')->name('Pagos_personalizados.index');


Route::get('/Mora_y_recargo', [MoraYRecargoComponent::class, 'index'])
->middleware('auth')->name('Mora_y_recargo.index');

Route::get('/Exoneracion_de_mora', [ExoneracionDeMoraComponent::class, 'index'])
->middleware('auth')->name('Exoneracion_de_mora.index');

Route::get('/Metodos_de_pago', [MetodosDePagoComponent::class, 'index'])
->middleware('auth')->name('Metodos_de_pago.index');

//Informe General

Route::get('/Reportes', [ReportesComponent::class, 'index'])
->middleware('auth')->name('Reportes.index');

//todo lo que se creo nuevo

Route::get('/Hijos', [HijosComponent::class, 'index'])
->middleware('auth')->name('Hijos.index');

Route::get('/Calendario_de_tareas2', [Calendariodetareas2Component::class, 'index'])
->middleware('auth')->name('Calendario_de_tareas2.index');

Route::get('/Asistencia2', [Asistencia2Component::class, 'index'])
->middleware('auth')->name('Asistencia2.index');


Route::get('/Actividades', [ActividadesComponent::class, 'index'])
->middleware('auth')->name('Actividades.index');

Route::get('/Reportes_de_conducta', [ReportesdeconductaComponent::class, 'index'])
->middleware('auth')->name('Reportes_de_conducta.index');

Route::get('/Actitudinal', [ActitudinalComponent::class, 'index'])
->middleware('auth')->name('Actitudinal.index');

Route::get('/Reporte_de_pago', [ReportedepagoComponent::class, 'index'])
->middleware('auth')->name('Reporte_de_pago.index');

Route::get('/Visualizacion_de_notas', [VisualizaciondenotasComponent::class, 'index'])
->middleware('auth')->name('Visualizacion_de_notas.index');

Route::get('/Actitudinales2', [Actitudinales2Component::class, 'index'])
->middleware('auth')->name('Actitudinales.index');


Route::get('/Evaluaciones_en_linea', [EvaluacionesenlineaComponent::class, 'index'])
->middleware('auth')->name('Evaluaciones_en_linea.index');

Route::get('/Registros_de_pago', [RegistrosdepagoComponent::class, 'index'])
->middleware('auth')->name('Registros_de_pago.index');

Route::get('/Muebles', [MueblesComponent::class, 'index'])
->middleware('auth')->name('Muebles.index');

Route::get('/Articulos_de_limpieza', [ArticulosdelimpiezaComponent::class, 'index'])
->middleware('auth')->name('Articulos_de_limpieza.index');

Route::get('/Gastos', [GastosComponent::class, 'index'])
->middleware('auth')->name('Gastos.index');

Route::get('/Informe_de_inventario', [InfromedeinventarioComponent::class, 'index'])
->middleware('auth')->name('Informe_de_inventario.index');


Route::get('/General2', [General2Component::class, 'index'])
->middleware('auth')->name('General2.index');

Route::get('/Registrar', [RevistrarComponent::class, 'index'])
->middleware('auth')->name('Registrar.index');


//Grupo #2

Route::get('/Crear_pblicacion', [EdicionAnuncioController::class, 'edicion'])->middleware('auth');

Route::get('/Vista_publicacion', [AnunciosAdController::class, 'vistaadmin'])->middleware('auth');
Route::get('/Publicaciones_guardadas', [GuardarController::class, 'guardar'])->middleware('auth');
Route::get('/Anuncio_Nuevo', [FormMaestrosController::class, 'edicionmaestro'])->middleware('auth');
Route::get('/Publicaciones', [AnunciosNoAdController::class, 'vistanoadmin'])->middleware('auth');



//Grupo #4

Route::get('/Grados', [GradosController::class, 'agregar_gr']);

Route::get('/Secciones', [SeccionController::class, 'agregar_sec']);

Route::get('/Asignacion_maestro', [MaestrosController::class, 'agregar_docentes']);

Route::get('/agregar_a', [AsignacionController::class, 'agregar_a']);

Route::get('/agregar_e', [AsignacionesEsController::class, 'agregar_e']);



//Grupo #3
Route::get('/Planificacion_unidades',[ContenidosController::class,'contenidos']);

Route::get('/Pre_Kinder',[BotonesController::class,'Pre_Kinder']);

Route::get('/Unidad3',[UnidadesControlador::class,'Unidad3']);

Route::get('/Unidad4',[UnidadesControlador::class,'Unidad4']);

Route::get('/Recuperacion',[UnidadesControlador::class,'Recuperacion']);

Route::get('/Materias',[Materiascontrolador::class,'Materias']);

Route::post('/guardar_materia',[Materiascontrolador::class,'guardar_mat']);

Route::post('/list_materia',[Materiascontrolador::class,'list_mat']);

Route::post('/update_mat',[Materiascontrolador::class, 'update_mat']);

Route::post('/list_botones',[BotonesController::class,'list_botones']);

Route::get('/Unidades',[UnidadesController::class,'Unidades']);

Route::post('/guardar_unidad',[UnidadesController::class,'guardar_unidad']);

Route::post('/list_u',[UnidadesController::class,'list_u']);

Route::post('/update_uni',[UnidadesController::class, 'update_uni']);

Route::get('/Asignaciones_de_cursos',[Relaciones::class,'relaciones']);

Route::post('/guardar_relaciones',[Relaciones::class,'guardar_rel']);

Route::post('/list_relaciones',[Relaciones::class,'list_rel']);

Route::post('/update_relaciones',[Relaciones::class, 'update_rel']);

Route::get('/Union',[UnionController::class,'Union']);

Route::post('/guardar_union',[UnionController::class,'guardar_union']);

Route::post('/list_union',[UnionController::class,'list_union']);

Route::post('/update_union',[UnionController::class,'update_union']);

Route::get('/Consultar',[Conusltarcontroller::class,'Consultar']);

Route::post('/list_g',[Conusltarcontroller::class,'list_g']);

Route::get('/Calendarizacion',[CalendarizacionController::class,'Calendarizacion']);

Route::post('/guardar_calendarizacion',[CalendarizacionController::class,'guardar_calendarizacion']);

Route::post('/list_calendarizacion',[CalendarizacionController::class,'list_calendarizacion']);

Route::post('/update_calendarizacion',[CalendarizacionController::class, 'update_calendarizacion']);

Route::get('/Primer_Unidad',[UnidadesControlador::class,'Primer_Unidad']);



//Rutas Pre-Inscribir_estudiantes
Route::get('/Precios', [AsignarPrecioController::class, 'precios'])->middleware('auth');
