<?php

Route::redirect('/', 'portada');
Route::get('/portada', 'HomeController@portada')->name('portada');

Auth::routes();

Route::prefix('socios')->group(function () {
    Route::get('/', 'ClienteController@index')->name('socios');
    Route::post('/nuevo', 'ClienteController@nuevo')->name('socios_new');
    Route::put('/update/{id}', 'ClienteController@update')->name('socios_update');
    Route::get('/editar/{id}', 'ClienteController@editar')->name('socios_edit');
    Route::delete('/delete/{id}', 'ClienteController@delete')->name('socios_delete');
});
Route::prefix('historias')->group(function () {
    Route::resource('/historias-data', 'HistoriasController');
    Route::get('/{id}', 'ClienteController@getHistories')->name('socios_historias');
    Route::get('/nueva/{id}', 'ClienteController@nuevaHistoria')->name('socios_historias_nueva');
});


Route::prefix('pagos')->group(function () {
    Route::resource('/pagos-data', 'PagosController');
    Route::get('/', 'PagosController@home')->name('pagos');
});

Route::resource('/usuarios', 'UserController');

