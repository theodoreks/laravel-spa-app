<?php

namespace App\Http\Controllers\karyawan;

use App\Http\Controllers\Controller;
use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index()
    {
        $promos = Promo::all();
        return view('promo.index', compact('promos'));
    }

    public function create()
    {
        return view('promo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_promo'  => 'required|string|max:100',
            'deskripsi'   => 'nullable|string',
            'harga'       => 'required|numeric',
            'durasi'      => 'required|integer',
            'foto'        => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $data = $request->except('_token');

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto_promo', 'public');
        }

        Promo::create($data);
        return redirect()->route('karyawan.promo.index')->with('success', 'Promo berhasil ditambahkan!');
    }

    public function edit(Promo $promo)
    {
        return view('promo.edit', compact('promo'));
    }

    public function update(Request $request, Promo $promo)
    {
        // ... (logika update sama seperti sebelumnya)
        $request->validate([
            'nama_promo' => 'required|string|max:100',
            // ... validasi lainnya
        ]);
        $data = $request->except(['_token', '_method']);
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto_promo', 'public');
        }
        $promo->update($data);
        return redirect()->route('karyawan.promo.index')->with('success', 'Promo berhasil diperbarui!');
    }

    public function destroy(Promo $promo)
    {
        $promo->delete();
        return redirect()->route('karyawan.promo.index')->with('success', 'Promo berhasil dihapus!');
    }
}