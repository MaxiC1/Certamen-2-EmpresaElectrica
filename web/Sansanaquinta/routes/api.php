<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrosController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("medidores/get", [RegistrosController::class, "getMedidores"]);
Route::get("tipoMedidas/get", [RegistrosController::class, "getTiposDeMedidas"]);
Route::get("registros/get", [RegistrosController::class, "getRegistros"]);
Route::get("registros/filtrar", [RegistrosController::class, "filtrarRegistros"]);
Route::post("registros/post", [RegistrosController::class, "crearRegistro"]);
Route::post("registros/delete", [RegistrosController::class, "eliminarRegistro"]);