@extends('customer.layouts.app1')


@section('content')

<!-- Modal -->
<div id="kritikModal" class="fixed inset-0 bg-opacity-40 flex items-center justify-center z-50">
  <div class="bg-[#6E7F5E] text-white p-6 rounded-lg shadow-lg max-w-md w-full relative">
    <!-- Close Button -->
    <button onclick="closeModal()" class="absolute top-2 right-2 text-white text-xl font-semibold">&times;</button>

    <!-- Header -->
    <h2 class="text-lg font-bold mb-1">Kritik dan Saran Anda</h2>
    <p class="mb-5 text-sm">Kami menghargai setiap masukan untuk meningkatkan layanan Spa Hijau.</p>

    <!-- Form -->
    <form action="{{ route('kritik.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="block mb-1 text-white">Nama Lengkap</label>
        <input type="text" name="nama" class="w-full px-3 py-2 rounded bg-white text-black" required />
      </div>
      <div class="mb-3">
        <label class="block mb-1 text-white">No Handphone</label>
        <input type="text" name="hp" class="w-full px-3 py-2 rounded bg-white text-black" required />
      </div>
      <div class="mb-4">
        <label class="block mb-1 text-white">Pesan Kritik atau Saran</label>
        <input type="text" name="pesan" class="w-full px-3 py-2 rounded bg-white text-black" required />
      </div>

      <!-- Buttons -->
      <div class="flex justify-end gap-2">
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Kirim</button>
        <button type="button" onclick="closeModal()" class="bg-gray-300 hover:bg-gray-400 text-black px-4 py-2 rounded">Batal</button>
      </div>
    </form>
  </div>
</div>

<!-- Header -->
<header class="bg-gray-200 py-4">
  <h1 class="text-left text-lg font-medium pl-4">Customer Kritik dan Saran</h1>
</header>

<!-- Container -->
<div class="max-w-3xl mx-auto mt-10 mb-10 p-4 bg-white shadow rounded-lg">
  @foreach ($feedbacks as $index => $fb)
    <div class="flex items-start gap-4 {{ $index !== 0 ? 'my-4' : 'mb-4' }}">
      <div class="text-2xl">👤</div>
      <div>
        <p class="font-bold">{{ $fb->nama }}</p>
        <p class="text-sm">{{ $fb->kritik }}</p>
      </div>
    </div>
    @if (!$loop->last)
      <hr>
    @endif
  @endforeach
</div>

<!-- Script -->
<script>
  window.onload = function () {
    document.getElementById('kritikModal').style.display = 'flex';
  }

  function closeModal() {
    document.getElementById('kritikModal').style.display = 'none';
  }
</script>

@endsection
