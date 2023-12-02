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
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\LaserController;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TimeSlotController;
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
Route::post('/apply-coupon', [CheckoutController::class, 'applyCoupon'])->name('apply.coupon');


Route::get('/beauty/expert/{id}', [BeautyExpertController::class,'viewDetails'])->name('expert.details');
Route::post('/beauty/expert/review', [BeautyExpertController::class,'submitReview'])->name('expert.submitReview');



Route::get('contact-us', [ContactUsController::class, 'index']);
Route::post('contact-us', [ContactUsController::class, 'store'])->name('contactus.store');


Route::get('/homeAdmin', function () {
    return view('dashboardbage.index');
});

Route::get('/aboutus', function () {
    return view('home.about-us');
});

// Route::get('/profilee', function () {
//     return view('home.userprofile');
// });

Route::get('/medicaldetail', function () {
    return view('home.medicaldetail');
});
Route::get('/Laserexperts', [LaserController::class, 'indexlaser'])->name('Laserexperts.indexlaser');
Route::get('/medical', [MedicalController::class, 'indexMedical'])->name('medical.indexMedical');
Route::get('/MedicalDetails/{id}', [MedicalController::class, 'MedicalDetails'])->name('MedicalDetails.index');
Route::get('/LaserDetails/{id}', [LaserController::class, 'LaserDetails'])->name('LaserDetails.index');
Route::get('/get-timeslots/{selectedDay}', [TimeSlotController::class, 'getTimeSlots']);


// Route::get('/search',[ SearchController::class,'search'])->name('search');

Route::resource('/category',CategoryController::class)->middleware('isLogedin');
Route::resource('/BeautyExpert',BeautyExpertController::class)->middleware('isLogedin');
Route::resource('/Service',ServiceController::class)->middleware('isLogedin');
Route::resource('/ServicePrice',ServicePriceController::class)->middleware('isLogedin');
Route::resource('/Review',ReviewController::class)->middleware('isLogedin');
Route::resource('/JoinUs',JoinUsController::class)->middleware('isLogedin');
Route::post('/accept-join-request/{id}',  [JoinUsController::class, 'acceptJoinRequest'])->name('accept.joinRequest');
Route::resource('/Booking',BookingController::class)->middleware('isLogedin');
Route::resource('/Checkout',CheckoutController::class)->middleware('isLogedin');
Route::resource('/user',UserController::class)->middleware('isLogedin');
Route::resource('/Admin',AdminController::class)->middleware('isLogedin');


Route::get('/adminLogin', [adminLoginController::class, 'adminLogin'])->name('adminLogin');
Route::post('/adminLoginPost', [adminLoginController::class, 'adminLoginPost'])->name('adminLogin');
Route::get('/adminLogout', [adminLoginController::class, 'adminLogout'])->name('adminLogout');
Route::get('/dash', [adminController::class, 'adminLogout']);

Route::get('/profilee/{id}', [adminController::class, 'profile'])->name('admin.profile');

// Update profile
Route::patch('/profilee/{id}', [adminController::class, 'updateProfile'])->name('admin.updateProfile');

Route::post('/professionalUpdate',  [ProfileController::class, 'professionalUpdate'])->name('ProfessionalUpdate');









Route::get('/', [BeautyExpertController::class, 'indexbeauty'])->name('beauty-experts.indexbeauty');
Route::get('/shop/{id}', [BeautyExpertController::class, 'shop'])->name('shop.index');

Route::get('/viewdetails/{id}', [BeautyExpertController::class, 'viewDetails'])->name('viewDetails.index');

Route::post('/save-booking', [BookingController::class, 'saveBooking'])->name('saveBooking');
Route::get('/checkout', [CheckoutController::class, 'showCheckoutForm'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'saveCheckout'])->name('checkout');


Route::get('/join-us', [JoinUsController::class, 'showForm'])->name('join-us.show');
Route::post('/join-us', [JoinUsController::class, 'submitForm'])->name('join-us.submit');

Route::post('/accept-join-request/{id}',  [JoinUsController::class, 'acceptJoinRequest'])->name('accept.joinRequest');




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
