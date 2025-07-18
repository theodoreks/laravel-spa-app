<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\User;

class CustomerBookingController extends Controller
{
    public function index()
    {
        
        $customers = User::where('role', 'customer')
                         ->whereHas('bookings')
                         ->get();

        return view('Owner.datacustomer', compact('customers'));
    }
}
