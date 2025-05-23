<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileUploadController;
use App\Http\Controllers\ProductUploadController;
use App\Http\Controllers\ExhibitController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductController::class, 'index']);
Route::get('/sell', [ProductController::class, 'add']);
Route::post('/sell', [ProductController::class, 'store']);
Route::post('/search', [ProductController::class, 'search']);

Route::get('/mypage/profile', [ProfileController::class, 'edit']);
Route::post('/mypage/profile', [ProfileController::class, 'store']);
Route::get('/mypage', [ProfileController::class, 'index']);

Route::resource('/upload/profile', ProfileUploadController::class);
Route::resource('/upload/product', ProductUploadController::class);