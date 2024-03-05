<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ResenaController;
use App\Http\Controllers\AutorController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('universidades',[AutorController::class, 'index']);
Route::get('universidades/{id}',[AutorController::class, 'show']);
Route::post('universidades',[AutorController::class, 'store']);
Route::patch('universidades/{id}',[AutorController::class, 'update']);
Route::delete('universidades/{id}',[AutorController::class, 'destroy']);
