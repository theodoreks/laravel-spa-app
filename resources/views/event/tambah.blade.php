@extends('layouts.app')

@section('title', 'Tambah Event dan Kolaborasi')

@section('content')
<h2 class="text-xl font-bold mb-6">Event dan Kolaborasi</h2>

<div class="bg-white p-8 rounded shadow w-full">
    <h3 class="text-md font-medium mb-4">
        <i class=""></i>Tambah Event dan Kolaborasi
    </h3>

    <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <!-- Tema -->
        <div>
            <label for="tema" class="block text-sm font-medium text-gray-700">Tema</label>
            <input
                type="text"
                name="tema"
                id="tema"
                class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500"
                required>
        </div>

        <!-- Deskripsi dan Tanggal -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <input
                    type="text"
                    name="deskripsi"
                    id="deskripsi"
                    class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500"
                    required>
            </div>
            <div>
                <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                <input
                    type="date"
                    name="tanggal"
                    id="tanggal"
                    class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500"
                    required>
            </div>
        </div>

        <!-- Lokasi dan Foto -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="lokasi" class="block text-sm font-medium text-gray-700">Lokasi</label>
                <input
                    type="text"
                    name="lokasi"
                    id="lokasi"
                    class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500"
                    required>
            </div>
            <div>
                <label for="foto" class="block text-sm font-medium text-gray-700">Foto</label>
                <input
                    type="file"
                    name="foto"
                    id="foto"
                    class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500">
            </div>
        </div>

        <!-- Tombol Simpan dan Batal -->
        <div class="flex justify-end space-x-4 mt-6">
            <button
                type="submit"
                class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">
                Simpan
            </button>
            <a
                href="{{ route('event.index') }}"
                class="bg-gray-400 text-white px-6 py-3 rounded-md hover:bg-gray-500 focus:ring-2 focus:ring-gray-500">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
