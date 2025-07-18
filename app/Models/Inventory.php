<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventory';

    protected $fillable = [
    'kode_id',
    'tanggal',
    'kode_barang',
    'tipe', //  'Merek'
    'nama_produk',
    'berat_satuan', //  'Berat'
    'jumlah_masuk', // I'Jumlah'
    'jumlah_final',
    'stok',
    'harga_perolehan', //  'Harga'
    'deskripsi', 
];

    protected $casts = [
        'tanggal' => 'date',
        'harga_perolehan' => 'decimal:2',
    ];
}
