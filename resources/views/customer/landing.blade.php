@extends('customer.layouts.app1')

@section('content')

<section class="relative h-72 bg-cover bg-center" style="background-image: url('{{ asset('images/background_costumer.jpg') }}');">
    <div class="absolute inset-0 bg-opacity-40 flex items-center justify-center">
        <h1 class="text-white text-4xl font-bold">Hijau Spa</h1>
    </div>
</section>

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
                </div>
            </div>
        @empty
            <p class="col-span-3 text-center text-gray-500">Tidak ada promo yang tersedia saat ini.</p>
        @endforelse
    </div>
</section>

{{-- ... Your other sections go here ... --}}


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

@endsection