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
    Route::get('/asistencias', 'Asistencias@index');
    Route::get('/lista', 'AlumnosController@mostrarBuscarListaAlumnos');
    Route::get('/buscar-alumnos', 'AlumnosController@mostrarBuscarListaAlumnos');
});

Route::get('/welcome', function () {
    return view('welcome');
});

//Route::get('asistencias/','Asistencias@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route:: namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route:: resource('/users','UsersController',['except'=>['show','create','store']]);
});
