<?php

use Illuminate\Support\Facades\Route;
// Controller Utama & Karyawan
use App\Http\Controllers\{
    AuthController,
    EventKegiatanController,
    AbsensiKaryawanController,
    AktivitasKaryawanController,
    PaketController,
    LaporanController,
    InventoryController,
    BerandaKaryawanController,
    BookingTreatmentController,
    BookingSelesaiController
};
// Controller Owner
use App\Http\Controllers\owner\{
    OwnerController,
    KaryawanController as OwnerKaryawanController, 
    CostumerController as OwnerCostumerController 
};
// Controller Customer
use App\Http\Controllers\customer\{
    LandingController,
    BerandaController,
    EventController,
    PromoController,
    KritikController,
    BookingController,
    ProfilController,
    RiwayatController,
    PembayaranController
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
Route::get('/event-list', [EventController::class, 'event'])->name('customer.event'); // URL lebih jelas
Route::get('/promo-list', [PromoController::class, 'promo'])->name('customer.promo'); // URL lebih jelas

// =========================================================================
// RUTE AUTENTIKASI (Login, Register, Logout untuk SEMUA ROLE)
// =========================================================================
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'registerForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// =========================================================================
// SEMUA RUTE YANG MEMERLUKAN LOGIN
// =========================================================================
 Route::middleware(['auth'])->group(function () {

    // ========== RUTE UNTUK ROLE: OWNER ==========
    Route::middleware('role:owner')->prefix('owner')->name('owner.')->group(function () {
        Route::get('/dashboard', [OwnerController::class, 'index'])->name('dashboard');
        // Tambahkan rute khusus owner lainnya di sini
        Route::resource('karyawan', OwnerKaryawanController::class);
        Route::resource('costumer', OwnerCostumerController::class);
    });

    // ========== RUTE UNTUK ROLE: KARYAWAN ==========
    Route::middleware('role:karyawan')->prefix('karyawan')->name('karyawan.')->group(function () {
        Route::get('/dashboard', [BerandaKaryawanController::class, 'index'])->name('dashboard');
        // Tambahkan rute khusus karyawan lainnya di sini
        Route::resource('event', EventKegiatanController::class)->except(['show']);
        Route::resource('absensi', AbsensiKaryawanController::class)->except(['show']);
        Route::resource('paket', PaketController::class);
        Route::resource('laporan', LaporanController::class);
        Route::resource('inventory', InventoryController::class);
        Route::get('/booking/selesai', [BookingSelesaiController::class, 'selesai'])->name('boking.selesai');
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
     });

 });

