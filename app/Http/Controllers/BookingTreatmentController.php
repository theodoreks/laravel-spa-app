<?php

namespace App\Http\Controllers;

use App\Models\BookingTreatment;
use App\Models\Paket;
use Illuminate\Http\Request;

class BookingTreatmentController extends Controller
{
    // Menampilkan semua booking
    public function index()
    {
        $data = BookingTreatment::all();
        return view('boking.boking', compact('data')); 
    }

    // Menampilkan daftar booking selesai
    public function selesai()
    {
        $data = BookingTreatment::orderBy('jadwal_treatment', 'asc')->get();
        return view('boking.bokingselesai', compact('data'));
    }

    // Menampilkan detail booking + paket acak
    public function show($id)
    {
        $booking = BookingTreatment::findOrFail($id);
        $paket = Paket::inRandomOrder()->first(); // Ambil satu paket acak
        return view('boking.detailboking', compact('booking', 'paket'));
    }

    public function boking()
    {
        return view('boking.berandaboking');
    }
}
