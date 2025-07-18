<aside class="w-64 bg-white shadow-md min-h-screen" x-data="{ bookingOpen: false, laporanOpen: false, aktivitasOpen: false }">
    <nav class="p-4 text-sm">
        <ul class="space-y-2 text-gray-700">

            <li>
                {{-- Nama rute yang benar adalah 'karyawan.dashboard' --}}
                <a href="{{ route('karyawan.dashboard') }}" class="block hover:text-lime-500">
                    <i class="fas fa-house mr-2"></i> Beranda
                </a>
            </li>

            <li>
                {{-- Tambahkan prefix 'karyawan.' --}}
                <a href="{{ route('karyawan.absensi.index') }}" class="block hover:text-lime-500">
                    <i class="fas fa-user-check mr-2"></i> Absen Karyawan
                </a>
            </li>

            <li>
                {{-- Ganti 'paket' menjadi 'promo' dan tambahkan prefix --}}
                <a href="{{ route('karyawan.promo.index') }}" class="block hover:text-lime-500">
                    <i class="fas fa-gift mr-2"></i> Promo
                </a>
            </li>

            <li class="relative">
                <button @click="bookingOpen = !bookingOpen" class="flex items-center justify-between w-full text-left hover:text-lime-500">
                    <span><i class="fas fa-book mr-2"></i> Info Booking</span>
                    <i :class="bookingOpen ? 'fa-chevron-up' : 'fa-chevron-down'" class="fas ml-auto text-xs"></i>
                </button>
                <ul x-show="bookingOpen" x-transition class="ml-6 mt-2 space-y-2 text-gray-600">
                    {{-- Di sini saya asumsikan rute booking juga perlu prefix, sesuaikan jika berbeda --}}
                    <li>
                        <a href="{{ route('karyawan.booking.index') }}" class="flex items-center hover:text-lime-500">
                            <i class="fas fa-pen-nib mr-2"></i> Booking
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('karyawan.booking.selesai') }}" class="flex items-center hover:text-lime-500">
                            <i class="fas fa-check-square mr-2"></i> Selesai
                        </a>
                    </li>
                </ul>
            </li>

            <li class="relative">
                <button @click="laporanOpen = !laporanOpen" class="flex items-center justify-between w-full text-left hover:text-lime-500">
                    <span><i class="fas fa-chart-bar mr-2"></i> Laporan</span>
                    <i :class="laporanOpen ? 'fa-chevron-up' : 'fa-chevron-down'" class="fas ml-auto text-xs"></i>
                </button>
                <ul x-show="laporanOpen" x-transition class="ml-6 mt-2 space-y-2 text-gray-600">
                    <li>
                        {{-- Tambahkan prefix 'karyawan.' --}}
                        <a href="{{ route('karyawan.laporan.index') }}" class="flex items-center hover:text-lime-500">
                            <i class="fas fa-money-bill-wave mr-2"></i> Keuangan
                        </a>
                    </li>
                    <li>
                        {{-- Tambahkan prefix 'karyawan.' --}}
                        <a href="{{ route('karyawan.inventory.index') }}" class="flex items-center hover:text-lime-500">
                            <i class="fas fa-boxes mr-2"></i> Inventory Barang
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                {{-- Tambahkan prefix 'karyawan.' --}}
                <a href="{{ route('karyawan.event.index') }}" class="block hover:text-lime-500">
                    <i class="fas fa-handshake mr-2"></i> Event dan Kolaborasi
                </a>
            </li>

            {{-- Untuk sementara, link Aktivitas Karyawan dan Profil saya beri # karena belum ada rute yang jelas --}}
            <li class="relative">
                <button @click="aktivitasOpen = !aktivitasOpen" class="flex items-center justify-between w-full text-left hover:text-lime-500">
                    <span><i class="fas fa-briefcase mr-2"></i> Aktivitas Karyawan</span>
                    <i :class="aktivitasOpen ? 'fa-chevron-up' : 'fa-chevron-down'" class="fas ml-auto text-xs"></i>
                </button>
                <ul x-show="aktivitasOpen" x-transition class="ml-6 mt-2 space-y-2 text-gray-600">
    <li>
        <a href="{{ route('karyawan.aktivitas.index') }}" class="flex items-center hover:text-lime-500">
            <i class="fas fa-calendar-day mr-2"></i> Harian
        </a>
    </li>
    <li>
        <a href="{{ route('karyawan.aktivitas.mingguan.index') }}" class="flex items-center hover:text-lime-500">
            <i class="fas fa-calendar-week mr-2"></i> Mingguan
        </a>
    </li>
    <li>
        <a href="{{ route('karyawan.aktivitas.bulanan.index') }}" class="flex items-center hover:text-lime-500">
            <i class="fas fa-calendar-alt mr-2"></i> Bulanan
        </a>
    </li>
</ul>
            </li>

            <li>
    <a href="{{ route('karyawan.profil.index') }}" class="block hover:text-lime-500">
        <i class="fa-solid fa-user mr-2"></i> Profil
    </a>
</li>

        </ul>
    </nav>
</aside>
