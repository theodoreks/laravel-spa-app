<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventKegiatan extends Model
{
    use HasFactory;

    protected $table = 'event_kegiatan';

    protected $fillable = [
        'tema',
        'deskripsi',
        'tanggal',
        'lokasi',
        'foto',
    ];
}
