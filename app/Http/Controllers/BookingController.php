<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'test_name' => 'required|string',
            'full_name' => 'required|string|max:255',
            'preferred_date' => 'required|date',
        ]);

        Booking::create([
            'user_id' => Auth::id(),
            'test_name' => $request->test_name,
            'full_name' => $request->full_name,
            'preferred_date' => $request->preferred_date,
        ]);

        return redirect()->route('dashboard')->with('success', 'Test booked successfully!');
    }
}

