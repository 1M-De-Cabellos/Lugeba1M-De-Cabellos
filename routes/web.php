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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
});
//routes clientes
Route::post('/add-clientes', [ClientesController::class, 'store']);
Route::post('/login', [LoginController::class, 'login']);
//routes servicios
Route::get('/getServices', [ServiciosController::class, 'getServices']);
Route::get('/getServicesPrice/{id}', [ServiciosController::class, 'getServicesPrice']);
//routes barberos
Route::get('/getBarbers/{id}', [BarberosController::class, 'getBarbers']);
//routes pagos
Route::get('/getPayments', [PagosController::class, 'getPayments']);
//routes hoararios
Route::get('/getSchedules/{id}/{id2}/{dia}', [HorariosController::class, 'getSchedules']);
//routes citas
Route::post('/add-citas', [CitasController::class, 'store']);
