<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\BarberosController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\HorariosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->group(function(){
    //barberos
    Route::get('/serviceBarberos', [BarberosController::class, 'serviceBarberos']);
    Route::post('/serviceAddBarberos', [BarberosController::class, 'serviceAddBarberos']);
    Route::put('/serviceEditBarbero', [BarberosController::class, 'serviceEditBarbero']);
    Route::put('/serviceEditProfile', [BarberosController::class, 'serviceEditProfile']);
    Route::put('/serviceCambiarPass', [BarberosController::class, 'serviceCambiarPass']);
    Route::put('/serviceCambiarFoto', [BarberosController::class, 'serviceCambiarFoto']);
    //servicios
    Route::get('/serviceServicios', [ServiciosController::class, 'serviceServicios']);
    Route::post('/serviceAddServicios', [ServiciosController::class, 'store']);
    Route::put('/serviceEditBarbero', [ServiciosController::class, 'serviceEditBarbero']);
    //horarios
    Route::get('/serviceHorarios', [HorariosController::class, 'serviceHorarios']);
    Route::post('/serviceAddHorarios', [HorariosController::class, 'store']);
    Route::put('/serviceEditHorario', [HorariosController::class, 'serviceEditHorario']);
    Route::get('/servciceGetSchedules/{id}/{id2}/{dia}', [HorariosController::class, 'servciceGetSchedules']);
    //citas
    Route::get('/serviceGetCitas', [CitasController::class, 'serviceGetCitas']);
    Route::post('/serviceAddCitas', [CitasController::class, 'addCitas']);
    Route::put('/serviceEditCita', [CitasController::class, 'serviceEditCita']);
    Route::get('/serviceGetCitasByBarbero/', [CitasController::class, 'serviceGetCitasByBarbero']);
});
Route::get('/serviceLogin', [LoginController::class, 'serviceLogin']);
Route::get('/serviceForgotPassword', [LoginController::class, 'serviceForgotPassword']);
