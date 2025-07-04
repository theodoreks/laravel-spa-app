@extends('layouts.app')

@section('title', 'Beranda Karyawan')

@section('content')
<!-- Header -->
<div class="flex justify-between items-center mb-4">
    <h1 class="text-xl font-semibold">
        <i class="fas fa-house mr-2"></i> Beranda Karyawan
    </h1>
</div>

<!-- Welcome Card -->
<div class="bg-white p-6 rounded-lg shadow">
    <p>Selamat Datang, <strong>{{ Auth::user()->nama_lengkap ?? 'Nama Karyawan' }}</strong> di Hijau Spa</p>
    <p>Anda login sebagai {{ ucfirst(Auth::user()->role ?? 'karyawan') }}.</p>
</div>

<!-- Card Absen -->
<div class="bg-[#A7B89C] p-4 rounded shadow mt-4">
    <div class="flex items-center mb-2 text-sm text-gray-800">
        <i class="fas fa-calendar-alt mr-2"></i>
        <span>{{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}</span>
    </div>
    <p class="text-gray-800 mb-4">
        Anda belum melakukan absen hari ini.<br>
        Silakan absen terlebih dahulu untuk mengakses fitur lainnya.
    </p>
    <div class="flex justify-end">
        <a href="{{ route('absensi.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Absen Sekarang
        </a>
    </div>
</div>

<!-- Inventory Table -->
<div class="bg-[#A7B89C] p-4 rounded-lg shadow-md mt-6">
    <h2 class="text-sm font-semibold mb-3">Update Inventory Terbaru</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full text-sm text-left bg-white rounded-md">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2">Tanggal Tambah</th>
                    <th class="px-4 py-2">Merek</th>
                    <th class="px-4 py-2">Nama Produk</th>
                    <th class="px-4 py-2">Berat/Satuan</th>
                    <th class="px-4 py-2">Jumlah (pcs)</th>
                    <th class="px-4 py-2">Sisa</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($data as $item)
                    <tr>
                        <td class="px-4 py-2">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</td>
                        <td class="px-4 py-2">{{ $item->tipe }}</td>
                        <td class="px-4 py-2">{{ $item->nama_produk }}</td>
                        <td class="px-4 py-2">{{ $item->berat_satuan ?? '-' }}</td>
                        <td class="px-4 py-2">{{ $item->jumlah_masuk }}</td>
                        <td class="px-4 py-2">{{ $item->stok }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-gray-500 py-4">Tidak ada data inventaris.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
