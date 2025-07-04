@extends('layouts.app')

@section('title', 'Detail Booking Selesai')

@section('content')
<div class="flex justify-between items-center mb-6">
  <h1 class="text-xl font-bold text-gray-800">Booking Selesai</h1>
</div>

<div class="bg-white shadow rounded-lg p-4">
  <h2 class="text-lg font-medium mb-4">Daftar Booking Selesai</h2>
  <div class="overflow-x-auto">
    <table class="min-w-full text-left text-sm">
      <thead class="bg-gray-100">
        <tr>
          <th class="px-4 py-2 font-semibold">No</th>
          <th class="px-4 py-2 font-semibold">Nama Konsumen</th>
          <th class="px-4 py-2 font-semibold">Tanggal Booking</th>
          <th class="px-4 py-2 font-semibold">Tanggal Treatment</th>
          <th class="px-4 py-2 font-semibold text-center">Option</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $index => $item)
        <tr class="{{ $index % 2 == 0 ? 'bg-white' : 'bg-gray-100' }} border-t">
          <td class="px-4 py-2">{{ $index + 1 }}</td>

          <!-- Nama Konsumen -->
          <td class="px-4 py-2">
            <span class="toggle-text" data-original="{{ $item->nama_konsumen }}">{{ $item->nama_konsumen }}</span>
          </td>

          <!-- Tanggal Booking -->
          <td class="px-4 py-2">
            <span class="toggle-text" data-original="{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y | H:i') }} WIB">
              {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y | H:i') }} WIB
            </span>
          </td>

          <!-- Tanggal Treatment -->
          <td class="px-4 py-2">
            <span class="toggle-text" data-original="{{ \Carbon\Carbon::parse($item->jadwal_treatment)->format('d M Y | H:i') }} WIB">
              {{ \Carbon\Carbon::parse($item->jadwal_treatment)->format('d M Y | H:i') }} WIB
            </span>
          </td>

          <!-- Tombol Toggle -->
          <td class="px-4 py-2 text-center">
            <button class="toggle-btn bg-gray-100 text-blue-600 w-10 h-8 rounded hover:bg-blue-100 transition duration-200">
              <i class="fas fa-eye text-base"></i>
            </button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<!-- JavaScript Toggle -->
<script>
  document.querySelectorAll('.toggle-btn').forEach(function(button) {
    button.addEventListener('click', function () {
      const row = this.closest('tr');
      const texts = row.querySelectorAll('.toggle-text');
      const icon = this.querySelector('i');
      const hidden = icon.classList.contains('fa-eye-slash');

      texts.forEach(function (el) {
        if (hidden) {
          el.textContent = el.dataset.original;
        } else {
          el.textContent = '***';
        }
      });

      icon.classList.toggle('fa-eye');
      icon.classList.toggle('fa-eye-slash');
    });
  });
</script>
@endsection
