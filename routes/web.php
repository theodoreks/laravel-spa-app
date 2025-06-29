<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    EventController,
    KritikController,
    PromoController,
    RiwayatController,
    ProfilController,
    BookingController,
    BerandaController,
    LandingController,
    LoginController,
    PembayaranController
};

// Landing & Login
Route::get('/', [LandingController::class, 'landing'])->name('landing');
Route::get('/login', [LoginController::class, 'login'])->name('login');

// Halaman Utama
Route::get('/beranda', [BerandaController::class, 'beranda'])->name('beranda');
Route::get('/event', [EventController::class, 'event'])->name('event');
Route::get('/promo', [PromoController::class, 'promo'])->name('promo');
Route::get('/profil', [ProfilController::class, 'profil'])->name('profil');

// Kritik & Saran
Route::get('/kritik', [KritikController::class, 'index'])->name('kritik.index');
Route::post('/kritik', [KritikController::class, 'store'])->name('kritik.store');

// Booking
Route::get('/booking', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
Route::get('/pembayaran/{id}', [BookingController::class, 'showPembayaran'])->name('booking.pembayaran');
Route::get('/riwayat-booking', [BookingController::class, 'index'])->name('booking.history');

// Riwayat
Route::get('/riwayat', [RiwayatController::class, 'riwayat'])->name('riwayat');

// Pembayaran
Route::get('/pembayaran', [PembayaranController::class, 'pembayaran'])->name('pembayaran');