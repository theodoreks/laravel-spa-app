@extends('Owner.layouts.app')

@section('content')
<h1 class="text-xl font-semibold mb-4">Tambah Karyawan</h1>

@if ($errors->any())
    <div class="mb-4 bg-red-100 text-red-800 p-3 rounded shadow">
        <ul class="text-sm space-y-1">
            @foreach ($errors->all() as $error)
                <li>• {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('owner.karyawan.store') }}" method="POST" class="bg-white p-6 rounded shadow border space-y-4">
    @csrf

    <div>
        <label class="block text-sm font-medium">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="w-full border px-3 py-2 rounded" value="{{ old('nama_lengkap') }}" required>
    </div>

    <div>
        <label class="block text-sm font-medium">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="w-full border px-3 py-2 rounded" required>
            <option value="">-- Pilih --</option>
            <option value="Laki-Laki" {{ old('jenis_kelamin') == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
            <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>
    </div>

    <div>
        <label class="block text-sm font-medium">No Handphone</label>
        <input type="text" name="no_hp" class="w-full border px-3 py-2 rounded" value="{{ old('no_hp') }}" required>
    </div>

    <div>
        <label class="block text-sm font-medium">Username</label>
        <input type="text" name="username" class="w-full border px-3 py-2 rounded" value="{{ old('username') }}" required>
    </div>

    <div>
        <label class="block text-sm font-medium">Password</label>
        <input type="password" name="password" class="w-full border px-3 py-2 rounded" required>
    </div>

    <div>
        <label class="block text-sm font-medium">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" class="w-full border px-3 py-2 rounded" required>
    </div>

    <div class="flex justify-end gap-2">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
        <a href="{{ route('owner.karyawan.index') }}" class="text-gray-600 hover:underline">Kembali</a>
    </div>
</form>
@endsection
