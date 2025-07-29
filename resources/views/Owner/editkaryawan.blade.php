@extends('Owner.layouts.app')

@section('content')
<h1 class="text-xl font-semibold mb-4">Edit Karyawan</h1>

@if ($errors->any())
    <div class="mb-4 bg-red-100 text-red-800 p-3 rounded shadow">
        <ul class="text-sm space-y-1">
            @foreach ($errors->all() as $error)
                <li>• {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('owner.karyawan.update', $karyawan->id) }}" method="POST" class="bg-white p-6 rounded shadow border space-y-4">
    @csrf
    @method('PUT')

    <div>
        <label class="block text-sm font-medium">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="w-full border px-3 py-2 rounded" value="{{ old('nama_lengkap', $karyawan->nama_lengkap) }}" required>
    </div>

    <div>
        <label class="block text-sm font-medium">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="w-full border px-3 py-2 rounded" required>
            <option value="">-- Pilih --</option>
            <option value="Laki-Laki" {{ old('jenis_kelamin', $karyawan->jenis_kelamin) == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
            <option value="Perempuan" {{ old('jenis_kelamin', $karyawan->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>
    </div>

    <div>
        <label class="block text-sm font-medium">No Handphone</label>
        <input type="text" name="no_hp" class="w-full border px-3 py-2 rounded" value="{{ old('no_hp', $karyawan->no_hp) }}" required>
    </div>

    <div>
        <label class="block text-sm font-medium">Username</label>
        <input type="text" name="username" class="w-full border px-3 py-2 rounded" value="{{ old('username', $karyawan->username) }}" required>
    </div>

    <div class="text-sm text-gray-500">
        Kosongkan password jika tidak ingin mengubah.
    </div>

    <div>
        <label class="block text-sm font-medium">Password Baru</label>
        <input type="password" name="password" class="w-full border px-3 py-2 rounded">
    </div>

    <div>
        <label class="block text-sm font-medium">Konfirmasi Password Baru</label>
        <input type="password" name="password_confirmation" class="w-full border px-3 py-2 rounded">
    </div>

    <div class="flex justify-end gap-2">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
        <a href="{{ route('owner.karyawan.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">Kembali</a>
    </div>
</form>
@endsection
