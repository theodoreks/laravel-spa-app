@extends('layouts.app')

@section('title', 'Aktivitas Harian')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-xl font-semibold"><i class=""></i> Aktivitas Diri Karyawan</h1>
</div>

<div class="bg-white p-6 rounded-lg shadow">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-medium">Daftar Aktivitas Harian</h2>
        <a href="{{ route('aktivitas.create') }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 inline-flex items-center">
            <i class="fas fa-plus mr-1"></i> Tambah
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full table-auto border border-gray-300 text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2 text-right">Tanggal</th>
                    <th class="border px-4 py-2 text-right">Jam</th>
                    <th class="border px-4 py-2 text-right">Aktivitas</th>
                    <th class="border px-4 py-2 text-right">Selesai</th>
                    <th class="border px-4 py-2 text-right">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aktivitas as $a)
                <tr>
                    <td class="border px-4 py-2 text-right">{{ \Carbon\Carbon::parse($a->tanggal)->format('l, d M Y') }}</td>
                    <td class="border px-4 py-2 text-right">{{ $a->jam }}</td>
                    <td class="border px-4 py-2 text-right">{{ $a->aktivitas }}</td>
                    <td class="border px-4 py-2 text-right">
                        <input type="checkbox" {{ $a->status === 'selesai' ? 'checked' : '' }} disabled>
                    </td>
                    <td class="border px-4 py-2 text-right">
                        <a href="{{ route('aktivitas.edit', $a->id) }}" class="text-blue-600 hover:underline">
                            <i class="fas fa-pen"></i>
                        </a>
                        <form action="{{ route('aktivitas.destroy', $a->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus aktivitas ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="ml-2 text-red-600 hover:underline">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
