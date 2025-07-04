<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    // Tampilkan semua data paket
    public function index()
    {
        $pakets = Paket::all();
        return view('promo.daftarpaket', compact('pakets')); // View: resources/views/promo/daftarpaket.blade.php
    }

    // Tampilkan form tambah paket
    public function create()
    {
        return view('promo.pakettambah'); // View: resources/views/promo/pakettambah.blade.php
    }

    // Simpan data paket baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required|string|max:100',
            'harga' => 'required|numeric',
            'durasi' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'opsi' => 'nullable|string',
        ]);

        $data = $request->except('_token');

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto_paket', 'public');
        }

        Paket::create($data);

        return redirect()->route('paket.index')->with('success', 'Paket berhasil ditambahkan!');
    }

    // Tampilkan form edit paket
    public function edit($id)
    {
        $paket = Paket::findOrFail($id);
        return view('promo.paketedit', compact('paket')); // Ganti jadi di folder 'promo' biar konsisten
    }

    // Update data paket
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_paket' => 'required|string|max:100',
            'harga' => 'required|numeric',
            'durasi' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'opsi' => 'nullable|string',
        ]);

        $paket = Paket::findOrFail($id);
        $data = $request->except(['_token', '_method']);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto_paket', 'public');
        }

        $paket->update($data);

        return redirect()->route('paket.index')->with('success', 'Paket berhasil diperbarui!');
    }

    // Hapus data paket
    public function destroy($id)
    {
        $paket = Paket::findOrFail($id);
        $paket->delete();

        return redirect()->route('paket.index')->with('success', 'Paket berhasil dihapus!');
    }
}
