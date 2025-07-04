@extends('layouts.app')

@section('title', 'Daftar Booking Masuk')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-xl font-semibold">Booking Masuk</h1>
</div>

<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-lg font-medium mb-4">
        <i class=""></i> Daftar Booking Masuk
    </h2>
    <table class="min-w-full table-auto border border-gray-300 text-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-4 py-2">No</th>
                <th class="border px-4 py-2">ID Booking</th>
                <th class="border px-4 py-2">Nama Konsumen</th>
                <th class="border px-4 py-2">Jadwal Treatment</th>
                <th class="border px-4 py-2">Foto </th>
                <th class="border px-4 py-2">Opsi</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($data as $index => $item)
                @php
                    // Ambil foto paket secara acak atau cocokkan manual (sementara)
                    $paketFotos = [
                        'foto_paket/2gjyGZUEWwdM0iZMgXCF1kH1DwtncYm5bVSJVob9.jpg',
                        'foto_paket/5ELbxkNVPti3P5uRrk3Bvqo9WsDuYpYWVStcLvXy.jpg',
                        'foto_paket/qBIWj9AuUJeXugOT56NIjMAC0yBrRyckmk1reRWx.png',
                    ];
                    $fotoPaket = $paketFotos[$index % count($paketFotos)];
                @endphp
                <tr>
                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                    <td class="border px-4 py-2">{{ $item->id_booking }}</td>
                    <td class="border px-4 py-2">{{ $item->nama_konsumen }}</td>
                    <td class="border px-4 py-2">
                        {{ \Carbon\Carbon::parse($item->jadwal_treatment)->format('d M Y | H:i') }} WIB
                    </td>
                    <td class="border px-4 py-2">
                        <img src="{{ asset('storage/' . $fotoPaket) }}" class="w-12 h-12 object-cover mx-auto" />
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('boking.detail', $item->id) }}"
                           class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
