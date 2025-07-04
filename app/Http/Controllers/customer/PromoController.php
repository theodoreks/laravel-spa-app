<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promo; 

class PromoController extends Controller
{
    public function promo()
    {
        $promo = Promo::all(); 
        return view('customer.promo', compact('promo')); 
    }
}