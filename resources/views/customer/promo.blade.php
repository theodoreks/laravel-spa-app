@extends('customer.layouts.app1')

@section('content')

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
            {{-- Pesan ini akan muncul jika tabel promos kosong --}}
            <div class="col-span-3 text-center text-gray-500">
                <p>Saat ini belum ada promo yang tersedia.</p>
            </div>
        @endforelse

    </div>
</section>

@endsection