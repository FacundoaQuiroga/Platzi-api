<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserTokenController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('products', ProductController::class)
    ->middleware('auth:sanctum');

Route::resource('categories', CategoryController::class);

//Route::apiResource('products', 'ProductController')
  //  ->middleware("auth:sanctum");

//Route::apiResource('categories', 'CategoryController')
  //  ->middleware("auth:sanctum");

Route::post('sanctum/token', UserTokenController::class);
