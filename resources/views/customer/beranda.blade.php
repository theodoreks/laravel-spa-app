@extends('customer.layouts.app1')


@section('content')

<!-- Content -->

<!-- Hero Banner -->
<section class="relative w-full h-[500px] bg-cover bg-center" style="background-image: url('{{ asset('images/background_costumer.jpg') }}');">
    <div class="absolute inset-0 bg-opacity-40 flex items-center justify-start">
        <h1 class="text-4xl font-bold pl-16 mt-20">
            <span style="color: #899D77;">Welcome</span>
            <span class="text-white"> The Hijau Spa</span>
        </h1>
    </div>
</section>

   <!-- Promo Section -->
<section class="max-w-6xl mx-auto py-12 px-4">
    <h2 class="text-2xl font-bold text-center text-black mb-10">PROMO</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        @forelse ($promo as $item)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">

                <img id="promo-img-{{ $item->id }}" src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama_promo }}" class="w-full h-60 object-contain">

                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">{{ $item->nama_promo }}</h3>
                    <p class="text-sm text-gray-600 mt-2">{{ $item->deskripsi }}</p>
                    <p class="text-lg font-bold text-green-700 mt-2">Rp {{ number_format($item->harga) }}</p>
                    <p class="text-xs text-gray-500">{{ $item->durasi }} Menit</p>

                    <button onclick="openModal('promo-img-{{ $item->id }}')" class="mt-4 bg-[#6E7F5E] text-white px-4 py-2 rounded text-sm hover:bg-[#5a7a48]">
                        Cek Detail
                    </button>
                    <a href="{{ route('customer.booking.create', ['promo_id' => $item->id]) }}" class="mt-4 bg-[#6E7F5E] text-white px-4 py-2 rounded text-sm hover:bg-green-700">Booking</a>
                </div>
            </div>
        @empty
            <p class="col-span-3 text-center text-gray-500">Tidak ada promo yang tersedia saat ini.</p>
        @endforelse
    </div>
</section>

<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 flex justify-center items-center z-50 hidden" onclick="closeModal()">
    <div class="relative max-w-3xl max-h-full p-4">
        <img id="modalImage" src="" alt="Promo Detail" class="w-auto h-auto max-h-[80vh] rounded">
        <button class="absolute top-0 right-0 text-white text-4xl font-bold">&times;</button>
    </div>
</div>

<script>
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');

    function openModal(imageId) {
        const originalImage = document.getElementById(imageId);
        if (originalImage) {
            modalImage.src = originalImage.src;
            modal.classList.remove('hidden');
        }
    }

    function closeModal() {
        modal.classList.add('hidden');
    }
</script>

<!-- Tentang Kami Section -->
<section class="bg-[#6E7F5E] text-white">
    <div class="grid md:grid-cols-2 gap-6 items-center">
        <!-- Gambar di sebelah kiri -->
        <div>
            <img src="{{ asset('images/tentang.jpg') }}" alt="Tentang Kami" class="w-full" />
        </div>

        <!-- Teks di sebelah kanan dengan font Playfair Display -->
        <div style="font-family: 'Playfair Display', serif;">
            <h3 class="text-2xl font-semibold mb-4 text-[#E5D29F]">Tentang Kami</h3>
            <p>
                Hijau Spa adalah Spa khusus wanita dan anak yang sangat menjaga nilai-nilai Islami, baik dalam melayani customer, maupun produk-produk yang digunakannya. Sehingga kami memastikan kehalalan dan kebaikannya.
            </p>
            <p class="mt-2">
                Hijau Spa juga tempat untuk relaksasi yang nyaman dan sangat menjaga privasi serta aurat customer. Baik di tempat, maupun dalam postingan di media sosial. Hijau Spa berdiri tanggal 30 Oktober 2024.
                Hijau Spa, "Syar'i dan Nyaman".
            </p>
            <p class="mt-4">
                Alamat: Jl. Tiban Raya No. B03, Tiban<br />
                Instagram: hijauspa
            </p>
        </div>
    </div>
</section>


    <!-- Therapist Section -->
    <section class="bg-[#FFFBFB] ">
        <div class="grid md:grid-cols-2 items-center">
            <div class=" flex items-center justify-center">
                <img src="/images/terap.jpg" class="h-full object-contain" />
            </div>
            <div class="h-124 flex items-center justify-center">
                <img src="/images/t.png" class="h-full object-contain" />
            </div>
        </div>
    </section>

    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 flex justify-center items-center z-50 hidden">
    <div class="relative max-w-2xl max-h-full">
        <img id="modalImage" src="" alt="Promo Detail" class="w-auto h-auto max-h-[80vh] rounded">
        <button onclick="closeModal()" class="absolute -top-4 -right-4 text-white text-3xl font-bold">&times;</button>
    </div>
</div>

@endsection
