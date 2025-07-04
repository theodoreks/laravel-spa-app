@extends('layouts.Owner')

@section('content')
<h1 class="text-xl font-semibold mb-4">Laporan</h1>

<div class="bg-white p-6 rounded-md shadow border">
    {{-- Header: Judul dan tombol --}}
    <div class="flex justify-between items-center mb-2">
        <h2 class="text-base font-medium">Laporan Inventory Barang</h2>
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
                    <th class="px-4 py-2 border-b">Kode Barang</th>
                    <th class="px-4 py-2 border-b">Merk</th>
                    <th class="px-4 py-2 border-b">Nama Produk</th>
                    <th class="px-4 py-2 border-b">Berat Satuan</th>
                    <th class="px-4 py-2 border-b">Jumlah (Pcs)</th>
                    <th class="px-4 py-2 border-b">Sisa</th>
                    <th class="px-4 py-2 border-b">Harga Persatuan</th>
                    <th class="px-4 py-2 border-b text-center">Option</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @php $data = [
                    ['id' => 22, 'tgl' => '22 Mei 2025', 'kode' => 'ACL-110JJB', 'merk' => 'ACL', 'nama' => 'Lulur Pengantin', 'berat' => '5 Kg', 'jumlah' => 1, 'sisa' => 1, 'harga' => 'Rp. 210.000'],
                    ['id' => 12, 'tgl' => '22 Mei 2025', 'kode' => 'ANJ-CXT7LEE90', 'merk' => 'ASHELNA', 'nama' => 'Cookie Cream', 'berat' => '250 g', 'jumlah' => 1, 'sisa' => 1, 'harga' => ''],
                    ['id' => 16, 'tgl' => '22 Mei 2025', 'kode' => 'APR-MSS000', 'merk' => 'APRILLA', 'nama' => 'Mandi Susu', 'berat' => '2000 g', 'jumlah' => 1, 'sisa' => 0, 'harga' => ''],
                    ['id' => 14, 'tgl' => '22 Mei 2025', 'kode' => 'HN-JX', 'merk' => 'HNI', 'nama' => 'Day Cream', 'berat' => '15 g', 'jumlah' => 1, 'sisa' => 1, 'harga' => ''],
                    ['id' => 15, 'tgl' => '22 Mei 2025', 'kode' => 'WHD-CF', 'merk' => 'WARDAH', 'nama' => 'Creamy Foam', 'berat' => '500 ml', 'jumlah' => 1, 'sisa' => 1, 'harga' => '']
                ]; @endphp

                @foreach ($data as $index => $item)
                <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }}">
                    <td class="px-4 py-2">{{ $index + 1 }}</td>
                    <td class="px-4 py-2">{{ $item['id'] }}</td>
                    <td class="px-4 py-2">{{ $item['tgl'] }}</td>
                    <td class="px-4 py-2">{{ $item['kode'] }}</td>
                    <td class="px-4 py-2">{{ $item['merk'] }}</td>
                    <td class="px-4 py-2">{{ $item['nama'] }}</td>
                    <td class="px-4 py-2">{{ $item['berat'] }}</td>
                    <td class="px-4 py-2">{{ $item['jumlah'] }}</td>
                    <td class="px-4 py-2">{{ $item['sisa'] }}</td>
                    <td class="px-4 py-2">{{ $item['harga'] ?: '-' }}</td>
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
