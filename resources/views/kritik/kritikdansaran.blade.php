<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kritik Dan Saran</title>
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
      <a href="http://127.0.0.1:8000/event" class="hover:text-[#5A7A48]">Event dan Kolaborasi</a>
    </nav>

    <!-- Tombol Booking -->
    <a href="#" class="bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition">Booking Sekarang</a>
  </div>
</header>

<!-- Section Kritik dan Saran -->
<section class="bg-gray-100 py-10 px-4">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-center text-xl font-semibold text-gray-800 mb-6 border-b pb-2">Costumer Kritik dan Saran</h2>
    
    <div class="bg-white rounded-lg shadow p-6 space-y-4">

      <!-- Komentar 1 -->
      <div class="flex items-start space-x-4"> 
        <div class="text-2xl"><i class="fas fa-user-circle"></i></div>
        <div>
          <h3 class="font-semibold">Ayu Lestari</h3>
          <p>Saya sangat puas dengan pelayanan yang diberikan!. Terus tingkatkan</p>
        </div>
      </div>

      <!-- Komentar 2 -->
      <div class="flex items-start space-x-4">
        <div class="text-2xl"><i class="fas fa-user-circle"></i></div>
        <div>
          <h3 class="font-semibold">Melati Wulandari</h3>
          <p>Saya suka sekali dengan pijatan refleksi yang diberikan. Therapist-nya profesional dan komunikatif.</p>
        </div>
      </div>

      <!-- Komentar 3 -->
      <div class="flex items-start space-x-4">
        <div class="text-2xl"><i class="fas fa-user-circle"></i></div>
        <div>
          <h3 class="font-semibold">Nadya Rahma</h3>
          <p>Tempatnya sangat nyaman dan tenang. Tapi saya sarankan agar aroma terapi lebih bervariasi.</p>
        </div>
      </div>

      <!-- Komentar 4 -->
      <div class="flex items-start space-x-4">
        <div class="text-2xl"><i class="fas fa-user-circle"></i></div>
        <div>
          <h3 class="font-semibold">Siska Anjani</h3>
          <p>Pelayanannya sangat ramah, tapi ruang tunggunya kurang wangi. Mungkin bisa tambahkan aromaterapi.</p>
        </div>
      </div>

      <!-- Komentar 5 -->
      <div class="flex items-start space-x-4">
        <div class="text-2xl"><i class="fas fa-user-circle"></i></div>
        <div>
          <h3 class="font-semibold">Intan Kusuma</h3>
          <p>Setelah sesi spa, mungkin akan lebih menyenangkan jika disediakan teh herbal hangat sebagai penutup.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<footer class="bg-gray-100 text-gray-800 py-10 px-6 text-sm">
  <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">

    <!-- Logo -->
    <div class="flex flex-col items-start">
      <img src="{{ asset('hijauspa.png') }}" alt="Logo Hijau Spa" class="w-28 mb-4">
    </div>

    <!-- Link Navigasi -->
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

   <!-- Alamat Hijau Spa -->
    <div>
      <h3 class="font-semibold mb-4">Alamat Hijau Spa</h3>
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0548221770523!2d104.02095711475327!3d1.0847313991615866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da3f1237e1b7ef%3A0xf8e710682d3e4172!2sHijau%20Spa%20Tiban!5e0!3m2!1sid!2sid!4v1717480000000!5m2!1sid!2sid" 
        width="100%" 
        height="180" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade"
        class="rounded mb-2">
      </iframe>
      <p>Perumahan Mekarsari, Jl. Tiban Raya No. B.03, Tiban.</p>
      <p class="mt-2"><strong>WhatsApp:</strong> 082875058282</p>
      <p><strong>Instagram:</strong> hijauspa</p>
    </div>


    <!-- Jadwal -->
    <div>
      <h3 class="font-semibold mb-4">Jadwal Buka Hijau Spa</h3>
      <div class="space-y-1">
        <p>Senin - Jumat<span class="float-right">08.00 – 20.00</span></p>
        <p>Sabtu<span class="float-right">08.00 – 20.00</span></p>
        <p>Minggu<span class="float-right">08.00 – 20.00</span></p>
      </div>
    </div>
  </div>

  <div class="border-t border-gray-300 mt-10 pt-4 text-center text-xs text-gray-600">
    ©2025, All Right Reserved by Spa Hijau
  </div>
</footer>

