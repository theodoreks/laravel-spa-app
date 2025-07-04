<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AktivitasMingguan extends Model
{
    use HasFactory;

    protected $table = 'aktivitas_mingguan';

    protected $fillable = [
        'tanggal',
        'aktivitas',
        'status',
    ];
}
