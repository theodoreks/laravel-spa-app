@extends('layouts.app')

@section('title', 'Laporan Booking')

@section('content')
<div class="flex justify-between items-center mb-6">
  <h1 class="text-2xl font-bold">Laporan Booking</h1>
</div>

<div class="bg-white shadow rounded-lg p-6">

  <!-- Judul & Tombol Tambah -->
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-lg font-medium">Laporan Booking</h2>
    <a href="{{ route('laporan.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-green-700">
      + Tambah
    </a>
  </div>

  <!-- Filter Kalender -->
  <form method="GET" action="{{ route('laporan.index') }}" class="flex items-center space-x-2 mb-4">
    <input type="date" name="tanggal_awal" value="{{ request('tanggal_awal') }}" class="border rounded p-2" required>
    <input type="date" name="tanggal_akhir" value="{{ request('tanggal_akhir') }}" class="border rounded p-2" required>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
      <i class="fas fa-search"></i> Cari
    </button>
  </form>

  <!-- Tabel -->
  <div class="overflow-x-auto">
    <table class="min-w-full border text-sm text-left">
      <thead class="bg-gray-200 text-center">
        <tr>
          <th class="border px-4 py-2">No</th>
          <th class="border px-4 py-2">ID</th>
          <th class="border px-4 py-2">Tanggal</th>
          <th class="border px-4 py-2">Nama</th>
          <th class="border px-4 py-2">Treatment</th>
          <th class="border px-4 py-2">Therapist</th>
          <th class="border px-4 py-2">Harga</th>
          <th class="border px-4 py-2">Durasi</th>
          <th class="border px-4 py-2">Aksi</th>
        </tr>
      </thead>
      <tbody class="text-center">
        @forelse($laporans as $index => $laporan)
        <tr class="{{ $index % 2 === 0 ? 'bg-white' : 'bg-gray-100' }}">
          <td class="border px-4 py-2">{{ $index + 1 }}</td>
          <td class="border px-4 py-2">{{ $laporan->id }}</td>
          <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($laporan->tanggal)->translatedFormat('d/m/Y') }}</td>
          <td class="border px-4 py-2">{{ $laporan->nama_konsumen }}</td>
          <td class="border px-4 py-2">{{ $laporan->treatment }}</td>
          <td class="border px-4 py-2">{{ $laporan->therapist }}</td>
          <td class="border px-4 py-2">Rp{{ number_format($laporan->harga, 0, ',', '.') }}</td>
          <td class="border px-4 py-2">{{ $laporan->durasi }}</td>
          <td class="border px-4 py-2">
            <div class="flex justify-center space-x-2">
              <a href="{{ route('laporan.edit', $laporan->id) }}" class="bg-green-600 hover:bg-green-700 text-white p-1.5 rounded-md shadow text-xs">
                <i class="fas fa-edit text-xs"></i>
              </a>
              <form action="{{ route('laporan.destroy', $laporan->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus laporan ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white p-1.5 rounded-md shadow text-xs">
                  <i class="fas fa-trash-alt text-xs"></i>
                </button>
              </form>
            </div>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="9" class="py-4 text-gray-500">Tidak ada data laporan</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
