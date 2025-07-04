<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $query = Laporan::query();

        // Filter berdasarkan tanggal jika tersedia
        if ($request->filled('tanggal_awal') && $request->filled('tanggal_akhir')) {
            $tanggalAwal = Carbon::parse($request->tanggal_awal)->startOfDay();
            $tanggalAkhir = Carbon::parse($request->tanggal_akhir)->endOfDay();

            $query->whereBetween('tanggal', [$tanggalAwal, $tanggalAkhir]);
        }

        $laporans = $query->orderBy('tanggal', 'desc')->get();

        return view('laporan.laporanboking', compact('laporans'));
    }

    public function create()
    {
        return view('laporan.tambahlaporan');
    }

    public function store(Request $request)
    {
        Laporan::create($request->all());
        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $laporan = Laporan::findOrFail($id);
        return view('laporan.editlaporan', compact('laporan'));
    }

    public function update(Request $request, $id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->update($request->all());
        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil diperbarui');
    }

    public function destroy($id)
    {
        Laporan::findOrFail($id)->delete();
        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil dihapus');
    }
}
