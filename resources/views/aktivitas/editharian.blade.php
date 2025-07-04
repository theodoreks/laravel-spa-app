@extends('layouts.app')

@section('title', 'Edit Aktivitas Harian')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-xl font-semibold">
            <i class=""></i> Edit Aktivitas Diri Karyawan 
        </h1>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-lg font-medium mb-4">
            <i class=""></i> Edit Aktivitas Harian
        </h2>

        <form action="{{ route('aktivitas.update', $aktivitas->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Tanggal -->
            <div>
                <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal"
                       value="{{ old('tanggal', $aktivitas->tanggal?->format('Y-m-d')) }}"
                       class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Jam -->
            <div>
                <label for="jam" class="block text-sm font-medium text-gray-700">Jam</label>
                <input type="time" name="jam" id="jam"
                       value="{{ old('jam', $aktivitas->jam?->format('H:i')) }}"
                       class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Aktivitas -->
            <div>
                <label for="aktivitas" class="block text-sm font-medium text-gray-700">Aktivitas</label>
                <input type="text" name="aktivitas" id="aktivitas"
                       value="{{ old('aktivitas', $aktivitas->aktivitas) }}"
                       class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Status -->
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" id="status"
                        class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
                    <option value="belum" {{ old('status', $aktivitas->status) == 'belum' ? 'selected' : '' }}>Belum</option>
                    <option value="selesai" {{ old('status', $aktivitas->status) == 'selesai' ? 'selected' : '' }}>Selesai</option>
                </select>
            </div>

            <!-- Tombol -->
            <div class="flex justify-end space-x-4 mt-6">
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">
                    Simpan
                </button>
                <a href="{{ route('aktivitas.index') }}" class="bg-gray-400 text-white px-6 py-3 rounded-md hover:bg-gray-500 focus:ring-2 focus:ring-gray-500">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection
