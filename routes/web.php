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
**/

Auth::routes();



Route::get('/home', 'Corporativa\CorpController@index')->name('home');


/**
 * Página Corporativa
 */
Route::get('/', function (){
    return view('Corporativa.index');
});

Route::get('/Nosotros', function (){
    return view('Corporativa.Nosotros');
});

Route::get('/Precios', function (){
    return view('Corporativa.Precios');
});

Route::get('/Contacto', function (){
    return view('Corporativa.Contacto');
});


/**
 * Alumnos
 */

/**
 * Instructor
 */
    Route::get('tmp-pago', function (){
        return view('instructor.TMP-pago');
    })->name('tmp-pago');

    /**Dashboard**/

    /** Alumnos **/
    Route::get('/Alumnos', 'AlumnoController@show')->name('alumnos');
    /*Route::get('/AgregarAlumno', function (){
        return view('Instructor.CrearModAlumno');
    });*/
    //Route::get('/AgregarAlumno', 'Aut');

    Route::get('/ModificarAlumno/{id}', 'AlumnoController@showUpdate')->name('modificar-alumno-vista');
    Route::post('modificar-alumno/{id}', 'AlumnoController@update')->name('modificar-alumno');


    Route::get('eliminar-alumno/{id}', 'AlumnoController@delete')->name('eliminar-alumno');

    /** Grupos **/
    // Vista de formulario de crear grupo
    Route::get('crear-grupo', 'Grupos\GruposController@show')->name('crear-grupo');
    // Crea un grupo nuevo
    Route::post('crear-grupo-crear', 'Grupos\GruposController@create')->name('crear-grupo-crear');

    // Visualizar una lista de todos los grupos existentes
    Route::get('grupos', 'Grupos\GruposController@index')->name('grupos');

    //Eliminar un grupo
    Route::get('eliminar-grupo/{id}', 'Grupos\GruposController@delete')->name('eliminar-grupo');

    // Vista de modificar grupo
    Route::get('modificar-grupo/{id}', 'Grupos\GruposController@showUpdate')->name('modificar-grupo');
    // Modificar grupo
    Route::post('modificar-grupo-modificar/{id}', 'Grupos\GruposController@update')->name('modificar-grupo-modificar');

    // Vista de agregar alumnos y contenido de cada grupo
    Route::get('agregar-alumnos/{id}', 'Grupos\GruposController@showAgregarAlumnos')->name('agregar-alumnos');
    // Agregar un alumno a un grupo
    Route::get('agregar-alumnos-agregar/{id}/{alu_id}', 'Grupos\GruposController@agregarAlumnos')->name('agregar-alumnos-agregar');

    // Elimina un alumno de un grupo
    Route::get('quitar-alumno/{id}/{gId}', 'Grupos\GruposController@deleteAlumno')->name('quitar-alumno');



/** Calendario **/

    Route::get('/Calendario', function (){
            return view('Instructor.calendario');
    })->name('calendario');

    Route::get('/AgregarEventos', function (){
        return view('Instructor.CrearModEventos');
    });
    Route::get('/ModificarEventos','EventoController@ver')->name('ModificarEventos');
    Route::get('/EliminarEventos','EventoController@verEliminar')->name('EliminarEventos');

    Route::get('api-evento', 'EventoController@quickstart')->name('api-evento');
    Route::post('crear-evento', 'EventoController@create')->name('crear-evento');
    Route::post('modificar-evento', 'EventoController@update')->name('modificar-evento');
    Route::post('eliminar-evento', 'EventoController@delete')->name('eliminar-evento');


    /**Habilidades**/
    Route::get('/Habilidades', 'Habilidades\HabilidadesController@index')->name('Habilidades');
    Route::get('/AgregarHabilidades', 'Habilidades\HabilidadesController@indexCrear');

    Route::get('/ModificarHabilidades/{hab_id}', 'Habilidades\HabilidadesController@indexModificar');

    Route::post('modificar-habilidad/{id}', 'Habilidades\HabilidadesController@update')->name('modificar-habilidad');
    Route::post('crear-habilidad', 'Habilidades\HabilidadesController@create')->name('crear-habilidad');
    Route::get('borrar-habilidad/{id}', 'Habilidades\HabilidadesController@delete')->name('borrar-habilidad');
