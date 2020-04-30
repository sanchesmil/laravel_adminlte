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

Auth::routes();

Route::get('/', 'Home\HomeController@index')->name('home.index');
Route::get('/painel', 'Painel\PainelController@index')->name('painel.index');
Route::get('/painel/usuarios', 'Painel\PainelController@viewUsuarios')->name('painel.usuarios.index');

Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('/');
});

 