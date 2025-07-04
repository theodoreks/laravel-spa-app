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
        Schema::create('aktivitas_bulanan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('aktivitas');
            $table->enum('status', ['selesai', 'belum']);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aktivitas_bulanan');
    }
};
