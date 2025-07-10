@extends('customer.layouts.app1')

@section('content')

<header class="bg-gray-200 py-4">
    <h1 class="text-left text-lg font-medium pl-4">Profil</h1>
</header>

<div class="max-w-4xl mx-auto mt-10 mb-10 grid grid-cols-1 md:grid-cols-2 gap-6 p-6 bg-white border border-black rounded-lg shadow">
    <div class="flex justify-center items-center">
        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User Icon" class="w-40 h-40">
    </div>

    {{-- This form now points to the update route --}}
    <form action="{{ route('customer.profil.update') }}" method="POST" class="bg-white shadow rounded-lg p-6 border">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-1 font-medium">Nama Lengkap</label>
            {{-- Use the user's data from the controller --}}
            <input type="text" name="nama_lengkap" value="{{ $user->nama_lengkap }}" class="w-full border rounded px-3 py-2 bg-gray-100" readonly />
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Username</label>
            {{-- Use the user's data from the controller --}}
            <input type="text" name="username" value="{{ $user->username }}" class="w-full border rounded px-3 py-2" required />
        </div>

        <div class="mb-6">
            <label class="block mb-1 font-medium">No Handphone</label>
            {{-- Use the user's data from the controller --}}
            <input type="text" name="no_hp" value="{{ $user->no_hp }}" class="w-full border rounded px-3 py-2" required />
        </div>

        <button type="submit" class="bg-[rgb(83,125,93)] text-white px-6 py-2 rounded shadow">
            Simpan Perubahan
        </button>
    </form>
</div>

@endsection