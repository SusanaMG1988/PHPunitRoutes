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
#muestra el inicio de laravel, home predeterminado el cual te lleva a la documentación entre otrod
// Route::get('/', function () {
//     return view('welcome');
// });

///////////////////////////////区切り///////////////////////////////////////////////
Route::get('/', function(){
    return 'Home';
});


Route::get('/usuarios', function(){
    return 'Usuarios';
});
 
//Route::get('/Usuarios/detalles', function(){
    //return 'Mostrando el detalle del usuario'.$_GET('id');
// });

Route::get('/usuarios/{id}', function($id){
    return 'Mostrando detalle del usuario '.$id;
})->where('id', '[0-9]+');

Route::get('/usuarios/nuevo',function(){
    return 'Crear un nuevo Usuario';
});

Route::get('/saludo/{name}/{nickname?}',function($name, $nickname = null){
    if($nickname){
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    }else{
        return "Bienvenido {$name}, no tienes apodo";
    }
    
});