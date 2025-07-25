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
    Schema::create('inventory', function (Blueprint $table) {
        $table->id();
        $table->string('kode_id', 20);
        $table->date('tanggal');
        $table->string('kode_barang', 50);
        $table->string('tipe', 50);
        $table->string('nama_produk', 100);
        $table->string('berat_satuan', 50)->nullable();
        $table->integer('jumlah_masuk');
        $table->integer('jumlah_final');
        $table->integer('stok');
        $table->decimal('harga_perolehan', 15, 2); // Ensure this line exists
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
