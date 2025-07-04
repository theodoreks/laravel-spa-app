<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingSelesai extends Model
{
    use HasFactory;

    protected $table = 'booking_selesai';

    protected $fillable = [
        'nama_konsumen',
        'tanggal_booking',
        'tanggal_treatment',
    ];

    protected $casts = [
        'tanggal_booking' => 'date',
        'tanggal_treatment' => 'date',
    ];
}
