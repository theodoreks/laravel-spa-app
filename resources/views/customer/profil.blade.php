@extends('customer.layouts.app1')


@section('content')

  <!-- Content -->
     <!-- Title -->
  <header class="bg-gray-200 py-4">
  <h1 class="text-left text-lg font-medium pl-4">Profil</h1>
</header>

  <!-- Profile Section -->
 <div class="max-w-4xl mx-auto mt-10 mb-10 grid grid-cols-1 md:grid-cols-2 gap-6 p-6 bg-white border border-black rounded-lg shadow">
    <!-- Left: Icon -->
    <div class="flex justify-center items-center">
      <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User Icon" class="w-40 h-40">
    </div>

    <!-- Right: Form -->
    <form class="bg-white shadow rounded-lg p-6 border">
      <div class="mb-4">
        <label class="block mb-1 font-medium">Username</label>
        <input type="text" value="user" class="w-full border rounded px-3 py-2" />
      </div>

      <div class="mb-4">
        <label class="block mb-1 font-medium">Password</label>
        <div class="relative">
          <input type="password" value="123" class="w-full border rounded px-3 py-2 pr-10" />
          <span class="absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer">👁️</span>
        </div>
      </div>

      <div class="mb-6">
        <label class="block mb-1 font-medium">No Handphone</label>
        <input type="text" value="" class="w-full border rounded px-3 py-2" />
      </div>

      <button type="submit" class="bg-[rgb(83,125,93)] text-white px-6 py-2 rounded shadow">
        Simpan
      </button>
    </form>
  </div>

@endsection
