<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hijau Spa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="min-h-screen bg-gray-50 text-gray-800" style="font-family: 'Playfair Display', serif;">

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
       <a href="/login" class="bg-[#899D77] text-white px-3 py-1 rounded inline-block">LOG IN</a>
    @else
        <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="bg-[#899D77] text-white px-3 py-1 rounded">LOG OUT</button>
</form>
    @endif
</div>
    </header>

   {{-- Navigation hanya tampil jika bukan landing dan login --}}
@unless (Request::is('/') || Request::is('login'))
<div class="bg-white shadow flex items-center justify-between p-3">
    <div class="flex items-center space-x-2">
        <img src="{{ asset('images/logo.png') }}" alt="Hijau Spa Logo" class="w-8 h-8" />
        <span class="text-sm font-semibold whitespace-nowrap" style="color: #54971A;">Hijau Spa</span>
    </div>
    <nav class="text-grey-800 flex items-center text-sm w-full justify-between ml-6">
        <div class="space-x-4">
    <a href="{{ route('customer.beranda') }}" class="hover:underline">Beranda</a>
    <a href="{{ route('customer.profil.index') }}" class="hover:underline">Profil</a>
    <a href="{{ route('customer.promo') }}" class="hover:underline">Promo</a>
    <a href="{{ route('customer.booking.history') }}" class="hover:underline">Riwayat Booking</a>
    <a href="{{ route('customer.kritik.index') }}" class="hover:underline">Kritik dan Saran</a>
    <a href="{{ route('customer.event') }}" class="hover:underline">Event dan Kolaborasi</a>
</div>

    </nav>
</div>
@endunless

    <!-- MAIN CONTENT -->
    <main class="p-full">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-200 text-black  p-6 text-sm">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between ">
            <div>
                <img src="{{ asset('images/logo2.png') }}" alt="Hijau Spa Logo" class="w-50 h-auto" />
            </div>
           <div>

    @unless (Request::is('/') || Request::is('login'))
    <h4 class="font-semibold mb-2">Link</h4>
    <ul>
         <li><a href="{{ route('customer.beranda') }}" class="hover:underline">Beranda</a></li>
                    <li><a href="{{ route('customer.profil.index') }}" class="hover:underline">Profil</a></li>
                    <li><a href="{{ route('customer.promo') }}" class="hover:underline">Promo</a></li>
                    <li><a href="{{ route('customer.booking.history') }}" class="hover:underline">Riwayat Booking</a></li>
                    <li><a href="{{ route('customer.kritik.index') }}" class="hover:underline">Kritik dan Saran</a></li>
                    <li><a href="{{ route('customer.event') }}" class="hover:underline">Event dan Kolaborasi</a></li>
    </ul>

 @endunless
 </div>
            <div>
                <h4 class="font-semibold mb-2">Alamat Hijau Spa</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.2684732682088!2d103.9665991!3d1.106825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98b94c86d49c9%3A0x999ba4803b9d980a!2sHijau%20Spa%20Tiban!5e0!3m2!1sen!2sid!4v1752714375839!5m2!1sen!2sid"
                    width="300"
                    height="200"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <p>Perumahan Mekarsari, Jl. Tiban Raya No. B03, Tiban</p>
                <p>Instagram: hijauspa</p>
            </div>
            <div>
                <h4 class="font-semibold mb-2">Jadwal Buka</h4>
                <ul>
                    <li>Senin - Minggu: 08:00 – 20:00</li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-6 border-t border-gray-600 pt-4 text-xs">
            ©2025 Hijau Spa. All rights reserved.
        </div>
    </footer>

</body>
</html>
