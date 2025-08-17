<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\BookingNotification;
use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required|string',
            'postcode' => 'required|string|max:8',
            'previous_lessons' => 'required|in:yes,no',
            'theory_test' => 'required|in:yes,no',
            'transmission' => 'required|in:manual,automatic',
            'message' => 'nullable|string|max:500',
        ]);

        $booking = Booking::create($validated);

        // Send email notification to admin
        Mail::to(env('ADMIN_EMAIL'))->send(new BookingNotification($booking));

        return redirect('/#booking')->with('success', '✅ Your booking has been submitted successfully!');

    }
}
