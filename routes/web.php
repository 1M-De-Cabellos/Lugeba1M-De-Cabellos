<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\BarberosController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\HorariosController;
use App\Http\Controllers\CitasController;

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

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('login');
Route::post('/recoverPassword', [LoginController::class, 'forgotPassword']);
//routes clientes
Route::post('/add-clientes', [ClientesController::class, 'store']);
Route::post('/login', [LoginController::class, 'login']);
//agrupacion de rutas
Route::group(['middleware' => 'auth'], function(){
    //routes servicios
    Route::get('/', function () {
        return view('index');
    });
    //routes servicios
    Route::get('/citas', function () {
        return view('hist-citas');
    });
    Route::get('/getServices', [ServiciosController::class, 'getServices']);
    Route::get('/getServicesPrice/{id}', [ServiciosController::class, 'getServicesPrice']);
    //routes barberos
    Route::get('/getBarbers/{id}', [BarberosController::class, 'getBarbers']);
    Route::get('/getBarberPhoto/{id}', [BarberosController::class, 'getBarberPhoto']);
    //routes pagos
    Route::get('/getPayments', [PagosController::class, 'getPayments']);
    //routes hoararios
    Route::get('/getSchedules/{id}/{id2}/{dia}', [HorariosController::class, 'getSchedules']);
    //routes citas
    Route::post('/add-citas', [CitasController::class, 'store']);
    Route::get('/getCitas/{filtro}', [CitasController::class, 'getCitas']);
    Route::get('/cancelar/{id}', [CitasController::class, 'cancelar']);
    //routes cerrar sesion
    Route::get('/logout', [LoginController::class, 'logout']);
});