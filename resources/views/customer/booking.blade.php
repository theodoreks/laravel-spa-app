@extends('customer.layouts.app1')
@section('content')
<body class="bg-gray-50 py-10">
<div class="max-w-md mx-auto bg-[rgb(83,125,93)] rounded-xl text-white p-6 shadow-lg mb-10 mt-10">
    <h2 class="text-center text-lg font-semibold mb-6">Input Data Booking</h2>
    <form method="POST" action="{{ route('customer.booking.store') }}" class="space-y-4">
        @csrf

        {{-- Input tersembunyi untuk menyimpan promo_id --}}
        <input type="hidden" name="promo_id" value="{{ $promo->id }}">

        <div>
            <label class="block mb-1 text-sm">Nama Lengkap</label>
            <input type="text" value="{{ $user->nama_lengkap }}" class="w-full px-3 py-2 rounded text-black bg-gray-200 border" readonly />
        </div>

        <div>
            <label class="block mb-1 text-sm">Jenis Treatment</label>
            <input type="text" value="{{ $promo->nama_promo }} (Rp {{ number_format($promo->harga) }})" class="w-full px-3 py-2 rounded text-black bg-gray-200 border" readonly />
        </div>

        <div>
            <label class="block mb-1 text-sm">Tanggal Treatment</label>
            <input type="date" name="tanggal" value="{{ old('tanggal') }}" class="w-full px-3 py-2 rounded text-black bg-white border" required />
        </div>

        <div>
            <label class="block mb-1 text-sm">Jam Treatment</label>
            <input type="time" name="jam" value="{{ old('jam') }}" class="w-full px-3 py-2 rounded text-black bg-white border" required />
             @error('jam') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block mb-1 text-sm">Therapist</label>
            <div class="flex items-center gap-6 mt-1 text-sm">
                <label><input type="radio" name="therapist" value="Suci" class="mr-1" checked /> Suci</label>
                <label><input type="radio" name="therapist" value="Dara" class="mr-1" /> Dara</label>
            </div>
        </div>

        <button type="submit" class="w-full mt-4 px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
            Pesan Sekarang
        </button>
    </form>
</div>
</body>
@endsection