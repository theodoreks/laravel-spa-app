@extends('customer.layouts.app1')


@section('content')

 <!-- Title -->
  <header class="bg-gray-200 py-4">
  <h1 class="text-left text-lg font-medium pl-4">Pembayaran</h1>
</header>
<section class="p-6 max-w-6xl mx-auto mt-6 bg-[#6E7F5E] rounded-lg">
  

  <div class="grid md:grid-cols-2 gap-10 bg-[#6E7F5E] p-6 rounded-lg shadow text-black">
    <!-- Booking Detail -->
    <div>
      <h3 class="text-lg font-bold mb-4">Booking-13</h3>
      <p><strong>Nama</strong> : Amanda</p>
      <p><strong>Jenis Kelamin</strong> : Wanita</p>
      <p><strong>No Handphone</strong> : 08574547091</p>
      <p><strong>Booking</strong> : 07 April 2025 | 14.45 WIB</p>
      <p><strong>Jadwal Treatment</strong> : 08 April 2025 | 15.00 WIB</p>
      <p><strong>Jenis Treatment</strong> : Paket Herbal Facial (Rp. 111.000)</p>
      <p><strong>Therapist</strong> : Suci</p>
      <p><strong>Status</strong> : Belum Bayar</p>
    </div>

    <!-- Konfirmasi Pembayaran -->
    <div>
      <h3 class="text-lg font-semibold mb-4">Konfirmasi pembayaran</h3>
      <form action="#" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div>
          <label class="block mb-1">Jumlah Bayar</label>
          <input type="text" value="Rp. 111.000" class="w-full border px-3 py-2 rounded text-black bg-white" readonly>
        </div>
        <div>
          <label class="block mb-1">Bukti Pembayaran</label>
          <input type="file" name="bukti" class="w-full border px-3 py-2 rounded bg-white text-black">
        </div>
        <button type="submit" class="bg-green-700 text-black px-6 py-2 rounded">Kirim</button>
      </form>
    </div>
  </div>

  <!-- QRIS -->
  <div class="text-center mt-8">
    <h3 class="text-lg font-semibold mb-3 text-black">Scan Disini Untuk Pembayaran</h3>
    <p class="mb-2 text-black">QRIS</p>
    <img src="{{ asset('images/qris.png') }}" alt="QRIS" class="mx-auto w-52">
  </div>
</section>
@endsection
