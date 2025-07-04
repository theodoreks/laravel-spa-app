<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AktivitasKaryawan extends Model
{
    protected $table = 'aktivitas_karyawan';

    protected $fillable = [
        'tanggal',
        'jam',
        'aktivitas',
        'status',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'jam' => 'datetime:H:i',
    ];
}
