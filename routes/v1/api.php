<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PacienteController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'v1'], function () {
    Route::apiResource('pacientes', controller: PacienteController::class);
});