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
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\adminLoginController;
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
    return view('home.product-details-sticky');
});
Route::get('/homeAdmin', function () {
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
Route::resource('/user',UserController::class);
Route::resource('/Admin',AdminController::class);
Route::resource('/profile',ProfileController::class);

Route::get('/adminLogin', [adminLoginController::class, 'adminLogin'])->name('adminLogin');
Route::post('/adminLoginPost', [adminLoginController::class, 'adminLoginPost'])->name('adminLogin');

// Route::get('/homeAdmin',[CountController::class, 'index'])->name('homeAdmin');
// Route::get('/adminLogout', [adminLoginController::class, 'adminLogout'])->name('adminLogout');
// Route::get('/dash', [adminLoginController::class, 'adminLogout']);

Route::get('/home', [BeautyExpertController::class, 'indexbeauty'])->name('beauty-experts.indexbeauty');
Route::get('/shop/{id}', [BeautyExpertController::class, 'shop'])->name('shop.index');
Route::get('/product/{id}', [BeautyExpertController::class, 'product'])->name('product.index');

