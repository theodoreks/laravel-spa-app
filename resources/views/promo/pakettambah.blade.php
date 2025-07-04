@extends('layouts.app')

@section('title', 'Tambah Promo')

@section('content')
<h2 class="text-xl font-bold mb-6"><i class=""></i> Promo</h2>

<div class="bg-white p-8 rounded shadow w-full max-w-full">
    <h3 class="text-md mb-6">Tambah Promo</h3>

    <form action="{{ route('paket.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 w-full">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Nama Paket --}}
            <div>
                <label for="nama_paket" class="block text-sm font-medium text-gray-700">Paket</label>
                <input type="text" name="nama_paket" id="nama_paket"
                    value="{{ old('nama_paket') }}"
                    class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
                @error('nama_paket')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Harga --}}
            <div>
                <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                <input type="number" name="harga" id="harga"
                    value="{{ old('harga') }}"
                    class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
                @error('harga')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Durasi --}}
            <div>
                <label for="durasi" class="block text-sm font-medium text-gray-700">Durasi (Menit)</label>
                <input type="number" name="durasi" id="durasi"
                    value="{{ old('durasi') }}"
                    class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
                @error('durasi')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Foto --}}
            <div>
                <label for="foto" class="block text-sm font-medium text-gray-700">Foto</label>
                <input type="file" name="foto" id="foto" accept="image/*"
                    class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
                @error('foto')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        {{-- Tombol --}}
        <div class="flex justify-end space-x-4 mt-8">
            <button type="submit"
                class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">
                Simpan
            </button>
            <a href="{{ route('paket.index') }}"
                class="bg-gray-400 text-white px-6 py-3 rounded-md hover:bg-gray-500 focus:ring-2 focus:ring-gray-500">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
