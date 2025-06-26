@extends('layouts.app')

@section('content')

    <h2 class="text-xl font-bold flex mb-5 ml-[100px] mt-[8px]">Riwayat Booking</h2>

    <div class="bg-white shadow p-8">
        <div class="bg-white shadow rounded p-4">
            <h3 class="text-lg font-semibold mb-4">Booking Saya</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full table border text-sm">
                    <thead class="bg-[#D9D9D9] text-black">
                        <tr>
                            <th class="px-4 py-2">ID Booking</th>
                            <th class="px-4 py-2">Jenis Treatment</th>
                            <th class="px-4 py-2">Harga</th>
                            <th class="px-4 py-2">Jadwal Treatment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white-100">
                            <td class="px-4 py-2">Booking 15</td>
                            <td class="px-4 py-2">Paket Herbal Facial</td>
                            <td class="px-4 py-2">Rp. 110.000</td>
                            <td class="px-4 py-2">08 April 2025 | 15:00 WIB</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
