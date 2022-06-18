<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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
//routes public

Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);

//routes privées
Route::group(['middleware'=>['auth:sanctum']],function () {
    Route::get('horaireactuelle', [\App\Http\Controllers\Api\HoraireController::class, 'index']);
    Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
});
Route::post('/taches',[\App\Http\Controllers\TacheController::class,'store']);

Route::put('/taches/{id}',[\App\Http\Controllers\TacheControllerTacheController::class,'update']);
Route::delete('/taches/{id}',[\App\Http\Controllers\TacheControllerTacheController::class,'destroy']);

Route::get('/taches',[\App\Http\Controllers\TacheController::class,'index']);
Route::get('/taches/{id}',[\App\Http\Controllers\TacheControllerTacheController::class,'show']);





