<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileUploadController;
use App\Http\Controllers\ProductUploadController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\StripeController;


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
Route::get('/item/{product_id}', [ProductController::class, 'getDetail'])->name('item.detail');
Route::post('/search', [ProductController::class, 'search']);
Route::get('/email/verify', [EmailController::class, 'index']);

Route::middleware('auth')->group(function(){
    Route::get('/sell', [ProductController::class, 'add']);
    Route::post('/sell', [ProductController::class, 'store']);
    Route::get('/purchase/{product_id}', [ProductController::class, 'purchase'])->name('purchase');
    Route::get('/mypage/profile', [ProfileController::class, 'configure']);
    Route::patch('/mypage/profile', [ProfileController::class, 'update']);
    Route::post('/mypage/profile', [ProfileController::class, 'store']);
    Route::get('/mypage', [ProfileController::class, 'index']);
    Route::post('/favorite/{product_id}', [FavoriteController::class, 'store']);
    Route::post('/comment/{product_id}', [CommentController::class, 'store'])->name('comment');
    Route::get('/purchase/address/{product_id}', [ProfileController::class, 'getAddressChangeView'])->name('addressChange');
    Route::post('/purchase/address/{product_id}', [ProfileController::class, 'updateAddress']);
    Route::get('/stripe', [StripeController::class, 'index'])->name('index');
    Route::post('/checkout', [StripeController::class, 'checkout'])->name('checkout');
    Route::get('/success', [StripeController::class, 'success'])->name('success');
});