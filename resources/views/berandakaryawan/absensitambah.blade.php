@extends('layouts.app')

@section('title', 'Tambah Absen Karyawan')

@section('content')
<h2 class="text-xl font-bold mb-6"><i class=></i> Absen Karyawan</h2>

<div class="bg-white p-8 rounded shadow w-full max-w-full">
    <h3 class="text-md font-medium mb-6">Tambah Absen</h3>

    <form action="{{ route('absensi.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 w-full">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Nama Karyawan -->
            <div>
                <label for="nama_karyawan" class="block text-sm font-medium text-gray-700">Nama Karyawan</label>
                <input
                    type="text"
                    name="nama_karyawan"
                    id="nama_karyawan"
                    class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <!-- Tanggal -->
            <div>
                <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                <input
                    type="date"
                    name="tanggal"
                    id="tanggal"
                    class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <!-- Jam Masuk -->
            <div>
                <label for="jam_masuk" class="block text-sm font-medium text-gray-700">Jam Masuk</label>
                <input
                    type="time"
                    name="jam_masuk"
                    id="jam_masuk"
                    class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <!-- Jam Keluar -->
            <div>
                <label for="jam_keluar" class="block text-sm font-medium text-gray-700">Jam Keluar</label>
                <input
                    type="time"
                    name="jam_keluar"
                    id="jam_keluar"
                    class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <!-- Keterangan -->
            <div class="md:col-span-2">
                <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                <input
                    type="text"
                    name="keterangan"
                    id="keterangan"
                    class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500"
                    required>
            </div>
        </div>

        <!-- Tombol -->
        <div class="flex justify-end space-x-4 mt-8">
            <button
                type="submit"
                class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">
                Simpan
            </button>
            <a
                href="{{ route('absensi.index') }}"
                class="bg-gray-400 text-white px-6 py-3 rounded-md hover:bg-gray-500 focus:ring-2 focus:ring-gray-500">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
