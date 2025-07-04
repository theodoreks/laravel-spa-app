<?php

namespace App\Http\Controllers;

use App\Models\BookingTreatment;
use Illuminate\Http\Request;

class BookingSelesaiController extends Controller
{
    public function selesai()
    {
        $data = BookingTreatment::latest('jadwal_treatment')->take(5)->get();

        return view('boking.bokingselesai', compact('data'));
    }
}
