<?php

Route::get('/', function () {
    return view('layouts.principal');
});

Route::get('/iniciarSesion', 'empleadosController@iniciarSesion');
Route::post('/entrarSistema', 'empleadosController@entrarSistema');

Route::get('/contacto', 'contactosController@contacto');
Route::post('/enviarMensaje', 'contactosController@enviarMensaje');

Route::resource('producto', 'productosController');