@extends('layouts.app')

@section('title', 'Profil Karyawan')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white shadow rounded-lg mt-6">
  <h1 class="text-2xl font-bold mb-4">Profil Karyawan</h1>

  <form action="{{ route('profil.update') }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    <div>
      <label for="nama_lengkap" class="text-sm text-gray-600">Nama Lengkap</label>
      <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ $user->nama_lengkap }}"
        class="w-full border px-4 py-2 rounded" required>
    </div>

    <div>
      <label for="username" class="text-sm text-gray-600">Username</label>
      <input type="text" name="username" id="username" value="{{ $user->username }}"
        class="w-full border px-4 py-2 rounded" required>
    </div>

    <div>
      <label for="no_hp" class="text-sm text-gray-600">No. Telepon</label>
      <input type="text" name="no_hp" id="no_hp" value="{{ $user->no_hp }}"
        class="w-full border px-4 py-2 rounded" required>
    </div>

    <div class="flex justify-end mt-6">
      <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
        Simpan
      </button>
    </div>
  </form>
</div>
@endsection
