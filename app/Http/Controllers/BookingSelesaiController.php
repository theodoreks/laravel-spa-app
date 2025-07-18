<?php

namespace App\Http\Controllers;

use App\Models\Booking; // Gunakan model Booking yang utama
use Illuminate\Http\Request;

class BookingSelesaiController extends Controller
{
    public function selesai()
    {
        // Ambil booking yang status treatment-nya 'Selesai'
        $bookings = Booking::with(['user', 'promo'])
                           ->where('status_treatment', 'Selesai')
                           ->latest('tanggal_treatment')
                           ->get();

        return view('booking.bookingselesai', compact('bookings'));
    }
}