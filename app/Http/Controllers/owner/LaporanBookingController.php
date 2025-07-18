<?php
namespace App\Http\Controllers\owner;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class LaporanBookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['user', 'promo'])->latest()->get();
        return view('Owner.laporanbooking', compact('bookings'));
    }
}