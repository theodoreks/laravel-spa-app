@extends('customer.layouts.app1')


@section('content')

<!-- Content -->

    <!-- Hero Banner -->
    <section class="relative h-72 bg-cover bg-center" style="background-image: url('{{ asset('images/background_costumer.jpg') }}');">
        <div class="absolute inset-0  bg-opacity-40 flex items-center justify-center">
            <h1 class="text-white text-4xl font-bold">Hijau Spa</h1>
        </div>
    </section>

   <!-- Promo Section -->
    <section class="max-w-6xl mx-auto py-12 px-4">
    <h2 class="text-2xl font-bold text-center text-black mb-10">PROMO</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        {{-- Loop melalui setiap item promo yang dikirim dari controller --}}
        @forelse ($promo as $item)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                
                {{-- Menampilkan gambar dari kolom 'foto' --}}
                <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama_promo }}" class="w-full h-60 object-cover">
                
                <div class="p-4">
                    {{-- Menampilkan nama promo dari kolom 'nama_promo' --}}
                    <h3 class="text-lg font-semibold text-gray-800">{{ $item->nama_promo }}</h3>
                    
                    {{-- Menampilkan deskripsi dari kolom 'deskripsi' --}}
                    <p class="text-sm text-gray-600 mt-2">{{ $item->deskripsi }}</p>

                    <p class="text-lg font-bold text-green-700 mt-2">Rp {{ number_format($item->harga) }}</p>
                    <p class="text-xs text-gray-500">{{ $item->durasi }} Menit</p>
                    
                    <button class="mt-4 bg-[#6E7F5E] text-white px-4 py-2 rounded text-sm hover:bg-[#5a7a48]">
                        Cek Detail
                    </button>
                    <a href="{{ route('customer.booking.create', ['promo_id' => $item->id]) }}" class="mt-4 bg-[#6E7F5E] text-white px-4 py-2 rounded text-sm hover:bg-[#5a7a48]">Booking</a>
                </div>
            </div>
             @empty
            <p class="col-span-3 text-center text-gray-500">Tidak ada promo yang tersedia saat ini.</p>
        @endforelse
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
