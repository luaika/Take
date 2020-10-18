<?php

use Illuminate\Support\Facades\Route;

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
    return view('layouts/inicio');
});

Route::resource('/login', 'LoginController');

//inicio de administrador
Route::get('/inicio', function () {
    return view('layouts/inicio');
});

Route::get('/estadisticas','EstadisticasController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('my-notification/{type}', 'HomeController@myNotification');

Route::view('/crearHorario', 'Home');

//Terceros
Route::view('/registrarTercero','Home');
Route::post('/setTercero', 'TerceroController@store');

//Vehículoa
Route::view('/registrarVehiculo','Home');
Route::post('/setVehiculo','VehiculoController@store');

//Ruta
Route::view('/registrarRutas','Home');
Route::resource('/rutas-resource', 'RutaController');
Route::post('/setRuta', 'RutaController@store');
Route::put('/updateRuta/{idRuta}', 'RutaController@update');
Route::delete('/rutas-delete/{idRuta}', 'RutaController@destroy');
Route::post('/stateRuta','RutaController@stateRuta');
//Route::get('changeStatus', 'UserController@ChangeRutaStatus');

//Barrio
Route::resource('/barrio-resource', 'BarrioController');

//Vehiculo
Route::resource('/vehiculo-resource', 'VehiculoController');

//Horario
Route::post('/setHorario', 'HorarioController@store');
Route::put('/updateHorario/{idHorario}', 'HorarioController@update');
Route::delete('/horario-delete/{idHorario}', 'HorarioController@destroy');
Route::resource('/horario-resource', 'HorarioController');

//Tercero
Route::resource('/tercero-resource', 'TerceroController');

//Usuario
Route::post('/setUsuario', 'UsuarioController@store');
Route::resource('/usuario-resource', 'UsuarioController');
Route::put('/updateUsuario/{idUsuario}', 'UsuarioController@update');
Route::delete('/usuario-delete/{idUsuario}', 'UsuarioController@destroy');
Route::post('/stateUsuario','UsuarioController@stateUsuario');


Route::view('/consultarRutasVehiculos','Home');
Route::view('/despacho','Home');
Route::view('/cantidadPasajeros','Home');
Route::view('/registrarUsuarios','Home');




