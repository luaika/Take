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
Route::delete('/vehiculo-delete/{idVehiculo}', 'VehiculoController@destroy');
Route::post('/stateVehiculo','VehiculoController@stateVehiculo');
Route::post('/vehiculoRuta','VehiculoController@vehiculoRuta');

//marca
Route::resource('/marca-resource', 'MarcaController');
//servicio
Route::resource('/servicio-resource', 'ServicioController');
//color
Route::resource('/color-resource','ColorController');
//clase
Route::resource('/clase-resource','ClaseController');
//carroceria
Route::resource('/carroceria-resource','CarroceriaController');

//combustible
Route::resource('/combustible-resource','CombustibleController');

//poliza
Route::resource('/poliza-resource','PolizaController');

//Horario
Route::post('/setHorario', 'HorarioController@store');
Route::put('/updateHorario/{idHorario}', 'HorarioController@update');
Route::delete('/horario-delete/{idHorario}', 'HorarioController@destroy');

Route::resource('/horario-resource', 'HorarioController');

//Tercero
Route::resource('/tercero-resource', 'TerceroController');
Route::post('/stateTerceros','TerceroController@stateTerceros');
Route::delete('/tercero-delete/{idTercero}', 'TerceroController@destroy');
Route::put('/updateTercero/{idTercero}', 'TerceroController@update');
Route::view('/registrarTercero','Home');
Route::post('/setTercero', 'TerceroController@store');

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




