<?php

use App\Especialidades;
use App\Http\Controllers\EspecialidadesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*ruta Especialidades*/

Route::get('/especialidad','EspecialidadesController@index');//muestra el listado de especilidades
Route::get('/especialidad/create','EspecialidadesController@create');//muestra el formulario de registro
Route::get('/especialidad/{especialidad}/edit','EspecialidadesController@edit');//devuelve la especialidad para ser editada
Route::post('/especialidad','EspecialidadesController@store');//para el envio del formulario
Route::put('/especialidad/{especialidad}','EspecialidadesController@update');//para el envio del formulario editado
Route::delete('/especialidad/{especialidad}','EspecialidadesController@destroy');

//medicos
Route::resource('medicos', 'MedicosController');//resource remplaza a tener que crear uno a uno los metodos GET, PUT y POST
//pacientes
Route::resource('pacientes', 'PacientesController');

