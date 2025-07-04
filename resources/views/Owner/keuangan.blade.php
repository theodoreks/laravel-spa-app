@extends('layouts.Owner')

@section('content')
<h1 class="text-xl font-semibold mb-4">Laporan</h1>

<div class="bg-white p-6 rounded-md shadow border">
    {{-- Header: Judul dan tombol --}}
    <div class="flex justify-between items-center mb-2">
        <h2 class="text-base font-medium">Laporan Booking</h2>
        <div class="flex space-x-2">
            <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-3 py-1 rounded flex items-center space-x-1">
                <i data-lucide="plus" class="w-4 h-4"></i>
                <span>Tambah</span>
            </a>
            <a href="#" class="bg-red-500 hover:bg-red-600 text-white text-sm px-3 py-1 rounded flex items-center space-x-1">
                <i data-lucide="download" class="w-4 h-4"></i>
                <span>Unduh</span>
            </a>
        </div>
    </div>

    {{-- Input tanggal: di bawah judul --}}
    <div class="flex items-center space-x-2 mt-5 mb-4">
        <input type="date" class="border border-gray-300 px-2 py-1 rounded text-sm" placeholder="dd/mm/yyyy">
        <input type="date" class="border border-gray-300 px-2 py-1 rounded text-sm" placeholder="dd/mm/yyyy">
        <button class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm">
            <i data-lucide="search" class="w-4 h-4"></i>
        </button>
    </div>

    {{-- Tabel --}}
    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300 text-sm">
            <thead class="bg-white text-left">
                <tr>
                    <th class="px-4 py-2 border-b">No</th>
                    <th class="px-4 py-2 border-b">ID</th>
                    <th class="px-4 py-2 border-b">Tanggal</th>
                    <th class="px-4 py-2 border-b">Nama</th>
                    <th class="px-4 py-2 border-b">No Handphone</th>
                    <th class="px-4 py-2 border-b">Treatment</th>
                    <th class="px-4 py-2 border-b">Harga</th>
                    <th class="px-4 py-2 border-b">Durasi</th>
                    <th class="px-4 py-2 border-b">Therapist</th>
                    <th class="px-4 py-2 border-b text-center">Option</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @php $data = [
                    ['id' => 13, 'tgl' => '07 April 2025', 'nama' => 'Amanda', 'hp' => '08965487901', 'treatment' => 'Paket Herbal Facial', 'harga' => 'Rp. 111.000', 'durasi' => '50 Menit', 'therapist' => 'Suci'],
                    ['id' => 14, 'tgl' => '08 April 2025', 'nama' => 'Farisa', 'hp' => '08965487901', 'treatment' => 'Paket Body Treatment', 'harga' => 'Rp. 250.000', 'durasi' => '60 Menit', 'therapist' => 'Suci'],
                    ['id' => 15, 'tgl' => '09 April 2025', 'nama' => 'Anya', 'hp' => '08212344556', 'treatment' => 'Paket Valentine SPA', 'harga' => 'Rp. 375.000', 'durasi' => '95 Menit', 'therapist' => 'Suci'],
                    ['id' => 16, 'tgl' => '10 April 2025', 'nama' => 'Intan', 'hp' => '08527789000', 'treatment' => 'Paket Herbal Facial', 'harga' => 'Rp. 111.000', 'durasi' => '50 Menit', 'therapist' => 'Suci'],
                    ['id' => 17, 'tgl' => '11 April 2025', 'nama' => 'Maya', 'hp' => '08132234455', 'treatment' => 'Paket Facial Treatment', 'harga' => 'Rp. 590.000', 'durasi' => '140 Menit', 'therapist' => 'Suci']
                ]; @endphp

                @foreach ($data as $index => $item)
                <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }}">
                    <td class="px-4 py-2">{{ $index + 1 }}</td>
                    <td class="px-4 py-2">{{ $item['id'] }}</td>
                    <td class="px-4 py-2">{{ $item['tgl'] }}</td>
                    <td class="px-4 py-2">{{ $item['nama'] }}</td>
                    <td class="px-4 py-2">{{ $item['hp'] }}</td>
                    <td class="px-4 py-2">{{ $item['treatment'] }}</td>
                    <td class="px-4 py-2">{{ $item['harga'] }}</td>
                    <td class="px-4 py-2">{{ $item['durasi'] }}</td>
                    <td class="px-4 py-2">{{ $item['therapist'] }}</td>
                    <td class="px-4 py-2 text-center">
                        <div class="flex justify-center space-x-2">
                            <button class="text-white bg-green-500 hover:bg-green-600 p-1 rounded">
                                <i data-lucide="edit" class="w-4 h-4"></i>
                            </button>
                            <button class="text-white bg-red-500 hover:bg-red-600 p-1 rounded">
                                <i data-lucide="trash-2" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    lucide.createIcons();
</script>
@endsection
