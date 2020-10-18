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

Route::get('/registro', function () {
    return view('auth/register');
});

Route::resource('/', 'LoginController');
Route::post('login', 'Auth\LoginController@login')->name('login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//inicio de administrador
Route::get('/inicio', function () {
    return view('layouts/inicio');
});

Route::get('/estadisticas','EstadisticasController@index')->name('home');
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
Route::post('/vehiculoMatricula','VehiculoController@vehiculoMatricula');
Route::post('/vehiculoRuta','VehiculoController@vehiculoRuta');
Route::post('/vehiculoPoliza','VehiculoController@vehiculoPoliza');
Route::post('/vehiculoOperacion','VehiculoController@vehiculoOperacion');
Route::post('/vehiculoRtm','VehiculoController@vehiculoRtm');
Route::post('/vehiculoTercero','VehiculoController@vehiculoTercero');
Route::put('/updateVehiculo/{idVehiculo}', 'VehiculoController@update');
Route::get('/vehiculo-listMatricula/{idVehiculo}', 'VehiculoController@verMatricula');
Route::get('/vehiculo-listarPoliza/{idVehiculo}', 'VehiculoController@verPolizas');
Route::get('/vehiculo-listarRuta/{idVehiculo}', 'VehiculoController@verRutas');
Route::get('/vehiculo-listarOperacion/{idVehiculo}', 'VehiculoController@verOperaciones');
Route::get('/vehiculo-listarRtm/{idVehiculo}', 'VehiculoController@verRtm');
Route::get('/vehiculo-listarTerceros/{idVehiculo}', 'VehiculoController@verTerceros');

Route::delete('/vehiculoRuta-delete/{idVehiculoRuta}', 'VehiculoController@destroyRuta');
Route::delete('/vehiculoPoliza-delete/{idVehiculoPolia}', 'VehiculoController@destroyPoliza');
Route::delete('/vehiculoOperacion-delete/{idVehiculo}', 'VehiculoController@destroyOperacion');
Route::delete('/vehiculoRtm-delete/{idVehiculo}', 'VehiculoController@destroyRtm');
Route::delete('/vehiculoTercero-delete/{idVehiculo}', 'VehiculoController@destroyTercero');
Route::delete('/vehiculoMatricula-delete/{idVehiculo}', 'VehiculoController@destroyMatricula');
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
Route::get('/departamento', 'TerceroController@departamento');
Route::get('/municipio/{idDepartamento}', 'TerceroController@municipio');

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

