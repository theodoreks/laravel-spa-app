@extends('layouts.app')

@section('title', 'Tambah Laporan')

@section('content')
  <div class="flex justify-between items-center mb-4">
    <h1 class="text-xl font-semibold">
      <i class=""></i> Laporan Booking
    </h1>
  </div>

  <div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-lg font-medium mb-4">
      <i class=""></i> Tambah Laporan Booking
    </h2>

    <form action="{{ route('laporan.store') }}" method="POST" class="space-y-6">
      @csrf

      <!-- Kode Booking -->
      <div>
        <label for="kode_booking" class="block text-sm font-medium text-gray-700">Kode Booking</label>
        <input type="text" name="kode_booking" id="kode_booking" value="{{ old('kode_booking') }}"
          class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
      </div>

      <!-- Tanggal -->
      <div>
        <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
        <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal') }}"
          class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
      </div>

      <!-- Nama Konsumen -->
      <div>
        <label for="nama_konsumen" class="block text-sm font-medium text-gray-700">Nama Konsumen</label>
        <input type="text" name="nama_konsumen" id="nama_konsumen" value="{{ old('nama_konsumen') }}"
          class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
      </div>

      <!-- Treatment -->
      <div>
        <label for="treatment" class="block text-sm font-medium text-gray-700">Treatment</label>
        <input type="text" name="treatment" id="treatment" value="{{ old('treatment') }}"
          class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
      </div>

      <!-- Therapist -->
      <div>
        <label for="therapist" class="block text-sm font-medium text-gray-700">Therapist</label>
        <input type="text" name="therapist" id="therapist" value="{{ old('therapist') }}"
          class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
      </div>

      <!-- Harga -->
      <div>
        <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
        <input type="number" name="harga" id="harga" value="{{ old('harga') }}"
          class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
      </div>

      <!-- Durasi -->
      <div>
        <label for="durasi" class="block text-sm font-medium text-gray-700">Durasi (Menit)</label>
        <input type="text" name="durasi" id="durasi" value="{{ old('durasi') }}"
          class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
      </div>

      <!-- Tombol -->
      <div class="flex justify-end space-x-4 mt-6">
        <button type="submit"
          class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">
          Simpan
        </button>
        <a href="{{ route('laporan.index') }}"
          class="bg-gray-400 text-white px-6 py-3 rounded-md hover:bg-gray-500 focus:ring-2 focus:ring-gray-500">
          Batal
        </a>
      </div>
    </form>
  </div>
@endsection
