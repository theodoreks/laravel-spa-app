<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAktivitasMingguanTable extends Migration
{
    public function up()
    {
        Schema::create('aktivitas_mingguan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('aktivitas', 255);
            $table->enum('status', ['belum', 'selesai'])->default('belum');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('aktivitas_mingguan');
    }
}
