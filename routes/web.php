<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/add-to-cart/{id}', [App\Http\Controllers\UserOrderCartController::class, 'AddToCart' ]);

Route::view('/cart', 'carts');

Route::get('/checkout',[App\Http\Controllers\UserOrderCartController::class, 'CheckOut' ]);