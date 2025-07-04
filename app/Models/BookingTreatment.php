<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingTreatment extends Model
{
    use HasFactory;

    protected $table = 'booking_treatment';

    protected $fillable = [
        'id_booking',
        'nama_konsumen',
        'jadwal_treatment',
        'foto',
    ];

    protected $casts = [
        'jadwal_treatment' => 'datetime',
    ];
}
