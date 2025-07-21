<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
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

Route::get('/', [ItemController::class, 'index']);
Route::get('/item/{item_id}', [ItemController::class, 'getDetail'])->name('item.detail');
Route::post('/search', [ItemController::class, 'search']);
Route::get('/email/verify', [EmailController::class, 'index']);

Route::middleware('auth')->group(function(){
    Route::get('/sell', [ItemController::class, 'add']);
    Route::post('/sell', [ItemController::class, 'store']);
    Route::get('/purchase/{item_id}', [ItemController::class, 'purchase'])->name('purchase');
    Route::get('/mypage/profile', [ProfileController::class, 'configure']);
    Route::patch('/mypage/profile', [ProfileController::class, 'update']);
    Route::post('/mypage/profile', [ProfileController::class, 'store']);
    Route::get('/mypage', [ProfileController::class, 'index']);
    Route::post('/favorite/{item_id}', [FavoriteController::class, 'store']);
    Route::post('/comment/{item_id}', [CommentController::class, 'store'])->name('comment');
    Route::get('/purchase/address/{item_id}', [ProfileController::class, 'getAddressChangeView'])->name('addressChange');
    Route::post('/purchase/address/{item_id}', [ProfileController::class, 'sendAddress']);
    Route::get('/stripe', [StripeController::class, 'index'])->name('index');
    Route::post('/checkout', [StripeController::class, 'checkout'])->name('checkout');
    Route::get('/success', [StripeController::class, 'success'])->name('success');
});