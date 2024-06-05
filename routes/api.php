<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Serie\SerieController;

Route::get('/series', [SerieController::class, 'index']);
Route::get('/series/{id}', [SerieController::class, 'showById']);
Route::post('/series', [SerieController::class, 'store']);
Route::put('/series/{id}', [SerieController::class, 'update']);
Route::delete('/series/{id}', [SerieController::class, 'destroy']);

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
