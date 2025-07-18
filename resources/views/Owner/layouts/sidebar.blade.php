<aside class="w-64 bg-white shadow-md min-h-screen" x-data="{ laporanOpen: false }">
    <nav class="p-4 text-sm text-gray-700">
        <ul class="space-y-2">

            <li>
                <a href="{{ route('owner.dashboard') }}" class="block hover:text-lime-500">
                    <i class="fas fa-house mr-2"></i> Beranda
                </a>
            </li>

            <li>
                <a href="{{ route('owner.karyawan.index') }}" class="block hover:text-lime-500">
                    <i class="fas fa-users mr-2"></i> Data Karyawan
                </a>
            </li>

            <li>
                <a href="{{ route('owner.customer.index') }}" class="block hover:text-lime-500">
                    <i class="fas fa-user mr-2"></i> Data Customer
                </a>
            </li>

            <li class="relative">
                <button @click="laporanOpen = !laporanOpen" class="flex items-center justify-between w-full text-left hover:text-lime-500">
                    <span><i class="fas fa-chart-bar mr-2"></i> Laporan</span>
                    <i :class="laporanOpen ? 'fa-chevron-up' : 'fa-chevron-down'" class="fas ml-auto text-xs"></i>
                </button>
                <ul x-show="laporanOpen" x-transition class="ml-6 mt-2 space-y-2 text-gray-600">
    <li>
        {{-- Menggunakan rute owner untuk Laporan Booking --}}
        <a href="{{ route('owner.laporan.booking') }}" class="flex items-center hover:text-lime-500">
            <i class="fas fa-money-bill-wave mr-2"></i> Booking
        </a>
    </li>
    <li>
        {{-- Menggunakan rute owner untuk Laporan Inventory --}}
        <a href="{{ route('owner.laporan.inventory') }}" class="flex items-center hover:text-lime-500">
            <i class="fas fa-boxes mr-2"></i> Inventory Barang
        </a>
    </li>
</ul>
            </li>
        </ul>
    </nav>
</aside>
