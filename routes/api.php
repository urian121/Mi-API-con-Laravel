<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


/*Rutas para mi API*/
Route::get('estudiantes', 'EstudiantesController@index')->name('TodoStudents'); //listar estudiantes
Route::post('estudiantes', 'EstudiantesController@add')->name('AddEstudiantes'); //agregar estudiantes
Route::get('estudiantes/{id}', 'EstudiantesController@buscar')->name('BuscarStudents'); //Buscar estudiantes
Route::post('estudiantes/{id}', 'EstudiantesController@editar')->name('EditarStudents'); //Editar estudiantes
Route::get('estudiantes/borrar/{id}', 'EstudiantesController@borrar')->name('BorrarStudents'); //Editar estudiantes
