@extends('layouts.app')
@section('title', 'Detail Booking')
@section('content')
<div class="mb-6">
    <h1 class="text-xl font-semibold">Detail Booking</h1>
</div>
<div class="bg-white p-4 rounded shadow mb-4 text-sm">
    <div class="grid grid-cols-2 gap-4">
        <div>
            <p><strong>Nama Konsumen:</strong> {{ $booking->user->nama_lengkap }}</p>
            <p><strong>Username:</strong> {{ $booking->user->username }}</p>
            <p><strong>No Handphone:</strong> {{ $booking->user->no_hp }}</p>
        </div>
        <div>
            <p><strong>ID Booking:</strong> BK-00{{ $booking->id }}</p>
            <p><strong>Jadwal Treatment:</strong> {{ \Carbon\Carbon::parse($booking->tanggal_treatment)->format('d M Y') }} | {{ \Carbon\Carbon::parse($booking->jam_treatment)->format('H:i') }} WIB</p>
            <p><strong>Therapist:</strong> {{ $booking->therapist }}</p>
        </div>
    </div>
</div>
<div class="bg-white p-4 rounded shadow text-sm">
    <p class="font-semibold mb-2">Detail Treatment:</p>
    <p>{{ $booking->promo->nama_promo }} ({{ $booking->promo->durasi }} Menit)</p>
    <p class="font-bold text-lg">Total Bayar: Rp. {{ number_format($booking->promo->harga) }}</p>
    <p>Status Pembayaran: <span class="font-semibold text-green-600">{{ $booking->status_pembayaran }}</span></p>
</div>
<div class="mt-6 flex justify-end">
    <form action="{{ route('karyawan.booking.finish', $booking->id) }}" method="POST">
        @csrf
        <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Tandai Selesai & Buat Laporan</button>
    </form>
</div>
@endsection