<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking; 

class RiwayatController extends Controller
{
    public function riwayat()
    {
        $bookings = Booking::latest()->get(); 
        return view('customer.riwayat', compact('bookings')); 
    }
}