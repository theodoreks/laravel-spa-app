@extends('Owner.layouts.app')

@section('title', 'Laporan Booking')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Laporan Booking</h1>
</div>

<div class="bg-white shadow rounded-lg p-6">
    <h2 class="text-lg font-medium mb-4">Laporan Semua Booking</h2>

    <form method="GET" action="{{ route('owner.laporan.booking') }}" class="flex items-center space-x-2 mb-4">
        <input type="date" name="tanggal_awal" value="{{ request('tanggal_awal') }}" class="border rounded p-2">
        <input type="date" name="tanggal_akhir" value="{{ request('tanggal_akhir') }}" class="border rounded p-2">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            <i class="fas fa-search"></i> Cari
        </button>
    </form>

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
                    <th class="border px-4 py-2">Status</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @forelse($bookings as $index => $booking)
                <tr class="{{ $index % 2 === 0 ? 'bg-white' : 'bg-gray-100' }}">
                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                    <td class="border px-4 py-2">{{ $booking->id }}</td>
                    <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($booking->tanggal_treatment)->translatedFormat('d/m/Y') }}</td>
                    <td class="border px-4 py-2">{{ $booking->user->nama_lengkap }}</td>
                    <td class="border px-4 py-2">{{ $booking->promo->nama_promo }}</td>
                    <td class="border px-4 py-2">{{ $booking->therapist }}</td>
                    <td class="border px-4 py-2">Rp{{ number_format($booking->promo->harga, 0, ',', '.') }}</td>
                    <td class="border px-4 py-2">{{ $booking->promo->durasi }} Menit</td>
                    <td class="border px-4 py-2">{{ $booking->status_pembayaran }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="9" class="py-4 text-center text-gray-500">Tidak ada data laporan</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection