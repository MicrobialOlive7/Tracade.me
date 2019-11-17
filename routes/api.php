<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('crear-grupo', 'Grupos\GruposController@create');
Route::post('modificar-grupo', 'Grupos\GruposController@update');
Route::post('borrar-grupo', 'Grupos\GruposController@delete');

Route::post('crear-habilidad', 'Habilidades\HabilidadesController@create');
Route::post('modificar-habilidad', 'Habilidades\HabilidadesController@update');
Route::post('borrar-habilidad', 'Habilidades\HabilidadesController@delete');
