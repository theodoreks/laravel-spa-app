@extends('layouts.app')

@section('title', 'Tambah Inventory')

@section('content')
<h2 class="text-xl font-bold mb-6"><i class=""></i> Laporan</h2>

<div class="bg-white p-8 rounded shadow w-full">
  <h3 class="text-md font-medium mb-4">
    <i class=""></i>Tambah Inventory Barang
  </h3>

  <form action="{{ route('inventory.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
    @csrf

    <div>
      <label class="block text-sm font-medium">Kode ID</label>
      <input type="text" name="kode_id" class="w-full border rounded p-2" required>
    </div>

    <div>
      <label class="block text-sm font-medium">Tanggal</label>
      <input type="date" name="tanggal" class="w-full border rounded p-2" required>
    </div>

    <div>
      <label class="block text-sm font-medium">Kode Barang</label>
      <input type="text" name="kode_barang" class="w-full border rounded p-2" required>
    </div>

    <div>
      <label class="block text-sm font-medium">Tipe</label>
      <input type="text" name="tipe" class="w-full border rounded p-2" required>
    </div>

    <div>
      <label class="block text-sm font-medium">Nama Produk</label>
      <input type="text" name="nama_produk" class="w-full border rounded p-2" required>
    </div>

    <div>
      <label class="block text-sm font-medium">Berat/Satuan</label>
      <input type="text" name="berat_satuan" class="w-full border rounded p-2">
    </div>

    <div>
      <label class="block text-sm font-medium">Jumlah Masuk</label>
      <input type="number" name="jumlah_masuk" class="w-full border rounded p-2" required>
    </div>

    <div>
      <label class="block text-sm font-medium">Jumlah Final</label>
      <input type="number" name="jumlah_final" class="w-full border rounded p-2" required>
    </div>

    <div>
      <label class="block text-sm font-medium">Stok</label>
      <input type="number" name="stok" class="w-full border rounded p-2" required>
    </div>

    <div>
      <label class="block text-sm font-medium">Harga Perolehan</label>
      <input type="number" name="harga_perolehan" class="w-full border rounded p-2" required>
    </div>

    <div class="md:col-span-2 flex justify-end gap-2 mt-4">
      <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Simpan
      </button>
      <a href="{{ route('inventory.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">
        Batal
      </a>
    </div>
  </form>
</div>
@endsection
