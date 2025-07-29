<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('absensi_karyawan', function (Blueprint $table) {
        $table->id();
        $table->string('nama_karyawan');
        $table->date('tanggal');
        $table->time('jam_masuk');
        $table->time('jam_keluar')->nullable();
        $table->string('keterangan')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi_karyawan');
    }
};
