<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/doctor', [DoctorController::class, 'store']);
Route::get('/doctor', [DoctorController::class, 'index']);
Route::get('/doctor/{id}', [DoctorController::class, 'show']);
Route::put('/doctor/{id}', [DoctorController::class, 'update']);
Route::delete('/doctor/{id}', [DoctorController::class, 'destroy']);