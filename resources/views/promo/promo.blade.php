<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Beranda Promo</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Bar Hijau Atas -->
  <div class="bg-[#889A78] text-white text-sm px-4 py-2 flex justify-between items-center">
    <div class="flex items-center space-x-4">
      <span><i class="fab fa-instagram mr-1"></i>@hijauspa</span>
      <span><i class="fab fa-whatsapp mr-1"></i>0812-7906-582</span>
    </div>
    <button class="border border-white px-4 py-1 rounded hover:bg-white hover:text-[#889A78] transition">LOG OUT</button>
  </div>

  <!-- Bar Putih Bawah -->
  <header class="bg-white shadow">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center">
      <!-- Logo dan Judul -->
      <div class="flex items-center space-x-4">
        <img src="{{ asset('hijauspa.png') }}" alt="Logo Hijau Spa" class="h-8 w-auto">
        <span class="text-[#5A7A48] font-semibold text-md">Hijau Spa</span>
      </div>

      <!-- Navigasi -->
      <nav class="space-x-6 text-sm font-medium text-gray-700">
        <a href="http://127.0.0.1:8000/beranda" class="hover:text-[#5A7A48]">Beranda</a>
        <a href="#" class="hover:text-[#5A7A48]">Profil</a>
        <a href="#" class="hover:text-[#5A7A48]">Promo</a>
        <a href="#" class="hover:text-[#5A7A48]">Riwayat Booking</a>
        <a href="#" class="hover:text-[#5A7A48]">Kritik dan Saran</a>
        <a href="#" class="hover:text-[#5A7A48]">Event dan Kolaborasi</a>
      </nav>

      <!-- Tombol Booking -->
      <a href="#" class="bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition">Booking Sekarang</a>
    </div>
  </header>

  <!-- Daftar Promo -->
  <section class="bg-gray-100 py-10 px-4">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-center text-xl font-semibold text-gray-800 mb-6 border-b pb-2">Promo</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

        <!-- Promo 1 s/d 12 (Sudah ada di kode Anda) -->
        <!-- Masukkan semua <div class="bg-[#889A78]/10 ..."> di sini -->

         <div class="bg-[#889A78]/10 border rounded shadow overflow-hidden">
  <img src="{{ asset('faceherbal.png') }}"
       alt="Cool Mask Treatment"
       class="w-full object-contain transition-transform duration-200 hover:scale-105 active:scale-95 cursor-pointer bg-white" />
  <div class="p-4">
    <h3 class="font-semibold text-md mb-1">Paket Herbal Facial</h3>
    <p class="text-sm text-gray-600 mb-3">Rp 111.000 - 50 Menit</p>
    <a href="#" class="block text-center bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition">
      Booking Sekarang
    </a>
  </div>
</div>
     <!-- Promo 2 -->
<div class="bg-[#889A78]/10 border rounded shadow overflow-hidden">
  <img src="promo2.jpg" alt="Promo 2"
       class="w-full object-contain transition-transform duration-200 hover:scale-105 active:scale-95 cursor-pointer bg-white" />
  <div class="p-4">
    <h3 class="font-semibold text-md mb-1">Paket Cuci Muka + Masker Spiriluna</h3>
    <p class="text-sm text-gray-600 mb-3">Rp 99.000 - 25 Menit</p>
    <a href="#" class="block text-center bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition">Booking Sekarang</a>
  </div>
</div>

<!-- Promo 3 -->
<div class="bg-[#889A78]/10 border rounded shadow overflow-hidden">
  <img src="promo3.jpg" alt="Promo 3"
       class="w-full object-contain transition-transform duration-200 hover:scale-105 active:scale-95 cursor-pointer bg-white" />
  <div class="p-4">
    <h3 class="font-semibold text-md mb-1">Paket Facial Treatment</h3>
    <p class="text-sm text-gray-600 mb-3">Rp 550.000 - 140 Menit</p>
    <a href="#" class="block text-center bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition">Booking Sekarang</a>
  </div>
</div>

<!-- Promo 4 -->
<div class="bg-[#889A78]/10 border rounded shadow overflow-hidden">
  <img src="promo4.jpg" alt="Promo 4"
       class="w-full object-contain transition-transform duration-200 hover:scale-105 active:scale-95 cursor-pointer bg-white" />
  <div class="p-4">
    <h3 class="font-semibold text-md mb-1">Facial Treatment</h3>
    <p class="text-sm text-gray-600 mb-3">Rp 99.000 - 30 Menit</p>
    <a href="#" class="block text-center bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition">Booking Sekarang</a>
  </div>
</div>

<!-- Promo 5 -->
<div class="bg-[#889A78]/10 border rounded shadow overflow-hidden">
  <img src="promo5.jpg" alt="Promo 5"
       class="w-full object-contain transition-transform duration-200 hover:scale-105 active:scale-95 cursor-pointer bg-white" />
  <div class="p-4">
    <h3 class="font-semibold text-md mb-1">Serum Brightening</h3>
    <p class="text-sm text-gray-600 mb-3">Rp 110.000 - 35 Menit</p>
    <a href="#" class="block text-center bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition">Booking Sekarang</a>
  </div>
</div>

<!-- Promo 6 -->
<div class="bg-[#889A78]/10 border rounded shadow overflow-hidden">
  <img src="promo6.jpg" alt="Promo 6"
       class="w-full object-contain transition-transform duration-200 hover:scale-105 active:scale-95 cursor-pointer bg-white" />
  <div class="p-4">
    <h3 class="font-semibold text-md mb-1">Body Treatment</h3>
    <p class="text-sm text-gray-600 mb-3">Rp 99.000 - 30 Menit</p>
    <a href="#" class="block text-center bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition">Booking Sekarang</a>
  </div>
</div>

<!-- Promo 7 -->
<div class="bg-[#889A78]/10 border rounded shadow overflow-hidden">
  <img src="promo7.jpg" alt="Promo 7"
       class="w-full object-contain transition-transform duration-200 hover:scale-105 active:scale-95 cursor-pointer bg-white" />
  <div class="p-4">
    <h3 class="font-semibold text-md mb-1">Masker Spirulina</h3>
    <p class="text-sm text-gray-600 mb-3">Rp 85.000 - 20 Menit</p>
    <a href="#" class="block text-center bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition">Booking Sekarang</a>
  </div>
</div>

<!-- Promo 8 -->
<div class="bg-[#889A78]/10 border rounded shadow overflow-hidden">
  <img src="promo8.jpg" alt="Promo 8"
       class="w-full object-contain transition-transform duration-200 hover:scale-105 active:scale-95 cursor-pointer bg-white" />
  <div class="p-4">
    <h3 class="font-semibold text-md mb-1">Aromatherapy Massage</h3>
    <p class="text-sm text-gray-600 mb-3">Rp 130.000 - 60 Menit</p>
    <a href="#" class="block text-center bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition">Booking Sekarang</a>
  </div>
</div>

<!-- Promo 9 -->
<div class="bg-[#889A78]/10 border rounded shadow overflow-hidden">
  <img src="promo9.jpg" alt="Promo 9"
       class="w-full object-contain transition-transform duration-200 hover:scale-105 active:scale-95 cursor-pointer bg-white" />
  <div class="p-4">
    <h3 class="font-semibold text-md mb-1">Paket Rempah Relax</h3>
    <p class="text-sm text-gray-600 mb-3">Rp 115.000 - 40 Menit</p>
    <a href="#" class="block text-center bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition">Booking Sekarang</a>
  </div>
</div>

<!-- Promo 10 -->
<div class="bg-[#889A78]/10 border rounded shadow overflow-hidden">
  <img src="promo10.jpg" alt="Promo 10"
       class="w-full object-contain transition-transform duration-200 hover:scale-105 active:scale-95 cursor-pointer bg-white" />
  <div class="p-4">
    <h3 class="font-semibold text-md mb-1">Full Body Scrub</h3>
    <p class="text-sm text-gray-600 mb-3">Rp 150.000 - 60 Menit</p>
    <a href="#" class="block text-center bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition">Booking Sekarang</a>
  </div>
</div>

<!-- Promo 11 -->
<div class="bg-[#889A78]/10 border rounded shadow overflow-hidden">
  <img src="promo11.jpg" alt="Promo 11"
       class="w-full object-contain transition-transform duration-200 hover:scale-105 active:scale-95 cursor-pointer bg-white" />
  <div class="p-4">
    <h3 class="font-semibold text-md mb-1">Foot Reflexology</h3>
    <p class="text-sm text-gray-600 mb-3">Rp 90.000 - 30 Menit</p>
    <a href="#" class="block text-center bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition">Booking Sekarang</a>
  </div>
</div>

<!-- Promo 12 -->
<div class="bg-[#889A78]/10 border rounded shadow overflow-hidden">
  <img src="promo12.jpg" alt="Promo 12"
       class="w-full object-contain transition-transform duration-200 hover:scale-105 active:scale-95 cursor-pointer bg-white" />
  <div class="p-4">
    <h3 class="font-semibold text-md mb-1">Spa Rempah Hangat</h3>
    <p class="text-sm text-gray-600 mb-3">Rp 140.000 - 50 Menit</p>
    <a href="#" class="block text-center bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition">Booking Sekarang</a>
  </div>
</div>
        <!-- Tambahkan promo lainnya sesuai kebutuhan -->

      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-100 text-gray-800 py-10 px-6 text-sm mt-10">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">

      <!-- Logo -->
      <div>
        <img src="{{ asset('hijauspa.png') }}" alt="Logo Hijau Spa" class="w-28 mb-4">
      </div>

      <!-- Navigasi -->
      <div>
        <h3 class="font-semibold mb-4">Link</h3>
        <ul class="space-y-2">
          <li><a href="#" class="hover:underline">Beranda</a></li>
          <li><a href="#" class="hover:underline">Promo</a></li>
          <li><a href="#" class="hover:underline">Riwayat Booking</a></li>
          <li><a href="#" class="hover:underline">Event dan Kolaborasi</a></li>
          <li><a href="#" class="hover:underline">Kritik dan Saran</a></li>
        </ul>
      </div>

      <!-- Alamat -->
      <div>
        <h3 class="font-semibold mb-4">Alamat Hijau Spa</h3>
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0548221770523!2d104.02095711475327!3d1.0847313991615866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da3f1237e1b7ef%3A0xf8e710682d3e4172!2sHijau%20Spa%20Tiban!5e0!3m2!1sid!2sid!4v1717480000000!5m2!1sid!2sid" 
          width="100%" 
          height="140" 
          style="border:0;" 
          allowfullscreen 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade"
          class="rounded mb-2">
        </iframe>
        <p>Perumahan Mekarsari, Jl. Tiban Raya No. B.03, Tiban.</p>
        <p class="mt-2"><strong>WhatsApp:</strong> 082875058282</p>
        <p><strong>Instagram:</strong> @hijauspa</p>
      </div>

      <!-- Jadwal -->
      <div>
        <h3 class="font-semibold mb-4">Jadwal Buka Hijau Spa</h3>
        <div class="space-y-1">
          <div class="flex justify-between"><span>Senin - Jumat</span><span>08.00 – 20.00</span></div>
          <div class="flex justify-between"><span>Sabtu</span><span>08.00 – 20.00</span></div>
          <div class="flex justify-between"><span>Minggu</span><span>08.00 – 20.00</span></div>
        </div>
      </div>

    </div>

    <!-- Copyright -->
    <div class="border-t border-gray-300 mt-10 pt-4 text-center text-xs text-gray-600">
      ©2025, All Right Reserved by Spa Hijau
    </div>
  </footer>

</body>
</html>
