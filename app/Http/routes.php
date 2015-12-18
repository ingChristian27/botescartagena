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

Route::get('/dashboard',[
    'uses' => 'InicioController@inicio',
    'as' => 'dashboard'
  ] );
Route::get('/naves2', 'InicioController@GuardarUsuario');

Route::get('/destino', 'InicioController@destinos');

Route::get('/viaje', 'InicioController@crearviaje');

Route::get('/tiket', 'InicioController@crearTikets');


Route::get('/vernaves', 'InicioController@verNaves');

Route::get('/verviajes', 'InicioController@verViajes');

Route::get('/',[
  'uses' => 'comercialController@index',
  'as' => 'index'
  ] );

Route::get('/ver-reservas', [
  'uses' => 'reservaController@ver',
  'as' => 'ver_reservas'
  ]);

Route::post('/reservas', [
    'uses' => 'comercialController@otras_reserva',
    'as' => 'otras_reserva'
]);

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

Route::get('/detalle-viaje/{$id}',[
  'uses' => 'viajesController@show',
  'as' =>'viajes_detalle'
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

Route::get('/ver-nave/{nombre}',[
  'uses' => 'navesController@show',
  'as' => 'ver_nave'
]);
Route::get('/ver-viaje/{nombre}',[
  'uses' => 'viajesController@show',
  'as' => 'ver_viaje'
]);
Route::get('/eliminar/{id}',[
  'uses' => 'viajesController@destroy',
  'as' => 'eliminar_viaje'

]);

