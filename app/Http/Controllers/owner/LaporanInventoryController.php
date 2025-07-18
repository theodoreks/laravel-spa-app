<?php
namespace App\Http\Controllers\owner;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Http\Request;

class LaporanInventoryController extends Controller
{
    public function index(Request $request)
{
    $query = \App\Models\Inventory::query();

    // Add this logic to filter by date range
    if ($request->filled('tanggal_awal') && $request->filled('tanggal_akhir')) {
        $query->whereBetween('tanggal', [$request->tanggal_awal, $request->tanggal_akhir]);
    }

    $inventory = $query->latest()->get();

    return view('Owner.laporaninventory', compact('inventory'));
}
}