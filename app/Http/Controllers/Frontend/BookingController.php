<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

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

        Booking::create($validated);

        return redirect('/#booking')->with('success', '✅ Your booking has been submitted successfully!');

    }
}
