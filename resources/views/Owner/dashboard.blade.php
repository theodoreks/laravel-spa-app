@extends('layouts.owner')

@section('content')
<div class="p-6 text-black">
    <h1 class="text-xl font-bold mb-4">Beranda</h1>

    {{-- Box Selamat Datang --}}
    <div class="bg-white rounded-lg border border-gray-200 p-4 shadow">
        <p class="text-sm">Selamat Datang, <strong>Owner</strong> di Hijau Spa</p>
        <p class="text-sm">Anda Login Sebagai Owner.</p>
    </div>

    {{-- Kotak Hijau pembungkus --}}
    <div class="mt-6 bg-[#A9B39B] rounded-md shadow-sm p-4">
        <div class="text-black font-semibold mb-2">
            Update Inventory Terbaru
        </div>

        {{-- Tabel di dalam box hijau, tapi tabelnya putih --}}
        <div class="bg-white border border-gray-300 rounded-md overflow-x-auto">
            <table class="w-full text-sm text-left text-black">
                <thead class="bg-gray-300 text-black">
                    <tr>
                        <th class="px-4 py-2">Tanggal Tambah</th>
                        <th class="px-4 py-2">Merek</th>
                        <th class="px-4 py-2">Nama Produk</th>
                        <th class="px-4 py-2">Berat/Satuan</th>
                        <th class="px-4 py-2">Jumlah (pcs)</th>
                        <th class="px-4 py-2">Sisa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t">
                        <td class="px-4 py-2">22 Mei 2025</td>
                        <td class="px-4 py-2">ACL</td>
                        <td class="px-4 py-2">Lulur Pengantin</td>
                        <td class="px-4 py-2">5 Kg</td>
                        <td class="px-4 py-2 font-bold">1</td>
                        <td class="px-4 py-2 font-bold">1</td>
                    </tr>
                    <tr class="border-t">
                        <td class="px-4 py-2">22 Mei 2025</td>
                        <td class="px-4 py-2">ANJELINA</td>
                        <td class="px-4 py-2">Cuticle Cream</td>
                        <td class="px-4 py-2">250 g</td>
                        <td class="px-4 py-2 font-bold">1</td>
                        <td class="px-4 py-2 font-bold">1</td>
                    </tr>
                    <tr class="border-t">
                        <td class="px-4 py-2">22 Mei 2025</td>
                        <td class="px-4 py-2">APRILLIA</td>
                        <td class="px-4 py-2">Mandi Susu</td>
                        <td class="px-4 py-2">1000 g</td>
                        <td class="px-4 py-2 font-bold">1</td>
                        <td class="px-4 py-2 font-bold">1</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
