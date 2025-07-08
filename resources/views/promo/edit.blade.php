@extends('layouts.app')
@section('title', 'Edit Promo')
@section('content')
<div class="bg-white p-8 rounded shadow w-full max-w-full">
    <h3 class="text-md mb-6 font-semibold">Edit Promo</h3>
    <form action="{{ route('promo.update', $promo->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6 w-full">
        @csrf
        @method('PUT')
        <div>
            <label for="nama_promo" class="block text-sm font-medium text-gray-700">Nama Promo</label>
            <input type="text" name="nama_promo" id="nama_promo" value="{{ old('nama_promo', $promo->nama_promo) }}" class="w-full p-3 border rounded-md" required>
        </div>
        <div>
            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="3" class="w-full p-3 border rounded-md">{{ old('deskripsi', $promo->deskripsi) }}</textarea>
        </div>
        <div>
            <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
            <input type="number" name="harga" id="harga" value="{{ old('harga', $promo->harga) }}" class="w-full p-3 border rounded-md" required>
        </div>
        <div>
            <label for="durasi" class="block text-sm font-medium text-gray-700">Durasi (Menit)</label>
            <input type="number" name="durasi" id="durasi" value="{{ old('durasi', $promo->durasi) }}" class="w-full p-3 border rounded-md" required>
        </div>
        <div>
            <label for="foto" class="block text-sm font-medium text-gray-700">Ganti Foto (Opsional)</label>
            <input type="file" name="foto" id="foto" class="w-full p-2 border rounded-md">
            @if ($promo->foto)
                <p class="mt-2 text-sm text-gray-500">Foto sekarang:</p>
                <img src="{{ asset('storage/' . $promo->foto) }}" class="w-20 h-20 object-cover mt-1" alt="foto lama">
            @endif
        </div>
        <div class="flex justify-end space-x-4 mt-8">
            <a href="{{ route('karyawan.promo.index') }}" class="bg-gray-400 text-white px-6 py-2 rounded-md hover:bg-gray-500">Batal</a>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection