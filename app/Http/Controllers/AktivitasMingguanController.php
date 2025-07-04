<?php

namespace App\Http\Controllers;

use App\Models\AktivitasMingguan;
use Illuminate\Http\Request;

class AktivitasMingguanController extends Controller
{
    public function index()
    {
        $aktivitasMingguan = AktivitasMingguan::orderBy('tanggal', 'desc')->get();
        return view('aktivitas.karyawan1', compact('aktivitasMingguan'));
    }


    public function create()
    {
        return view('aktivitas.tambah1');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'aktivitas' => 'required|string|max:255',
            'status' => 'required|in:selesai,belum',
        ]);

        AktivitasMingguan::create($request->only(['tanggal', 'aktivitas', 'status']));

        return redirect()->route('aktivitas.mingguan.index')->with('success', 'Aktivitas berhasil ditambahkan');
    }

    public function edit($id)
    {
        $aktivitas = AktivitasMingguan::findOrFail($id);
        return view('aktivitas.editmingguan', compact('aktivitas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'aktivitas' => 'required|string|max:255',
            'status' => 'required|in:selesai,belum',
        ]);

        $aktivitas = AktivitasMingguan::findOrFail($id);
        $aktivitas->update($request->only(['tanggal', 'aktivitas', 'status']));

        return redirect()->route('aktivitas.mingguan.index')->with('success', 'Aktivitas berhasil diperbarui');
    }

    public function destroy($id)
    {
        $aktivitas = AktivitasMingguan::findOrFail($id);
        $aktivitas->delete();

        return redirect()->route('aktivitas.mingguan.index')->with('success', 'Aktivitas berhasil dihapus');
    }
}
