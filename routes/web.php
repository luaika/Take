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
    return view('home');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('my-notification/{type}', 'HomeController@myNotification');

Route::view('/crearHorario', 'Home');
Route::view('/registrarTercero','Home');
Route::view('/registrarVehiculo','Home');

//Ruta
Route::view('/registrarRutas','Home');
Route::post('/setRuta', 'RutaController@store');

Route::view('/consultarRutasVehiculos','Home');
Route::view('/despacho','Home');
Route::view('/cantidadPasajeros','Home');
Route::view('/registrarUsuarios','Home');


