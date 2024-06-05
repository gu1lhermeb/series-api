<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Serie\SerieController;

Route::group(['prefix' => 'series'], function() {
    Route::get('/', [SerieController::class, 'index']);
    Route::post('/', [SerieController::class, 'store']);
});

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
