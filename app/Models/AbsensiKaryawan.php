<?php

// app/Models/AbsensiKaryawan.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AbsensiKaryawan extends Model
{
    protected $table = 'absensi_karyawan';

    protected $fillable = [
        'nama_karyawan',
        'tanggal',
        'jam_masuk',
        'jam_keluar',
        'keterangan',
    ];
}
