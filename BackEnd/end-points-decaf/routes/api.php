<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DecapSuarmiComercioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::group(['prefix'=>'solana'],function(){
    Route::post('conversorsuarmi', [DecapSuarmiComercioController::class, 'conversorsuarmi']);
    Route::get('getComercios', [DecapSuarmiComercioController::class, 'getComercios']);
    Route::get('getUsuarios', [DecapSuarmiComercioController::class, 'getUsuarios']);
    Route::get('createUsuarioSuarmi/{id_usuario}',[DecapSuarmiComercioController::class, 'createUsuarioSuarmi']);
    Route::post('createOrder',[DecapSuarmiComercioController::class,'createOrder'],'createOrder');
    Route::post('envioSolana',[DecapSuarmiComercioController::class,'envioSolana'],'envioSolana');
});
