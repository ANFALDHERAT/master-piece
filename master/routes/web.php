<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BeautyExpertController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicePriceController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\JoinUsController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CheckoutController;
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
    return view('dashboardbage.index');
});

Route::resource('/category',CategoryController::class);
Route::resource('/BeautyExpert',BeautyExpertController::class);
Route::resource('/Service',ServiceController::class);
Route::resource('/ServicePrice',ServicePriceController::class);
Route::resource('/Review',ReviewController::class);
Route::resource('/JoinUs',JoinUsController::class);
Route::resource('/Booking',BookingController::class);
Route::resource('/Checkout',CheckoutController::class);
