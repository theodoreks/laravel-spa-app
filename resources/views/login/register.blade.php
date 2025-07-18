<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register - Hijau Spa</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Import Playfair Display -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Playfair Display', serif;
    }
  </style>
</head>
<body class="bg-white flex items-center justify-center min-h-screen">

  <div class="w-full max-w-6xl flex flex-col md:flex-row items-center justify-center px-6">

    <!-- Logo Hijau Spa -->
    <div class="md:w-1/2 flex justify-center mb-8 md:mb-0">
      <img src="hijauspa.png" alt="Logo Hijau Spa" class="h-60 object-contain" />
    </div>

    <!-- Form Daftar -->
    <div class="md:w-1/2 w-full max-w-md bg-[#A8B899] p-10 rounded-2xl shadow-lg">
      <h2 class="text-center text-3xl font-bold text-gray-800 mb-4">Daftar Akun</h2>
      <p class="text-center text-base text-gray-700 mb-6">Isi data berikut untuk mendaftar</p>

      {{-- Error handling --}}
      @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-5 text-sm">
          <strong class="font-bold">Oops! Terjadi kesalahan:</strong>
          <ul class="mt-2 list-disc list-inside">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('register') }}" method="POST" class="space-y-4">
        @csrf

        <!-- Nama Lengkap -->
        <div>
          <label for="nama_lengkap" class="block text-gray-800 mb-1">Nama Lengkap</label>
          <input type="text" id="nama_lengkap" name="nama_lengkap" required
            class="w-full px-4 py-2 text-base rounded-md border border-gray-300 focus:ring-[#5A7A48] focus:outline-none" />
        </div>

        <!-- Jenis Kelamin -->
        <div>
          <label for="jenis_kelamin" class="block text-gray-800 mb-1">Jenis Kelamin</label>
          <select id="jenis_kelamin" name="jenis_kelamin" required
            class="w-full px-4 py-2 text-base rounded-md border border-gray-300 focus:ring-[#5A7A48] focus:outline-none">
            <option value="">-- Pilih --</option>
            <option value="Laki-Laki">Laki - Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>

        <!-- No HP -->
        <div>
          <label for="no_hp" class="block text-gray-800 mb-1">No HP</label>
          <input type="text" id="no_hp" name="no_hp" required
            class="w-full px-4 py-2 text-base rounded-md border border-gray-300 focus:ring-[#5A7A48] focus:outline-none" />
        </div>

        <!-- Username -->
        <div>
          <label for="username" class="block text-gray-800 mb-1">Username</label>
          <input type="text" id="username" name="username" required
            class="w-full px-4 py-2 text-base rounded-md border border-gray-300 focus:ring-[#5A7A48] focus:outline-none" />
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block text-gray-800 mb-1">Password</label>
          <input type="password" id="password" name="password" required
            class="w-full px-4 py-2 text-base rounded-md border border-gray-300 focus:ring-[#5A7A48] focus:outline-none" />
        </div>

        <!-- Konfirmasi Password -->
        <div>
          <label for="password_confirmation" class="block text-gray-800 mb-1">Konfirmasi Password</label>
          <input type="password" id="password_confirmation" name="password_confirmation" required
            class="w-full px-4 py-2 text-base rounded-md border border-gray-300 focus:ring-[#5A7A48] focus:outline-none" />
        </div>

        <!-- Tombol Daftar -->
        <button type="submit"
          class="w-full bg-[#5A7A48] text-white text-base py-3 rounded-md hover:bg-[#47633B] font-semibold">
          Daftar
        </button>
      </form>

      <!-- Footer -->
      <p class="mt-6 text-center text-sm text-gray-800">
        <span class="font-semibold">Sudah punya akun?</span>
        <a href="/login" class="text-[#47633B] hover:underline">Login di sini</a>
      </p>
    </div>
  </div>

</body>
</html>
