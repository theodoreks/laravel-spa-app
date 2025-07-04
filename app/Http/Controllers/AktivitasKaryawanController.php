<?php

namespace App\Http\Controllers;

use App\Models\AktivitasKaryawan;
use Illuminate\Http\Request;

class AktivitasKaryawanController extends Controller
{
    // Tampilkan semua aktivitas
    public function index()
    {
        $aktivitas = AktivitasKaryawan::orderBy('tanggal', 'desc')->get();
        return view('aktivitas.karyawan', compact('aktivitas'));
    }

    // Tampilkan form tambah aktivitas
    public function create()
    {
        return view('aktivitas.tambah');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jam' => 'required|date_format:H:i',
            'aktivitas' => 'required|string|max:255',
            'status' => 'required|in:selesai,belum',
        ]);

        AktivitasKaryawan::create($request->only(['tanggal', 'jam', 'aktivitas', 'status']));

        return redirect()->route('aktivitas.index')->with('success', 'Aktivitas berhasil ditambahkan');
    }

    // Tampilkan form edit
    public function edit($id)
    {
        $aktivitas = AktivitasKaryawan::findOrFail($id);
        return view('aktivitas.editharian', compact('aktivitas'));
    }

    // Simpan perubahan
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jam' => 'required|date_format:H:i',
            'aktivitas' => 'required|string|max:255',
            'status' => 'required|in:selesai,belum',
        ]);

        $aktivitas = AktivitasKaryawan::findOrFail($id);
        $aktivitas->update($request->only(['tanggal', 'jam', 'aktivitas', 'status']));

        return redirect()->route('aktivitas.index')->with('success', 'Aktivitas berhasil diperbarui');
    }

    // Hapus data
    public function destroy($id)
    {
        $aktivitas = AktivitasKaryawan::findOrFail($id);
        $aktivitas->delete();

        return redirect()->route('aktivitas.index')->with('success', 'Aktivitas berhasil dihapus');
    }
}
