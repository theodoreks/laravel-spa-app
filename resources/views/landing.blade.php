@extends('layouts.app')

@section('content')

<!-- Content -->

    
<section class="relative grid grid-cols-1 md:grid-cols-2 items-center min-h-[500px] bg-cover bg-center" style="background-image: url('{{ asset('images/landing.jpg') }}');">
    
    <!-- Gradient overlay kiri -->
    <div class="relative z-10">
        <div class="absolute inset-0 bg-gradient-to-r from-[#6E7F5E] to-transparent opacity-60"></div>

        <!-- Kotak teks -->
        <div class="relative bg-white bg-opacity-40 p-8 rounded shadow mx-6 my-10 text-center md:text-left backdrop-blur-sm">
            <h1 class="text-4xl font-bold text-[#6E7F5E] mb-4">Selamat Datang di Hijau Spa</h1>
            <p class="text-gray-700 text-lg">Rasakan ketenangan dan kenyamanan dengan layanan spa terbaik kami.</p>
        </div>
    </div>

    <!-- Spacer kanan -->
    <div class="hidden md:block"></div>
</section>

@endsection
