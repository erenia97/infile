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

 Route::resource('/users', 'usuariosController');
 Route::get('/usuarios', 'usuariosController@mostrar' )->name('usuarios');
 Route::get('/perfil/{id}', 'usuariosController@show' )->name('perfil');
 Route::any('/edit/{id}', 'usuariosController@edit' )->name('edit');
 Route::get('/home', 'HomeController@index')->name('home');