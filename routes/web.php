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

Route::get('/Contacto', function (){
    return view('Corporativa.Contacto');
});

/**
 * Alumnos
 */

/**
 * Instructor
 */
Route::get('/Alumnos', function (){
    return view('Instructor.alumnos');
});
