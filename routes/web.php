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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('my-notification/{type}', 'HomeController@myNotification');

Route::view('/crearHorario', 'Home');

//Terceros
Route::view('/registrarTercero','Home');
Route::post('/setTercero', 'TerceroController@store');
Route::view('/registrarVehiculo','Home');

//Ruta
Route::view('/registrarRutas','Home');
Route::resource('/rutas-resource', 'RutaController');
Route::post('/setRuta', 'RutaController@store');

//Barrio
Route::resource('/barrio-resource', 'BarrioController');

//Vehiculo
Route::resource('/vehiculo-resource', 'VehiculoController');

//Horario
Route::post('/setHorario', 'HorarioController@store');


Route::view('/consultarRutasVehiculos','Home');
Route::view('/despacho','Home');
Route::view('/cantidadPasajeros','Home');
Route::view('/registrarUsuarios','Home');


