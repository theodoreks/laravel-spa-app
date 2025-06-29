<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('treatment', 255);
            $table->date('tanggal');
            $table->time('jam');
            $table->string('therapist', 50);
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking'); // hapus tabel booking saat rollback
    }
};
