@extends('layouts.Owner')

@section('content')
<h1 class="text-xl font-semibold mb-4">Customer</h1>

<div class="bg-white p-6 rounded-md shadow border">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-base font-medium">Tabel Info Customer</h2>
    </div>

    {{-- Header kolom di luar tabel --}}
    <div class="grid grid-cols-5 bg-white px-4 py-2 text-sm text-gray-800 font-semibold border-b border-gray-300">
        <div>No</div>
        <div>Nama</div>
        <div>Jenis Kelamin</div>
        <div>No Handphone</div>
        <div>Username</div>
    </div>

    {{-- Data Customer --}}
    <div class="divide-y divide-gray-200 text-sm">
        {{-- Farisa --}}
        <div class="grid grid-cols-5 bg-gray-100 hover:bg-gray-200 px-4 py-2">
            <div>1</div>
            <div>Farisa</div>
            <div>Wanita</div>
            <div>08965487901</div>
            <div>Farisa_esya</div>
        </div>

        {{-- Anya --}}
        <div class="grid grid-cols-5 bg-white hover:bg-gray-100 px-4 py-2">
            <div>2</div>
            <div>Anya</div>
            <div>Wanita</div>
            <div>08212344556</div>
            <div>Anya123</div>
        </div>

        {{-- Intan --}}
        <div class="grid grid-cols-5 bg-gray-100 hover:bg-gray-200 px-4 py-2">
            <div>3</div>
            <div>Intan</div>
            <div>Wanita</div>
            <div>08527789000</div>
            <div>Intan_m.</div>
        </div>

        {{-- Maya --}}
        <div class="grid grid-cols-5 bg-white hover:bg-gray-100 px-4 py-2">
            <div>4</div>
            <div>Maya</div>
            <div>Wanita</div>
            <div>08132234455</div>
            <div>Maya20</div>
        </div>
    </div>
</div>
@endsection
