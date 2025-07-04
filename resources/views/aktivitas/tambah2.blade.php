@extends('layouts.app')

@section('title', 'Tambah Aktivitas Bulanan')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-xl font-semibold">
            <i class=""></i> Aktivitas Diri Karyawan 
        </h1>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-lg font-medium mb-4">
            <i class=""></i> Tambah Aktivitas Bulanan
        </h2>

        <form action="{{ route('aktivitas.bulanan.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Tanggal -->
            <div>
                <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal"
                       class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Aktivitas -->
            <div>
                <label for="aktivitas" class="block text-sm font-medium text-gray-700">Aktivitas</label>
                <input type="text" name="aktivitas" id="aktivitas"
                       class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Status -->
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" id="status"
                        class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
                    <option value="belum">Belum</option>
                    <option value="selesai">Selesai</option>
                </select>
            </div>

            <!-- Tombol Simpan dan Batal -->
            <div class="flex justify-end space-x-4 mt-6">
                <button type="submit"
                        class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">
                    Simpan
                </button>
                <a href="{{ route('aktivitas.bulanan.index') }}"
                   class="bg-gray-400 text-white px-6 py-3 rounded-md hover:bg-gray-500 focus:ring-2 focus:ring-gray-500">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection
