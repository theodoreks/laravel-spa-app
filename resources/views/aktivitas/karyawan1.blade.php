@extends('layouts.app')

@section('title', 'Aktivitas Diri Karyawan')

@section('content')
<div class="flex justify-between items-center mb-4">
  <h1 class="text-xl font-semibold"><i class=""></i> Aktivitas Diri Karyawan</h1>
</div>

<div class="bg-white p-6 rounded-lg shadow font-playfair">
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-lg font-medium">Daftar Aktivitas Mingguan</h2>
    <a href="{{ route('aktivitas.mingguan.create') }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 inline-flex items-center">
      <i class="fas fa-plus mr-1"></i> Tambah
    </a>
  </div>

  <div class="overflow-x-auto">
    <table class="w-full table-auto border border-gray-300 text-sm font-playfair">
      <thead class="bg-gray-100">
        <tr>
          <th class="border px-4 py-2 text-right">Tanggal</th>
          <th class="border px-4 py-2 text-right">Aktivitas</th>
          <th class="border px-4 py-2 text-right">Selesai</th>
          <th class="border px-4 py-2 text-right">Opsi</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($aktivitasMingguan as $aktivitas)
        <tr>
          <td class="border px-4 py-2 text-right">{{ \Carbon\Carbon::parse($aktivitas->tanggal)->translatedFormat('l, d F Y') }}</td>
          <td class="border px-4 py-2 text-right">{{ $aktivitas->aktivitas }}</td>
          <td class="border px-4 py-2 text-right">
            <input type="checkbox" disabled {{ $aktivitas->status == 'selesai' ? 'checked' : '' }}>
          </td>
          <td class="border px-4 py-2 text-right flex justify-end items-center space-x-2">
            <a href="{{ route('aktivitas.mingguan.edit', $aktivitas->id) }}" class="text-blue-600 hover:underline">
              <i class="fas fa-pen"></i>
            </a>
            <form action="{{ route('aktivitas.mingguan.destroy', $aktivitas->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="text-red-600 hover:underline">
                <i class="fas fa-trash-alt"></i>
              </button>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="4" class="border px-4 py-4 text-center text-gray-500">Belum ada aktivitas.</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
