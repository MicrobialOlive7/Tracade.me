<?php
/**
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
|--------------------------------------------------------------------------
| Controller dentro de carpetas
|--------------------------------------------------------------------------
|
| - Comando: php artisan make:controller Carpeta\NombreController
|   * Se debe crear con el comando para que laravel sepa que esta
|     dentro de esa carpeta
| - Ruta: Carpeta\NombreController@funcion
|
|--------------------------------------------------------------------------
 **/
/**
|-------------------------------------------
| Pagina corporativa
|-------------------------------------------
 */
// Página de incio
Route::get('/', function (){
    return view('Corporativa.index');
});
Route::get('/home', 'Corporativa\CorpController@index')->name('home');
//Pagina de nosotros
Route::get('/Nosotros', function (){
    return view('Corporativa.Nosotros');
});
//Pagina de precios
Route::get('/Precios', function (){
    return view('Corporativa.Precios');
})->name('precios');
//Pagina de contacto
//Desplieg la view
Route::get('/Contacto', 'Corporativa\ContactController@create')->name('contacto');
//Funcion de contact
Route::post('/Contacto', 'Corporativa\ContactController@store') ->name('contactoCreate');
/**
|-------------------------------------------
| Registro de Usuarios
|-------------------------------------------
 */
// Auth routes
/**
|-------------------------------------------
| Resumen de Compra
|-------------------------------------------
 */
Route::get('compra/{planID?}', 'PagoController@show')->name('compra')->middleware('auth', 'admin');
Route::get('plan-contratado/{planID}/{acaID}', 'PagoController@register')->name('plan-contratado');
Route::get('crear-plan/{acaID}/{precio}', 'PagoController@create')->name('planCreate');
/**
|-------------------------------------------
| Autentificacion de Usuarios
|-------------------------------------------
 */
/// Rutas de
//- login
// - Registro de alumnos
// - Logout
Auth::routes();
/**
|-------------------------------------------
| Administrador - Usuario
|-------------------------------------------
 */
Route::get('/inicio', 'LineController@index')->name('inicio')->middleware('auth', 'admin');

Route::get('/perfil', 'AdministradorController@showPerfil')->name('perfil')->middleware('auth', 'admin');

Route::post('adminUpdate', 'AdministradorController@update')->name('adminUpdate');
/**
|--------------
|---- Grupos
|--------------
 */
/// Vista /// Visualizar una lista de todos los grupos existentes
Route::get('grupos', 'Grupos\GruposController@read')->name('grupos')->middleware('auth', 'admin');
//--- Crear ---//
// Vista
Route::get('crear-grupo', 'Grupos\GruposController@showCreate')->name('crear-grupo')->middleware('auth', 'admin');
// Funcion
Route::post('grupoCreate', 'Grupos\GruposController@create')->name('grupoCreate')->middleware('auth', 'admin');
//--- Modificar ---//
// Vista
Route::get('modificar-grupo/{id}', 'Grupos\GruposController@showUpdate')->name('modificar-grupo')->middleware('auth', 'admin');
// Funcion
Route::post('grupoUpdate/{id}', 'Grupos\GruposController@update')->name('grupoUpdate')->middleware('auth', 'admin');
//--- Eliminar ---//
/// Funcion
Route::get('grupoDelete/{id}', 'Grupos\GruposController@delete')->name('grupoDelete')->middleware('auth', 'admin');
//--- Alumnos por grupo ---//
// Vista // Visualizar alumnos dentro de grupo y disponibles para agregar
// Dentro de la misma vista se agregar y eliminan alumnos
Route::get('agregar-alumnos/{id}', 'Grupos\GruposController@showAgregarAlumnos')->name('agregar-alumnos')->middleware('auth', 'admin');
/// Agregar
// Funcion
Route::get('addAlumno/{id}/{alu_id}', 'Grupos\GruposController@add')->name('addAlumno')->middleware('auth', 'admin');
// Eliminar
// Funcion
Route::get('deleteAlumno/{id}/{gId}', 'Grupos\GruposController@deleteAlumno')->name('deleteAlumno')->middleware('auth', 'admin');
/// Funcion /// Eliminar multiples alumnos
Route::post('eliminar-grupos', 'Grupos\GruposController@multipleDelte')->name('gruposDelete')->middleware('auth', 'admin');
/**
|--------------
|---- Alumnos
|--------------
 */
Route::get('crear-alumno', 'AlumnoController@show')->name('crear-alumno')->middleware('auth', 'admin');
Route::post('alumnoCreate', 'AlumnoController@create')->name('alumnoCreate')->middleware('auth', 'admin');
/// Vista /// Visualizar lista de todos los alumnos registrados
Route::get('/alumnos', 'AlumnoController@read')->name('alumnos')->middleware('auth', 'admin');
//--- Modificar ---//
// Vista
Route::get('/ModificarAlumno/{id}', 'AlumnoController@showUpdate')->name('modificar-alumno-vista')->middleware('auth', 'admin');
// Funcion
Route::post('modificar-alumno/{id}', 'AlumnoController@update')->name('modificar-alumno')->middleware('auth', 'admin');
//--- Eliminar ---//
// Funcion
Route::get('eliminar-alumno/{id}', 'AlumnoController@delete')->name('eliminar-alumno')->middleware('auth', 'admin');
/// Vista /// Visualizar todas las habilidades aprendidas por alumno
/// visualziar las habilidades disponibles para aprender
Route::get('habilidades-alumno/{id}', 'AlumnoController@habilidades')->name('habilidades-alumno')->middleware('auth', 'admin');


/// Funcion /// Eliminar multiples alumnos
Route::post('eliminar-alumnos', 'AlumnoController@multipleDelte')->name('alumnosDelete')->middleware('auth', 'admin');

/**
|--------------
|---- Habilidades
|--------------
 */
// Vista // Visualizar lista de todas las habilidades
Route::get('/habilidades', 'Habilidades\HabilidadesController@read')->name('Habilidades')->middleware('auth', 'admin');
//--- Crear ---//
// Vista
Route::get('crear-habilidad', 'Habilidades\HabilidadesController@showCreate')->name('crear-habilidad')->middleware('auth', 'admin');
// Funcion
Route::post('habilidadCreate', 'Habilidades\HabilidadesController@create')->name('habilidadCreate')->middleware('auth', 'admin');
//--- Modificar ---//
// Vista
Route::get('modificar-habilidad/{hab_id}', 'Habilidades\HabilidadesController@showUpdate')->name('modificar-habilidad')->middleware('auth', 'admin');
// Funcion
Route::post('habilidadUpdate/{id}', 'Habilidades\HabilidadesController@update')->name('habilidadUpdate')->middleware('auth', 'admin');
//--- Eliminar ---//
// Funcion
Route::get('habilidadDelete/{id}', 'Habilidades\HabilidadesController@delete')->name('habilidadDelete')->middleware('auth', 'admin');


/// Funcion /// Eliminar multiples habilidades
Route::post('eliminar-habilidades', 'Habilidades\HabilidadesController@multipleDelte')->name('habilidadesDelete')->middleware('auth', 'admin');

// Vista // Visualizar detalle de la habilidad
Route::get('/detalleHabilidad/{id}', 'Habilidades\HabilidadesController@detailread')->name('detalle-Habilidad')->middleware('auth', 'admin');

/**
|--------------
|---- Evaluciones
|--------------
 */
/// Vista /// Visualizar las evaluaciones por alumno por habilidad
Route::get('evaluaciones/{hab_id}/{alu_id}', 'EvaluacionController@read')->name('evaluaciones')->middleware('auth', 'admin');
//--- Crear ---//
// Vista
Route::get('evaluar/{hab_id}/{alu_id}', 'EvaluacionController@showCreate')->name('evaluar')->middleware('auth', 'admin');
// Funcion
Route::post('evaluacionCreate/{hab_id}/{alu_id}', 'EvaluacionController@create')->name('evaluacionCreate')->middleware('auth', 'admin');
//--- Modificar ---//
// Vista
Route::get('modificar-evaluacion/{hab_id}/{alu_id}/{eva_id}', 'EvaluacionController@showUpdate')->name('modificar-evaluacion')->middleware('auth', 'admin');
// Funcion
Route::post('evaluacionUpdate/{id}/{hab_id}/{alu_id}', 'EvaluacionController@update')->name('evaluacionUpdate')->middleware('auth', 'admin');
//--- Eliminar ---//
// Funcion
Route::get('evaluacionDelete/{hab_id}/{alu_id}/{eva_id}', 'EvaluacionController@delete')->name('evaluacionDelete')->middleware('auth', 'admin');

/// Funcion /// Eliminar multiples evaluaciones
Route::post('eliminar-habilidades/{hab_id}/{alu_id}', 'EvaluacionController@multipleDelte')->name('evaluacionesDelete')->middleware('auth', 'admin');
/**
|--------------
|---- Eventos (Calendario)
|--------------
 */
/// Vista /// Mostrar calendario con eventos
Route::get('/calendario', function (){
    return view('Instructor.calendario');
})->name('calendario')->middleware('auth', 'admin');
//--- Crear ---//
// Vista
Route::get('crear-evento', 'EventoController@show')->name('crear-evento')->middleware('auth', 'admin');
// Funcion
Route::post('eventoCreate', 'EventoController@create')->name('eventoCreate')->middleware('auth', 'admin');
//--- Modificar ---//
// Vista
Route::get('modificar-evento','EventoController@showUpdate')->name('modificar-evento')->middleware('auth', 'admin');
// Funcion
Route::post('eventoUpdate', 'EventoController@update')->name('eventoUpdate')->middleware('auth', 'admin');
//--- Eliminar ---//
// Vista
Route::get('eliminar-evento','EventoController@showDelete')->name('eliminar-evento')->middleware('auth', 'admin');
// Funcion
Route::post('eventoDelete', 'EventoController@delete')->name('eventoDelete')->middleware('auth', 'admin');
//--- API ---//
Route::get('api-evento', 'EventoController@quickstart')->name('api-evento')->middleware('auth', 'admin');

/**
|--------------
|---- Perfil
|--------------
 */

Route::get('mi-perfil', function (){
    return view('instructor.perfil');
})->name('mi-perfil')->middleware('auth', 'admin');
/**
|--------------
|---- Politicas
|--------------
 */
Route::get('/politicas', function (){
    return view('instructor.politicas');
})->name('politicas')->middleware('auth', 'admin');
/**
|--------------
|---- Temporales
|--------------
 */
// Prueba de paypal
Route::get('tmp-pago', function (){
    return view('instructor.TMP-pago');
})->name('tmp-pago');
Route::get('/Inicio', 'LineController@index')->name('Inicio');



/**
|-------------------------------------------
| Alumno - Usuario
|-------------------------------------------*/

/**
|--------------
|---- Habilidades
|--------------
 */
// Vista // Visualizar lista de todas las habilidades
Route::get('/alumno/habilidades', 'Alumno\HabilidadesController@read')->name('alumno-habilidades')->middleware('auth', 'alumno');

/// Vista /// Visualizar las evaluaciones por alumno por habilidad
Route::get('alumno/evaluaciones/{hab_id}', 'Alumno\EvaluacionController@read')->name('alumno-evaluaciones')->middleware('auth', 'alumno');

// Vista // Visualizar detalle de la habilidad
Route::get('/alumno/detalleHabilidad/{id}', 'Alumno\HabilidadesController@detailread')->name('alumno-detalle')->middleware('auth', 'alumno');

// Funcion // Crear notas de habilidad
Route::post('notasCreate', 'Alumno\notasController@create')->name('notasCreate')->middleware('auth', 'alumno');

// Funcion // Modificar notas de habilidad
Route::post('notasModify', 'Alumno\notasController@modify')->name('notasModify')->middleware('auth', 'alumno');

// Funcion // Eliminar notas de habilidad
Route::post('notasDelete', 'Alumno\notasController@delete')->name('notasDelete')->middleware('auth', 'alumno');

/**
|--------------
|---- Calendario
|--------------
 */
Route::get('/alumno/calendario', function (){
    return view('Alumno.calendario');
})->name('alumno-calendario')->middleware('auth', 'alumno');
/**
|--------------
|---- Inicio
|--------------
 */
Route::get('/alumno/inicio', 'Alumno\ChartsController@index')->name('alumno-inicio')->middleware('auth', 'alumno');

/**
|--------------
|---- Politicas
|--------------
 */
Route::get('/alumno/politicas', function (){
    return view('alumno.politicas');
})->name('politicas')->middleware('auth', 'alumno');


/**
|--------------
|---- Perfil
|--------------
 */

Route::get('alumno/perfil', function (){
    return view('Alumno.perfil');
})->name('alumno-perfil')->middleware('auth', 'alumno');

Route::post('alumno/updatePerfil', 'Alumno\AlumnoController@update')->name('perfilAlumnoUpdate')->middleware('auth', 'alumno');


