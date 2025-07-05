<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $table = 'promos'; // Nama tabel di database

    protected $fillable = [
        'nama_promo',
        'deskripsi',
        'harga',
        'durasi',
        'foto',
    ];
}