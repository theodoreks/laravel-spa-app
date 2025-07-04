<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register - Hijau Spa</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#F3F4F6] flex items-center justify-center min-h-screen">

  <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg border border-gray-200">
    <div class="text-center mb-6">
      <img src="hijauspa.png" alt="Logo Hijau Spa" class="mx-auto h-14 mb-2">
      <h2 class="text-2xl font-semibold text-[#5A7A48]">Daftar Akun</h2>
      <p class="text-sm text-gray-600">Isi data berikut untuk mendaftar</p>
    </div>

    <form action="{{ route('register') }}" method="POST" class="space-y-4">
  @csrf

  <!-- Nama Lengkap -->
  <div>
    <label for="nama_lengkap" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
    <input type="text" id="nama_lengkap" name="nama_lengkap" required
      class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#5A7A48]" />
  </div>

  <!-- Jenis Kelamin -->
  <div>
    <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
    <select id="jenis_kelamin" name="jenis_kelamin" required
      class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#5A7A48]">
      <option value="">-- Pilih --</option>
      <option value="Laki-Laki">Laki - Laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
  </div>

  <!-- No HP -->
  <div>
    <label for="no_hp" class="block text-sm font-medium text-gray-700">No HP</label>
    <input type="text" id="no_hp" name="no_hp" required
      class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#5A7A48]" />
  </div>

  <!-- Username -->
  <div>
    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
    <input type="text" id="username" name="username" required
      class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#5A7A48]" />
  </div>

  <!-- Password -->
  <div>
    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
    <input type="password" id="password" name="password" required
      class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#5A7A48]" />
  </div>

  <!-- Konfirmasi Password -->
  <div>
    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
    <input type="password" id="password_confirmation" name="password_confirmation" required
      class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#5A7A48]" />
  </div>

  <!-- Tombol Daftar -->
  <button type="submit"
    class="w-full bg-[#5A7A48] text-white py-2 rounded-lg hover:bg-[#47633B] transition font-semibold">
    Daftar
  </button>
</form>


    <!-- Footer -->
    <p class="mt-6 text-center text-sm text-gray-500">
      Sudah punya akun? <a href="http://127.0.0.1:8000/login" class="text-[#5A7A48] font-medium hover:underline">Login di sini</a>
    </p>
  </div>

</body>
</html>
