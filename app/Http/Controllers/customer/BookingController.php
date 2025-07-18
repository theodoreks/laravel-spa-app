<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promo;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule; 

class BookingController extends Controller
{
   
    public function create(Request $request)
    {
        $promoId = $request->query('promo_id');
        $promo = Promo::findOrFail($promoId);
        $user = Auth::user();
        return view('customer.booking', compact('promo', 'user'));
    }


    /**
     * Menyimpan data booking baru dengan validasi double booking.
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'promo_id'  => 'required|exists:promos,id',
            'tanggal'   => 'required|date|after_or_equal:today', // Pastikan tanggal tidak di masa lalu
            'therapist' => 'required|string',
            // Validasi untuk mencegah double booking
            'jam' => [
                'required',
                // Aturan: 'jam' harus unik di tabel 'bookings' (kolom jam_treatment)
                // HANYA JIKA 'tanggal_treatment' DAN 'therapist' juga sama.
                Rule::unique('bookings', 'jam_treatment')->where(function ($query) use ($request) {
                    return $query->where('tanggal_treatment', $request->tanggal)
                                 ->where('therapist', $request->therapist);
                }),
            ],
        ], [
            // Pesan error 
            'jam.unique' => 'Jadwal untuk terapis ini di tanggal dan jam tersebut sudah dipesan. Silakan pilih waktu lain.'
        ]);

        // Jika validasi lolos, lanjutkan membuat booking
        $booking = Booking::create([
            'user_id'           => Auth::id(),
            'promo_id'          => $request->promo_id,
            'tanggal_treatment' => $request->tanggal,
            'jam_treatment'     => $request->jam,
            'therapist'         => $request->therapist,
        ]);

        return redirect()->route('customer.booking.pembayaran', ['id' => $booking->id])
                         ->with('success', 'Booking berhasil dibuat! Silakan lakukan pembayaran.');
    }

    public function index()
    {
        // Get all bookings that belong to the currently logged-in user
        $bookings = Booking::with('promo')
                           ->where('user_id', Auth::id())
                           ->latest() // Order by the newest first
                           ->get();

        // Return a view and pass the bookings data to it
        return view('customer.riwayat', compact('bookings'));
    }

   
     public function showPembayaran($id)
    {
        $booking = Booking::with(['user', 'promo'])->findOrFail($id);

        // --- Konfigurasi Midtrans ---
        \Midtrans\Config::$serverKey    = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        \Midtrans\Config::$isSanitized  = true;
        \Midtrans\Config::$is3ds        = true;

        // --- Buat Parameter Transaksi ---
        $params = [
            'transaction_details' => [
                'order_id'     => 'BOOKING-' . $booking->id . '-' . time(), // Order ID unik
                'gross_amount' => $booking->promo->harga,
            ],
            'customer_details' => [
                'first_name' => $booking->user->nama_lengkap,
                'email'      => $booking->user->username . '@hijauspa.com', // Or no-reply@hijauspa.com
                'phone'      => $booking->user->no_hp,
            ],
        ];

        // --- Dapatkan Snap Token ---
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('customer.pembayaran', compact('booking', 'snapToken'));
    }

   
}