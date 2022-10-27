<?php

use App\Http\Controllers\Api\MovieController;
use App\Http\Controllers\Api\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function () {
    Route::post('login', [UsersController::class, 'login']);
    Route::post('register', [UsersController::class, 'register']);
    Route::get('logout', [UsersController::class, 'logout'])->middleware('auth:api');
    Route::get('movies', [MovieController::class, 'allMovie']);
    Route::get('movies/{id}', [MovieController::class, 'singleMovie']);
});
