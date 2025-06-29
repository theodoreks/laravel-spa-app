<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kritik;

class KritikController extends Controller
{
    public function index()
    {
        $feedbacks = Kritik::orderBy('id', 'desc')->get();
        return view('kritik', compact('feedbacks'));
    }

    public function store(Request $request)
    {
        // Validasi harus pakai 'pesan' karena dari form input bernama 'pesan'
        $request->validate([
            'nama' => 'required|string|max:255',
            'hp' => 'required|string|max:20',
            'pesan' => 'required|string',
        ]);

        // Simpan ke kolom 'kritik' di database, dari input 'pesan'
        Kritik::create([
            'nama' => $request->nama,
            'hp' => $request->hp,
            'kritik' => $request->pesan,
        ]);

        // Redirect kembali ke halaman kritik dengan pesan sukses
        return redirect()->route('kritik.index')->with('success', 'Terima kasih atas kritik dan sarannya!');
    }
}