@extends('customer.layouts.app1')


@section('content')

    <header class="bg-gray-200 py-4">
  <h1 class="text-left text-lg font-medium pl-4">Riwayat Booking</h1>
</header>

    <div class="bg-white shadow p-8">
        <div class="bg-white shadow rounded p-4">
            <h3 class="text-lg font-semibold mb-4">Booking Saya</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full table border text-sm">
                    <thead class="bg-[#D9D9D9] text-black">
                        <tr>
                            <th class="px-4 py-2">ID Booking</th>
                            <th class="px-4 py-2">Jenis Treatment</th>
                            <th class="px-4 py-2">Harga</th>
                            <th class="px-4 py-2">Jadwal Treatment</th>
                        </tr>
                    </thead>
                   <tbody>
  @forelse($bookings as $booking)
    <tr class="bg-white">
        <td class="px-4 py-2">Booking {{ $booking->id }}</td>
        <td class="px-4 py-2">{{ $booking->treatment }}</td>
        <td class="px-4 py-2">Rp.1000000</td>
        <td class="px-4 py-2">{{ \Carbon\Carbon::parse($booking->tanggal)->format('d F Y') }} | {{ \Carbon\Carbon::parse($booking->jam)->format('H:i') }} WIB</td>
    </tr>
  @empty
    <tr>
      <td colspan="4" class="text-center py-4">Belum ada data booking.</td>
    </tr>
  @endforelse
</tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
