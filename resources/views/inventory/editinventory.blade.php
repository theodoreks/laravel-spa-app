@extends('layouts.app')

@section('title', 'Edit Inventory')

@section('content')
<h2 class="text-xl font-bold mb-6"><i class=""></i> Laporan</h2>


   <div class="bg-white p-8 rounded shadow w-full">
  <h3 class="text-md font-medium mb-4">
    <i class=""></i>Edit Inventory Barang
  </h3>
        <form action="{{ route('inventory.update', $inventory->id) }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf
            @method('PUT')

            <div>
                <label for="kode_id" class="block text-sm font-medium text-gray-700">Kode ID</label>
                <input type="text" name="kode_id" id="kode_id" value="{{ $inventory->kode_id }}"
                    class="w-full p-3 border rounded-md" required>
            </div>

            <div>
                <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" value="{{ \Carbon\Carbon::parse($inventory->tanggal)->format('Y-m-d') }}" class="w-full p-3 border rounded-md" required>
            </div>

            <div>
                <label for="kode_barang" class="block text-sm font-medium text-gray-700">Kode Barang</label>
                <input type="text" name="kode_barang" id="kode_barang" value="{{ $inventory->kode_barang }}"
                    class="w-full p-3 border rounded-md" required>
            </div>

            <div>
                <label for="tipe" class="block text-sm font-medium text-gray-700">Tipe</label>
                <input type="text" name="tipe" id="tipe" value="{{ $inventory->tipe }}"
                    class="w-full p-3 border rounded-md" required>
            </div>

            <div>
                <label for="nama_produk" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" value="{{ $inventory->nama_produk }}"
                    class="w-full p-3 border rounded-md" required>
            </div>

            <div>
                <label for="berat_satuan" class="block text-sm font-medium text-gray-700">Berat/Satuan</label>
                <input type="text" name="berat_satuan" id="berat_satuan" value="{{ $inventory->berat_satuan }}"
                    class="w-full p-3 border rounded-md">
            </div>

            <div>
                <label for="jumlah_masuk" class="block text-sm font-medium text-gray-700">Jumlah Masuk</label>
                <input type="number" name="jumlah_masuk" id="jumlah_masuk" value="{{ $inventory->jumlah_masuk }}"
                    class="w-full p-3 border rounded-md" required>
            </div>

            <div>
                <label for="jumlah_final" class="block text-sm font-medium text-gray-700">Jumlah Final</label>
                <input type="number" name="jumlah_final" id="jumlah_final" value="{{ $inventory->jumlah_final }}"
                    class="w-full p-3 border rounded-md" required>
            </div>

            <div>
                <label for="stok" class="block text-sm font-medium text-gray-700">Stok</label>
                <input type="number" name="stok" id="stok" value="{{ $inventory->stok }}"
                    class="w-full p-3 border rounded-md" required>
            </div>

            <div>
                <label for="harga_perolehan" class="block text-sm font-medium text-gray-700">Harga Perolehan</label>
                <input type="number" step="0.01" name="harga_perolehan" id="harga_perolehan"
                    value="{{ $inventory->harga_perolehan }}" class="w-full p-3 border rounded-md" required>
            </div>

            <!-- Tombol -->
            <div class="md:col-span-2 flex justify-end gap-4 mt-6">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                    Simpan
                </button>
                <a href="{{ route('inventory.index') }}" class="bg-gray-400 text-white px-6 py-2 rounded hover:bg-gray-500">
                    Kembali
                </a>
            </div>
        </form>
    </div>
</main>
@endsection
