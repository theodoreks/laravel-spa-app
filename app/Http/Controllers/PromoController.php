<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo; 

class PromoController extends Controller
{
    public function promo()
    {
        $promo = Promo::all(); 
        return view('promo', compact('promo')); 
    }
}