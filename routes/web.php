<?php

use App\Article;

Route::get('/', function (){
    return view('home');
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

Route::get('/articulos/{id}', 'ArticlesController@show');//->where('id', '[0-9]' + ->name('todos los articulos') el nombre ha de ser único

// Route::get('articulos', function(){
//     return view('articulos.index', ['articulos'=>Article::all()]);
// });
