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
        'tipe',
        'nama_produk',
        'berat_satuan',
        'jumlah_masuk',
        'jumlah_final',
        'stok',
        'harga_perolehan',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'harga_perolehan' => 'decimal:2',
    ];
}
