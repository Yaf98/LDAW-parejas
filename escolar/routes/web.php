<?php

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
    $name = request('name');
    echo $name;
    return view('welcome');
});

Route::group(['prefix' => 'alumnos'], function(){
    Route::get('/', 'AlumnosController@mostrarOpciones');
    Route::get('/chequearEvento', 'AlumnosController@mostrarChequearForm');
    Route::post('/chequearEvento', 'AlumnosController@chequearEvento');
    Route::get('/buscar', 'AlumnosController@mostrarBuscarLugarAlumno');
    Route::get('/buscarLugarAlumno', 'AlumnosController@buscarLugarAlumno');
    Route::get('/listaAlumnos', 'AlumnosController@mostrarListaAlumnos');
});

Route::get('/welcome', function () {
    return view('welcome');
});
