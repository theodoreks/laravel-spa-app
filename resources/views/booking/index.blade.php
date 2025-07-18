@extends('layouts.app')
@section('title', 'Daftar Booking Masuk')
@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-lg font-medium mb-4">Daftar Booking Masuk</h2>
    <table class="min-w-full table-auto border text-sm">
        <thead class="bg-gray-100 text-center">
            <tr>
                <th class="border px-4 py-2">ID Booking</th>
                <th class="border px-4 py-2">Nama Konsumen</th>
                <th class="border px-4 py-2">Jadwal Treatment</th>
                <th class="border px-4 py-2">Treatment</th>
                <th class="border px-4 py-2">Opsi</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @forelse ($bookings as $booking)
                <tr>
                    <td class="border px-4 py-2">BK-00{{ $booking->id }}</td>
                    <td class="border px-4 py-2">{{ $booking->user->nama_lengkap }}</td>
                    <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($booking->tanggal_treatment)->format('d M Y') }} | {{ \Carbon\Carbon::parse($booking->jam_treatment)->format('H:i') }}</td>
                    <td class="border px-4 py-2">{{ $booking->promo->nama_promo }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('karyawan.booking.show', $booking->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 text-xs">Detail</a>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="text-center py-4">Tidak ada booking masuk.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection