<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\{PacienteController, MedicoController,
    UnidadController, RecepcionistaController, PatologoController,
    ProcedimientoQuirurgicoController, RegionAnatomicaController,
    SolicitudAnatomicaController};

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

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::group([ 'middleware' => ['auth:sanctum'] ],function () {

    Route::controller(PacienteController::class)->group(function() {
        Route::get('pacientes', 'index');
        Route::post('pacientes', 'store');
        Route::get('pacientes/{paciente}', 'show');
        Route::put('pacientes/{paciente}', 'update');
        Route::delete('pacientes/{paciente}', 'destroy');
    });
    
    Route::controller(MedicoController::class)->group(function() {
        Route::get('medicos', 'index');
        Route::post('medicos', 'store');
        Route::get('medicos/{medico}', 'show');
        Route::put('medicos/{medico}', 'update');
        Route::delete('medicos/{medico}', 'destroy');
    });
    
    Route::controller(UnidadController::class)->group(function() {
        Route::get('unidades', 'index');
        Route::post('unidades', 'store');
        Route::get('unidades/{unidad}', 'show');
        Route::put('unidades/{unidad}', 'update');
        Route::delete('unidades/{unidad}', 'destroy');
    });
    
    Route::controller(PatologoController::class)->group(function() {
        Route::get('patologos', 'index');
        Route::post('patologos', 'store');
        Route::get('patologos/{patologo}', 'show');
        Route::put('patologos/{patologo}', 'update');
        Route::delete('patologos/{patologo}', 'destroy');
    });

    Route::controller(ProcedimientoQuirurgicoController::class)->group(function() {
        Route::get('procedimientos', 'index');
        Route::post('procedimientos', 'store');
        Route::get('procedimientos/{procedimiento}', 'show');
        Route::put('procedimientos/{procedimiento}', 'update');
        Route::delete('procedimientos/{procedimiento}', 'destroy');
    });

    Route::controller(RegionAnatomicaController::class)->group(function() {
        Route::get('regiones', 'index');
        Route::post('regiones', 'store');
        Route::get('regiones/{region}', 'show');
        Route::put('regiones/{region}', 'update');
        Route::delete('regiones/{region}', 'destroy');
    });

    Route::controller(SolicitudAnatomicaController::class)->group(function() {
        Route::get('solicitudes', 'index');
        Route::post('solicitudes', 'store');
        Route::get('solicitudes/{solicitudap}', 'show');
        Route::put('solicitudes/{solicitudap}', 'update');
        Route::delete('solicitudes/{solicitudap}', 'destroy');
    });
});