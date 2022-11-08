<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\UnidadController;
use App\Http\Controllers\RecepcionistaController;
use App\Http\Controllers\UserController;

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

Route::get('/pacientes', [PacienteController::class, 'index']);
Route::get('/medicos', [MedicoController::class, 'index']);
Route::get('/unidades', [UnidadController::class, 'index']);
Route::get('/recepcionistas', [RecepcionistaController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);

Route::get('/paciente/delete/{paciente}', [PacienteController::class, 'destroy']);
Route::get('/medico/delete/{medico}', [MedicoController::class, 'destroy']);
Route::get('/unidad/delete/{unidad}', [UnidadController::class, 'destroy']);
Route::get('/user/delete/{user}', [UserController::class, 'destroy']);

Route::group([ 'middleware' => ['auth:sanctum'] ],function () {
});