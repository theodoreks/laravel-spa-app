<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Promo; // 1. Import the Promo model
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing()
    {
        // 2. Fetch all data from the promos table
        $promo = Promo::latest()->get(); 

        // 3. Send the data to the view
        return view('customer.landing', compact('promo')); 
    }
}