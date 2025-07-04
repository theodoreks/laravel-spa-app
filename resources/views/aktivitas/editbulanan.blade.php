@extends('layouts.app')

@section('title', 'Edit Aktivitas Bulanan')

@section('content')
<main class="p-10">
  <h2 class="text-xl font-bold mb-6">Aktivitas Diri Karyawan</h2>

  <div class="bg-white p-8 rounded shadow w-full font-playfair">
    <h3 class="text-md font-semibold mb-4">Edit Aktivitas Karyawan Bulanan</h3>

    <!-- Form Edit -->
    <form action="{{ route('aktivitas.bulanan.update', $aktivitas->id) }}" method="POST" class="space-y-6">
      @csrf
      @method('PUT')

      <!-- Tanggal -->
      <div>
        <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
        <input type="date" name="tanggal" id="tanggal" value="{{ $aktivitas->tanggal }}" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
      </div>

      <!-- Aktivitas -->
      <div>
        <label for="aktivitas" class="block text-sm font-medium text-gray-700">Aktivitas</label>
        <input type="text" name="aktivitas" id="aktivitas" value="{{ $aktivitas->aktivitas }}" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
      </div>

      <!-- Status -->
      <div>
        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
        <select name="status" id="status" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
          <option value="selesai" {{ $aktivitas->status === 'selesai' ? 'selected' : '' }}>Selesai</option>
          <option value="belum" {{ $aktivitas->status === 'belum' ? 'selected' : '' }}>Belum</option>
        </select>
      </div>

      <!-- Tombol Simpan & Batal -->
      <div class="flex justify-end space-x-4 mt-6">
        <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">
          Simpan
        </button>
        <a href="{{ route('aktivitas.bulanan.index') }}" class="bg-gray-400 text-white px-6 py-3 rounded-md hover:bg-gray-500 focus:ring-2 focus:ring-gray-500">
          Batal
        </a>
      </div>
    </form>
  </div>
</main>
@endsection
