<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Hijau Spa</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script>
    function handleLogin(event) {
      event.preventDefault();
      const username = document.getElementById('username').value;
      const password = document.getElementById('password').value;

      if (username === 'user' && password === '123') {
        window.location.href = '/beranda';
      } else {
        alert('Username atau Password salah!');
      }
    }
  </script>
</head>
<body class="bg-white min-h-screen flex items-center justify-center">
  <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-4xl flex">
    <!-- Logo Section -->
    <div class="w-1/2 flex items-center justify-center">
      <img src="/images/logo2.png" alt="Hijau Spa Logo" class="w-40">
    </div>

    <!-- Login Form Section -->
    <div class="w-1/2 p-8 rounded-lg" style="background-color: #6E7F5E;">
      <h2 class="text-center text-lg font-semibold mb-6">Welcome, Hijau Spa</h2>
      <form onsubmit="handleLogin(event)">
        <label class="block mb-2 text-sm font-medium" for="username">Username</label>
        <input type="text" id="username" class="w-full px-3 py-2 mb-4 border rounded" />

        <label class="block mb-2 text-sm font-medium" for="password">Password</label>
        <input type="password" id="password" class="w-full px-3 py-2 mb-4 border rounded" />

        <button type="submit" class="bg-green-700 text-white px-6 py-2 rounded">LOGIN</button>
      </form>
      <p class="mt-4 text-sm">Belum Punya Akun? <a href="#" class="text-green-800 underline">Registrasi Disini!</a></p>
    </div>
  </div>
</body>
</html>