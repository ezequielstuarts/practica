<?php

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



Route::get('/peliculas', 'PeliculasController@index')->name('peliculas');

Route::get('/pelicula/edit/{id}', 'GenerosController@generoPeliculas')->name('peliculas.edit.{id}');

Route::post('pelicula/edit/{id}', 'PeliculasController@edit')->name('peliculas.edit');

Route::get('/pelicula/{id}', "PeliculasController@show")->name('peliculas');

Route::get('/peliculas', "PeliculasController@index")->name('peliculas');



Route::get('/actores', 'ActoresController@index')->name('peliculas');

Route::get('/actores/agregarActor', 'PeliculasController@indexfav')->name('actores.agregarActor');

Route::post('/actores/agregarActor', "ActoresController@store")->name('actores.agregarActor');

Route::post('/actores/buscar', "ActoresController@search")->name('actor.buscar');

Route::get('/actor/{id}', "ActoresController@show")->name('actor');

Route::post('/actor/delete', "ActoresController@destroy")->name('actor.delete');

Route::get('/actor/editar/{id}', "ActorController@edit")->name('actor.editar');

Route::patch('/actor/update/{id}', "ActorController@update")->name('actor.update');


Route::get('/generos', 'GenerosController@index')->name('peliculas');