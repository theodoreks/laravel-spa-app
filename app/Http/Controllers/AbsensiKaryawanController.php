<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbsensiKaryawan;

class AbsensiKaryawanController extends Controller
{
   public function index()
    {
        $absensi = AbsensiKaryawan::all();
        return view('berandakaryawan.absensi', compact('absensi'));
    }
    public function create()
    {
        return view('berandakaryawan.absensitambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_karyawan' => 'required|string|max:100',
            'tanggal' => 'required|date',
            'jam_masuk' => 'required',
            'jam_keluar' => 'nullable',
            'keterangan' => 'nullable|string|max:255',
        ]);

        $data = $request->only(['nama_karyawan', 'tanggal', 'jam_masuk', 'jam_keluar', 'keterangan']);

        AbsensiKaryawan::create($data);

        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $absen = AbsensiKaryawan::findOrFail($id);
        return view('berandakaryawan.absensiedit', compact('absen'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_karyawan' => 'required|string|max:100',
            'tanggal' => 'required|date',
            'jam_masuk' => 'required',
            'jam_keluar' => 'nullable',
            'keterangan' => 'nullable|string|max:255',
        ]);

        $data = $request->only(['nama_karyawan', 'tanggal', 'jam_masuk', 'jam_keluar', 'keterangan']);

        $absen = AbsensiKaryawan::findOrFail($id);
        $absen->update($data);

        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $absen = AbsensiKaryawan::findOrFail($id);
        $absen->delete();

        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil dihapus.');
    }
}
