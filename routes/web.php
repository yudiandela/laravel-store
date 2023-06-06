<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', [CategoryController::class, 'table']);
Route::get('/files', [ImageController::class, 'table']);

Route::get('/product', [ProductController::class, 'table']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::get('/product/{product}', [ProductController::class, 'edit']);
