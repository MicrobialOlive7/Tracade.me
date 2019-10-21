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
*/

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
    Route::get('/Alumnos', function (){
        return view('Instructor.alumnos');
    });
    Route::get('/AgregarAlumno', function (){
        return view('Instructor.CrearModAlumno');
    });
    Route::get('/ModificarAlumno', function (){
        return view('Instructor.CrearModAlumno');
    });

    /** Grupos **/
    Route::get('/Grupos', function (){
        return view('Instructor.grupos');
    });
    Route::get('/AgregarGrupos', function (){
        return view('Instructor.CrearModGrupos');
    });
    Route::get('/ModificarGrupos', function (){
        return view('Instructor.CrearModGrupos');
    });

    /** Habilidades **/
    Route::get('/Habilidades', function (){
        return view('Instructor.habilidades');
    });
    Route::get('/AgregarHabilidades', function (){
        return view('Instructor.CrearModHabilidades');
    });
    Route::get('/ModificarHabilidades', function (){
        return view('Instructor.CrearModHabilidades');
    });

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
