@extends('layouts.app')

@section('title', 'Daftar Promo')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-xl font-semibold">
        <i class=""></i> Promo
    </h1>
</div>

<div class="bg-white p-6 rounded-lg shadow">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-medium">
            <i class=""></i> Daftar Promo
        </h2>
        <a href="{{ route('paket.create') }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
            <i class="fas fa-plus mr-1"></i> Tambah Promo
        </a>
    </div>

    <table class="min-w-full table-auto border border-gray-300 text-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-4 py-2">NO</th>
                <th class="border px-4 py-2">Paket</th>
                <th class="border px-4 py-2">Harga</th>
                <th class="border px-4 py-2">Durasi</th>
                <th class="border px-4 py-2">Foto</th>
                <th class="border px-4 py-2">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pakets as $index => $paket)
                <tr class="text-center">
                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                    <td class="border px-4 py-2">{{ $paket->nama_paket }}</td>
                    <td class="border px-4 py-2">{{ number_format($paket->harga) }}</td>
                    <td class="border px-4 py-2">{{ $paket->durasi }} Menit</td>
                    <td class="border px-4 py-2">
                        <img src="{{ asset('storage/' . $paket->foto) }}" alt="foto" class="w-12 h-12 object-cover mx-auto" />
                    </td>
                    <td class="border px-4 py-2">
                        <div class="flex justify-center items-center space-x-1">
                            <!-- Tombol Edit Kecil -->
                            <a href="{{ route('paket.edit', $paket->id) }}" class="bg-green-600 hover:bg-green-700 text-white p-1.5 rounded-md shadow text-xs">
                                <i class="fas fa-edit text-xs"></i>
                            </a>
                            <!-- Tombol Hapus Kecil -->
                            <form action="{{ route('paket.destroy', $paket->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
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
@endsection
