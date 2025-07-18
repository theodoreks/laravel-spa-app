@extends('layouts.app')
@section('title', 'Edit Inventory')
@section('content')
<div class="bg-white p-8 rounded shadow w-full">
    <h3 class="text-md font-medium mb-4">Edit Inventory Barang</h3>
    <form action="{{ route('karyawan.inventory.update', $inventory->id) }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-sm font-medium text-gray-700">Tanggal</label>
            <input type="date" name="tanggal" value="{{ \Carbon\Carbon::parse($inventory->tanggal)->format('Y-m-d') }}" class="w-full p-3 border rounded-md" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Kode Barang</label>
            <input type="text" name="kode_barang" value="{{ $inventory->kode_barang }}" class="w-full p-3 border rounded-md" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Merek</label>
            <input type="text" name="tipe" value="{{ $inventory->tipe }}" class="w-full p-3 border rounded-md" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Jumlah</label>
            <input type="number" name="jumlah_masuk" value="{{ $inventory->jumlah_masuk }}" class="w-full p-3 border rounded-md" required>
        </div>
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700">Nama Produk</label>
            <input type="text" name="nama_produk" value="{{ $inventory->nama_produk }}" class="w-full p-3 border rounded-md" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Berat/Satuan</label>
            <input type="text" name="berat_satuan" value="{{ $inventory->berat_satuan }}" class="w-full p-3 border rounded-md">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Harga Perolehan</label>
            <input type="number" name="harga_perolehan" value="{{ $inventory->harga_perolehan }}" class="w-full p-3 border rounded-md" required>
        </div>
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea name="deskripsi" rows="3" class="w-full p-3 border rounded-md">{{ $inventory->deskripsi }}</textarea>
        </div>
        {{-- Input tersembunyi untuk field yang tidak ada di form --}}
        <input type="hidden" name="kode_id" value="{{ $inventory->kode_id }}">
        <input type="hidden" name="jumlah_final" value="{{ $inventory->jumlah_final }}">
        <input type="hidden" name="stok" value="{{ $inventory->stok }}">
        <div class="md:col-span-2 flex justify-end gap-4 mt-6">
            <a href="{{ route('karyawan.inventory.index') }}" class="bg-gray-400 text-white px-6 py-2 rounded">Kembali</a>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded">Simpan</button>
        </div>
    </form>
</div>
@endsection