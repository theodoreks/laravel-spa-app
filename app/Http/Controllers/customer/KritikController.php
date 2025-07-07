<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kritik;

class KritikController extends Controller
{
    public function index()
    {
        $feedbacks = Kritik::orderBy('id', 'desc')->get();
        return view('customer.kritik', compact('feedbacks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'hp' => 'required|string|max:20',
            'pesan' => 'required|string',
        ]);

        Kritik::create([
            'nama' => $request->nama,
            'hp' => $request->hp,
            'kritik' => $request->pesan,
        ]);

        // Ganti nama rute di sini
        return redirect()->route('customer.kritik.index')->with('success', 'Terima kasih atas kritik dan sarannya!');
    }
}