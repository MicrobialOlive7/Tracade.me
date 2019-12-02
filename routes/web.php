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
});
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
Route::get('/RegistroUsuarios', function (){
    return view('Corporativa.RegistroUsuarios');
});
/**
|-------------------------------------------
| Resumen de Compra
|-------------------------------------------
 */
Route::get('/Compra', function (){
    return view('Corporativa.ResumenCompra');
});
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
Route::get('/inicio', 'LineController@index')->name('inicio');

Route::get('/perfil', function (){
    return view('Instructor.perfil');
})->name('perfil');
/**
|--------------
|---- Grupos
|--------------
 */
/// Vista /// Visualizar una lista de todos los grupos existentes
Route::get('grupos', 'Grupos\GruposController@read')->name('grupos');
//--- Crear ---//
// Vista
Route::get('crear-grupo', 'Grupos\GruposController@showCreate')->name('crear-grupo');
// Funcion
Route::post('grupoCreate', 'Grupos\GruposController@create')->name('grupoCreate');
//--- Modificar ---//
// Vista
Route::get('modificar-grupo/{id}', 'Grupos\GruposController@showUpdate')->name('modificar-grupo');
// Funcion
Route::post('grupoUpdate/{id}', 'Grupos\GruposController@update')->name('grupoUpdate');
//--- Eliminar ---//
/// Funcion
Route::get('grupoDelete/{id}', 'Grupos\GruposController@delete')->name('grupoDelete');
//--- Alumnos por grupo ---//
// Vista // Visualizar alumnos dentro de grupo y disponibles para agregar
// Dentro de la misma vista se agregar y eliminan alumnos
Route::get('agregar-alumnos/{id}', 'Grupos\GruposController@showAgregarAlumnos')->name('agregar-alumnos');
/// Agregar
// Funcion
Route::get('addAlumno/{id}/{alu_id}', 'Grupos\GruposController@add')->name('addAlumno');
// Eliminar
// Funcion
Route::get('deleteAlumno/{id}/{gId}', 'Grupos\GruposController@deleteAlumno')->name('deleteAlumno');
/// Funcion /// Eliminar multiples alumnos
Route::post('eliminar-grupos', 'Grupos\GruposController@multipleDelte')->name('gruposDelete');
/**
|--------------
|---- Alumnos
|--------------
 */
/// Vista /// Visualizar lista de todos los alumnos registrados
Route::get('/alumnos', 'AlumnoController@read')->name('alumnos');
//--- Modificar ---//
// Vista
Route::get('/ModificarAlumno/{id}', 'AlumnoController@showUpdate')->name('modificar-alumno-vista');
// Funcion
Route::post('modificar-alumno/{id}', 'AlumnoController@update')->name('modificar-alumno');
//--- Eliminar ---//
// Funcion
Route::get('eliminar-alumno/{id}', 'AlumnoController@delete')->name('eliminar-alumno');
/// Vista /// Visualizar todas las habilidades aprendidas por alumno
/// visualziar las habilidades disponibles para aprender
Route::get('habilidades-alumno/{id}', 'AlumnoController@habilidades')->name('habilidades-alumno');

/// Funcion /// Eliminar multiples alumnos
Route::post('eliminar-alumnos', 'AlumnoController@multipleDelte')->name('alumnosDelete');

/**
|--------------
|---- Habilidades
|--------------
 */
// Vista // Visualizar lista de todas las habilidades
Route::get('/habilidades', 'Habilidades\HabilidadesController@read')->name('Habilidades');
//--- Crear ---//
// Vista
Route::get('crear-habilidad', 'Habilidades\HabilidadesController@showCreate')->name('crear-habilidad');
// Funcion
Route::post('habilidadCreate', 'Habilidades\HabilidadesController@create')->name('habilidadCreate');
//--- Modificar ---//
// Vista
Route::get('modificar-habilidad/{hab_id}', 'Habilidades\HabilidadesController@showUpdate')->name('modificar-habilidad');
// Funcion
Route::post('habilidadUpdate/{id}', 'Habilidades\HabilidadesController@update')->name('habilidadUpdate');
//--- Eliminar ---//
// Funcion
Route::get('habilidadDelete/{id}', 'Habilidades\HabilidadesController@delete')->name('habilidadDelete');


/// Funcion /// Eliminar multiples habilidades
Route::post('eliminar-habilidades', 'Habilidades\HabilidadesController@multipleDelte')->name('habilidadesDelete');

// Vista // Visualizar detalle de la habilidad
Route::get('/detalleHabilidad', 'Habilidades\HabilidadesController@detailread')->name('detalle-Habilidad');

/**
|--------------
|---- Evaluciones
|--------------
 */
/// Vista /// Visualizar las evaluaciones por alumno por habilidad
Route::get('evaluaciones/{hab_id}/{alu_id}', 'EvaluacionController@read')->name('evaluaciones');
//--- Crear ---//
// Vista
Route::get('evaluar/{hab_id}/{alu_id}', 'EvaluacionController@showCreate')->name('evaluar');
// Funcion
Route::post('evaluacionCreate/{hab_id}/{alu_id}', 'EvaluacionController@create')->name('evaluacionCreate');
//--- Modificar ---//
// Vista
Route::get('modificar-evaluacion/{hab_id}/{alu_id}/{eva_id}', 'EvaluacionController@showUpdate')->name('modificar-evaluacion');
// Funcion
Route::post('evaluacionUpdate/{id}/{hab_id}/{alu_id}', 'EvaluacionController@update')->name('evaluacionUpdate');
//--- Eliminar ---//
// Funcion
Route::get('evaluacionDelete/{hab_id}/{alu_id}/{eva_id}', 'EvaluacionController@delete')->name('evaluacionDelete');

/// Funcion /// Eliminar multiples evaluaciones
Route::post('eliminar-habilidades/{hab_id}/{alu_id}', 'EvaluacionController@multipleDelte')->name('evaluacionesDelete');
/**
|--------------
|---- Eventos (Calendario)
|--------------
 */
/// Vista /// Mostrar calendario con eventos
Route::get('/calendario', function (){
    return view('Instructor.calendario');
})->name('calendario');
//--- Crear ---//
// Vista
Route::get('crear-evento', 'EventoController@show')->name('crear-evento');
// Funcion
Route::post('eventoCreate', 'EventoController@create')->name('eventoCreate');
//--- Modificar ---//
// Vista
Route::get('modificar-evento','EventoController@showUpdate')->name('modificar-evento');
// Funcion
Route::post('eventoUpdate', 'EventoController@update')->name('eventoUpdate');
//--- Eliminar ---//
// Vista
Route::get('eliminar-evento','EventoController@showDelete')->name('eliminar-evento');
// Funcion
Route::post('eventoDelete', 'EventoController@delete')->name('eventoDelete');
//--- API ---//
Route::get('api-evento', 'EventoController@quickstart')->name('api-evento');

/**
|--------------
|---- Perfil
|--------------
 */

Route::get('mi-perfil', function (){
    return view('instructor.perfil');
})->name('mi-perfil');
/**
|--------------
|---- Politicas
|--------------
 */
Route::get('/politicas', function (){
    return view('instructor.politicas');
})->name('politicas');
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
Route::get('/alumno/habilidades', 'Alumno\HabilidadesController@read')->name('alumno-habilidades');

/// Vista /// Visualizar las evaluaciones por alumno por habilidad
Route::get('alumno/evaluaciones/{hab_id}', 'Alumno\EvaluacionController@read')->name('alumno-evaluaciones');

/**
|--------------
|---- Calendario
|--------------
 */
Route::get('/alumno/calendario', function (){
    return view('Alumno.calendario');
})->name('alumno-calendario')->middleware('auth');
/**
|--------------
|---- Inicio
|--------------
 */
Route::get('/alumno/inicio', 'Alumno\ChartsController@index')->name('alumno-inicio');

/**
|--------------
|---- Politicas
|--------------
 */
Route::get('/alumno/politicas', function (){
    return view('alumno.politicas');
})->name('politicas');


/**
|--------------
|---- Perfil
|--------------
 */

Route::get('alumno/perfil', function (){
    return view('Alumno.perfil');
})->name('alumno-perfil');

Route::post('alumno/updatePerfil', 'Alumno\AlumnoController@update')->name('perfilAlumnoUpdate');

Route::get('test', 'AlumnoController@test')->name('test');

