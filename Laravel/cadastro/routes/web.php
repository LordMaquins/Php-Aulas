<?php



Route::get('/contato', function () {
    return view('welcome');
});
Route::get('contato', 'ContatoController@index');