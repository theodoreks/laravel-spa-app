<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promo; 

class BerandaController extends Controller
{
    public function beranda()
    {
        $promo = Promo::all(); 
        return view('customer.beranda', compact('promo'));
    }
}
