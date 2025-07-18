<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Laporan;
use Illuminate\Http\Request;

class BookingTreatmentController extends Controller
{
    // Menampilkan booking yang sudah Lunas tapi status treatment masih 'Menunggu'
   public function index()
{
    $bookings = Booking::with(['user', 'promo'])
                        // ->where('status_pembayaran', 'Lunas')      // <-- Comment this out
                        // ->where('status_treatment', 'Menunggu')  // <-- Comment this out
                        ->latest('tanggal_treatment')
                        ->get();
    return view('booking.index', compact('bookings'));
}

    // Menampilkan detail dari satu booking
    public function show(Booking $booking)
    {
        // Eager load relasi untuk memastikan data tersedia di view
        $booking->load(['user', 'promo']);
        return view('booking.detailbooking', compact('booking'));
    }

    // Menandai booking sebagai 'Selesai' dan membuat Laporan
    public function markAsFinished(Booking $booking)
    {
        // 1. Ubah status treatment menjadi 'Selesai'
        $booking->update(['status_treatment' => 'Selesai']);

        // 2. Buat entri baru di tabel Laporan
        Laporan::create([
            'kode_booking'    => 'BK-00' . $booking->id,
            'tanggal'         => $booking->tanggal_treatment,
            'nama_konsumen'   => $booking->user->nama_lengkap,
            'treatment'       => $booking->promo->nama_promo,
            'therapist'       => $booking->therapist,
            'harga'           => $booking->promo->harga,
            'durasi'          => $booking->promo->durasi,
        ]);

        // 3. Kembali ke halaman daftar booking masuk dengan pesan sukses
        return redirect()->route('karyawan.booking.index')->with('success', 'Booking telah ditandai selesai dan laporan telah dibuat.');
    }
}