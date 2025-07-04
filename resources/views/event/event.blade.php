@extends('layouts.app')

@section('title', 'Event dan Kolaborasi')

@section('content')
<div class="flex justify-between items-center mb-4">
  <h1 class="text-xl font-semibold">Event dan Kolaborasi</h1>
</div>

<div class="bg-white p-6 rounded-lg shadow">
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-lg font-medium">Daftar Event dan Kolaborasi</h2>
    <a href="{{ route('event.tambah') }}"
       class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
      <i class="fas fa-plus mr-1"></i> Tambah
    </a>
  </div>

  <div class="overflow-x-auto">
    <table class="min-w-full border text-sm text-left">
      <thead class="bg-gray-100 text-center">
        <tr>
          <th class="border px-4 py-2">Tema</th>
          <th class="border px-4 py-2">Deskripsi</th>
          <th class="border px-4 py-2">Tanggal</th>
          <th class="border px-4 py-2">Lokasi</th>
          <th class="border px-4 py-2">Foto</th>
          <th class="border px-4 py-2">Opsi</th>
        </tr>
      </thead>
      <tbody class="text-center">
        @foreach ($events as $event)
        <tr class="odd:bg-white even:bg-gray-100">
          <td class="border px-4 py-2">{{ $event->tema }}</td>
          <td class="border px-4 py-2">{{ $event->deskripsi }}</td>
          <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($event->tanggal)->translatedFormat('l, d F Y') }}</td>
          <td class="border px-4 py-2">{{ $event->lokasi }}</td>
          <td class="border px-4 py-2">
            <img src="{{ asset('storage/' . $event->foto) }}" alt="Event"
                 class="w-12 h-12 object-cover mx-auto" />
          </td>
          <td class="border px-4 py-2">
            <div class="flex justify-center space-x-2">
              <!-- Edit Hijau -->
              <a href="{{ route('event.edit', $event->id) }}" class="bg-green-600 hover:bg-green-700 text-white p-1.5 rounded-md shadow text-xs">
                <i class="fas fa-edit text-xs"></i>
              </a>
              <!-- Hapus Merah -->
              <form action="{{ route('event.hapus', $event->id) }}" method="POST"
                    onsubmit="return confirm('Yakin ingin hapus?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white p-1.5 rounded-md shadow text-xs">
                  <i class="fas fa-trash-alt text-xs"></i>
                </button>
              </form>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
