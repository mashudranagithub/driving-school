<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\BookingController;

Route::get('/', function () {
    return view('homepage');
});


Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

