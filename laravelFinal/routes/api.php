<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/asiganturas', [AsignaturaController::class,'index']); 
Route::post('/asiganturas', [AsignaturaController::class,'store']); 
Route::put('/asiganturas/{id}', [AsignaturaController::class,'update']); 
Route::delete('/asiganturas/{id}', [AsignaturaController::class,'destroy']); 