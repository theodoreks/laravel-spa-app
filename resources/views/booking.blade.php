@extends('layouts.app')

@section('content')


  <!-- Content -->
   <body class="bg-gray-50 py-10">

  <div class="max-w-md mx-auto bg-[rgb(83,125,93)] rounded-xl text-white p-6 shadow-lg mb-10 mt-10">
    <h2 class="text-center text-lg font-semibold mb-6">Input Data Booking</h2>

    <form action="#" method="POST" class="space-y-4">

    <form method="POST" action="{{ route('booking.store') }}">
  @csrf

  <!-- Nama Lengkap -->
  <div>
    <label class="block mb-1 text-sm">Nama Lengkap</label>
    <input type="text" name="nama" value="{{ old('nama') }}" class="w-full px-3 py-2 rounded text-black bg-white border" required />
    @error('nama') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
  </div>

  <!-- Jenis Treatment -->
  <div>
    <label class="block mb-1 text-sm">Jenis Treatment</label>
    <input type="text" name="treatment" value="{{ old('treatment') }}" class="w-full px-3 py-2 rounded text-black bg-white border" required />
    @error('treatment') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
  </div>

  <!-- Tanggal Treatment -->
  <div>
    <label class="block mb-1 text-sm">Tanggal Treatment</label>
    <input type="date" name="tanggal" value="{{ old('tanggal') }}" class="w-full px-3 py-2 rounded text-black bg-white border" required />
    @error('tanggal') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
  </div>

  <!-- Jam Treatment -->
  <div>
    <label class="block mb-1 text-sm">Jam Treatment</label>
    <input type="time" name="jam" value="{{ old('jam') }}" class="w-full px-3 py-2 rounded text-black bg-white border" required />
    @error('jam') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
  </div>

  <!-- Therapist -->
  <div>
    <label class="block mb-1 text-sm">Therapist</label>
    <div class="flex items-center gap-6 mt-1 text-sm">
      <label><input type="radio" name="therapist" value="Suci" {{ old('therapist') == 'Suci' ? 'checked' : '' }} class="mr-1" /> Suci</label>
      <label><input type="radio" name="therapist" value="Dara" {{ old('therapist') == 'Dara' ? 'checked' : '' }} class="mr-1" /> Dara</label>
    </div>
    @error('therapist') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
  </div>

  <a href="/pembayaran" class="mt-4 inline-block px-4 py-2 bg-green-600 text-white rounded">
  Pesan Sekarang
</a>
</form>

@endsection
