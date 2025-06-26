<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function create()
    {
        return view('booking');
    }

    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'treatment' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'therapist' => 'required|string|max:50',
        ]);

        
        Booking::create($validated);

        return redirect()->route('booking.create')->with('success', 'Booking berhasil disimpan!');
    }
}