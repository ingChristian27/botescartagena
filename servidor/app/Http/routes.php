<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */


Route::get('/naves2', 'InicioController@GuardarUsuario');

Route::get('/destino', 'InicioController@destinos');

Route::get('/viaje', 'InicioController@crearviaje');

Route::get('/tiket', 'InicioController@crearTikets');

Route::get('/vernaves', 'InicioController@verNaves');

Route::get('/verviajes', 'InicioController@verViajes');

Route::get('/', 'comercialController@index');

Route::get('/ver-reservas', 'reservaController@ver');

Route::post('/reservar', [
    'uses' => 'comercialController@store',
    'as' => 'formulario_compra'
]);
Route::post('/reservar/resumen_reserva', [
    'uses' => 'comercialController@reservar',
    'as' => 'resumen_r'
]);
Route::get('/naves',[
  'uses' =>  'navesController@index',
  'as'   => 'naves'
]);

Route::get('/viajes',[
  'uses' => 'viajesController@index',
  'as' =>'viajes'
]);

Route::get('/admin/reserva',[ 
  'uses' => 'reservaController@index',
  'as'  => 'reserva'
]);

Route::post('/admin/detalles', [
  'uses'=>'tiketController@store',
  'as'=> 'detalle_reserva'
]);

Route::post('/admin/reserva', [
    'uses'=>  'reservaController@store',
    'as' => 'reservar'
]);

Route::post('/viajes', [
    'uses' => 'viajesController@store',
    'as' => 'up_viajes'
]);


Route::post('/naves', [
    'uses' => 'navesController@store',
    'as' => 'update_naves',
]);

