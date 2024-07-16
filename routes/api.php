<?php

use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\GameController;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// developer routes
Route::get('developers', [DeveloperController::class, 'index']);
Route::post('developers', [DeveloperController::class, 'store']);
Route::get('developers/{id}', [DeveloperController::class, 'show']);
Route::post('developers/{id}', [DeveloperController::class, 'update']);
Route::delete('developers/{id}', [DeveloperController::class, 'destroy']);
// game routes
Route::get('games', [GameController::class, 'index']);
Route::post('games', [GameController::class, 'store']);
Route::get('games/{id}', [GameController::class, 'show']);
Route::post('games/{id}', [GameController::class, 'update']);
Route::delete('games/{id}', [GameController::class, 'destroy']);
