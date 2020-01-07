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


Route::get('/pelicula/{id}', "PeliculasController@show")->name('pelicula.{id}');

Route::get('/pelicula/edit/{id}', "PeliculasController@edit")->name('pelicula.edit');

Route::patch('/pelicula/edit/{id}', "PeliculasController@update")->name('pelicula.edit');




Route::get('/actores', 'ActoresController@index')->name('actores');

Route::get('/actores/agregarActor', 'ActoresController@create')->name('actores.agregarActor');

Route::post('/actores/agregarActor', "ActoresController@store")->name('actores.agregarActor');

Route::get('/actor/{id}', "ActoresController@show")->name('actor');



Route::get('/generos', 'GenerosController@index')->name('generos');
