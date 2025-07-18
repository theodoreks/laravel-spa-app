@extends('Owner.layouts.app')

@section('content')
<h1 class="text-xl font-semibold mb-4">Customer</h1>

<div class="bg-white p-6 rounded-md shadow border">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-base font-medium">Tabel Info Customer</h2>
    </div>

    <div class="grid grid-cols-5 bg-gray-200 px-4 py-2 text-sm font-semibold border border-gray-300">
        <div>No</div>
        <div>Nama</div>
        <div>Jenis Kelamin</div>
        <div>No Handphone</div>
        <div>Username</div>
    </div>

    <div class="divide-y divide-gray-200 text-sm">
        @forelse ($customers as $index => $customer)
            <div class="grid grid-cols-5 {{ $loop->iteration % 2 == 1 ? 'bg-white hover:bg-gray-50' : 'bg-gray-100 hover:bg-gray-200' }} px-4 py-2">
                <div>{{ $index + 1 }}</div>
                <div>{{ $customer->nama_lengkap }}</div>
                <div>{{ $customer->jenis_kelamin }}</div>
                <div>{{ $customer->no_hp }}</div>
                <div>{{ $customer->username }}</div>
            </div>
        @empty
            <div class="col-span-5 text-center py-4 text-gray-500">Belum ada customer yang melakukan booking.</div>
        @endforelse
    </div>
</div>
@endsection
