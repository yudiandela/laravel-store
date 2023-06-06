<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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

/** Mapping route API categories */
Route::get('categories', [CategoryController::class, 'index']);
Route::post('category', [CategoryController::class, 'store']);
Route::get('category/{category}', [CategoryController::class, 'show']);
Route::put('category/{category}', [CategoryController::class, 'update']);
Route::delete('category/{category}', [CategoryController::class, 'destroy']);

/** Mapping route API products */
Route::get('products', [ProductController::class, 'index']);
Route::post('product', [ProductController::class, 'store']);
Route::get('product/{product}', [ProductController::class, 'show']);
Route::put('product/{product}', [ProductController::class, 'update']);
Route::delete('product/{product}', [ProductController::class, 'destroy']);
