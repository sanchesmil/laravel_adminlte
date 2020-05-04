<?php

//Rotas de autenticação geradas pelo Laravel
Auth::routes();

//Rotas externas 
Route::group(['namespace' => 'Home'], function(){
    // Rota de acesso à HOME
    Route::get('/', 'HomeController@index')->name('home.index');
});

//Rotas internas
Route::group(['namespace' => 'Painel'], function(){
    Route::get('/painel', 'PainelController@index')->name('painel.principal.index');
    Route::get('/painel/usuarios', 'Usuarios\UsuariosController@index')->name('painel.usuarios.index');
    Route::get('/painel/usuarios/create', 'Usuarios\UsuariosController@create')->name('painel.usuarios.create');
    Route::post('/painel/usuarios/store', 'Usuarios\UsuariosController@store')->name('painel.usuarios.store');
});


Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('/');
});

 