@extends('layouts.app')

@section('content')


  <!-- Content -->
   <!-- Promo Section -->
    <section class="max-w-6xl mx-auto py-12 px-4">
        <h2 class="text-2xl font-bold text-center text-black mb-10">PROMO</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

    @foreach ($promo as $item)
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="{{ asset('storage/images/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-70 object-cover">
        <div class="p-4">
            <h3 class="text-lg font-semibold text-[rgb(83,125,93)]">{{ $item->judul }}</h3>
            <p class="text-sm text-gray-600 mt-2">{{ $item->deskripsi }}</p>
            <button class="mt-4 bg-[rgb(83,125,93)] text-white px-4 py-2 rounded text-sm">Cek Detail</button>
        </div>
    </div>
@endforeach
</div>
    </section>

@endsection