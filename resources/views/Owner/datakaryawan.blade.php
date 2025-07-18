@extends('Owner.Layouts.app')

@section('content')
<h1 class="text-xl font-semibold mb-4">Karyawan</h1>

@if (session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-800 rounded shadow">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white p-6 rounded-md shadow border">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-base font-medium">Tabel Info Karyawan</h2>
        <a href="{{ route('owner.karyawan.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-4 py-2 rounded shadow flex items-center space-x-1">
            <i class="fas fa-plus"></i>
            <span>Tambah</span>
        </a>
    </div>

    {{-- Header Kolom --}}
    <div class="grid grid-cols-6 bg-gray-200 px-4 py-2 text-sm font-semibold border border-gray-300">
        <div>No</div>
        <div>Nama</div>
        <div>Jenis Kelamin</div>
        <div>No Handphone</div>
        <div>Username</div>
        <div class="text-center">Aksi</div>
    </div>

    {{-- Isi Data --}}
    <div class="divide-y divide-gray-200 text-sm">
        @forelse ($karyawan as $index => $item)
            <div class="grid grid-cols-6 {{ $loop->iteration % 2 == 1 ? 'bg-white hover:bg-gray-50' : 'bg-gray-100 hover:bg-gray-200' }} px-4 py-2">
                <div>{{ $index + 1 }}</div>
                <div>{{ $item->nama_lengkap }}</div>
                <div>{{ $item->jenis_kelamin }}</div>
                <div>{{ $item->no_hp }}</div>
                <div>{{ $item->username }}</div>
                <div class="flex justify-center space-x-2">
                    <a href="{{ route('owner.karyawan.edit', $item->id) }}" class="bg-green-600 hover:bg-green-700 text-white p-1.5 rounded shadow text-xs">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('owner.karyawan.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white p-1.5 rounded shadow text-xs">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="col-span-6 text-center py-4 text-gray-500">Data karyawan belum tersedia.</div>
        @endforelse
    </div>
</div>
@endsection
