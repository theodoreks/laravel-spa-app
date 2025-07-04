@extends('layouts.app')

@section('title', 'Detail Booking')

@section('content')
<div class="mb-6">
    <h1 class="text-xl font-semibold">Detail Booking</h1>
</div>

<!-- Info Konsumen -->
<div class="bg-white p-4 rounded shadow mb-4 text-sm">
    <div class="grid grid-cols-2 gap-4">
        <div>
            <p><strong>Nama Konsumen:</strong> {{ $booking->nama_konsumen }}</p>
            <p><strong>Username:</strong> {{ $booking->nama_konsumen }}</p>
        </div>
        <div>
            <p><strong>ID Booking:</strong> {{ $booking->id_booking }}</p>
            <p><strong>Jadwal Treatment:</strong>
                {{ \Carbon\Carbon::parse($booking->jadwal_treatment)->format('d M Y | H:i') }} WIB
            </p>
        </div>
    </div>
</div>

<!-- Gambar -->
<div class="bg-white p-4 rounded shadow mb-4 text-sm">
    <p class="mb-2"><strong>Foto:</strong></p>
    @if ($paket->foto)
        <img src="{{ asset('storage/' . $paket->foto) }}" class="w-32 h-32 object-cover rounded">
    @else
        <p class="text-gray-500 italic">Tidak ada foto tersedia.</p>
    @endif
</div>

<!-- Detail Paket -->
<div class="bg-white p-4 rounded shadow text-sm">
    <p class="font-semibold mb-2">Paket/Promo:</p>
    <table class="w-full table-auto border border-gray-300">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-3 py-2">No</th>
                <th class="border px-3 py-2">Nama Paket</th>
                <th class="border px-3 py-2">Harga</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border px-3 py-2 text-center">1</td>
                <td class="border px-3 py-2">{{ $paket->nama_paket }}</td>
                <td class="border px-3 py-2">Rp. {{ number_format($paket->harga, 0, ',', '.') }}</td>
            </tr>
            <tr class="bg-gray-50 font-semibold">
                <td colspan="2" class="text-right border px-3 py-2">Total Bayar</td>
                <td class="border px-3 py-2">Rp. {{ number_format($paket->harga, 0, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
