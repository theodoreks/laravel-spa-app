@extends('Owner.layouts.app')

@section('title', 'Laporan Inventory Barang')

@section('content')
<div class="flex justify-between items-center mb-4">
  <h1 class="text-xl font-semibold">Laporan</h1>
</div>



<div class="bg-white shadow rounded-lg p-6">
  <!-- Header -->
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-lg font-medium">Laporan Inventory</h2>
    <div class="flex space-x-2">
      <!-- <a href="{{ route('owner.inventory.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        + Tambah
      </a> -->
      <a href="{{ route('owner.inventory.export') }}" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
        <i class="fas fa-file-download mr-1"></i> Unduh
    </a>
    </div>
  </div>

  <!-- Filter Tanggal -->
  <form method="GET" action="{{ route('owner.laporan.inventory') }}" class="flex items-center space-x-2 mb-4">
        <input type="date" name="tanggal_awal" value="{{ request('tanggal_awal') }}" class="border rounded p-2 text-sm">
        <span class="text-gray-500">-</span>
        <input type="date" name="tanggal_akhir" value="{{ request('tanggal_akhir') }}" class="border rounded p-2 text-sm">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            <i class="fas fa-search"></i> Cari
        </button>
    </form>

  <!-- Tabel Data -->
  <div class="overflow-x-auto">
    <table class="min-w-full border text-sm text-left">
      <thead class="bg-gray-200 text-center">
        <tr>
          <th class="border px-4 py-2">No</th>
          <th class="border px-4 py-2">ID</th>
          <th class="border px-4 py-2">Tanggal</th>
          <th class="border px-4 py-2">Kode Barang</th>
          <th class="border px-4 py-2">Tipe</th>
          <th class="border px-4 py-2">Nama Produk</th>
          <th class="border px-4 py-2">Berat/Satuan</th>
          <th class="border px-4 py-2">Masuk</th>
          <th class="border px-4 py-2">Final</th>
          <th class="border px-4 py-2">Stok</th>
          <th class="border px-4 py-2">Harga</th>
          <th class="border px-4 py-2">Opsi</th>
        </tr>
      </thead>
      <tbody class="text-center">
        @forelse($inventory as $index => $item)
        <tr class="{{ $index % 2 === 0 ? 'bg-white' : 'bg-gray-100' }}">
          <td class="border px-4 py-2">{{ $index + 1 }}</td>
          <td class="border px-4 py-2">{{ $item->id }}</td>
          <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d/m/Y') }}</td>
          <td class="border px-4 py-2">{{ $item->kode_barang }}</td>
          <td class="border px-4 py-2">{{ $item->tipe }}</td>
          <td class="border px-4 py-2">{{ $item->nama_produk }}</td>
          <td class="border px-4 py-2">{{ $item->berat_satuan ?? '-' }}</td>
          <td class="border px-4 py-2">{{ $item->jumlah_masuk }}</td>
          <td class="border px-4 py-2">{{ $item->jumlah_final }}</td>
          <td class="border px-4 py-2">{{ $item->stok }}</td>
          <td class="border px-4 py-2">Rp{{ number_format($item->harga_perolehan, 0, ',', '.') }}</td>
          <td class="border px-4 py-2">
            <div class="flex justify-center space-x-2">
              <a href="{{ route('owner.inventory.edit', $item->id) }}" class="bg-green-600 hover:bg-green-700 text-white p-1.5 rounded shadow text-xs">
                <i class="fas fa-edit"></i>
              </a>
              <form action="{{ route('owner.inventory.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white p-1.5 rounded shadow text-xs">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </form>
            </div>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="12" class="py-4 text-gray-500">Tidak ada data inventory</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
