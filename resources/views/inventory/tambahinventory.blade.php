@extends('layouts.app')
@section('title', 'Tambah Inventory')
@section('content')
<div class="bg-white p-8 rounded shadow w-full">
    <h3 class="text-md font-medium mb-4">Tambah Inventory Barang</h3>
    <form action="{{ route('karyawan.inventory.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @csrf
        <div>
            <label class="block text-sm font-medium">Tanggal</label>
            <input type="date" name="tanggal" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label class="block text-sm font-medium">Kode Barang</label>
            <input type="text" name="kode_barang" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label class="block text-sm font-medium">Merek</label>
            <input type="text" name="tipe" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label class="block text-sm font-medium">Jumlah (Pcs)</label>
            <input type="number" name="jumlah_masuk" class="w-full border rounded p-2" required>
        </div>
        <div class="md:col-span-2">
            <label class="block text-sm font-medium">Nama Produk</label>
            <input type="text" name="nama_produk" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label class="block text-sm font-medium">Berat/Satuan</label>
            <input type="text" name="berat_satuan" class="w-full border rounded p-2">
        </div>
        <div>
            <label class="block text-sm font-medium">Harga Perolehan</label>
            <input type="number" name="harga_perolehan" class="w-full border rounded p-2" required>
        </div>
        <div class="md:col-span-2">
            <label class="block text-sm font-medium">Deskripsi</label>
            <textarea name="deskripsi" rows="3" class="w-full border rounded p-2"></textarea>
        </div>
        {{-- Input tersembunyi untuk field yang tidak ada di form --}}
        <input type="hidden" name="kode_id" value="TEMP-{{ time() }}">
        <input type="hidden" name="jumlah_final" value="0">
        <input type="hidden" name="stok" value="0">
        <div class="md:col-span-2 flex justify-end gap-2 mt-4">
            <a href="{{ route('karyawan.inventory.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded">Batal</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
        </div>
    </form>
</div>
@endsection