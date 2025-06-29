<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking; 

class RiwayatController extends Controller
{
    public function riwayat()
    {
        $bookings = Booking::latest()->get(); 
        return view('riwayat', compact('bookings')); 
    }
}