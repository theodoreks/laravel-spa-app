<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    // Tampilkan form input booking
    public function create()
    {
        return view('booking');
    }

    // Simpan data booking ke database
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

   
    public function index()
{
    $bookings = \App\Models\Booking::latest()->get();
    return view('riwayat', compact('bookings'));
}
}