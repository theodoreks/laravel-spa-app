<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\KritikController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;

Route::get('/', [LandingController::class, 'landing'])->name('landing');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/beranda', [BerandaController::class, 'beranda'])->name('beranda'); 
Route::get('/event', [EventController::class, 'event'])->name('event');
Route::get('/kritik', [KritikController::class, 'kritik'])->name('kritik');
Route::get('/promo', [PromoController::class, 'promo']);
Route::get('/riwayat', [RiwayatController::class, 'riwayat'])->name('riwayat');
Route::get('/profil', [ProfilController::class, 'profil'])->name('profil');
Route::get('/booking', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');