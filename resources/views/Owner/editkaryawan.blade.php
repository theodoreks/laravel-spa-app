@extends('layouts.Owner')

@section('content')
<h1 class="text-xl font-semibold mb-4">Karyawan</h1>

<div class="bg-white p-6 rounded-lg shadow border max-w-4xl">
    <h2 class="text-base font-medium">Edit Data Karyawan</h2>

    <form action="#" method="POST" class="space-y-6">
        @csrf
        @method('PUT') {{-- Jika kamu pakai route edit --}}

        {{-- No --}}
        <div>
            <label for="no" class="block text-sm font-medium text-gray-700 mb-1">No</label>
            <input type="text" id="no" name="no" value="{{ old('no', $karyawan->no ?? '') }}" class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-green-500">
        </div>

        {{-- Baris 2: Nama & Jenis Kelamin --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama', $karyawan->nama ?? '') }}" class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-green-500">
            </div>
            <div>
                <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
                <input type="text" id="jenis_kelamin" name="jenis_kelamin" value="{{ old('jenis_kelamin', $karyawan->jenis_kelamin ?? '') }}" class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-green-500">
            </div>
        </div>

        {{-- Baris 3: No Handphone & Username --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="hp" class="block text-sm font-medium text-gray-700 mb-1">No Handphone</label>
                <input type="text" id="hp" name="hp" value="{{ old('hp', $karyawan->hp ?? '') }}" class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-green-500">
            </div>
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                <input type="text" id="username" name="username" value="{{ old('username', $karyawan->username ?? '') }}" class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-green-500">
            </div>
        </div>

        {{-- Tombol --}}
        <div class="flex justify-end space-x-2 pt-4">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-4 py-2 rounded">Simpan</button>
            <a href="" class="bg-gray-400 hover:bg-gray-500 text-white text-sm px-4 py-2 rounded">Kembali</a>
        </div>
    </form>
</div>
@endsection
