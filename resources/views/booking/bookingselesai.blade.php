@extends('layouts.app')
@section('title', 'Booking Selesai')
@section('content')
<div class="bg-white shadow rounded-lg p-4">
    <h2 class="text-lg font-medium mb-4">Daftar Booking Selesai</h2>
    <table class="min-w-full text-left text-sm">
        <thead class="bg-gray-100 text-center">
            <tr>
                <th class="px-4 py-2 font-semibold">Nama Konsumen</th>
                <th class="px-4 py-2 font-semibold">Treatment</th>
                <th class="px-4 py-2 font-semibold">Tanggal Treatment</th>
                <th class="px-4 py-2 font-semibold">Status</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @forelse ($bookings as $booking)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $booking->user->nama_lengkap }}</td>
                    <td class="px-4 py-2">{{ $booking->promo->nama_promo }}</td>
                    <td class="px-4 py-2">{{ \Carbon\Carbon::parse($booking->tanggal_treatment)->format('d M Y') }}</td>
                    <td class="px-4 py-2"><span class="bg-green-200 text-green-800 text-xs px-2 py-1 rounded-full">{{ $booking->status_treatment }}</span></td>
                </tr>
            @empty
                <tr><td colspan="4" class="text-center py-4">Belum ada booking yang selesai.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection