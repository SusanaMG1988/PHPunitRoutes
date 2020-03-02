<?php

use App\Article;
use App\Http\Controllers\ArticlesController;

Route::get('/', function (){
    return view('inicio');
})->name('inicio');

Route::get('/usuarios', 'UserController@index')->name('users');

// Route::get('/usuarios/detalles', function (){
//     return 'Mostrando el detalle del usuario'.$_GET['id'];

// });

Route::get('/usuarios/nuevo','UserController@create')->name('new_user');

Route::get('/usuarios/{id}', 'UserController@show')->where('id', '[0-9]+')->name('detalle_user');

Route::get('/usuarios/{id}/edit', 'UserController@edit')->where('id', '[0-9]+');

Route::get('/saludo/{name}/{nickname?}','WelcomeController');

Route::get('/pasteles', 'PastelController@index');

Route::get('/pasteles/{id}', 'PastelController@show')->where('id', '[0-9 ]+');

Route::get('articulos', 'ArticlesController@index');

Route::get('/articulos/{id}', 'ArticlesController@show')->where('id', '[0-9]+')->name('todos_articulos'); //el nombre ha de ser único

Route::get('/articulos/crear', 'ArticlesController@crear')->name("articulo_nuevo");
Route::post('/articulos/store','ArticlesController@store')->name("store_articulo");
// Route::get('articulos', function(){
//     return view('articulos.index', ['articulos'=>Article::all()]);
// });

Route::get('/articulos/update/{id}', 'ArticlesController@update')->name('modificar_articulo');
Route::post('/articulos/update/{id}', 'ArticlesController@store_update');
Route::get('/articulos/delete/{id}', 'ArticlesController@delete')->name('eliminar_articulo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
