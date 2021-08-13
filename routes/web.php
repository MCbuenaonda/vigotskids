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
    return view('welcome');
});

Auth::routes([ 'verify' => true ]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/grupos', 'GrupoController@index')->name('grupos.index');
Route::get('/grupos/create', 'GrupoController@create')->name('grupos.create');
Route::post('/grupos/store', 'GrupoController@store')->name('grupos.store');
Route::get('/grupos/{grupo}/assign', 'GrupoController@assign')->name('grupos.assign');
Route::post('/grupos/{grupo}/add', 'GrupoController@add')->name('grupos.add');
Route::get('/grupos/{grupo}/edit', 'GrupoController@edit')->name('grupos.edit');
Route::post('/grupos/{grupo}', 'GrupoController@update')->name('grupos.update');
Route::get('/grupos/{grupo}', 'GrupoController@show')->name('grupos.show');
Route::delete('/grupos/{grupo}', 'GrupoController@destroy')->name('grupos.destroy');
Route::post('/grupos/{grupo}/change', 'GrupoController@change')->name('grupos.change');

Route::get('/cursos', 'CursoController@index')->name('cursos.index');
Route::get('/cursos/create', 'CursoController@create')->name('cursos.create');
Route::post('/cursos/store', 'CursoController@store')->name('cursos.store');
Route::get('/cursos/{curso}/assign', 'CursoController@assign')->name('cursos.assign');
Route::post('/cursos/add', 'CursoController@add')->name('cursos.add');
Route::get('/cursos/{curso}', 'CursoController@show')->name('cursos.show');
Route::get('/cursos/{curso}/edit', 'CursoController@edit')->name('cursos.edit');
Route::post('/cursos/{curso}', 'CursoController@update')->name('cursos.update');
Route::delete('/cursos/{curso}', 'CursoController@destroy')->name('cursos.destroy');
Route::post('/cursos/{curso}/change', 'CursoController@change')->name('cursos.change');

Route::get('/alumnos', 'AlumnoController@index')->name('alumnos.index');
Route::get('/alumnos/create', 'AlumnoController@create')->name('alumnos.create');
Route::post('/alumnos/store', 'AlumnoController@store')->name('alumnos.store');
Route::get('/alumnos/{alumno}/edit', 'AlumnoController@edit')->name('alumnos.edit');
Route::post('/alumnos/{alumno}', 'AlumnoController@update')->name('alumnos.update');
Route::get('/alumnos/{alumno}', 'AlumnoController@show')->name('alumnos.show');
Route::delete('/alumnos/{alumno}', 'AlumnoController@destroy')->name('alumnos.destroy');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
