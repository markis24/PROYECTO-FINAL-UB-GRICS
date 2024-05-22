<?php

use App\Http\Controllers\ProjectesApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('projectes', ProjectesApiController::class);
Route::apiResource('articles', ArticlesApiController::class);
Route::get('/articles/{id}', 'ArticlesController@show');
Route::get('/projectes/{id}', 'ProjectesController@show');

