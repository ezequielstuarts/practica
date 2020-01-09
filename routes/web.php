<?php

Auth::routes();

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/welcome', 'WelcomeController@index')->name('welcome');

Route::get('/peliculas', 'PeliculasController@index')->name('peliculas');

Route::get('/pelicula/{id}', "PeliculasController@show")->name('pelicula.{id}');

Route::get('/actores', 'ActoresController@index')->name('actores');

Route::get('/actor/{id}', "ActoresController@show")->name('actor');

Route::get('/generos', 'GenerosController@index')->name('generos');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/actores/agregarActor', 'ActoresController@create')->name('actores.agregarActor');
    Route::post('/actores/agregarActor', "ActoresController@store")->name('actores.agregarActor');
    Route::get('/pelicula/edit/{id}', "PeliculasController@edit")->name('pelicula.edit');
    Route::patch('/pelicula/edit/{id}', "PeliculasController@update")->name('pelicula.edit');
});
