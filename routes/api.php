<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

// 假設已有 auth:sanctum middleware 負責驗證登入
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('users', UserController::class);
});

Route::middleware('auth:sanctum')->apiResource('users', UserController::class);

Route::get('/test', function() {
    return response()->json(['status' => 'OK']);
});