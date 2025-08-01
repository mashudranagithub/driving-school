<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\BookingController;

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');

Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

