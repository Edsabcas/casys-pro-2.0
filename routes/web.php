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
use App\Http\Controllers\NivelAcademicoController;
use App\Http\Controllers\TipoDeJornadaController;
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

use App\Http\Controllers\RolesdeusuarioController;
use App\Http\Controllers\AdminisionesController;
use App\Http\Livewire\RolesdeusuarioComponent;

use App\Http\Controllers\PDFController;
use App\Http\Controllers\CuentasEstudiantesControllers;
use App\Http\Controllers\VistaAlumnoController;
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
//Route::get('/', function () {
 //   return view('home');
//})->middleware('auth');

Route::get('/', [SessionController::class, 'inicio'])
->middleware('auth')->name('General.inicio');

//Formulario de ingreso de usuario
Route::get('/login', [SessionController::class, 'index'])
->name('login.index');


//Formulario de ingreso de usuario
Route::post('/ingresar', [Sessionscomponent::class, 'validar'])
->name('ingresar.validar');

Route::get('/logout', [SessionController::class, 'destroy'])
->middleware('auth')->name('logout.destroy');

//cambiar contra de usuario
Route::get('/c_perfiles', [PerfilComponent::class, 'index'])
->name('c_perfiles.index');

Route::get('/configperfil', [PerfilController::class, 'configperfil'])
->name('configperfil.configperfil');

Route::get('/c_pass', [PerfilComponent::class, 'c_pass'])
->name('c_pass.c_pass');

Route::post('/c_pass', [PerfilComponent::class, 'c_pass'])
->name('c_pass.c_pass');


//Rutas de submenu
//administracion
Route::get('/Lista_de_usuarios', [ListadeusuariosController::class, 'listarusers'])
->middleware('auth')->name('Lista_de_usuarios.listarusers');

Route::get('/e_perfiles', [ListadeusuariosComponent::class, 'e_perfiles'])
->middleware('auth')->name('e_perfiles.e_perfiles');

Route::get('/Roles_de_usuario', [RolesdeusuarioController::class, 'mostrarroles'])
->middleware('auth')->name('Roles_de_usuario.mostrarroles');

Route::get('/Cuentas_estudiantes', [CuentasEstudiantesControllers::class, 'montos'])
->middleware('auth')->name('Cuentas_estudiantes.montos');

//Grupo #2

Route::get('/Crear_publicación', [EdicionAnuncioController::class, 'edicion'])->middleware('auth');

Route::get('/Vista_publicación', [AnunciosAdController::class, 'vistaadmin'])->middleware('auth');
Route::get('/Publicaciones_guardadas', [GuardarController::class, 'guardar'])->middleware('auth');
Route::get('/Anuncios_nuevos', [FormMaestrosController::class, 'edicionmaestro'])->middleware('auth');
Route::get('/Publicaciones', [AnunciosNoAdController::class, 'vistanoadmin'])->middleware('auth');



Route::get('/Usuario_pdf', [PDFController::class, 'pdf_nuevo']);

//Vista Alumnos desde perfil de Padres
Route::get('/Vista_Alumno/{id_alumno}', [VistaAlumnoController::class, 'panel_general']);
Route::get('/Vista_Anuncios_Alumno', [VistaAlumnoController::class, 'anuncios_alumnos']);

//Grupo #4

Route::get('/Grados', [GradosController::class, 'agregar_gr']);

Route::get('/Secciones', [SeccionController::class, 'agregar_sec']);

Route::get('/Maestros', [MaestrosController::class, 'agregar_docentes']);

Route::get('/Maestros_guías', [AsignacionController::class, 'agregar_a']);

Route::get('/Estudiantes', [AsignacionesEsController::class, 'agregar_e']);

Route::get('/Nivel_Academico', [NivelAcademicoController::class, 'agregar_nivelacedemico']);

Route::get('/Tipo_De_Jornada', [TipoDeJornadaController::class, 'agregar_jornada']);



//Grupo #3
Route::get('/Contenidos',[ContenidosController::class,'contenidos']);

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

Route::get('/Calendarización',[CalendarizacionController::class,'Calendarizacion']);

Route::post('/guardar_calendarizacion',[CalendarizacionController::class,'guardar_calendarizacion']);

Route::post('/list_calendarizacion',[CalendarizacionController::class,'list_calendarizacion']);

Route::post('/update_calendarizacion',[CalendarizacionController::class, 'update_calendarizacion']);

Route::get('/Primer_Unidad',[UnidadesControlador::class,'Primer_Unidad']);

Route::post('/update_temas',[ContenidosController::class, 'update_temas']);

Route::post('/update_act',[ContenidosController::class, 'update_act']);

Route::post('/update_plan',[ContenidosController::class, 'update_plan']);

Route::post('/revisiones',[ContenidosController::class, 'revisiones']);

Route::post('/update_datos_ins',[AdminisionesController::class, 'update_datos_ins']);

Route::post('/update_diaco',[AdminisionesController::class, 'update_diaco']);




//Rutas Pre-Inscribir_estudiantes

Route::get('/Admisiones', [AdminisionesController::class, 'adm'])->middleware('auth');



Route::get('/Precios', [AsignarPrecioController::class, 'precios'])->middleware('auth');
