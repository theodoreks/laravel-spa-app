@extends('customer.layouts.app1')
@section('content')

<script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('midtrans.client_key') }}"></script>

<header class="bg-gray-200 py-4">
    <h1 class="text-left text-lg font-medium pl-4">Pembayaran</h1>
</header>
<section class="p-6 max-w-6xl mx-auto mt-6 bg-[#6E7F5E] rounded-lg">
    <div class="grid md:grid-cols-2 gap-10 bg-[#6E7F5E] p-6 rounded-lg shadow text-white">
        <div>
            <h3 class="text-lg font-bold mb-4">Booking-{{ $booking->id }}</h3>
            <p><strong>Nama</strong> : {{ $booking->user->nama_lengkap }}</p>
            <p><strong>No Handphone</strong> : {{ $booking->user->no_hp }}</p>
            <p><strong>Booking</strong> : {{ $booking->created_at->translatedFormat('d F Y | H:i') }} WIB</p>
            <p><strong>Jadwal Treatment</strong> : {{ \Carbon\Carbon::parse($booking->tanggal_treatment)->translatedFormat('d F Y') }} | {{ \Carbon\Carbon::parse($booking->jam_treatment)->format('H:i') }} WIB</p>
            <p><strong>Jenis Treatment</strong> : {{ $booking->promo->nama_promo }} (Rp. {{ number_format($booking->promo->harga) }})</p>
            <p><strong>Therapist</strong> : {{ $booking->therapist }}</p>
            <p><strong>Status</strong> : {{ $booking->status_pembayaran }}</p>
        </div>

        <div>
            <h3 class="text-lg font-semibold mb-4">Konfirmasi pembayaran</h3>
            <form action="#" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label class="block mb-1">Jumlah Bayar</label>
                    <input type="text" value="Rp. {{ number_format($booking->promo->harga) }}" class="w-full border px-3 py-2 rounded text-black bg-gray-200" readonly>
                </div>
                {{-- 2. Ganti form upload dengan tombol bayar --}}
                <button id="pay-button" class="bg-green-700 text-white px-6 py-2 rounded w-full">Bayar Sekarang</button>
            </div>
        </div>
    </div>
    <div class="text-center mt-8">
        <h3 class="text-lg font-semibold mb-3 text-white">Scan Disini Untuk Pembayaran</h3>
        <p class="mb-2 text-white">QRIS</p>
        <img src="{{ asset('images/qris.png') }}" alt="QRIS" class="mx-auto w-52">
    </div>
</section>
<script type="text/javascript">
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
        window.snap.pay('{{ $snapToken }}', {
            onSuccess: function(result){
                /* Anda bisa tambahkan notifikasi di sini */
                alert("payment success!"); 
                console.log(result);
                // Redirect atau update UI jika perlu
                window.location.href = '/'; // Contoh redirect ke beranda
            },
            onPending: function(result){
                /* Anda bisa tambahkan notifikasi di sini */
                alert("wating your payment!"); 
                console.log(result);
            },
            onError: function(result){
                /* Anda bisa tambahkan notifikasi di sini */
                alert("payment failed!"); 
                console.log(result);
            },
            onClose: function(){
                /* Anda bisa tambahkan notifikasi di sini */
                alert('you closed the popup without finishing the payment');
            }
        });
    });
</script>
@endsection