<?php

namespace App\Http\Controllers\owner;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Spatie\SimpleExcel\SimpleExcelWriter;
use Illuminate\Support\Facades\Response;

class InventoryExportController
{
    public function export()
    {
        $inventories = DB::table('inventory')->get();

        $path = storage_path('app/inventory_export.csv');

        SimpleExcelWriter::create($path)
            ->addRows($inventories->map(function ($item) {
                return [
                    'ID' => $item->id,
                    'Tanggal' => $item->tanggal,
                    'Kode Barang' => $item->kode_barang,
                    'Tipe' => $item->tipe,
                    'Nama Produk' => $item->nama_produk,
                    'Berat/Satuan' => $item->berat_satuan,
                    'Masuk' => $item->jumlah_masuk,
                    'Final' => $item->jumlah_final,
                    'Stok' => $item->stok,
                    'Harga' => $item->harga_perolehan,
                ];
            }));

        return response()->download($path)->deleteFileAfterSend();
    }
}
