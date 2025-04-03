<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/menu', [PageController::class, 'menu'])->name('menu');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/reservation', [PageController::class, 'reservation'])->name('reservation');
Route::get('/bookingtable', [PageController::class, 'bookingtable'])->name('bookingtable');
Route::get('/payment', [PageController::class, 'payment'])->name('payment');
Route::get('/productdetail/{productId}', [PageController::class, 'productdetail'])->name('productdetail');
// Route::get('/bookingpayment', [PageController::class, 'bookingpayment'])->name('bookingpayment');
Route::get('/infobooking', [PageController::class, 'infobooking'])->name('infobooking');

//payment
Route::post('/bookingpayment', [PaymentController::class, 'vnPaid']);

//User
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'Register']);
Route::post('/login', [UserController::class, 'Login']);
Route::get('/logout', [UserController::class, 'Logout'])->name('logout');
Route::get('/verify-email/{token}', function ($token) {
    $user = User::where('verification_token', $token)->first();

    if (!$user) {
        return response('<html><body><h2>Token không hợp lệ!</h2></body></html>', 400);
    }

    $user->update([
        'is_verified' => true,
        'verification_token' => null,
    ]);

    return response('<html><body><h2>Tài khoản của bạn đã được xác nhận!</h2></body></html>');
})->name('verify.email');