<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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
Route::get('/bookingpayment', [PageController::class, 'bookingpayment'])->name('bookingpayment');
Route::get('/infobooking', [PageController::class, 'infobooking'])->name('infobooking');