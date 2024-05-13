<?php

use App\Http\Controllers\DataController;
use Iluminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/devices', [DeviceController::class, 'index']);

Route::post('/devices', [DeviceController::class, 'store']);

Route::get('/devices/{id}', [DeviceController::class, 'show']);

Route::put('/devices/{id}', [DeviceController::class, 'update']);

Route::delete('/devices/{id}', [DeviceController::class, 'destroy']);

Route::get('/data', [DataController::class, 'index']);
Route::post('/data', [DataController::class, 'store']);
Route::get('/data/{id}', [DataController::class, 'show']);