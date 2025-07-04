<header
    class="relative flex items-center justify-between px-4 py-3 shadow"
    style="background-color: #889A78;">
    
    <!-- Logo dan teks -->
    <div class="flex items-center space-x-2">
        <img src="{{ asset('hijauspa.png') }}" alt="Logo Hijau Spa" class="h-8 w-auto">
        <span class="text-green-800 font-semibold text-md">Hijau Spa</span>
    </div>

    <!-- Tombol Logout -->
    <!-- Tombol Logout -->
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button
        type="submit"
        class="bg-[#617152] text-white px-6 py-2 rounded-md hover:bg-[#4e5e44] transition">
        LOG OUT
    </button>
</form>
</header>
