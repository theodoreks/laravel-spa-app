<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - Hijau Spa</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Import Playfair Display from Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Playfair Display', serif;
    }
  </style>
</head>
<body class="bg-white flex items-center justify-center min-h-screen">

  <div class="w-full max-w-6xl flex flex-col md:flex-row items-center justify-center px-6">
    
    <!-- Logo -->
    <div class="md:w-1/2 flex justify-center mb-8 md:mb-0">
      <img src="hijauspa.png" alt="Logo Hijau Spa" class="h-60 object-contain" />
    </div>

    <!-- Form Login dengan card hijau -->
    <div class="md:w-1/2 w-full max-w-md bg-[#A8B899] p-10 rounded-2xl shadow-lg">
      <h2 class="text-center text-3xl font-bold text-gray-800 mb-6">Welcome, Hijau Spa</h2>
      
      <form action="/login" method="POST" class="space-y-6">
        @csrf

        <!-- Username -->
        <div>
          <label for="username" class="block text-lg text-gray-800 mb-2">Username</label>
          <input type="text" id="username" name="username" required
            class="w-full px-5 py-3 text-lg rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#5A7A48]" />
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block text-lg text-gray-800 mb-2">Password</label>
          <input type="password" id="password" name="password" required
            class="w-full px-5 py-3 text-lg rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#5A7A48]" />
        </div>

        <!-- Tombol Login -->
        <button type="submit"
          class="w-full bg-[#5A7A48] text-white text-lg py-3 rounded-md hover:bg-[#47633B] font-semibold">
          LOGIN
        </button>
      </form>

      <!-- Footer -->
      <p class="mt-6 text-center text-base text-gray-800">
        <span class="font-semibold">Belum Punya Akun?</span> 
        <a href="/register" class="text-[#47633B] hover:underline">Registrasi Disini!</a>
      </p>
    </div>
  </div>

</body>
</html>
