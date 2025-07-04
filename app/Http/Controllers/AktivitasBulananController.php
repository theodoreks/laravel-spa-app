<?php

namespace App\Http\Controllers;

use App\Models\AktivitasBulanan;
use Illuminate\Http\Request;

class AktivitasBulananController extends Controller
{
    public function index()
    {
        $aktivitas = AktivitasBulanan::orderBy('tanggal', 'desc')->get();
        return view('aktivitas.karyawan2', compact('aktivitas'));
    }

    public function create()
    {
        return view('aktivitas.tambah2');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'aktivitas' => 'required|string|max:255',
            'status' => 'required|in:selesai,belum',
        ]);

        AktivitasBulanan::create($request->only(['tanggal', 'aktivitas', 'status']));
        return redirect()->route('aktivitas.bulanan.index')->with('success', 'Aktivitas bulanan ditambahkan');
    }

    public function edit($id)
    {
        $aktivitas = AktivitasBulanan::findOrFail($id);
        return view('aktivitas.editbulanan', compact('aktivitas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'aktivitas' => 'required|string|max:255',
            'status' => 'required|in:selesai,belum',
        ]);

        $aktivitas = AktivitasBulanan::findOrFail($id);
        $aktivitas->update($request->only(['tanggal', 'aktivitas', 'status']));
        return redirect()->route('aktivitas.bulanan.index')->with('success', 'Aktivitas bulanan diperbarui');
    }

    public function destroy($id)
    {
        $aktivitas = AktivitasBulanan::findOrFail($id);
        $aktivitas->delete();
        return redirect()->route('aktivitas.bulanan.index')->with('success', 'Aktivitas bulanan dihapus');
    }
}
