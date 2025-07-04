<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Owner | Hijau Spa</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        playfair: ['"Playfair Display"', 'serif'],
                    },
                    colors: {
                        hijauTua: '#889A78',
                        hijauMuda: '#54971A',
                        abuMuda: '#f9f9f9',
                    }
                }
            }
        };
    </script>
</head>
<body class="bg-abuMuda font-playfair text-sm text-gray-800">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 flex flex-col">
            <!-- Sidebar Header -->
            <div class="bg-hijauTua px-4 py-3 flex items-center space-x-3 h-[56px]">
                <img src="{{ asset('images/hijauspa.png') }}" alt="Logo" class="h-14 w-14"> <!-- Logo lebih besar -->
                <span class="text-hijauMuda text-base font-semibold">Hijau Spa</span> <!-- Teks sedikit lebih kecil -->
            </div>

            <!-- Sidebar Menu -->
            <nav class="bg-white flex-1 py-4">
                <ul class="space-y-1">
                    <li>
                        <a href="/dashboard" class="flex items-center px-5 py-2 hover:text-hijauMuda">
                            <i data-lucide="home" class="w-4 h-4 mr-2"></i> Beranda
                        </a>
                    </li>
                    <li>
                        <a href="/datakaryawan" class="flex items-center px-5 py-2 hover:text-hijauMuda">
                            <i data-lucide="users" class="w-4 h-4 mr-2"></i> Data Karyawan
                        </a>
                    </li>
                    <li>
                        <a href="/datacostumer" class="flex items-center px-5 py-2 hover:text-hijauMuda">
                            <i data-lucide="user" class="w-4 h-4 mr-2"></i> Data Costumer
                        </a>
                    </li>
                    <li>
                        <details class="group">
                            <summary class="flex items-center px-5 py-2 cursor-pointer hover:text-hijauMuda justify-between">
                                <div class="flex items-center">
                                    <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Laporan
                                </div>
                                <i data-lucide="chevron-down" class="w-4 h-4 transition-transform group-open:rotate-180"></i>
                            </summary>
                            <ul class="ml-10 mt-1 space-y-1">
                                <li>
                                    <a href="/keuangan" class="flex items-center py-1 hover:text-hijauMuda">
                                        <i data-lucide="calendar-check" class="w-4 h-4 mr-2"></i> Booking
                                    </a>
                                </li>
                                <li>
                                    <a href="/inventory" class="flex items-center py-1 hover:text-hijauMuda">
                                        <i data-lucide="package" class="w-4 h-4 mr-2"></i> Inventory Barang
                                    </a>
                                </li>
                            </ul>
                        </details>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <header class="bg-hijauTua px-6 py-3 text-white flex justify-end items-center h-[56px]">
                <a href="/" class="text-sm font-medium bg-[#617152] text-white px-4 py-1 rounded-md hover:bg-[#4d5c45]">
                    LOG OUT
                </a>
            </header>

            <!-- Page Content -->
            <main class="flex-1 p-6 overflow-y-auto">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
