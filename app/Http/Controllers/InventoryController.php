<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index(Request $request)
{
    $query = \App\Models\Inventory::query();

    // Add this logic to filter by date range
    if ($request->filled('tanggal_awal') && $request->filled('tanggal_akhir')) {
        $query->whereBetween('tanggal', [$request->tanggal_awal, $request->tanggal_akhir]);
    }

    $data = $query->orderBy('tanggal', 'desc')->get();

    return view('inventory.laporaninventory', compact('data'));
}


    public function create()
    {
        return view('inventory.tambahinventory');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_id' => 'required|string|max:20',
            'tanggal' => 'required|date',
            'kode_barang' => 'required|string|max:50',
            'tipe' => 'required|string|max:50',
            'nama_produk' => 'required|string|max:100',
            'berat_satuan' => 'nullable|string|max:50',
            'jumlah_masuk' => 'required|integer|min:0',
            'jumlah_final' => 'required|integer|min:0',
            'stok' => 'required|integer|min:0',
            'harga_perolehan' => 'required|numeric|min:0',
        ]);

        Inventory::create($validated);

        return redirect()->route('karyawan.inventory.index')->with('success', 'Data inventaris berhasil ditambahkan.');
    }

    public function show(Inventory $inventory)
    {
        return view('inventory.show', compact('inventory'));
    }

    public function edit(Inventory $inventory)
    {
        return view('inventory.editinventory', compact('inventory'));
    }

    public function update(Request $request, Inventory $inventory)
    {
        $validated = $request->validate([
            'kode_id' => 'required|string|max:20',
            'tanggal' => 'required|date',
            'kode_barang' => 'required|string|max:50',
            'tipe' => 'required|string|max:50',
            'nama_produk' => 'required|string|max:100',
            'berat_satuan' => 'nullable|string|max:50',
            'jumlah_masuk' => 'required|integer|min:0',
            'jumlah_final' => 'required|integer|min:0',
            'stok' => 'required|integer|min:0',
            'harga_perolehan' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
        ]);

        $inventory->update($validated);

        return redirect()->route('karyawan.inventory.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->route('karyawan.inventory.index')->with('success', 'Data berhasil dihapus.');
    }

    
}
