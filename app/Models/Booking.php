<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // Definisikan nama tabel yang digunakan
    protected $table = 'booking';

    protected $fillable = [
        'nama',
        'treatment',
        'tanggal',
        'jam',
        'therapist',
    ];
}