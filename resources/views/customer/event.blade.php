@extends('customer.layouts.app1')

@section('content')
<header class="bg-gray-200 py-4">
  <h1 class="text-left text-lg font-medium pl-4">Event & Kolaborasi</h1>
</header>

<section class="py-10 px-4 bg-gray-100 min-h-screen">
    @if(isset($events) && $events->isNotEmpty())
        {{-- Loop through each event --}}
        @foreach($events as $event)
            <div class="max-w-4xl mx-auto bg-white p-8 shadow-md rounded-lg mb-8">
                {{-- Use the 'tema' property from the database --}}
                <h2 class="text-xl font-semibold mb-4">Tema: {{ $event->tema }}</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        {{-- Use the 'foto' property from the database --}}
                        <img src="{{ asset('storage/' . $event->foto) }}" alt="{{ $event->tema }}" class="w-full rounded shadow">
                    </div>

                    <div class="text-gray-800 text-sm leading-relaxed">
                        {{-- Use the 'tanggal' and 'lokasi' properties --}}
                        <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($event->tanggal)->translatedFormat('l, d F Y') }}</p>
                        <p><strong>Lokasi:</strong> {{ $event->lokasi }}</p>
                        
                        {{-- Use the 'deskripsi' property --}}
                        <p class="mt-4">{{ $event->deskripsi }}</p>

                        {{-- Example static content, you can make these dynamic too --}}
                        <p class="mt-4"><strong>Link Pendaftaran:</strong><br>
                            <a href="#" class="text-blue-600 underline">Link registrasi di sini</a>
                        </p>
                        <p class="mt-2"><strong>Konfirmasi & Info:</strong> 081270958482</p>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        {{-- This will show if there are no events in the database --}}
        <div class="flex justify-center items-center h-64">
            <p class="text-gray-500 text-lg font-semibold">Event belum tersedia</p>
        </div>
    @endif
</section>
@endsection