<?php

use App\Http\Controllers\ProfileController;
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

use App\Http\Controllers\adminLoginController;
use App\Http\Controllers\PayPalController;

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








// Route::get('/', function () {
//     return view('home.index-2');
// });
Route::get('/homeAdmin', function () {
    return view('dashboardbage.index');
});
Route::get('/contactus', function () {
    return view('home.contact-us');
});
Route::get('/aboutus', function () {
    return view('home.about-us');
});

Route::get('/profilee', function () {
    return view('home.userprofile');
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
// Route::resource('/profile',ProfileController::class);

Route::get('/adminLogin', [adminLoginController::class, 'adminLogin'])->name('adminLogin');
Route::post('/adminLoginPost', [adminLoginController::class, 'adminLoginPost'])->name('adminLogin');

// Route::get('/homeAdmin',[CountController::class, 'index'])->name('homeAdmin');
// Route::get('/adminLogout', [adminLoginController::class, 'adminLogout'])->name('adminLogout');
// Route::get('/dash', [adminLoginController::class, 'adminLogout']);

Route::get('/', [BeautyExpertController::class, 'indexbeauty'])->name('beauty-experts.indexbeauty');
Route::get('/shop/{id}', [BeautyExpertController::class, 'shop'])->name('shop.index');
// Route::get('/product/{id}', [BeautyExpertController::class, 'product'])->name('product.index');

// Route::post('/bookings', [BookingController::class, 'store'])->name('booking.store');

// Route::get('/beauty-expert/{id}', 'BeautyExpertController@showBeautyExpert');
// Route::get('/product/{id}', [BeautyExpertController::class, 'product'])->name('product.index');
// Route::get('/showpro/{id}', [BeautyExpertController::class, 'showpro'])->name('showpro.index');
Route::get('/viewdetails/{id}', [BeautyExpertController::class, 'viewDetails'])->name('viewDetails.index');
// routes/web.php
Route::post('/save-booking', [BookingController::class, 'saveBooking'])->name('saveBooking');
Route::get('/checkout', [CheckoutController::class, 'showCheckoutForm'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'saveCheckout'])->name('checkout');
//Route::get('/checkout',  [CheckoutController::class, 'showCheckoutPage'])->name('showCheckoutPage');

// Route::get('/join', function () {
//     return view('home.joinus');
// });

Route::get('/join-us', [JoinUsController::class, 'showForm'])->name('join-us.show');
Route::post('/join-us', [JoinUsController::class, 'submitForm'])->name('join-us.submit');









// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





/// ////////////////for paypal payment gateway//////////////////////////
Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
Route::get('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');



require __DIR__.'/auth.php';
