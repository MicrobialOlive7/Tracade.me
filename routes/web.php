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
    Route::get('/Grupos', 'Grupos\GruposController@index');

    Route::get('/AgregarGrupos', function (){
        return view('Instructor.CrearModGrupos', ['Grupo' => [],'Mod'=>'0']);
    });
    Route::get('/ModificarGrupos/{gru_id}', 'Grupos\GruposController@indexMod');
    /*Route::get('/ModificarGrupos', function (){
        return view('Instructor.CrearModGrupos');
    });*/


    /** Habilidades **/
    Route::get('/Habilidades', 'Habilidades\HabilidadesController@index');
    Route::get('/AgregarHabilidades', 'Habilidades\HabilidadesController@indexCrear');

    Route::get('/ModificarHabilidades/{hab_id}', 'Habilidades\HabilidadesController@indexModificar');

/** Calendario **/
    Route::get('/Calendario', function (){
            return view('Instructor.calendario');
    });

    Route::get('/AgregarEventos', function (){
        return view('Instructor.CrearModEventos');
    });

    Route::get('/ModificarEventos', function (){
        return view('Instructor.CrearModEventos');
    });
    Route::get('api-evento', 'EventoController@quickstart')->name('api-evento');
    Route::post('crear-evento', 'EventoController@create')->name('crear-evento');
    Route::post('modificar-evento/{id}', 'EventoController@update')->name('modificar-evento');
    Route::post('eliminar-evento/{id}', 'EventoController@delete')->name('eliminar-evento');


