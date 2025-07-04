<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hijau Spa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="min-h-screen bg-gray-50 text-gray-800">

    <!-- Header -->
    <header class="bg-[#6E7F5E] text-white p-4 flex justify-between items-center">
    <div class="flex items-center gap-x-2">
        <img src="{{ asset('images/ig.png') }}" alt="IG Icon" class="w-5 h-5" />
        <span class="text-xl font-semibold">Hijau Spa</span>

        <img src="{{ asset('images/wa.png') }}" alt="WA Icon" class="w-4 h-4 ml-4" />
        <span class="text-xl font-semibold">082181662455</span>
    </div>
       
        <div>
    @if (Request::is('/'))
       <a href="/login" class="bg-[#D2D0A0] text-green-800 px-3 py-1 rounded inline-block">LOG IN</a>
    @else
        <button class="bg-[#D2D0A0] text-green-800 px-3 py-1 rounded">LOG OUT</button>
    @endif
</div>
    </header>

   {{-- Navigation hanya tampil jika bukan landing dan login --}}
@unless (Request::is('/') || Request::is('login'))
<div class="bg-white shadow flex items-center justify-between p-3">
    <div class="flex items-center space-x-2">
        <img src="{{ asset('images/logo.png') }}" alt="Hijau Spa Logo" class="w-8 h-8" />
        <span class="text-xl font-semibold whitespace-nowrap">Hijau Spa</span>
    </div>
    <nav class="text-grey-800 flex items-center text-sm w-full justify-between ml-6">
        <div class="space-x-4">
            <a href="/beranda" class="hover:underline">Beranda</a>
            <a href="/profil" class="hover:underline">Profil</a>
            <a href="/promo" class="hover:underline">Promo</a>
            <a href="/riwayat" class="hover:underline">Riwayat Booking</a>
            <a href="/kritik" class="hover:underline">Kritik dan Saran</a>
            <a href="/event" class="hover:underline">Event dan Kolaborasi</a>
        </div>
        <a href="/booking" class="bg-[#6E7F5E] text-white px-3 py-1 rounded text-xs ml-4">Booking Sekarang</a>
    </nav>
</div>
@endunless

    <!-- MAIN CONTENT -->
    <main class="p-full">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white  p-6 text-sm">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between ">
            <div>
                <img src="{{ asset('images/logo2.png') }}" alt="Hijau Spa Logo" class="w-50 h-auto" />
            </div>
           <div>
    
    @unless (Request::is('/') || Request::is('login'))
    <h4 class="font-semibold mb-2">Link</h4>
    <ul>
        <li><a href="/beranda" class="hover:underline">Beranda</a></li>
        <li><a href="/profil" class="hover:underline">Profil</a></li>
        <li><a href="/promo" class="hover:underline">Promo</a></li>
        <li><a href="/riwayat" class="hover:underline">Riwayat Booking</a></li>
        <li><a href="/kritik" class="hover:underline">Kritik dan Saran</a></li>
        <li><a href="/event" class="hover:underline">Event dan Kolaborasi</a></li>
    </ul>

 @endunless
 </div>
            <div>
                <h4 class="font-semibold mb-2">Alamat Hijau Spa</h4>
                <p>Perumahan Mekarsari, Jl. Titan Raya No. 8, Buah Batu</p>
                <p>Instagram: hijauspa</p>
            </div>
            <div>
                <h4 class="font-semibold mb-2">Jadwal Buka</h4>
                <ul>
                    <li>Senin - Minggu: 08:00 – 20:00</li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-6 border-t border-gray-700 pt-4 text-xs">
            ©2024 Hijau Spa. All rights reserved.
        </div>
    </footer>

</body>
</html>
