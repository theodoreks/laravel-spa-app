<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AktivitasBulanan extends Model
{
    use HasFactory;

    protected $table = 'aktivitas_bulanan';

    protected $fillable = ['tanggal', 'aktivitas', 'status'];
}
