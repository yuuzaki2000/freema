<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadController;


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

Route::get('/mypage/profile', [ProfileController::class, 'edit']);
Route::post('/mypage/profile', [ProfileController::class, 'store']);
Route::get('/mypage', [ProfileController::class, 'index']);

Route::resource('/upload', UploadController::class);