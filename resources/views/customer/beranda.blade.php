@extends('customer.layouts.app1')


@section('content')

<!-- Content -->

    <!-- Hero Banner -->
    <section class="relative h-72 bg-cover bg-center" style="background-image: url('{{ asset('images/hero.jpg') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <h1 class="text-white text-4xl font-bold">Hijau Spa</h1>
        </div>
    </section>

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

    <!-- Tentang Kami Section -->
    <section class="bg-[#6E7F5E] text-white ">
        <div class="grid md:grid-cols-2 gap-6 items-center">
            <div>
                <img src="{{ asset('images/tentang.jpg') }}" alt="Tentang Kami" class="w-full" />
            </div>
            <div>
                <h3 class="text-2xl font-semibold mb-4 text-[#E5D29F]">Tentang Kami</h3>
                <p>Kami adalah Hijau Spa, tempat untuk relaksasi dan perawatan tubuh Anda.</p>
                <p class="mt-4">Alamat: Jl. Titan Raya No. 8, Buah Batu<br />Instagram: hijauspa</p>
            </div>
        </div>
    </section>

    <!-- Therapist Section -->
    <section class="bg-white ">
        <div class="grid md:grid-cols-2 items-center">
            <div class=" flex items-center justify-center">
                <img src="/images/terap.jpg" class="h-full object-contain" />
            </div>
            <div class="h-124 flex items-center justify-center">
                <img src="/images/terapis.png" class="h-full object-contain" />
            </div>
        </div>
    </section>
 
@endsection
