<?php

use Illuminate\Support\Facades\Route;

// Controller Utama & Karyawan
use App\Http\Controllers\{
    AuthController,
    EventKegiatanController,
    AbsensiKaryawanController,
    AktivitasKaryawanController,
    LaporanController,
    InventoryController,
    BerandaKaryawanController,
    BookingTreatmentController,
    BookingSelesaiController
};

use App\Http\Controllers\MidtransController;

// Controller Karyawan (untuk mengelola promo)
use App\Http\Controllers\karyawan\PromoController as KaryawanPromoController;

// Controller Owner
use App\Http\Controllers\owner\InventoryExportController;
use App\Http\Controllers\owner\{
    OwnerController,
    KaryawanController as OwnerKaryawanController,
    CustomerController as OwnerCustomerController
};

// Controller Customer
use App\Http\Controllers\customer\{
    LandingController,
    BerandaController,
    EventController,
    KritikController,
    BookingController,
    ProfilController,
    RiwayatController,
    PembayaranController,
    PromoController as CustomerPromoController // Alias untuk customer
};



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// =========================================================================
// RUTE PUBLIK (Dapat diakses semua orang tanpa login)
// =========================================================================
Route::get('/', [LandingController::class, 'landing'])->name('landing');
Route::get('/event-list', [EventController::class, 'event'])->name('customer.event');
Route::get('/promo-list', [CustomerPromoController::class, 'promo'])->name('customer.promo');
Route::post('/midtrans/callback', [MidtransController::class, 'callback']);

// RUTE AUTENTIKASI
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk menampilkan form
Route::get('/register', [AuthController::class, 'registerForm'])->name('register.form');
// Rute untuk memproses data form, harus ada name('register')
Route::post('/register', [AuthController::class, 'register'])->name('register');

// =========================================================================
// SEMUA RUTE YANG MEMERLUKAN LOGIN
// =========================================================================
 Route::middleware(['auth'])->group(function () {

    // ========== RUTE UNTUK ROLE: OWNER ==========
    Route::middleware('role:owner')->prefix('owner')->name('owner.')->group(function () {
        Route::get('/dashboard', [OwnerController::class, 'index'])->name('dashboard');
        Route::get('/inventory-export', [InventoryExportController::class, 'export'])->name('owner.inventory.export');
        Route::get('/inventory-export', [InventoryExportController::class, 'export'])->name('inventory.export');
        // Tambahkan rute khusus owner lainnya di sini
        Route::resource('karyawan', OwnerKaryawanController::class);
        Route::resource('customer', OwnerCustomerController::class);
        Route::resource('inventory', InventoryController::class)->except(['show']);
        Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
        Route::get('/laporan-booking', [\App\Http\Controllers\owner\LaporanBookingController::class, 'index'])->name('laporan.booking');
    Route::get('/laporan-inventory', [\App\Http\Controllers\owner\LaporanInventoryController::class, 'index'])->name('laporan.inventory');

    });

    // ========== RUTE UNTUK ROLE: KARYAWAN ==========
    Route::middleware('role:karyawan')->prefix('karyawan')->name('karyawan.')->group(function () {
        Route::get('/dashboard', [BerandaKaryawanController::class, 'index'])->name('dashboard');
        Route::get('/profil', [\App\Http\Controllers\karyawan\ProfilController::class, 'index'])->name('profil.index');
        Route::put('/profil', [\App\Http\Controllers\karyawan\ProfilController::class, 'update'])->name('profil.update');
        Route::resource('event', EventKegiatanController::class)->except(['show']);
        Route::resource('absensi', AbsensiKaryawanController::class)->except(['show']);
        Route::resource('promo', KaryawanPromoController::class);
        Route::resource('laporan', LaporanController::class);
        Route::resource('inventory', InventoryController::class);
        Route::get('/booking/selesai', [BookingSelesaiController::class, 'selesai'])->name('booking.selesai');
    Route::resource('aktivitas', \App\Http\Controllers\AktivitasKaryawanController::class)->names('aktivitas');
    Route::resource('aktivitas-mingguan', \App\Http\Controllers\AktivitasMingguanController::class)->names('aktivitas.mingguan');
    Route::resource('aktivitas-bulanan', \App\Http\Controllers\AktivitasBulananController::class)->names('aktivitas.bulanan');
     Route::resource('booking', BookingTreatmentController::class);
Route::post('/booking/{booking}/selesai', [BookingTreatmentController::class, 'markAsFinished'])->name('booking.finish');
    Route::get('/booking/selesai', [BookingSelesaiController::class, 'selesai'])->name('booking.selesai');
    });

      // ========== RUTE UNTUK ROLE: CUSTOMER ==========
     Route::middleware('role:customer')->prefix('customer')->name('customer.')->group(function () {
         Route::get('/beranda', [BerandaController::class, 'beranda'])->name('beranda');
         Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
         Route::put('/profil', [ProfilController::class, 'update'])->name('profil.update');
         Route::get('/booking', [BookingController::class, 'create'])->name('booking.create');
         Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
         Route::get('/riwayat-booking', [BookingController::class, 'index'])->name('booking.history');
         Route::get('/pembayaran/{id}', [BookingController::class, 'showPembayaran'])->name('booking.pembayaran');
         Route::resource('kritik', KritikController::class)->only(['index', 'store']);

         Route::post('/pembayaran/{id}/pay', [App\Http\Controllers\customer\BookingController::class, 'pay'])->name('booking.pay');
     });

 });

