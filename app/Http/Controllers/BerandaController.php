<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo; 

class BerandaController extends Controller
{
    public function beranda()
    {
        $promo = Promo::all(); 
        return view('beranda', compact('promo'));
    }
}
