@extends('layouts.Owner')

@section('content')
<h1 class="text-xl font-semibold mb-4">Karyawan</h1>

<div class="bg-white p-6 rounded-md shadow border">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-base font-medium">Tabel Info Karyawan</h2>
        <a href="/tambahkaryawan" class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-3 py-1 rounded flex items-center space-x-1">
            <i data-lucide="plus" class="w-4 h-4"></i>
            <span>Tambah</span>
        </a>
    </div>

    {{-- Judul kolom di luar tabel --}}
    <div class="grid grid-cols-6 bg-white px-4 py-2 text-sm text-gray-800 font-semibold border-b border-gray-300">
        <div>No</div>
        <div>Nama</div>
        <div>Jenis Kelamin</div>
        <div>No Handphone</div>
        <div>Username</div>
        <div class="text-center">Option</div>
    </div>

    <div class="divide-y divide-gray-200 text-sm">
    {{-- Amanda --}}
    <div class="grid grid-cols-6 bg-gray-100 hover:bg-gray-200 px-4 py-2">
        <div>1</div>
        <div>Amanda</div>
        <div>Wanita</div>
        <div>08065487901</div>
        <div>Amandaa</div>
        <div class="flex justify-center space-x-2">
            <a href="/editkaryawan" class="text-white bg-green-500 hover:bg-green-600 p-1 rounded">
                <i data-lucide="edit" class="w-4 h-4"></i>
            </a>
            <a href="#" class="text-white bg-red-500 hover:bg-red-600 p-1 rounded">
                <i data-lucide="trash-2" class="w-4 h-4"></i>
            </a>
        </div>
    </div>

    {{-- Erika --}}
    <div class="grid grid-cols-6 bg-white hover:bg-gray-100 px-4 py-2">
        <div>2</div>
        <div>Erika</div>
        <div>Wanita</div>
        <div>08280576432</div>
        <div>Erika55</div>
        <div class="flex justify-center space-x-2">
            <a href="#" class="text-white bg-green-500 hover:bg-green-600 p-1 rounded">
                <i data-lucide="edit" class="w-4 h-4"></i>
            </a>
            <a href="#" class="text-white bg-red-500 hover:bg-red-600 p-1 rounded">
                <i data-lucide="trash-2" class="w-4 h-4"></i>
            </a>
        </div>
    </div>

    {{-- Cahya --}}
    <div class="grid grid-cols-6 bg-gray-100 hover:bg-gray-200 px-4 py-2">
        <div>3</div>
        <div>Cahya</div>
        <div>Wanita</div>
        <div>08571223344</div>
        <div>CahyaEka13</div>
        <div class="flex justify-center space-x-2">
            <a href="#" class="text-white bg-green-500 hover:bg-green-600 p-1 rounded">
                <i data-lucide="edit" class="w-4 h-4"></i>
            </a>
            <a href="#" class="text-white bg-red-500 hover:bg-red-600 p-1 rounded">
                <i data-lucide="trash-2" class="w-4 h-4"></i>
            </a>
        </div>
    </div>
</div>

<script>
    lucide.createIcons();
</script>
@endsection
